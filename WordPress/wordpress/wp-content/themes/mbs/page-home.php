<?php
/**
 * The template Name: Home Page
 * @package MBS
 */

get_header(); ?>
		<!-- HEADER -->
		<!--Greeting Video with fading down function -->
		<header class="row begin" style="background-color:black">
			<video muted src="https://zuelligindustrial-my.sharepoint.com/personal/kulvaree_chankrachang_zuelligindustrial_com/_layouts/15/guestaccess.aspx?docid=0f6fa7a8c418d4003b6f0ced6cbf1d576&authkey=AXKFCkqBf42OT93JRA5vy6A" 
					type="video/mp4" autoplay loop class="inline mx-auto"
			></video>
			<img class="logowhite" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-white-transparent.png" alt="Mattia Baldi Studio"
				data-anchor-target=".begin"
				data-bottom-top="transform: translateY(0px); opacity: 1;"
				data-top-bottom="transform: translateY(250px); opacity: .2"
			></img>
			<!--Angle down anchor -->
			<section id="section01" class="demo" 
				style="position:relative; left:0; top:1px;"
			><a href="#section02"><span></span></a>
			</section>
		</header>
		<!-- END ============ header-->
		<!-- nav bar with fade up function fade-in fade-ani-->
        <div class="navbar-wrapper fade-in fade-ani" id="section02" data-spy="affix" data-offset-top="775" >
            <nav class="navbar navbar-light navbar-inverse" style="opacity:0.9;background-color:white" >
                <a class="navbar-brand" href="home.html" id="logoblack">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Mattia Baldi Studio"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
				
				<?php
					wp_nav_menu(array(
						'theme_location'	=> 'primary',
						'container'			=> 'nav',
						'container_class'	=> 'navbar-collapse collapse',
						'menu_class'		=> 'navbar navbar-light navbar-inverse'
						
					));
				?>
				
                </div>
            </nav>
		</div><!-- END ================== nav bar with fade up function -->


		<!-- Photo Contents -->
		<ul class="grid row masonry" data-rows style="margin-left:2em;">
			<!-- <div class="grid-sizer"></div> -->
			<!-- <div class="gutter-sizer"></div> -->
				<li class="grid-item"><img src="assets/img/MBtest1.png">
					<div id="info">
						<center>
						<h5> Topic </h5>
						<p style="color:grey">context</p1>
						</center>
					</div>
				</li>	
				<li class="grid-item"><img src="assets/img/MBtest2.png">
					<div id="info">
						<center>
						<h5> Topic </h5>
						<p style="color:grey">context</p1>
						</center>
					</div>
				</li>
				<li class="grid-item"><img src="assets/img/MBtest3.png" height="580px">
					<div id="info">
						<center>
						<h5> Topic </h5>
						<p style="color:grey">context</p1>
						</center>
					</div>
				</li>
				<li class="grid-item"><img src="assets/img/MBtest1.png">
					<div id="info">
						<center>
						<h5> Topic </h5>
						<p style="color:grey">context</p1>
						</center>
					</div>
				</li>
				<li class="grid-item"><img src="assets/img/MBtest2.png">
					<div id="info">
						<center>
						<h5> Topic </h5>
						<p style="color:grey">context</p1>
						</center>
					</div>
				</li>
				<li class="grid-item"><img src="assets/img/MBtest3.png">
					<div id="info">
						<center>
						<h5> Topic </h5>
						<p style="color:grey">context</p1>
						</center>
					</div>
				</li>
		</ul>
        <!--END ========= Photo Contents -->
        
        
        
        <footer>
            
            <!-- nav bar-->
            <div class="navbar-wrapper">
                <nav class="navbar navbar-expand-md navbar-dark navbar-inverse bg-dark" role="navigation">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <center><a class="nav-link" href="home.html">HOME<span class="sr-only">HOME</span></a></center>
                        </li>
                        <li class="nav-item active">
                            <center><a class="nav-link" href="photos-gallery.html">WORKS</a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="#">MOVING</a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="contact.html">CONTACT</a></center>
                        </li>
                        
                    </ul>
                    <!--name on the footer-->
                    <p style = "color:white">&copy;2017 Mattia Baldi Studio</p>
                </nav>
            </div>
        </footer>


<?php get_footer(); ?>
