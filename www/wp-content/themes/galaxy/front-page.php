

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
        
        <div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid slidertop-space"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">    <div class="block">
        <div class="container container-fluid-sm">
            <div class="text-center">
                <h2 class="h-lg">Our Featured Services</h2>
                <p class="info">We offer full service auto repair & maintenance</p>
            </div>
            <div class="divider-md"></div>
            <div class="services-tabs">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs services-tabs-nav" role="tablist">
                                            <li class="active"><a href="#" data-icon='icon1'>
                                                    <i class="icon-diag"></i>
                          
                        <span>Diagnostics</span></a></li>
                                                <li class=""><a href="#" data-icon='icon2'>
                                                    <i class="icon-engine"></i>
                          
                        <span>Engine Repair</span></a></li>
                                                <li class=""><a href="#" data-icon='icon3'>
                                                    <i class="icon-oil"></i>
                          
                        <span>Oil / Lube / Filters</span></a></li>
                                                <li class=""><a href="#" data-icon='icon4'>
                                                    <i class="icon-car-wheel"></i>
                          
                        <span>Tires</span></a></li>
                                                <li class=""><a href="#" data-icon='icon5'>
                                                    <i class="icon-gearshift"></i>
                          
                        <span>Transmission</span></a></li>
                                                <li class=""><a href="#" data-icon='icon6'>
                                                    <i class="icon-power"></i>
                          
                        <span>Batteries</span></a></li>
                                        </ul>
                <!-- Tab panes -->
                <div class="services-tabs-content">
                    <div class="services-tabs-content-bg-wrap">
                        <div class="services-tabs-content-bg">
                            <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/service-tab.png" alt="">
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
                                                    <p class="services-tabs-text icon1 active">If your engine is sick or tired we have the equipment to check, diagnose and efficiently fix any problem you may have.</p>
                                                        <p class="services-tabs-text icon2 ">Morbi vitae nibh eu enim convallis porttitor. Etiam sit amet fermentum diam, in aliquam erat. In nisi neque, pretium in quam.</p>
                                                        <p class="services-tabs-text icon3 ">Pellentesque urna urna, rhoncus vitae elit id, maximus dictum arcu. Nulla malesuada dui eu efficitur aliquet. In nisi neque.</p>
                                                        <p class="services-tabs-text icon4 ">Ut vitae quam et urna ultrices volutpat. Sed scelerisque tristique posuere. Praesent dapibus ligula eget sollicitudin congue.</p>
                                                        <p class="services-tabs-text icon5 ">Donec massa nibh, placerat eu lobortis ut, ornare in massa. Quisque pellentesque, turpis sit amet ullamcorper mollis.</p>
                                                        <p class="services-tabs-text icon6 ">Nunc porttitor in tellus a rutrum. Curabitur in ante dui. Sed id erat eget libero egestas mollis et id dolor.</p>
                                                </div>
                    <div class="services-tab-button">
                                                <a class="btn btn-invert" href="https://smartdata.tonytemplates.com/car-repair-service/car2/services/" ><span>Know More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css"> .services-tabs .services-tabs-icons > span:nth-child(1) { left: 31%; top: 48%; }.services-tabs .services-tabs-icons > span:nth-child(2) { left: 8%; top: 42%; }.services-tabs .services-tabs-icons > span:nth-child(3) { left: 13%; top: 28%; }.services-tabs .services-tabs-icons > span:nth-child(4) { left: 82%; top: 59%; }.services-tabs .services-tabs-icons > span:nth-child(5) { left: 38%; top: 67%; }.services-tabs .services-tabs-icons > span:nth-child(6) { left: 25%; top: 28%; } </style></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element  vc_custom_1539427405185" >
		<div class="wpb_wrapper">
			<div class="text-center">
