jQuery(document).ready(function ($) {
    "use strict";

    var goso_authowdi = {
        init: function () {
            this.confirm();

            this.$progress = $('#goso-authow-demo-import-progress');
            this.$log = $('#goso-authow-demo-import-log');
            this.$importer = $('#goso-authow-demo-importer');
            this.$uninstall = $('#goso-authow-demo-uninstall');
            this.steps = [];

            // Import demo data
            if (this.$importer.length) {
                var installPlugin = goso_authowdi.$importer.find('input[name="install-plugin"]').val(),
                    includeContent = goso_authowdi.$importer.find('input[name="include-content"]').val(),
                    includeStyle = goso_authowdi.$importer.find('input[name="include-style"]').val(),
                    content_only_pages = goso_authowdi.$importer.find('input[name="content_only_pages"]').val();

                if (installPlugin) {
                    this.steps.push('plugin');
                }
                if (includeContent) {
                    this.steps.push('content');
                }
                if (includeStyle) {
                    this.steps.push('customizer');
                }
                if ('yes' === content_only_pages) {
                    this.steps.push('content_only_pages');
                }
                if (includeContent) {
                    this.steps.push('widgets', 'sliders');
                }

                var $first_item = goso_authowdi.steps.shift();
                if ('plugin' === $first_item) {
                    this.install_plugin();
                } else if ('customizer' === $first_item) {
                    this.install_only_customize($first_item);
                } else {
                    this.download($first_item);
                }
            } else if (this.$uninstall.length) {
                this.unintall_demo();
            }

        },

        confirm: function () {
            if ($('.goso-uninstall-demo').length) {
                $('.goso-uninstall-demo').on('click', function (e) {
                    var r = confirm("Are you sure?");
                    if (r !== true) {
                        return false;
                    }
                });
            }
            if ($('.goso-install-demo').length) {
                $('.goso-install-demo').on('click', function (e) {

                    var $form = $(this).closest('.demo-selector'),
                        $list = $('.required_plugins_list');

                    $list.find('.list-item').removeClass('active');

                    if ($('.demos-container').hasClass('has-imported')) {
                        alert("You've imported a demo before, let's Uninstall that demo first before import a new demo - because if you import multiple demos together, it will be mixed.");
                        return false;
                    }

                    if ($form.hasClass('req-elementor')) {
                        $list.find('.elementor').addClass('active');
                    }

                    if ($form.hasClass('req-woocommerce')) {
                        $list.find('.woocommerce').addClass('active');
                    }

                    if ($form.hasClass('req-elementor') || $form.hasClass('req-woocommerce')) {
                        $('#goso_required_plugins_btn').trigger('click');
                        return false;
                    }

                    var r = confirm("Are you sure you want to import this demo?");
                    if (r !== true) {
                        return false;
                    }
                });
            }
        },

        install_plugin: function () {
            var $plugins = GosoObject.plugins_required;

            if (!$plugins.length) {
                goso_authowdi.$progress.find('.spinner').hide();
                return;
            }
            var plugin = $plugins.shift();

            goso_authowdi.log('Installing ' + plugin + ' the plugin…');

            $.get(
                ajaxurl, {
                    action: 'goso_authow_install_plugin',
                    plugin: plugin,
                    _wpnonce: goso_authowdi.$importer.find('input[name="_wpnonce"]').val()
                },
                function (response) {
                    goso_authowdi.log(response.data);

                    if ($plugins.length) {
                        setTimeout(function () {
                            goso_authowdi.install_plugin($plugins);
                        }, 1000);
                    } else {
                        goso_authowdi.download(goso_authowdi.steps.shift());
                    }
                }
            ).fail(function () {
                goso_authowdi.log('Failed');
            });
        },

        download: function (type) {
            goso_authowdi.log('Downloading ' + type + ' file');

            $.get(
                ajaxurl,
                {
                    action: 'goso_authow_download_file',
                    type: type,
                    demo: goso_authowdi.$importer.find('input[name="demo"]').val(),
                    _wpnonce: goso_authowdi.$importer.find('input[name="_wpnonce"]').val()
                },
                function (response) {
                    if (response.success) {
                        goso_authowdi.import(type);
                    } else {
                        goso_authowdi.log(response.data);

                        if (goso_authowdi.steps.length) {
                            goso_authowdi.download(goso_authowdi.steps.shift());
                        } else {
                            goso_authowdi.configTheme();
                        }
                    }
                }
            ).fail(function () {
                goso_authowdi.log('Failed');
            });
        },
        download_only_pages: function (type) {

            var name_file = type;
            if ('content_only_pages' === type) {
                name_file = 'pages';
            }
            goso_authowdi.log('Downloading ' + name_file + ' file');

            $.get(
                ajaxurl,
                {
                    action: 'goso_authow_download_file',
                    type: type,
                    demo: goso_authowdi.$importer.find('input[name="demo"]').val(),
                    _wpnonce: goso_authowdi.$importer.find('input[name="_wpnonce"]').val()
                },
                function (response) {
                    if (response.success) {
                        goso_authowdi.import_only_page(type);
                    } else {
                        goso_authowdi.log(response.data);

                        if (goso_authowdi.steps.length) {
                            goso_authowdi.download_only_pages(goso_authowdi.steps.shift());
                        }
                    }
                }
            ).fail(function () {
                goso_authowdi.log('Failed');
            });
        },
        install_only_customize: function (type) {
            goso_authowdi.log('Downloading ' + type + ' file');
            $.get(
                ajaxurl,
                {
                    action: 'goso_authow_download_file',
                    type: type,
                    demo: goso_authowdi.$importer.find('input[name="demo"]').val(),
                    _wpnonce: goso_authowdi.$importer.find('input[name="_wpnonce"]').val()
                },
                function (response) {
                    if (response.success) {
                        goso_authowdi.import_customizer(type);

                        if (goso_authowdi.steps.length) {
                            goso_authowdi.download_only_pages(goso_authowdi.steps.shift());
                        }
                    } else {
                        goso_authowdi.log(response.data);
                    }
                }
            ).fail(function () {
                goso_authowdi.log('Failed');
            });
        },
        import_customizer: function (type) {
            goso_authowdi.log('Importing ' + type);

            var data = {
                action: 'goso_authow_import',
                type: type,
                demo: goso_authowdi.$importer.find('input[name="demo"]').val(),
                _wpnonce: goso_authowdi.$importer.find('input[name="_wpnonce"]').val()
            };
            var url = ajaxurl + '?' + $.param(data);
            var evtSource = new EventSource(url);

            evtSource.addEventListener('message', function (message) {
                var data = JSON.parse(message.data);
                switch (data.action) {
                    case 'updateTotal':
                        console.log(data.delta);
                        break;

                    case 'updateDelta':
                        console.log(data.delta);
                        break;

                    case 'complete':
                        evtSource.close();
                        goso_authowdi.log(type + ' has been imported successfully!');

                        setTimeout(function () {
                            goso_authowdi.log('Import completed!');
                            goso_authowdi.$progress.find('.spinner').hide();
                        }, 200);
                        break;
                }
            });

            evtSource.addEventListener('log', function (message) {
                var data = JSON.parse(message.data);
                goso_authowdi.log(data.message);
            });
        },
        import_only_page: function (type) {

            var name_file = type;
            if ('content_only_pages' === type) {
                name_file = 'pages';
            }

            goso_authowdi.log('Importing ' + name_file);

            var data = {
                action: 'goso_authow_import',
                type: type,
                demo: goso_authowdi.$importer.find('input[name="demo"]').val(),
                _wpnonce: goso_authowdi.$importer.find('input[name="_wpnonce"]').val()
            };
            var url = ajaxurl + '?' + $.param(data);
            var evtSource = new EventSource(url);

            evtSource.addEventListener('message', function (message) {
                var data = JSON.parse(message.data);
                switch (data.action) {
                    case 'updateTotal':
                        console.log(data.delta);
                        break;

                    case 'updateDelta':
                        console.log(data.delta);
                        break;

                    case 'complete':
                        evtSource.close();
                        goso_authowdi.log(name_file + ' has been imported successfully!');

                        if (goso_authowdi.steps.length) {
                            goso_authowdi.download_only_pages(goso_authowdi.steps.shift());
                        }

                        break;
                }
            });

            evtSource.addEventListener('log', function (message) {
                var data = JSON.parse(message.data);
                goso_authowdi.log(data.message);
            });
        },
        import: function (type) {
            goso_authowdi.log('Importing ' + type);

            var data = {
                action: 'goso_authow_import',
                type: type,
                demo: goso_authowdi.$importer.find('input[name="demo"]').val(),
                _wpnonce: goso_authowdi.$importer.find('input[name="_wpnonce"]').val()
            };
            var url = ajaxurl + '?' + $.param(data);
            var evtSource = new EventSource(url);

            evtSource.addEventListener('message', function (message) {
                var data = JSON.parse(message.data);
                switch (data.action) {
                    case 'updateTotal':
                        console.log(data.delta);
                        break;

                    case 'updateDelta':
                        console.log(data.delta);
                        break;

                    case 'complete':
                        evtSource.close();
                        goso_authowdi.log(type + ' has been imported successfully!');

                        if (goso_authowdi.steps.length) {
                            goso_authowdi.download(goso_authowdi.steps.shift());
                        } else {
                            goso_authowdi.configTheme();
                        }

                        break;
                }
            });

            evtSource.addEventListener('log', function (message) {
                var data = JSON.parse(message.data);
                goso_authowdi.log(data.message);
            });
        },

        configTheme: function () {
            $.get(
                ajaxurl,
                {
                    action: 'goso_authow_config_theme',
                    demo: goso_authowdi.$importer.find('input[name="demo"]').val(),
                    _wpnonce: goso_authowdi.$importer.find('input[name="_wpnonce"]').val()
                },
                function (response) {
                    if (response.success) {
                        goso_authowdi.generateImages();
                    }

                    goso_authowdi.log(response.data);
                }
            ).fail(function () {
                goso_authowdi.log('Failed');
            });
        },

        generateImages: function () {
            $.get(
                ajaxurl,
                {
                    action: 'goso_authow_get_images',
                    _wpnonce: goso_authowdi.$importer.find('input[name="_wpnonce"]').val()
                },
                function (response) {
                    if (!response.success) {
                        goso_authowdi.log(response.data);
                        goso_authowdi.log('Import completed!');
                        goso_authowdi.$progress.find('.spinner').hide();
                        return;
                    } else {
                        var ids = response.data;

                        if (!ids.length) {
                            goso_authowdi.log('Import completed!');
                            goso_authowdi.$progress.find('.spinner').hide();
                        }

                        goso_authowdi.log('Starting generate ' + ids.length + ' images');

                        goso_authowdi.generateSingleImage(ids);
                    }
                }
            );
        },

        generateSingleImage: function (ids) {
            if (!ids.length) {
                goso_authowdi.log('Import completed!');
                goso_authowdi.$progress.find('.spinner').hide();
                return;
            }

            var id = ids.shift();

            $.get(
                ajaxurl,
                {
                    action: 'goso_authow_generate_image',
                    id: id,
                    _wpnonce: goso_authowdi.$importer.find('input[name="_wpnonce"]').val()
                },
                function (response) {
                    goso_authowdi.log(response.data + ' (' + ids.length + ' images left)');

                    goso_authowdi.generateSingleImage(ids);
                }
            );
        },

        unintall_demo: function () {
            goso_authowdi.log('Uninstalling....');

            $.get(
                ajaxurl, {
                    action: 'goso_authow_unintall_demo',
                    type: 'unintall_demo',
                    _wpnonce: goso_authowdi.$uninstall.find('input[name="_wpnonce"]').val()
                },
                function (response) {
                    if (response.success) {
                        goso_authowdi.log('Unintall Demo completed!');
                        goso_authowdi.$progress.find('.spinner').hide();
                    } else {
                        goso_authowdi.log(response.data);
                    }
                }
            ).fail(function () {
                goso_authowdi.log('Failed');
            });
        },
        log: function (message) {
            goso_authowdi.$progress.find('.text').text(message);
            goso_authowdi.$log.prepend('<p>' + message + '</p>');
        }

    };


    goso_authowdi.init();
});
