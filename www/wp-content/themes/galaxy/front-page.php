

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
                    <h5>Contact Info</h5>
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
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">© 2017 Car Repair Services, <span class="clearfix visible-xs"></span>All Rights Reserved</div>
            <div class="footer-bottom-right">
                <div class="social-links">
                    <ul>
                                                    <li> 
                                <a class="icon icon-facebook-logo" target="_blank" href="#"></a>
                            </li>
                        
                                                    <li> 
                                <a class="icon icon-twitter-logo" target="_blank" href="#"></a>
                            </li>
                        
                                                    <li> 
                                <a class="icon icon-instagram-logo" target="_blank" href="#"></a>
                            </li>
                        
                                                    <li> 
                                <a class="icon icon-google-plus-logo" target="_blank" href="#"></a>
                            </li>
                                                                                                                                                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>    <div class="back-to-top" style="bottom: 15px;"><a href="#top">
        <span class="icon icon-transport"></span>
        </a></div>
    <div class="modal fade modalform-sm in" id="appointmentForm">
        <div class="modal-dialog container">
            <div class="modal-content">
                <div class="modal-header"><a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i class="icon-shape icon"></i>
                    <span>Appointment</span>                    </a>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <h2>Schedule Auto Service</h2>                        mailing list to receive updates on new arrivals, offers and other discount information.                        <div role="form" class="wpcf7" id="wpcf7-f1701-o2" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/car-repair-service/car2/#wpcf7-f1701-o2" method="post" class="wpcf7-form" enctype="multipart/form-data" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="1701" />
<input type="hidden" name="_wpcf7_version" value="5.1.3" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1701-o2" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
</div>
<div class="send-mail-ok-massage"></div>
<h5>Contact information</h5>
<div class="form-inline">
<div>
        <span class="wpcf7-form-control-wrap fname"><input type="text" name="fname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control input-custom" aria-required="true" aria-invalid="false" placeholder="First Name" /></span>
    </div>
<div>
        <span class="wpcf7-form-control-wrap lname"><input type="text" name="lname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control input-custom" aria-required="true" aria-invalid="false" placeholder="Last Name" /></span>
    </div>
</div>
<div class="form-inline">
<div>
        <span class="wpcf7-form-control-wrap your-phone"><input type="number" name="your-phone" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number form-control input-custom" aria-required="true" aria-invalid="false" placeholder="Phone Number" /></span>
    </div>
<div>
        <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control input-custom" aria-required="true" aria-invalid="false" placeholder="Email" /></span>
    </div>
</div>
<div class="divider"></div>
<h5>Appointment details</h5>
<div class="form-inline">
<div class="datetimepicker-wrap">
        <span class="wpcf7-form-control-wrap date"><input type="text" name="date" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control input-custom datetimepicker valid" aria-required="true" aria-invalid="false" /></span>
    </div>
<div class="timepicker-wrap">
        <span class="wpcf7-form-control-wrap time"><input type="text" name="time" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control input-custom timepicker" aria-required="true" aria-invalid="false" /></span>
    </div>
</div>
<div class="form-inline">
<div>
        <span class="wpcf7-form-control-wrap autoinfo"><input type="text" name="autoinfo" value="Vehicle Year, Make and Model" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control input-custom" aria-required="true" aria-invalid="false" /></span>
    </div>
<div class="form-inline">
<div class="select-wrapper">
            <span class="wpcf7-form-control-wrap select1"><select name="select1" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required input-custom valid" aria-required="true" aria-invalid="false"><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option></select></span>
        </div>
<div>
            <span class="wpcf7-form-control-wrap kilometers"><input type="text" name="kilometers" value="" size="40" class="wpcf7-form-control wpcf7-text form-control input-custom" aria-invalid="false" placeholder="Current Kilometers" /></span>
        </div>
</p></div>
</div>
<div class="form-upload dflex">
  <label class="upload"><span class="wpcf7-form-control-wrap your-file"><input type="file" name="your-file" size="40" class="wpcf7-form-control wpcf7-file" accept=".jpg,.jpeg,.png" aria-invalid="false" /></span></label>
