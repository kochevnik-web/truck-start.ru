<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap&subset=cyrillic" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="container_main">
		<header>
		<div class="header-info-mobile">
        	<div class="header-info-mobile-inside">
                <p><i class="icon icon-locate"></i>
					2605 Caton Hill Road, Woodbridge, VA 22192
				</p>
                <p><i class="icon icon-phone"></i>
					800-123-4567, Fax: 718-724-3312
				</p>
                <p><i class="icon icon-email"></i>
					officeone@youremail.com
				</p>
                <p><i class="icon icon-clock"></i>
					Mon-Fri: 9:00 am – 5:00
				</p>
            </div>
        </div>
		<div class="header-topline">
            <div class="header-info-toggle">
				<i class="icon-locate js-info-toggle"></i>
			</div>   
            <div class="header-right-top">
                <a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i class="icon-shape icon"></i>
					<span>Appointment</span>
				</a>
            </div>


            <div class="container">
                <div class="row-flex">
                    <div class="col-left"><i class="icon icon-clock"></i>
                        Mon-Sat: 7:00 am – 6:00 pm                    </div>

                    
                    <div class="col-center">
                        <i class="icon icon-phone"></i>
                        <span class="hidden-md">
                            Schedule Your Appointment Today                        </span> 
                        <a href="tel:1-800-123-4568" class="header-phone">1-800-123-4568</a>
                    </div>
                    
                                        <div class="col-right">
                        <i class="icon icon-locate"></i>
                    2605 Caton Hill Road, Woodbridge, VA 22192                    </div>
                                        
                </div>
            </div>
        </div>
		</header>