<h2 class="h-lg">We Provide Expert Service</h2>
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
                                <span>Additional Services</span>
                            </a>
                        </li>
                                                <li class="">
                            <a href="#tab2" data-toggle="tab">
                                <i class="icon-raketa"></i>
                                <span>Our Advantages</span>
                            </a>
                        </li>
                                                <li class="">
                            <a href="#tab3" data-toggle="tab">
                                <i class="icon-wrech1"></i>
                                <span>About Company</span>
                            </a>
                        </li>
                                    </ul>
            <div class="tab-content-bg">
                <div class="container">
                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab1">
                                    <div class="text-center">
<h5>Below are some of the many auto repair services we offer:</h5>
</div>
<div class="row">
<div class="col-sm-6 col-md-4">
<ul class="marker-list-sm-1">
 	<li><a href="#">FREE Loaner Cars</a></li>
 	<li><a href="#">FREE Shuttle Service</a></li>
 	<li><a href="#">General Auto Repair &amp; Maintenance</a></li>
 	<li><a href="#">Transmission Repair &amp; Replacement</a></li>
 	<li><a href="#">Manufacturer Recommended Service</a></li>
 	<li><a href="#">Brake Repair and Replacement</a></li>
 	<li><a href="#">Air Conditioning A/C Repair</a></li>
 	<li><a href="#">Tire Repair and Replacement</a></li>
</ul>
</div>
<div class="col-sm-6 col-md-4">
<ul class="marker-list-sm-1">
 	<li>FREE Loaner Cars</li>
 	<li>FREE Shuttle Service</li>
 	<li>General Auto Repair &amp; Maintenance</li>
 	<li>Transmission Repair &amp; Replacement</li>
 	<li>Manufacturer Recommended Service</li>
 	<li>Brake Repair and Replacement</li>
 	<li>Air Conditioning A/C Repair</li>
 	<li>Tire Repair and Replacement</li>
</ul>
</div>
<div class="col-sm-6 col-md-4 hidden-sm hidden-xs">
<ul class="marker-list-sm-1">
 	<li>FREE Loaner Cars</li>
 	<li>FREE Shuttle Service</li>
 	<li>General Auto Repair &amp; Maintenance</li>
 	<li>Transmission Repair &amp; Replacement</li>
 	<li>Manufacturer Recommended Service</li>
 	<li>Brake Repair and Replacement</li>
 	<li>Air Conditioning A/C Repair</li>
 	<li>Tire Repair and Replacement</li>
</ul>
</div>
</div>
<div class="divider-md"></div>
<div class="text-center"><a class="btn btn-border" href="https://smartdata.tonytemplates.com/car-repair-service/car2/services/">+ View FULL LIST</a></div>                                </div>
                                                                <div class="tab-pane " id="tab2">
                                    <div class="row">
<div class="col-sm-5"><img class="alignnone size-medium wp-image-1648 img-responsive" src="//smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/about-us-tab.png" alt="" width="438" height="385" /></div>
<div class="divider-lg visible-xs"></div>
<div class="col-sm-7">
<h3>About Car Repair Services</h3>
<p>Our service facility is independently owned and operated providing full-service repair and maintenance services. We use the latest diagnostic equipment to guarantee your vehicle is repaired or serviced properly and in a timely fashion. We are a member of Professional Auto Service, an elite performance network, where independent service facilities share common goals of being world-class automotive service centers.</p>
<ul class="marker-list-sm">
 	<li>24 Month / 24,000km Nationwide Warranty</li>
 	<li>ASE Certified Technicians</li>
 	<li>Customer Rewards Program</li>
 	<li>24-Hour Roadside Assistance</li>
 	<li>Courtesy Local Shuttle Service</li>
 	<li>Courtesy Loaner Vehicle</li>
</ul>
</div>
</div>                                </div>
                                                                <div class="tab-pane " id="tab3">
                                    <div class="row">
