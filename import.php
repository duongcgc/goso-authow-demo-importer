<?php
/**
 * Register one click import demo data
 */


add_filter( 'goso_authow_demo_packages', 'goso_authow_addons_import_register' );


function goso_authow_addons_import_register() {
	$demo_listing = array(
		'default'                   => 'General Blog',
		'adventure-blog'            => 'Adventure Blog',
		'animal-news'               => 'Animal News',
		'architecture'              => 'Architecture',
		'art-artist-blog'           => 'Art Artist Blog',
		'art-magazine'              => 'Art Magazine',
		'baby'                      => 'Baby',
		'beauty'                    => 'Beauty',
		'beauty-blog2'              => 'Beauty Blog 2',
		'bitcoin-news'              => 'Bitcoin News',
		'book'                      => 'Book',
		'breaking-news'             => 'Breaking News',
		'business-magazine'         => 'Business Magazine',
		'business-news'             => 'Business News',
		'cars'                      => 'Cars',
		'charity'                   => 'Charity',
		'classic'                   => 'Classic',
		'coffee-blog'               => 'Coffee Blog',
		'construction'              => 'Construction',
		'cosmetic-blog'             => 'Cosmetic Blog',
		'craft-diy-blog2'           => 'Craft DIY Blog 2',
		'craft-diy'                 => 'Craft Diy',
		'dark-version'              => 'Dark Version',
		'designers-blog'            => 'Designers Blog',
		'education-news'            => 'Education News',
		'elegant-blog'              => 'Elegant Blog',
		'entertainment'             => 'Entertainment',
		'environment-charity-blog'  => 'Environment Charity Blog',
		'factory-news'              => 'Factory News',
		'fashion-blog2'             => 'Fashion Blog 2',
		'fashion-lifestyle'         => 'Fashion Lifestyle',
		'fashion-magazine'          => 'Fashion Magazine',
		'fashion-magazine2'         => 'Fashion Magazine 2',
		'fitness'                   => 'Fitness',
		'fitness-blog'              => 'Fitness Blog',
		'food'                      => 'Food',
		'food-blog2'                => 'Food Blog 2',
		'food-news'                 => 'Food News',
		'gardening-blog'            => 'Gardening Blog',
		'gardening-magazine'        => 'Gardening Magazine',
		'game'                      => 'Game',
		'game-blog'                 => 'Game Blog',
		'hair-stylist-blog'         => 'Hair Stylist Blog',
		'hair-style-magazine'       => 'Hair Style Magazine',
		'health-medical'            => 'Health Medical',
		'healthy-clean-eating-blog' => 'Healthy Clean Eating Blog',
		'hipster'                   => 'Hipster',
		'interior-design-blog'      => 'Interior Design Blog',
		'interior-design-magazine'  => 'Interior Design Magazine',
		'lawyers-blog'              => 'Lawyears Blog',
		'magazine'                  => 'Magazine',
		'men-health-magazine'       => 'Men Health Magazine',
		'minimal-simple-magazine'   => 'Minimal Simple Magazine',
		'movie'                     => 'Movie',
		'old-fashioned-blog'        => 'Old Fashioned Blog',
		'pet'                       => 'Pet',
		'pet-blog'                  => 'Pet Blog',
		'photographer'              => 'Photographer',
		'photography-blog'          => 'Photography Blog',
		'photography-magazine'      => 'Photography Magazine',
		'radio-blog'                => 'Radio Blog',
		'seo-blog'                  => 'SEO Blog',
		'science-news'              => 'Science News',
		'seo-magazine'              => 'Seo Magazine',
		'simple'                    => 'Simple',
		'spa-blog'                  => 'Spa Blog',
		'sport'                     => 'Sport',
		'sport-2'                   => 'Sport 2',
		'stylist-blog'              => 'Stylist Blog',
		'tech-news'                 => 'Tech News',
		'technology'                => 'Technology',
		'technology-blog2'          => 'Technology Blog 2',
		'time-magazine'             => 'Time Magazine',
		'travel'                    => 'Travel',
		'travel-blog2'              => 'Travel Blog 2',
		'travel-blog3'              => 'Travel Blog 3',
		'travel-guide-magazine'     => 'Travel Guide Magazine',
		'travel-magazine'           => 'Travel Magazine',
		'vegan-magazine'            => 'Vegan Magazine',
		'video'                     => 'Video',
		'video-dark'                => 'Video Dark',
		'videos-blog'               => 'Videos Blog',
		'vintage-blog'              => 'Vintage Blog',
		'viral'                     => 'Viral',
		'wedding'                   => 'Wedding',
		'music'                     => 'Music',
		'beauty-blog3'              => 'Beauty Blog 3',
		'book-magazine'             => 'Book Magazine',
		'car-blog'                  => 'Car Blog',
		'coding-blog'               => 'Coding Blog',
		'colorful-magazine'         => 'Clorfull Magazine',
		'dentist-blog'              => 'Dentist Blog',
		'design-magazine'           => 'Design Magazine',
		'fashion-blog3'             => 'Fashion Blog 3',
		'freelancer-blog'           => 'Freelancer Blog',
		'game-magazine'             => 'Game Magazine',
		'handmade-blog'             => 'Handmade Blog',
		'ios-tips-mag'              => 'IOS Tips Magazine',
		'motorcycle-blog'           => 'Motorcycle Blog',
		'musicband-blog'            => 'Musicband Blog',
		'painter-blog'              => 'Painter Blog',
		'software-tips-blog'        => 'Software Tips Blog',
		'transport-blog'            => 'Transport Blog',
		'vertical-nav'              => 'Vertical Nav',
		'vertical-nav-dark'         => 'Vertical Nav Dark',
		'video-blog2'               => 'Video Blog 2',


		'01-lifestyle-news-2sb'        => [ 'Lifestyle News Two Sidebars', [ 'elementor' ] ],
		'02-travel-news-2sb'           => [ 'Travel News Two Sidebars', [ 'elementor' ] ],
		'03-fashion-news-2sb'          => [ 'Fashion News Two Sidebars', [ 'elementor' ] ],
		'04-food-news-2sb'             => [ 'Food News Two Sidebars', [ 'elementor' ] ],
		'05-game-news-2sb'             => [ 'Game News Two Sidebars', [ 'elementor' ] ],
		'06-fitness-news-2sb'          => [ 'Fitness News Two Sidebars', [ 'elementor' ] ],
		'07-beauty-cosmetics-news-2sb' => [ 'Beauty & Cosmetics News', [ 'elementor' ] ],
		'08-travel-agency-mul'         => [ 'Travel Agency', [ 'elementor' ] ],
		'09-spa-wellness-mul'          => [ 'Spa & Wellness Center ', [ 'elementor' ] ],
		'10-business-mul'              => [ 'Business', [ 'elementor' ] ],
		'11-restaurant-mul'            => [ 'Restaurant', [ 'elementor' ] ],
		'12-fitness-center-mul'        => [ 'Fitness Center', [ 'elementor' ] ],
		'13-barber-shop-mul'           => [ 'Barber Shop', [ 'elementor' ] ],
		'14-ceramics-art-mul'          => [ 'Ceramics Art', [ 'elementor' ] ],
		'15-fashion-stylist-mul'       => [ 'Fashion Stylist', [ 'elementor' ] ],
		'16-construction-business-mul' => [ 'Construction Business', [ 'elementor' ] ],
		'17-coffee-shop-mul'           => [ 'Coffee Shop', [ 'elementor' ] ],
		'18-web-studio-mul'            => [ 'Web Studio', [ 'elementor' ] ],
		'19-wedding-studio-mul'        => [ 'Wedding Studio', [ 'elementor' ] ],
		'20-tailor-shop-mul'           => [ 'Tailor Shop ', [ 'elementor' ] ],
		'21-catering-business-mul'     => [ 'Catering Business', [ 'elementor' ] ],
		'22-yoga-studio-mul'           => [ 'Yoga Studio', [ 'elementor' ] ],
		'23-bakery-mul'                => [ 'Bakery', [ 'elementor' ] ],
		'24-tattoo-studio-mul'         => [ 'Tattoo Studio', [ 'elementor' ] ],
		'25-run-club-mutl'             => [ 'Run Club', [ 'elementor' ] ],
		'26-pet-clinic-mul'            => [ 'Pet Clinic', [ 'elementor' ] ],
		'27-honey-business-mul'        => [ 'Honey Business', [ 'elementor' ] ],
		'28-makeup-artist-mul'         => [ 'Makeup Artist', [ 'elementor' ] ],
		'29-insurance-mul'             => [ 'Insurance', [ 'elementor' ] ],
		'30-pizza-shop-mul'            => [ 'Pizza Shop', [ 'elementor' ] ],
		'31-law-firm-mul'              => [ 'Law Firm', [ 'elementor' ] ],
		'32-nail-salon-mul'            => [ 'Nail Salon', [ 'elementor' ] ],
		'33-zoo-mul'                   => [ 'Zoo', [ 'elementor' ] ],
		'34-finance-consulting-mul'    => [ 'Finance Consulting', [ 'elementor' ] ],
		'35-hosting-provider-mul'      => [ 'Hosting Provider', [ 'elementor' ] ],
		'36-wedding-planner-mul'       => [ 'Wedding Planner', [ 'elementor' ] ],
		'37-garden-design-mul'         => [ 'Garden Design', [ 'elementor' ] ],
		'38-car-wash-business-mul'     => [ 'Car Wash Business', [ 'elementor' ] ],
		'39-call-center-mul'           => [ 'Call Center', [ 'elementor' ] ],
		'40-chocolate-business-mul'    => [ 'Chocolate Business', [ 'elementor' ] ],
		'41-video-production-mul'      => [ 'Video Production', [ 'elementor' ] ],
		'42-interior-design-mul'       => [ 'Interior Design', [ 'elementor' ] ],
		'43-beauty-salon-mul'          => [ 'Beauty Salon', [ 'elementor' ] ],
		'44-herbal-tea-mul'            => [ 'Herbal Tea', [ 'elementor' ] ],
		'45-logistics-business-mul'    => [ 'Logistics Business', [ 'elementor' ] ],
		'46-luxury-resort-mul'         => [ 'Luxury Resort', [ 'elementor' ] ],
		'47-kindergarten-mul'          => [ 'Kindergarten', [ 'elementor' ] ],
		'48-dairy-farm-mul'            => [ 'Dairy Farm', [ 'elementor' ] ],
		'49-burger-shop-mul'           => [ 'Burger Shop', [ 'elementor' ] ],
		'50-florist-mul'               => [ 'Florist', [ 'elementor' ] ],
		'51-clean-energy-mul'          => [ 'Clean Energy', [ 'elementor' ] ],
		'52-delivery-service-mul'      => [ 'Delivery Service', [ 'elementor' ] ],
		'53-wine-company-mul'          => [ 'Wine Company', [ 'elementor' ] ],

		'54-cocktail-bar-mul'        => [ 'Cocktail Bar', [ 'elementor' ] ],
		'55-hospital-mul'            => [ 'Hospital', [ 'elementor' ] ],
		'56-dental-clinic-mul'       => [ 'Dental Clinic', [ 'elementor' ] ],
		'57-software-development'    => [ 'Software Development', [ 'elementor' ] ],
		'58-craft-beer-business-mul' => [ 'Craft Beer Business', [ 'elementor' ] ],
		'59-cooking-class-mul'       => [ 'Cooking Class', [ 'elementor' ] ],
		'60-moving-service-mul'      => [ 'Moving Service', [ 'elementor' ] ],
		'61-steak-house-mul'         => [ 'Steak House', [ 'elementor' ] ],
		'62-golf-club-mul'           => [ 'Golf Club', [ 'elementor' ] ],
		'63-ice-cream-mul'           => [ 'Ice Cream', [ 'elementor' ] ],
		'64-personal-trainer-mul'    => [ 'Personal Trainer', [ 'elementor' ] ],
		'65-real-estate'             => [ 'Real Estate', [ 'elementor' ] ],
		'66-dance-studio-mul'        => [ 'Dance School', [ 'elementor' ] ],
		'67-fisher-business-mul'     => [ 'Fisher Business', [ 'elementor' ] ],
		'68-ads-agency-mul'          => [ 'Ads Agency', [ 'elementor' ] ],
		'69-freelance-writer-mul'    => [ 'Freelance Writer', [ 'elementor' ] ],
		'70-human-resources-mul'     => [ 'Human Resources', [ 'elementor' ] ],
		'71-health-coach-mul'        => [ 'Health Coach', [ 'elementor' ] ],
		'72-cleaning-service-mul'    => [ 'Cleaning Service', [ 'elementor' ] ],
		'73-game-demo-mul'           => [ 'Game Demo', [ 'elementor' ] ],
		'74-production-house-mul'    => [ 'Production House', [ 'elementor' ] ],
		'75-headphones-company-mul'  => [ 'Headphones Company', [ 'elementor' ] ],
		'76-fashion-designer-mul'    => [ 'Fashion Designer', [ 'elementor' ] ],
		'77-seo-company-mul'         => [ 'SEO Company', [ 'elementor' ] ],
		'78-music-band-mul'          => [ 'Music Band', [ 'elementor' ] ],
		'79-taxi-company-mul'        => [ 'Taxi Company', [ 'elementor' ] ],
		'80-fitness-band-mul'        => [ 'Fitness Band', [ 'elementor' ] ],
		'81-psychologist-mul'        => [ 'Psychologist', [ 'elementor' ] ],
		'82-watch-maker-mul'         => [ 'Watch Maker', [ 'elementor' ] ],
		'83-smarthome-system-mul'    => [ 'Smarthome System', [ 'elementor' ] ],
		'84-perfume-business-mul'    => [ 'Perfume Business', [ 'elementor' ] ],
		'85-digital-startup-mul'     => [ 'Digital Startup', [ 'elementor' ] ],

		'86-wedding-catering-mul'            => [ 'Wedding Catering', [ 'elementor' ] ],
		'87-food-tour-travel-mul'            => [ 'Food Tour Travel', [ 'elementor' ] ],
		'88-market-intelligence-firm-mul'    => [ 'Market Intelligence Firm', [ 'elementor' ] ],
		'89-medical-consulting-business-mul' => [ 'Medical Consulting Business', [ 'elementor' ] ],
		'90-food-truck-mul'                  => [ 'Food Truck', [ 'elementor' ] ],
		'91-swimming-class-mul'              => [ 'Swimming Class', [ 'elementor' ] ],
		'92-loan-business-mul'               => [ 'Loan Business', [ 'elementor' ] ],
		'93-salad-club-business-mul'         => [ 'Salad Club Business', [ 'elementor' ] ],
		'94-astrology-club-mul'              => [ 'Astrology Club', [ 'elementor' ] ],
		'95-mechanics-business-mul'          => [ 'Mechanics Shop', [ 'elementor' ] ],
		'96-it-service-mul'                  => [ 'IT Service Business', [ 'elementor' ] ],
		'97-seafood-restaurant-mul'          => [ 'Seafood Restaurant', [ 'elementor' ] ],
		'98-city-delivery-service-mul'       => [ 'City Delivery Service', [ 'elementor' ] ],
		'99-plastic-surgery-business-mul'    => [ 'Plastic Surgery Business', [ 'elementor' ] ],
		'100-mobile-payment-mul'             => [ 'Mobile Payment', [ 'elementor' ] ],
		'101-bubble-tea-shop-mul'            => [ 'Bubble Tea Shop', [ 'elementor' ] ],
		'102-food-photography-studio-mul'    => [ 'Food Photography Studio', [ 'elementor' ] ],
		'103-copywriters-business-mul'       => [ 'Copywriters Business', [ 'elementor' ] ],
		'104-italian-restaurant-mul'         => [ 'Italian Restaurant', [ 'elementor' ] ],
		'105-car-racing-mul'                 => [ 'Car Racing', [ 'elementor' ] ],

		'106-fashion-personal-blog'    => [ 'Fashion Personal Blog', [ 'elementor', 'woocommerce' ] ],
		'107-massage-mul'              => [ 'Massage Multipurpose', [ 'elementor', 'woocommerce' ] ],
		'108-chinese-restaurant-mul'   => [ 'Chinese Restaurant', [ 'elementor', 'woocommerce' ] ],
		'109-online-food-delivery-mul' => [ 'Online Food Delivery', [ 'elementor', 'woocommerce' ] ],
		'110-general-magazine'         => [ 'General Magazine', [ 'elementor', 'woocommerce' ] ],
		'111-general-shop'             => [ 'General Shop', [ 'elementor', 'woocommerce' ] ],
		'112-women-fashion-shop'       => [ 'Women Fashion Shop', [ 'elementor', 'woocommerce' ] ],
		'113-electronics-store'        => [ 'Electronics Store', [ 'elementor', 'woocommerce' ] ],
		'114-men-fashion-shop'         => [ 'Men Fashion Shop', [ 'elementor', 'woocommerce' ] ],
		'115-personal-blog-and-shop'   => [ 'Personal Blog & Shop', [ 'elementor', 'woocommerce' ] ],

		'116-watch-store'                  => [ 'Watch Store', [ 'elementor', 'woocommerce' ] ],
		'117-glasses-store'                => [ 'Glasses Store', [ 'elementor', 'woocommerce' ] ],
		'118-electronic-accessories-store' => [ 'Electronic Accessories Store', [ 'elementor', 'woocommerce' ] ],
		'119-fashion-accessories-store'    => [ 'Fashion Accessories Store', [ 'elementor', 'woocommerce' ] ],
		'120-minimal-shop'                 => [ 'Minimal Shop', [ 'elementor', 'woocommerce' ] ],

		'127-personal-skincare-blog-and-shop' => [ 'Skincare Blog & Shop', [ 'elementor', 'woocommerce' ] ],
		'128-personal-food-blog'              => [ 'Personal Food Blog', [ 'elementor', 'woocommerce' ] ],
		'129-home-decor-design-magazine'      => [ 'Home Decor Design Magazine', [ 'elementor', 'woocommerce' ] ],
		'130-times-magazine'                  => [ 'Times Magazine', [ 'elementor', 'woocommerce' ] ],
		'131-modern-news-magazine'            => [ 'Modern News', [ 'elementor', 'woocommerce' ] ],

		'132-daily-news'         => [ 'Daily News', [ 'elementor' ] ],
		'134-graph-newspaper'    => [ 'Graph Newspaper', [ 'elementor' ] ],
		'135-citylight-magazine' => [ 'Citylight Magazine', [ 'elementor' ] ],
		'136-central-news'       => [ 'Central News', [ 'elementor' ] ],
		'137-news-station'       => [ 'News Station', [ 'elementor' ] ],
		'138-new-modern-tech'    => [ 'New Modern Tech', [ 'elementor' ] ],
		'139-pop-news'           => [ 'Pop News', [ 'elementor' ] ],
		'140-elegance-news'      => [ 'Elegance News', [ 'elementor' ] ],
		'141-world-wide-news'    => [ 'World Wide News', [ 'elementor' ] ],
		'142-live-news'          => [ 'Live News', [ 'elementor' ] ],
		'143-news-hub'           => [ 'News Hub', [ 'elementor' ] ],
		'144-24h-news-magazine'  => [ '24h News Magazine', [ 'elementor' ] ],
		
		'145-world-express-news'  => [ 'World Express News', [ 'elementor' ] ],
		'146-kitchen-shop-and-blog'  => [ 'Kitchen Blog & Shop', [ 'elementor', 'woocommerce' ] ],
		'147-photography-blog-and-shop'  => [ 'Photography Blog & Shop', [ 'elementor', 'woocommerce' ] ],
		'148-coffee-blog-and-shop'  => [ 'Coffee Blog & Shop', [ 'elementor', 'woocommerce' ] ],
		
		'149-crypto-nft-personal-blog'  => [ 'Crypto NFT Blog', [ 'elementor' ] ],
		'150-art-personal-blog'  => [ 'Art Personal Blog', [ 'elementor' ] ],
	);

	asort( $demo_listing );

	$new_demo_listing = goso_authow_get_list_new_demo();

	$demo_configs = array();
	foreach ( $demo_listing as $key => $label ) {
		if ( in_array( $key, $new_demo_listing ) ) {
			$demo_configs[] = array(
				'id_demo'    => $key,
				'name'       => is_array( $label ) ? $label[0] : $label,
				'content'    => 'https://authow-new-data.s3.amazonaws.com/' . $key . '/demo-content.xml',
				'widgets'    => 'https://authow-new-data.s3.amazonaws.com/' . $key . '/widgets.wie',
				'preview'    => 'https://authow-new-data.s3.amazonaws.com/' . $key . '/preview.jpg',
				'customizer' => 'https://authow-new-data.s3.amazonaws.com/' . $key . '/customizer.dat',
				'menus'      => array( 'main-menu' => 'menu', 'topbar-menu' => 'top-bar-menu' ),
				'plugins'    => is_array( $label ) ? $label[1] : false,
				'pages'      => array(
					'front_page' => 'Authow_Home',
					'blog'       => '',
					'shop'       => 'Shop',
					'cart'       => 'Cart',
					'checkout'   => 'Checkout',
					'my_account' => 'My Account',
					'portfolio'  => 'Masonry 3 Columns',
				)
			);

			continue;
		}

		$config = array(
			'id_demo'    => $key,
			'name'       => is_array( $label ) ? $label[0] : $label,
			'content'    => 'https://authow-datas.s3.amazonaws.com/' . $key . '/demo-content.xml',
			'widgets'    => 'https://authow-datas.s3.amazonaws.com/' . $key . '/widgets.wie',
			'preview'    => 'https://authow-datas.s3.amazonaws.com/' . $key . '/preview.jpg',
			'customizer' => 'https://authow-datas.s3.amazonaws.com/' . $key . '/customizer.dat',
			'menus'      => array( 'main-menu' => 'menu-1' ),
			'plugins'    => is_array( $label ) ? $label[1] : false,
		);
		if ( $key == 'default' ) {
			$config['pages']   = array(
				'front_page' => '',
				'blog'       => '',
				'shop'       => 'Shop',
				'cart'       => 'Cart',
				'checkout'   => 'Checkout',
				'my_account' => 'My Account',
				'portfolio'  => 'Masonry 3 Columns',
			);
			$config['options'] = array(
				'shop_catalog_image_size'   => array(
					'width'  => 600,
					'height' => 732,
					'crop'   => 1,
				),
				'shop_single_image_size'    => array(
					'width'  => 600,
					'height' => 732,
					'crop'   => 1,
				),
				'shop_thumbnail_image_size' => array(
					'width'  => 150,
					'height' => 183,
					'crop'   => 1,
				),
			);
		} else {
			$config['pages']   = array(
				'front_page' => '',
				'blog'       => '',
			);
			$config['options'] = array();
		}

		// Add menu
		if ( $key == 'magazine' ) {
			$config['menus']['topbar-menu'] = 'top-bar-menu';
		} elseif ( $key == 'sport' ) {
			$config['menus']['topbar-menu'] = 'top-bar-menu';
		} elseif ( $key == 'video' ) {
			$config['menus']['topbar-menu'] = 'topbar-menu';
		} elseif ( $key == 'game' ) {
			$config['menus']['topbar-menu'] = 'top-bar-menu';
		} elseif ( $key == 'music' ) {
			$config['menus']['topbar-menu'] = 'top-bar-menu';
		} elseif ( $key == 'health-medical' ) {
			$config['menus']['topbar-menu'] = 'topbar-menu';
		} elseif ( $key == 'cars' ) {
			$config['menus']['footer-menu'] = 'footer-menu';
		} elseif ( $key == 'wedding' ) {
			$config['menus']['topbar-menu'] = 'top-bar-menu';
		} elseif ( $key == 'simple' ) {
			$config['menus']['topbar-menu'] = 'topbar-menu';
		} elseif ( $key == 'tech-news' ) {
			$config['menus']['topbar-menu'] = 'top-bar-menu';
		} elseif ( $key == 'business-news' ) {
			$config['menus']['footer-menu'] = 'footer-menu';
		} elseif ( $key == 'fashion-magazine' ) {
			$config['menus']['topbar-menu'] = 'top-bar-menu';
		} elseif ( $key == 'charity' ) {
			$config['menus']['topbar-menu'] = 'top-bar-menu';
		}


		$demo_configs[] = $config;
	}

	return $demo_configs;
}

