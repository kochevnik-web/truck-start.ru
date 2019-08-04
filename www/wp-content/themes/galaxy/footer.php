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

<div class="footer-bottom">
    <div class="container">
        <div class="copyright">
			© 2009 - <?php echo date( 'Y' ); ?> Диагностика грузовых автомобилей Truck-Start.ru
			</div>

            <div class="footer-bottom-right">
                <div class="social-links">
                    <ul>
						<?php if ( (bool)get_field( 'footer_facebook', 'option' ) ) { ?>
						<li> 
							<a class="icon icon-facebook-logo" target="_blank" href="<?php echo get_field( 'footer_facebook', 'option' ); ?>"></a>
						</li>
						<?php } ?>
						<?php if ( (bool)get_field( 'footer_twitter', 'option' ) ) { ?>
						<li> 
							<a class="icon icon-twitter-logo" target="_blank" href="<?php echo get_field( 'footer_twitter', 'option' ); ?>"></a>
						</li>
						<?php } ?>
						<?php if ( (bool)get_field( 'footer_instagram', 'option' ) ) { ?>
						<li> 
							<a class="icon icon-instagram-logo" target="_blank" href="<?php echo get_field( 'footer_instagram', 'option' ); ?>"></a>
						</li>
						<?php } ?>
						<?php if ( (bool)get_field( 'footer_google', 'option' ) ) { ?>
						<li> 
							<a class="icon icon-google-plus-logo" target="_blank" href="<?php echo get_field( 'footer_google', 'option' ); ?>"></a>
						</li>
						<?php } ?>
					</ul>
                </div>
            </div>
        </div>
    </div>
</div> 

<div class="back-to-top" style="bottom: 15px;">
	<a href="#top">
        <span class="icon icon-transport"></span>
    </a>
</div>

<div class="modal fade modalform-sm in" id="appointmentForm">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header">
				<a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm">
					<i class="icon-shape icon"></i>
					<span>Appointment</span>
				</a>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="icon-close-cross"></i>
				</button>
        	</div>
            <div class="modal-body">
                    <div class="container-fluid">
                        <h2>Укажите телефон</h2>
						И менеджер перезвонит Вам в течении нескольких меню
							<?php echo do_shortcode( get_field( 'footer_cf7_shortcode', 'option' ) ); ?>
					</div>
                </div>
            </div>
        </div>
    </div>
  
<?php wp_footer(); ?>
</body>
</html>