<div class="col-sm-6 col-lg-5 col-lg-offset-1">
<div class="text-icon-hor2">
<div class="icon-wrapper2"><i class="icon-ok"></i></div>
<div class="text">
<h6>WE MAKE IT EASY</h6>
Get a quote and book a service online 24/7. Our mechanics will come to your home or office, even on evenings and weekends.
</div>
</div>
<div class="text-icon-hor2">
<div class="icon-wrapper2"><i class="icon-ok"></i></div>
<div class="text">
<h6>FAIR AND TRANSPARENT PRICING</h6>
We offer fair and transparent pricing and provide estimates upfront for hundreds of services on thousands of cars. Book with confidence.
</div>
</div>
</div>
<div class="divider-lg visible-xs"></div>
<div class="col-sm-6 col-lg-5 col-lg-offset-1">
<div class="text-icon-hor2">
<div class="icon-wrapper2"><i class="icon-ok"></i></div>
<div class="text">
<h6>OEM factory parts warranty</h6>
OEM parts are parts that are specifically made by the vehicle's manufacturer and therefore make finding parts for the specific vehicle much easier.
</div>
</div>
<div class="text-icon-hor2">
<div class="icon-wrapper2"><i class="icon-ok"></i></div>
<div class="text">
<h6>HAPPINESS GUARANTEED</h6>
We only work with highly rated mechanics. All services are backed by our 12-month / 12,000-mile warranty.
</div>
</div>
</div>
</div>                                </div>
                                                    </div>
                </div>
            </div>
        </div>
    </div>
        <style>
        .icons-tabs .tab-content-bg {
            background: url(https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/bg-icon-tabs-content-1.jpg) no-repeat center center;
            background-size: cover;
        }
    </style>
</div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="block "><div class="text-center"><h2 class="h-lg">How It Works</h2><p class="info">We offer full service auto repair & maintenance</p></div><div class="row" id="stepsAnimation">                  <div class="col-sm-3">
                    <div class="how-works-circle">
                <div class="step step1">
                    <div class="step-inside">
                                                    <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/how-works-02-2.png" alt="">
                                                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/how-works-01-1.png" alt="">
                                                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/how-works-01-2.png" alt="">
                                                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/how-works-01-3.png" alt="">
                                                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/how-works-01-4.png" alt="">
                                                </div>
                </div>
                <div class="how-works-number">
                    1                </div>
                <div class="how-works-text">
                    CHOOSE YOUR SERVICE                </div>
            </div>
        </div>
                          <div class="col-sm-3">
                    <div class="how-works-circle">
                <div class="step step2">
                    <div class="step-inside">
                                                    <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/how-works-02-1.png" alt="">
                                                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/how-works-02-2-1.png" alt="">
                                                </div>
                </div>
                <div class="how-works-number">
                    2                </div>
                <div class="how-works-text">
                    MAKE AN APPOINTMENT                </div>
            </div>
        </div>
                          <div class="col-sm-3">
                    <div class="how-works-circle">
                <div class="step step3">
                    <div class="step-inside">
                                                    <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/how-works-03.png" alt="">
                                                </div>
                </div>
                <div class="how-works-number">
                    3                </div>
                <div class="how-works-text">
                    WE'LL TAKE YOUR CAR FOR REPAIR                </div>
            </div>
        </div>
                          <div class="col-sm-3">
                    <div class="how-works-circle">
                <div class="step step4">
                    <div class="step-inside">
                                                    <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/how-works-04.png" alt="">
                                                </div>
                </div>
                <div class="how-works-number">
                    4                </div>
                <div class="how-works-text">
                    PICK UP YOUR CAR KEYS                </div>
            </div>
        </div>
        </div></div></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"> <div class="block bg-4"><div class="container-fluid"><h2 class="h-lg text-center">What Our Customers Say</h2><div class="testimonials-carousel2">
            <div class="testimonials-item2">
                <div class="inside">
                    <div class="container">
                        <div class="meta">
                            <span class="rating">
                                <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>                            </span>
                            <span class="username">Bryce H. </span>
                            <span class="userfrom">San Luis Obispo, CA</span></div>
                        <div class="text"><p>“Excellent diagnostics, communication, and completion of the job in a very prompt and professional manner. We will definitely be sending more business their direction. Very happy with this shop and their mechanics”</p>