</div>
<div class="form-inline">
    <span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control textarea-custom" aria-required="true" aria-invalid="false" placeholder="Service Required"></textarea></span>
</div>
<div class="divider-sm"></div>
<div class="row">
<div class="col-sm-5 col-md-4">
        <button id="submit" class="wpcf7-form-control wpcf7-submit btn btn-lg btn-border"><span>SUBMIT</span></button>
    </div>
<div class="divider visible-xs"></div>
<div class="col-sm-7 col-md-8">
        Please note that the date and time you requested may not be available. We will contact you to confirm your actual appointment details.
    </div>
</div>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>                    </div>
                </div>
            </div>
        </div>
    </div>
	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.3'></script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/car-repair-service\/car2\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/car-repair-service\/car2\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.6.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/car-repair-service\/car2\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/car-repair-service\/car2\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_240925eba9346c1f5cf3d4bea883b695","fragment_name":"wc_fragments_240925eba9346c1f5cf3d4bea883b695","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.6.4'></script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/themes/car-repair-services/js/plugins/bootstrap.min.js?ver=5.2.2'></script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/themes/car-repair-services/js/plugins/slick.min.js?ver=5.2.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var form_option = {"date_format":"DD\/MM\/YYYY"};
/* ]]> */
</script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-includes/js/jquery/jquery.form.min.js?ver=4.2.1'></script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/themes/car-repair-services/js/plugins/jquery.validate.min.js?ver=5.2.2'></script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-includes/js/dist/vendor/moment.min.js?ver=2.22.2'></script>
<script type='text/javascript'>
moment.locale( 'en_US', {"months":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthsShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"weekdays":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"weekdaysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"week":{"dow":1},"longDateFormat":{"LT":"g:i a","LTS":null,"L":null,"LL":"F j, Y","LLL":"F j, Y g:i a","LLLL":null}} );
</script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/themes/car-repair-services/js/plugins/bootstrap-datetimepicker.min.js?ver=5.2.2'></script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/themes/car-repair-services/js/plugins/imagesloaded.pkgd.min.js?ver=5.2.2'></script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/themes/car-repair-services/js/plugins/jquery.scrolling-tabs.min.js?ver=5.2.2'></script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-includes/js/jquery/ui/button.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-includes/js/jquery/ui/spinner.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/themes/car-repair-services/js/forms.js?ver=5.2.2'></script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/themes/car-repair-services/js/plugins/isotope.pkgd.min.js?ver=5.2.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ajax_object = {"ajax_nonce_cart":"0c85a4d5c4","ajax_nonce_post":"922c1b9240","ajax_nonce_coupon":"49fd2c67b8","ajax_nonce_testimonial":"a7013a2ed6","ajax_url":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-admin\/admin-ajax.php","loader_img":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-content\/themes\/car-repair-services\/images\/ajax-loader.gif","site_preloader_timeout":"500"};
var ajax_slickslider = {"autoplay":"true","autoplay_speed":"3000","arrows":"true","dots":"false","fade":"true","speed":"500","pause_on_hover":"true","pause_on_dots_hover":"true"};
/* ]]> */
</script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/themes/car-repair-services/js/custom.js?ver=5.2.2'></script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-includes/js/wp-embed.min.js?ver=5.2.2'></script>
<script type='text/javascript' src='https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=5.7'></script>
  
  <div class="modal fade modalform-sm" id="fullServices">
    <div class="modal-dialog container">
      <div class="modal-content">
        <div class="modal-header">
          <h2>Select Service</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <form
            class="estimate_search" autocomplete="off"
            action="https://smartdata.tonytemplates.com/car-repair-service/car2/estimateresult/result"
            method="GET"
            role="search">
            <div class="row service-modal-row">
            </div>
            <input id="mk" type="hidden" name="make">
            <input id="md" type="hidden" name="model">
            <input id="yr" type="hidden" name="the_year">
            <div class="tt-item">
              <input placeholder="State, Zip, Town" type="hidden" name="s">
            </div>
            <div class="modal-footer">
              <button class="btn btn-border" type="submit" id="estimatorSubmitModal"><span>GET ESTIMATE</span></button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  </body>
</html>