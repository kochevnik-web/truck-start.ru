

<?php get_header();	?>
                    
<div id="pageContent" class="content-area">
    <div class="block">
        <div id="primary" class="container">
            <div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php if ( (bool)get_post_meta( $post->ID, 'main_slider_on', true ) ) { ?>
	            <!-- Block Slider -->
	            <div class="offset-sm">
	                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">

                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div id="mainSliderWrapper">
                                        <div id="mainSlider">
                                            <?php
                                                $main_slides = get_post_meta( $post->ID, 'main_slides', true );
                                                if ( $main_slides > 0 ) {
                                                for ( $i = 0; $i < $main_slides; $i++ ) { 
                                            ?>

                                            <div class="slide">
                                                <div class="img--holder" style="background-image: url(<?php echo wp_get_attachment_image_src( get_post_meta( $post->ID, 'main_slides_' . $i . '_slide_img', true ), 'full' )[0]; ?>);" ></div>
                                                <div class="slide-content <?php echo get_post_meta( $post->ID, 'main_slides_' . $i . '_slide_float', true ); ?>">
                                                    <div class="vert-wrap container">
                                                        <div class="vert">
                                                            <div class="container">
                                                                <h4<?php echo ' ' . get_post_meta( $post->ID, 'main_slides_' . $i . '_animation_h4', true ); ?>><?php echo get_post_meta( $post->ID, 'main_slides_' . $i . '_main_slide_h4', true ); ?></h4>
                                                                <h3<?php echo ' ' . get_post_meta( $post->ID, 'main_slides_' . $i . '_animation_h3', true ); ?>><?php echo get_post_meta( $post->ID, 'main_slides_' . $i . '_slide_h3', true ); ?></h3>
                                                                <p data-animation="fadeIn" data-animation-delay="0.9s"><?php echo get_post_meta( $post->ID, 'main_slides_' . $i . '_header_p', true ); ?></p>
                                                                <a href="<?php echo get_post_meta( $post->ID, 'main_slides_' . $i . '_slide_link', true ); ?>"  target=" _blank"  data-animation="fadeIn" data-animation-delay="1.5s" class="banner-btn" rel=""><?php echo get_post_meta( $post->ID, 'main_slides_' . $i . '_slide_text', true ); ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php } } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Block Slider -->
                <?php } ?>

                <div class="vc_row-full-width vc_clearfix"></div>

                <?php if ( (bool)get_post_meta( $post->ID, 'our_featured_on', true ) ) { ?>
                
                <div class="vc_row wpb_row vc_row-fluid slidertop-space">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="block">
                                    <div class="container container-fluid-sm">
                                        <div class="text-center">
                                            <h2 class="h-lg"><?php echo get_post_meta( $post->ID, 'our_featured_header', true ); ?></h2>
                                            <p class="info"><?php echo get_post_meta( $post->ID, 'our_featured_title', true ); ?></p>
                                        </div>
                                        <div class="divider-md"></div>
                                        <div class="services-tabs">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs services-tabs-nav" role="tablist">
                                                <li class="active">
                                                    <a href="#" data-icon='icon1'>
                                                        <i class="icon-diag"></i>
                                                        <span>Диагностика</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" data-icon='icon2'>
                                                        <i class="icon-engine"></i>
                                                        <span>Ремонт двигателя</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" data-icon='icon3'>
                                                        <i class="icon-oil"></i>
                                                        <span>Замена фильтров</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" data-icon='icon4'>
                                                        <i class="icon-car-wheel"></i>
                                                        <span>Шиномонтаж</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" data-icon='icon5'>
                                                        <i class="icon-gearshift"></i>
                                                        <span>Трансмиссия</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" data-icon='icon6'>
                                                        <i class="icon-power"></i>
                                                        <span>Аккамуляторы</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="services-tabs-content">
                                                <div class="services-tabs-content-bg-wrap">
                                                    <div class="services-tabs-content-bg">
                                                        <img src="<?php echo get_bloginfo( 'template_url' ) ?>/img/man.png" alt="">
                                                        <div class="services-tabs-icons">
                                                            <span class="services-tabs-icon icon1">
                                                                <i class="icon-diag"></i>
                                                            </span>
                                                            <span class="services-tabs-icon icon2">
                                                                <i class="icon-engine"></i>
                                                            </span>
                                                            <span class="services-tabs-icon icon3">
                                                                <i class="icon-oil"></i>
                                                            </span>
                                                            <span class="services-tabs-icon icon4">
                                                                <i class="icon-car-wheel"></i>
                                                            </span>
                                                            <span class="services-tabs-icon icon5">
                                                                <i class="icon-gearshift"></i>
                                                            </span>
                                                            <span class="services-tabs-icon icon6">
                                                                <i class="icon-power"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="services-tab-info">
                                                    <p class="services-tabs-text icon1 active">
                                                    Если ваш двигатель болен или устал, у нас есть оборудование для проверки, диагностики и эффективного устранения любых проблем, которые могут возникнуть.
                                                    </p>
                                                    <p class="services-tabs-text icon2 ">
                                                        Диагностика и ремонт двигателей грузавых автомобилей любой сложности. Квалифицированные профессионалы и сертифицированное оборудование.
                                                    </p>
                                                    <p class="services-tabs-text icon3 ">
                                                        Замена всех видов фильтров и масел, с использованием качественных и оригинальных комплектующих. 
                                                    </p>
                                                    <p class="services-tabs-text icon4 ">
                                                        Быстрый шиномонтаж и ремонт покрышек на всех видах грузовых колес. Бортировка, балансировка, прокатака и многое другое.
                                                    </p>
                                                    <p class="services-tabs-text icon5 ">
                                                        Диагностикаа и ремонт трансмиссий, коробок передач и ходовой части на любых марках грузовых автомобилей.
                                                    </p>
                                                    <p class="services-tabs-text icon6 ">
                                                        Замена и диагностика аккамуляторных батарей.
                                                    </p>
                                                </div>
                                                <div class="services-tab-button">
                                                    <a class="btn btn-invert" href="<?php echo get_post_meta( $post->ID, 'our_featured_link', true ); ?>" >
                                                        <span><?php echo get_post_meta( $post->ID, 'our_featured_link_text', true ); ?></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <?php } ?>

                <?php if ( (bool)get_post_meta( $post->ID, 'expert_block_on', true ) ) { ?>
    
                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
	                            <div class="wpb_text_column wpb_content_element" >
		                            <div class="wpb_wrapper">
			                            <div class="text-center">
                                            <h2 class="h-lg"><?php echo get_post_meta( $post->ID, 'expert_block_header', true ); ?></h2>
                                        </div>
                                    <div class="divider-sm"></div>
		                        </div>
	                        </div>

                            <div class="block ">
                                <div class="icons-tabs">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab1" data-toggle="tab">
                                                <i class="icon-gear"></i>
                                                <span><?php echo get_post_meta( $post->ID, 'expert_block_tab_1', true ); ?></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#tab2" data-toggle="tab">
                                                <i class="icon-raketa"></i>
                                                <span><?php echo get_post_meta( $post->ID, 'expert_block_tab_2', true ); ?></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#tab3" data-toggle="tab">
                                                <i class="icon-wrech1"></i>
                                                <span><?php echo get_post_meta( $post->ID, 'expert_block_tab_3', true ); ?></span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content-bg">
                                        <div class="container">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab1">
                                                    <?php echo get_post_meta( $post->ID, 'expert_block_tab_1_content', true ); ?>
                                                </div>

                                                <div class="tab-pane " id="tab2">
                                                    <?php echo get_post_meta( $post->ID, 'expert_block_tab_2_content', true ); ?>
                                                </div>

                                                <div class="tab-pane " id="tab3">
                                                    <?php echo get_post_meta( $post->ID, 'expert_block_tab_3_content', true ); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <style>
                            .icons-tabs .tab-content-bg {
                                background: url(<?php echo get_bloginfo( 'template_url' ); ?>/img/bg-icon-tabs.jpg) no-repeat center center;
                                background-size: cover;
                            }
                            </style>
                        </div>
                    </div>
                </div></div>

                <?php } ?>

                <div class="vc_row-full-width vc_clearfix"></div>

                <?php if ( (bool)get_post_meta( $post->ID, 'marks_block_on', true ) ) { ?>
            
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="container">
                                    <div class="text-center">
                                        <h2 class="h-lg"><?php echo get_post_meta( $post->ID, 'marks_block_header', true ); ?></h2>
                                        <p class="info"><?php echo get_post_meta( $post->ID, 'marks_block_title', true ); ?></p>
                                    </div>
                                    <?php echo get_post_meta( $post->ID, 'marks_block_text', true ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>
                <section id="slider_reviews">
                <div class="owl-carousel owl-theme">
                    <div class="item"><h4>1</h4></div>
                    <div class="item"><h4>2</h4></div>
                    <div class="item"><h4>3</h4></div>
                    <div class="item"><h4>4</h4></div>
                    <div class="item"><h4>5</h4></div>
                    <div class="item"><h4>6</h4></div>
                    <div class="item"><h4>7</h4></div>
                    <div class="item"><h4>8</h4></div>
                    <div class="item"><h4>9</h4></div>
                    <div class="item"><h4>10</h4></div>
                    <div class="item"><h4>11</h4></div>
                    <div class="item"><h4>12</h4></div>
                </div>
                </section>

	        </div>
	        <!-- //Block -->
        </div>

    </div><!-- #primary -->

</div><!-- #block -->

</div><!-- #pageContent -->
<!-- Footer -->
<div class="page-footer page-footer-2">
    <div class="footer-content">
        <div class="container">
            <div class="footer-col-left">
                <div class="inside">
                    <h5>Контактная информация</h5>
                        <div class="contact-info">
                            <i class="icon icon-locate"></i>
                            <?php echo get_field( 'header_adres', 'option' ); ?>
                        </div>
                        <div class="contact-info">
                            <i class="icon icon-phone"></i>
                            <a href="tel:<?php echo get_field( 'header_phone', 'option' ); ?>"><?php echo get_field( 'header_phone', 'option' ); ?></a>
                        </div>
                        <div class="contact-info">
                            <i class="icon icon-email"></i>
                            <a href="mailto:<?php echo get_field( 'header_email', 'option' ); ?>"><?php echo get_field( 'header_email', 'option' ); ?></a>
                        </div>
                        <div class="contact-info-divider"></div>
                        <h5>РЕЖИМ РАБОТЫ</h5>
                        <div class="contact-info">
                            <i class="icon icon-clock"></i>
                            <?php echo get_field( 'footer_clock', 'option' ); ?>
                        </div>
                    </div>
                 </div>

        
                <!-- map -->
                <div id="footer-map" class="footer-map"></div>
                <!-- /map -->  
                <!-- Google map -->
    <script type="text/javascript">

        window.addEventListener("scroll", lazyLoadGoogleMap);
        function lazyLoadGoogleMap() {
            var js_script = document.createElement('script');
            js_script.type = "text/javascript";
            js_script.src = "//maps.google.com/maps/api/js?sensor=true&callback=init&key=<?php echo get_field( 'google_key', 'option' ); ?>";
            js_script.async = true;
            document.getElementsByTagName('head')[0].appendChild(js_script);
            window.removeEventListener("scroll", lazyLoadGoogleMap);
        }

        function init() {

            <?php
                $coords     = get_field( 'google_coords', 'option' );
                $arr_coords = explode( ',', $coords );
                $coords_out = '"lat":"' . trim($arr_coords[0]) . '","lng":"' . trim($arr_coords[1]) . '"';
            ?>
			
			var locations = [];
							locations.push(['{<?php echo $coords_out; ?>}'])
							locations.push(['{<?php echo $coords_out; ?>,"marker":"<?php echo get_bloginfo( 'template_url' ); ?>/img/map-marker.png"}'])
			            var mapOptions = {
                zoom: parseInt(14),
                center: new google.maps.LatLng(<?php echo $coords; ?>), 
                styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]            };
            
            var mapElement = document.getElementById('footer-map');
            var map = new google.maps.Map(mapElement, mapOptions);
			for (count = 1; count < locations.length; count++) {
				var locations_obj=JSON.parse(locations[count]);
				if(locations_obj.lat !=''){
					var marker =new google.maps.Marker({
						position: new google.maps.LatLng(locations_obj.lat, locations_obj.lng),
						map: map,
						icon: locations_obj.marker
					});
				}
            }
            
        }
		
    </script>

    </div>

    <?php get_footer(); ?>