</div>
                    </div>
                    <div class="testimonial-auto animations" data-animate-start="fadeInRight" data-animate-end="fadeOut" data-delay="0">
                                                    <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2017/04/testimonial-auto-03.png" alt="">
                                            </div>
                </div>
            </div>
            
            <div class="testimonials-item2">
                <div class="inside">
                    <div class="container">
                        <div class="meta">
                            <span class="rating">
                                <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>                            </span>
                            <span class="username">Paul A. Munger. </span>
                            <span class="userfrom">New York, NY</span></div>
                        <div class="text"><p>“I’ve been using this garage for a number of years to service both our cars. They are really good, they always have a slot available, work fast and have good prices. Would recommend them without reservations.”</p>
</div>
                    </div>
                    <div class="testimonial-auto animations" data-animate-start="fadeInRight" data-animate-end="fadeOut" data-delay="0">
                                                    <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2017/04/testimonial-auto-01.png" alt="">
                                            </div>
                </div>
            </div>
            
            <div class="testimonials-item2">
                <div class="inside">
                    <div class="container">
                        <div class="meta">
                            <span class="rating">
                                <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>                            </span>
                            <span class="username">Harry J. Spencer. </span>
                            <span class="userfrom">Deer Park, TX</span></div>
                        <div class="text"><p>“Car Repair Service has become our service center of choice. Affordable pricing, and quick service. I had my A/C serviced in about 45 minutes while I waited and now the summer heat is tolerable. Great people, great service!”</p>