if ( ! function_exists( 'goso_authow_get_list_new_demo' ) ):
	function goso_authow_get_list_new_demo() {
		$new_demo_listing = array(
			'01-lifestyle-news-2sb',
			'02-travel-news-2sb',
			'03-fashion-news-2sb',
			'04-food-news-2sb',
			'05-game-news-2sb',
			'06-fitness-news-2sb',
			'07-beauty-cosmetics-news-2sb',
			'08-travel-agency-mul',
			'09-spa-wellness-mul',
			'10-business-mul',
			'11-restaurant-mul',
			'12-fitness-center-mul',
			'13-barber-shop-mul',
			'14-ceramics-art-mul',
			'15-fashion-stylist-mul',
			'16-construction-business-mul',
			'17-coffee-shop-mul',
			'18-web-studio-mul',
			'19-wedding-studio-mul',
			'20-tailor-shop-mul',
			'21-catering-business-mul',
			'22-yoga-studio-mul',
			'23-bakery-mul',
			'24-tattoo-studio-mul',
			'25-run-club-mutl',
			'26-pet-clinic-mul',
			'27-honey-business-mul',
			'28-makeup-artist-mul',
			'29-insurance-mul',
			'30-pizza-shop-mul',
			'31-law-firm-mul',
			'32-nail-salon-mul',
			'33-zoo-mul',
			'34-finance-consulting-mul',
			'35-hosting-provider-mul',
			'36-wedding-planner-mul',
			'37-garden-design-mul',
			'38-car-wash-business-mul',
			'39-call-center-mul',
			'40-chocolate-business-mul',
			'41-video-production-mul',
			'42-interior-design-mul',
			'43-beauty-salon-mul',
			'44-herbal-tea-mul',
			'45-logistics-business-mul',
			'46-luxury-resort-mul',
			'47-kindergarten-mul',
			'48-dairy-farm-mul',
			'49-burger-shop-mul',
			'50-florist-mul',
			'51-clean-energy-mul',
			'52-delivery-service-mul',
			'53-wine-company-mul',
			'54-cocktail-bar-mul',
			'55-hospital-mul',
			'56-dental-clinic-mul',
			'57-software-development',
			'58-craft-beer-business-mul',
			'59-cooking-class-mul',
			'60-moving-service-mul',
			'61-steak-house-mul',
			'62-golf-club-mul',
			'63-ice-cream-mul',
			'64-personal-trainer-mul',
			'65-real-estate',
			'66-dance-studio-mul',
			'67-fisher-business-mul',
			'68-ads-agency-mul',
			'69-freelance-writer-mul',
			'70-human-resources-mul',
			'71-health-coach-mul',
			'72-cleaning-service-mul',
			'73-game-demo-mul',
			'74-production-house-mul',
			'75-headphones-company-mul',
			'76-fashion-designer-mul',
			'77-seo-company-mul',
			'78-music-band-mul',
			'79-taxi-company-mul',
			'80-fitness-band-mul',
			'81-psychologist-mul',
			'82-watch-maker-mul',
			'83-smarthome-system-mul',
			'84-perfume-business-mul',
			'85-digital-startup-mul',
			'86-wedding-catering-mul',
			'87-food-tour-travel-mul',
			'88-market-intelligence-firm-mul',
			'89-medical-consulting-business-mul',
			'90-food-truck-mul',
			'91-swimming-class-mul',
			'92-loan-business-mul',
			'93-salad-club-business-mul',
			'94-astrology-club-mul',
			'95-mechanics-business-mul',
			'96-it-service-mul',
			'97-seafood-restaurant-mul',
			'98-city-delivery-service-mul',
			'99-plastic-surgery-business-mul',
			'100-mobile-payment-mul',
			'101-bubble-tea-shop-mul',
			'102-food-photography-studio-mul',
			'103-copywriters-business-mul',
			'104-italian-restaurant-mul',
			'105-car-racing-mul',
			'106-fashion-personal-blog',
			'107-massage-mul',
			'108-chinese-restaurant-mul',
			'109-online-food-delivery-mul',
			'110-general-magazine',
			'111-general-shop',
			'112-women-fashion-shop',
			'113-electronics-store',
			'114-men-fashion-shop',
			'115-personal-blog-and-shop',
			'116-watch-store',
			'117-glasses-store',
			'118-electronic-accessories-store',
			'119-fashion-accessories-store',
			'120-minimal-shop',
			'127-personal-skincare-blog-and-shop',
			'128-personal-food-blog',
			'129-home-decor-design-magazine',
			'130-times-magazine',
			'131-modern-news-magazine',
			'132-daily-news',
			'134-graph-newspaper',
			'135-citylight-magazine',
			'136-central-news',
			'137-news-station',
			'138-new-modern-tech',
			'139-pop-news',
			'140-elegance-news',
			'141-world-wide-news',
			'142-live-news',
			'143-news-hub',
			'144-24h-news-magazine',
			'145-world-express-news',
			'146-kitchen-shop-and-blog',
			'147-photography-blog-and-shop',
			'148-coffee-blog-and-shop',
			'149-crypto-nft-personal-blog',
			'150-art-personal-blog',
		);

		return $new_demo_listing;
	}