</div>
                    </div>
                    <div class="testimonial-auto animations" data-animate-start="fadeInRight" data-animate-end="fadeOut" data-delay="0">
                                                    <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2017/04/testimonial-auto-02.png" alt="">
                                            </div>
                </div>
            </div>
            </div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid block"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-7"><div class="vc_column-inner"><div class="wpb_wrapper"><h3>Auto Maintenance FAQs</h3><div class="faq-items-sm panel-group" id="accordionFaq">    <div class="faq-item-sm panel panel-default">
        <div class="panel-heading" id="headingTwo">
            <h4 class="panel-title"><a data-toggle="collapse" href="#faq5d3a22aab3d08" data-parent="#accordionFaq" class="collapsed">  Q: How often should I get my oil changed?<span class="caret-toggle closed">–</span><span class="caret-toggle opened">+</span></a></h4>
        </div>
        <div id="faq5d3a22aab3d08" class="panel-collapse collapse in ">
            <div class="panel-body">
                 A: For a long time and sometimes still today, standard practice at many lube shops is to suggest oil changes every three months or 3,000 miles. In order to know when the best time to get your oil changed is, check the owner’s manual of your specific model for manufacturer-recommended intervals.            </div>
        </div>
    </div>
        <div class="faq-item-sm panel panel-default">
        <div class="panel-heading" id="headingTwo">
            <h4 class="panel-title"><a data-toggle="collapse" href="#faq5d3a22aab3d57" data-parent="#accordionFaq" class="collapsed">  Q: Should I worry about servicing my leased vehicle?<span class="caret-toggle closed">–</span><span class="caret-toggle opened">+</span></a></h4>
        </div>
        <div id="faq5d3a22aab3d57" class="panel-collapse collapse  ">
            <div class="panel-body">
                 A: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut sit dignissimos esse iste deserunt hic incidunt ad quasi beatae. Eveniet hic necessitatibus fuga excepturi reprehenderit impedit numquam expedita consectetur delectus non facilis quidem praesentium, sunt recusandae, enim mollitia quod?            </div>
        </div>
    </div>
        <div class="faq-item-sm panel panel-default">
        <div class="panel-heading" id="headingTwo">
            <h4 class="panel-title"><a data-toggle="collapse" href="#faq5d3a22aab3da2" data-parent="#accordionFaq" class="collapsed">  Q: How often should I change my vehicle’s timing belt?<span class="caret-toggle closed">–</span><span class="caret-toggle opened">+</span></a></h4>
        </div>
        <div id="faq5d3a22aab3da2" class="panel-collapse collapse  ">
            <div class="panel-body">
                 A: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut sit dignissimos esse iste deserunt hic incidunt ad quasi beatae. Eveniet hic necessitatibus fuga excepturi reprehenderit impedit numquam expedita consectetur delectus non facilis quidem praesentium, sunt recusandae, enim mollitia quod?            </div>
        </div>
    </div>
        <div class="faq-item-sm panel panel-default">
        <div class="panel-heading" id="headingTwo">
            <h4 class="panel-title"><a data-toggle="collapse" href="#faq5d3a22aab3dec" data-parent="#accordionFaq" class="collapsed">  Q: Do I need to charge my battery after I jump-start my vehicle?<span class="caret-toggle closed">–</span><span class="caret-toggle opened">+</span></a></h4>
        </div>
        <div id="faq5d3a22aab3dec" class="panel-collapse collapse  ">
            <div class="panel-body">
                 A: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut sit dignissimos esse iste deserunt hic incidunt ad quasi beatae. Eveniet hic necessitatibus fuga excepturi reprehenderit impedit numquam expedita consectetur delectus non facilis quidem praesentium, sunt recusandae, enim mollitia quod?            </div>
        </div>
    </div>
        <div class="faq-item-sm panel panel-default">
        <div class="panel-heading" id="headingTwo">
            <h4 class="panel-title"><a data-toggle="collapse" href="#faq5d3a22aab3e34" data-parent="#accordionFaq" class="collapsed">  Q: How do I know when I need new brakes?<span class="caret-toggle closed">–</span><span class="caret-toggle opened">+</span></a></h4>
        </div>
        <div id="faq5d3a22aab3e34" class="panel-collapse collapse  ">
            <div class="panel-body">
                 A: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut sit dignissimos esse iste deserunt hic incidunt ad quasi beatae. Eveniet hic necessitatibus fuga excepturi reprehenderit impedit numquam expedita consectetur delectus non facilis quidem praesentium, sunt recusandae, enim mollitia quod?            </div>
        </div>
    </div>
    </div>
	<div class="wpb_text_column wpb_content_element  vc_custom_1539248910672" >
		<div class="wpb_wrapper">
			<div class="divider-xl visible-sm visible-xs"></div>

		</div>
	</div>
</div></div></div><div class="banner-col wpb_column vc_column_container vc_col-sm-6 vc_col-md-5 vc_col-xs-6"><div class="vc_column-inner"><div class="wpb_wrapper">    <div class="banner-free">
        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/banner-free.jpg" alt="">
        <div class="banner-text">
            <div class="banner-text-header">
                <div class="banner-text-1">FREE!</div>
                <div class="banner-text-2">Winter & Summer Checks</div>
            </div>
            <div class="banner-text-3">
                <p></p>
<p>Make sure your vehicle is ready for the cold winter weather and that it’s safe and sound for your family’s summer holiday.</p>
<p>Car Repair Service offers FREE checks for everybody.</p>
<p></p>
            </div>
            <div class="banner-text-btn">
                <div class="form-popup-wrap">
                                            <a class="btn btn-invert form-popup-link" href="#"><span>Get Quote</span></a>
                        <div class="form-popup">
                            <div class="quote-form">
                                <div role="form" class="wpcf7" id="wpcf7-f879-p1013-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/car-repair-service/car2/#wpcf7-f879-p1013-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="879" />
<input type="hidden" name="_wpcf7_version" value="5.1.3" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f879-p1013-o1" />
<input type="hidden" name="_wpcf7_container_post" value="1013" />
</div>
<div class="form-popup-close"><i class="icon-close-cross"></i></div>
<div id="quote-form" method="post" novalidate="novalidate">
<div id="successQuote" class="successform">
<p>Your message was sent successfully!</p>
</p></div>
<div id="errorQuote" class="errorform">
<p>Something went wrong, try refreshing and submitting the form again.</p>
</p></div>
<div class="form-inline">
        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control input-custom" aria-required="true" aria-invalid="false" placeholder="Your Name" /></span>
    </div>
<div class="form-inline">
<div>
            <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control input-custom" aria-required="true" aria-invalid="false" placeholder="Email" /></span>
        </div>
<div>
            <span class="wpcf7-form-control-wrap your-phone"><input type="number" name="your-phone" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number form-control input-custom" aria-required="true" aria-invalid="false" placeholder="Phone Number" /></span>
        </div></div>
<div class="form-inline">
<div class="select-wrapper">
            <span class="wpcf7-form-control-wrap select1"><select name="select1" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required input-custom" aria-required="true" aria-invalid="false"><option value="Vehicle">Vehicle</option><option value="Car">Car</option><option value="Bike">Bike</option></select></span>
        </div>
<div class="select-wrapper">
            <span class="wpcf7-form-control-wrap select2"><select name="select2" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required input-custom valid" aria-required="true" aria-invalid="false"><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option></select></span>
        </div></div>
<div class="form-inline">
<div class="select-wrapper">
             <span class="wpcf7-form-control-wrap select3"><select name="select3" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required input-custom" aria-required="true" aria-invalid="false"><option value="Choose service">Choose service</option><option value="Preventative Maintenance">Preventative Maintenance</option><option value="Brake Repair &amp; Service">Brake Repair &amp; Service</option><option value="Transmission Service &amp; Repair">Transmission Service &amp; Repair</option></select></span>
        </div></div>
<div class="form-inline">
        <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control textarea-custom" aria-required="true" aria-invalid="false" placeholder="Your comment"></textarea></span>
    </div>