endif;

add_filter( 'goso_authow_plugins_required', 'goso_authow_plugins_required_register' );
if ( ! function_exists( 'goso_authow_plugins_required_register' ) ) {
	function goso_authow_plugins_required_register() {
		return array(
			'vafpress-post-formats-ui-develop',
			'goso-shortcodes',
			'goso-authow-slider',
			'goso-portfolio',
			'goso-recipe',
			'goso-review',
			'goso-authow-demo-importer',
			'instagram-slider-widget',
			'oauth-twitter-feed-for-developers',
			'contact-form-7',
			'mailchimp-for-wp',
		);
	}
}

add_action( 'goso_authowdi_after_setup_pages', 'goso_authow_addons_import_order_tracking' );

/**
 * Update more page options
 *
 * @param $pages
 */
function goso_authow_addons_import_order_tracking( $pages ) {
	if ( isset( $pages['order_tracking'] ) ) {
		$order = get_page_by_title( $pages['order_tracking'] );

		if ( $order ) {
			update_option( 'goso_authow_order_tracking_page_id', $order->ID );
		}
	}

	if ( isset( $pages['portfolio'] ) ) {
		$portfolio = get_page_by_title( $pages['portfolio'] );

		if ( $portfolio ) {
			update_option( 'goso_authow_portfolio_page_id', $portfolio->ID );
		}
	}
}