<p>    <input type="submit" value="get a quote" class="wpcf7-form-control wpcf7-submit btn btn-lg btn-full" />
</p></div>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>                            </div>
                        </div>
                                    </div>
            </div>
        </div>
    </div>
    </div></div></div><div class="banner-col wpb_column vc_column_container vc_col-sm-6 vc_col-md-12 vc_col-xs-6"><div class="vc_column-inner"><div class="wpb_wrapper">    <div class="divider-xxl visible-lg visible-md"></div>
    <a href="#" class="banner-service">
        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/banner-service.png" alt="" class="visible-sm visible-xs">
        <div class="row-flex">
            <div class="col-left">
                <i class="icon icon-tow-truck"></i>
            </div>
            <div class="col-center">
                <div class="banner-text-1"><span class="color">24 Hour</span> Breakdown Service</div>
                <div class="banner-text-2">To order a Breakdown Recovery Service now or if you require a quote, please contact us add</div>
            </div>
            <div class="col-right">
                <div class="banner-text-3"><i class="icon icon-phone"></i>1-800-123-45670</div>
                <div class="banner-text-4">Whether you’re the driver of your own car or a rental, you’re covered 24/7, 365 days a year add</div>
            </div>
        </div>
    </a>

    </div></div></div></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="block"><div class="container"><div class="text-center"><h2 class="h-lg">Our Pricing Plans</h2> <p class="info">Fixed price car servicing packages</p></div><div class="pricing-carousel row">  
                    <div class="pricing-box col-md-4">
                    <div class="pricing-box-inside">
                <div class="pricing-box-header">
                    <div class="text-1">Synthetic Blend Oil Change Special</div>
                    <div class="divide-line"></div>
                    <div class="text-2">$24<sup>99</sup></div>
                </div>
                <div class="pricing-box-center">
                    <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/pricing-bg-01.png" alt="">
                    <div class="text-3">Includes standard oil filter, up to 5 qts of SYNTHETIC BLEND oil and complete vehicle inspection.</div>
                </div>
                <div class="pricing-box-footer">
                    <span class="mark-icon">*</span>
                    <div class="text-4">Not valid with other offer or special. Coupon must be presented in advance.</div>
                    <div class="pricing-box-logo">
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/logo-sm.png" alt="">
                    </div>
                </div>
            </div>
        </div>
          
                    <div class="pricing-box col-md-4">
                    <div class="pricing-box-inside">
                <div class="pricing-box-header">
                    <div class="text-1">Engine Coolant Inspection &amp; Service</div>
                    <div class="divide-line"></div>
                    <div class="text-2">$59<sup>99</sup></div>
                </div>
                <div class="pricing-box-center">
                    <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/pricing-bg-02.png" alt="">
                    <div class="text-3">Drain &amp; Replace with up to 1 Gallon of Antifreeze, Inspect all hoses, fittings and water pump.</div>
                </div>
                <div class="pricing-box-footer">
                    <span class="mark-icon">*</span>
                    <div class="text-4">Not valid with other offer or special. Coupon must be presented in advance.</div>
                    <div class="pricing-box-logo">
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/logo-sm.png" alt="">
                    </div>
                </div>
            </div>
        </div>
          
                    <div class="pricing-box col-md-4">
                    <div class="pricing-box-inside">
                <div class="pricing-box-header">
                    <div class="text-1">Brake Fluid Flush and Repair Service</div>
                    <div class="divide-line"></div>
                    <div class="text-2">$24<sup>99</sup></div>
                </div>
                <div class="pricing-box-center">
                    <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/pricing-bg-03.png" alt="">
                    <div class="text-3">Your car’s brake system is a vital part of your vehicle and needs to function properly to help keep you safe.</div>
                </div>
                <div class="pricing-box-footer">
                    <span class="mark-icon">*</span>
                    <div class="text-4">Not valid with other offer or special. Coupon must be presented in advance.</div>
                    <div class="pricing-box-logo">
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/logo-sm.png" alt="">
                    </div>
                </div>
            </div>
        </div>
          
                    <div class="pricing-box col-md-4">
                    <div class="pricing-box-inside">
                <div class="pricing-box-header">
                    <div class="text-1">Synthetic Blend Oil Change Special</div>
                    <div class="divide-line"></div>
                    <div class="text-2">$24<sup>99</sup></div>
                </div>
                <div class="pricing-box-center">
                    <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/pricing-bg-01.png" alt="">
                    <div class="text-3">Includes standard oil filter, up to 5 qts of SYNTHETIC BLEND oil and complete vehicle inspection.</div>
                </div>
                <div class="pricing-box-footer">
                    <span class="mark-icon">*</span>
                    <div class="text-4">Not valid with other offer or special. Coupon must be presented in advance.</div>
                    <div class="pricing-box-logo">
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/logo-sm.png" alt="">
                    </div>
                </div>
            </div>
        </div>
          
                    <div class="pricing-box col-md-4">
                    <div class="pricing-box-inside">
                <div class="pricing-box-header">
                    <div class="text-1">Engine Coolant Inspection &amp; Service</div>
                    <div class="divide-line"></div>
                    <div class="text-2">$59<sup>99</sup></div>
                </div>
                <div class="pricing-box-center">
                    <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/pricing-bg-02.png" alt="">
                    <div class="text-3">Drain &amp; Replace with up to 1 Gallon of Antifreeze, Inspect all hoses, fittings and water pump.</div>
                </div>
                <div class="pricing-box-footer">
                    <span class="mark-icon">*</span>
                    <div class="text-4">Not valid with other offer or special. Coupon must be presented in advance.</div>
                    <div class="pricing-box-logo">
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/logo-sm.png" alt="">
                    </div>
                </div>
            </div>
        </div>
          
                    <div class="pricing-box col-md-4">
                    <div class="pricing-box-inside">
                <div class="pricing-box-header">
                    <div class="text-1">Brake Fluid Flush and Repair Service</div>
                    <div class="divide-line"></div>
                    <div class="text-2">$24<sup>99</sup></div>
                </div>
                <div class="pricing-box-center">
                    <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/pricing-bg-03.png" alt="">
                    <div class="text-3">Your car’s brake system is a vital part of your vehicle and needs to function properly to help keep you safe.</div>
                </div>
                <div class="pricing-box-footer">
                    <span class="mark-icon">*</span>
                    <div class="text-4">Not valid with other offer or special. Coupon must be presented in advance.</div>
                    <div class="pricing-box-logo">
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/logo-sm.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div></div></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="container"><div class="text-center"><h2 class="h-lg">We Repair All Makes of Automobiles</h2> <p class="info">Find here your vehicle</p></div><div class="brands-grid">                <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/brand-01-150x116.png" alt="image">
           
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/brand-02-150x116.png" alt="image">
           
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/brand-03-150x116.png" alt="image">
           
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/brand-04-150x116.png" alt="image">
           
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/brand-05-150x116.png" alt="image">
           
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/brand-06-150x116.png" alt="image">
           
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/brand-07-150x116.png" alt="image">
           
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/brand-04-150x116.png" alt="image">
           
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/brand-03-150x116.png" alt="image">
           
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/brand-07-150x116.png" alt="image">
           
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/brand-06-150x116.png" alt="image">
           
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/brand-01-150x116.png" alt="image">
           
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/brand-02-150x116.png" alt="image">
           
                        <img src="https://smartdata.tonytemplates.com/car-repair-service/car2/wp-content/uploads/sites/6/2018/10/brand-05-150x116.png" alt="image">
           
        </div><div class="divider-lg"></div> <div class="text-center"><a href="#" class="btn btn-border view-all-brands js-view-all-brands active"><span>+ View All Makes</span><span>- Show Less Makes</span></a></div></div></div></div></div></div>
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
                                        <div class="contact-info"><i class="icon icon-locate"></i>2605 Caton Hill Road, Woodbridge, VA 22192                    </div>
                                                            <div class="contact-info"><i class="icon icon-phone"></i>
                        <a href="tel:1-800-1234567">1-800-1234567</a>
                    </div>
                                                            <div class="contact-info"><i class="icon icon-email"></i><a href="mailto:officeone@youremail.com">officeone@youremail.com</a>
                    </div>
                                        <div class="contact-info-divider"></div>
                    <h5>OPENING HOURS</h5>
                                        <div class="contact-info"><i class="icon icon-clock"></i>Monday-Saturday <span class="color">7:00AM - 6:00PM</span> Sunday Closed                    </div>
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
            js_script.src = "//maps.google.com/maps/api/js?sensor=true&callback=init&key=AIzaSyCa33WY3EJObzo592BJKG6JFabx_qo4dtA";
            js_script.async = true;
            document.getElementsByTagName('head')[0].appendChild(js_script);
            window.removeEventListener("scroll", lazyLoadGoogleMap);
        }

        function init() {
			
			var locations = [];
							locations.push(['{"lat":"37.36274700000004","lng":"-122.03525300000001"}'])
							locations.push(['{"lat":"37.36274700000004","lng":"-122.03525300000001","marker":"https:\/\/smartdata.tonytemplates.com\/car-repair-service\/car2\/wp-content\/uploads\/sites\/6\/2018\/11\/map-marker.png"}'])
			            var mapOptions = {
                zoom: parseInt(14),
                center: new google.maps.LatLng(37.36274700000004, -122.03525300000001), 
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