add_action( 'goso_authowdi_before_import_content', 'goso_authow_addons_import_product_attributes' );

/**
 * Prepare product attributes before import demo content
 *
 * @param $file
 */
function goso_authow_addons_import_product_attributes( $file ) {
	global $wpdb;

	if ( ! class_exists( 'WXR_Parser' ) ) {
		require_once WP_PLUGIN_DIR . '/goso-authow-demo-importer/includes/parsers.php';
	}

	if ( ! function_exists( 'wc_sanitize_taxonomy_name' ) || ! function_exists( 'wc_get_attribute_taxonomies' ) ) {
		return;
	}

	$parser      = new WXR_Parser();
	$import_data = $parser->parse( $file );

	if ( isset( $import_data['posts'] ) ) {
		$posts = $import_data['posts'];

		if ( $posts && sizeof( $posts ) > 0 ) {
			foreach ( $posts as $post ) {
				if ( 'product' === $post['post_type'] ) {
					if ( ! empty( $post['terms'] ) ) {
						foreach ( $post['terms'] as $term ) {
							if ( strstr( $term['domain'], 'pa_' ) ) {
								if ( ! taxonomy_exists( $term['domain'] ) ) {
									$attribute_name = wc_sanitize_taxonomy_name( str_replace( 'pa_', '', $term['domain'] ) );

									// Create the taxonomy
									if ( ! in_array( $attribute_name, wc_get_attribute_taxonomies() ) ) {
										$attribute = array(
											'attribute_label'   => $attribute_name,
											'attribute_name'    => $attribute_name,
											'attribute_type'    => 'select',
											'attribute_orderby' => 'menu_order',
											'attribute_public'  => 0
										);
										$wpdb->insert( $wpdb->prefix . 'woocommerce_attribute_taxonomies', $attribute );
										delete_transient( 'wc_attribute_taxonomies' );
									}

									// Register the taxonomy now so that the import works!
									register_taxonomy( $term['domain'], apply_filters( 'woocommerce_taxonomy_objects_' . $term['domain'], array( 'product' ) ), apply_filters( 'woocommerce_taxonomy_args_' . $term['domain'], array(
										'hierarchical' => true,
										'show_ui'      => false,
										'query_var'    => true,
										'rewrite'      => false,
									) ) );
								}
							}
						}
					}
				}
			}
		}
	}
}
