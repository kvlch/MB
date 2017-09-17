<?php
/**
 * The template Name: Home Page
 * @package MBS
 */
 
 /*Advanced Custom Fields*/
 $project_test		= get_post_meta(10,project_test,true);
 $pic_description1	= get_post_meta(10,pic_description1,true);
 $pic_description2	= get_post_meta(10,pic_description2,true);
 $pic_description3	= get_post_meta(10,pic_description3,true);
 $nav_home	= get_post_meta(10,nav_home,true);
 $nav_works	= get_post_meta(10,nav_works,true);
 $nav_moving	= get_post_meta(10,nav_moving,true);
 $nav_contact	= get_post_meta(10,nav_contact,true);
 $instagram_url	= get_post_meta(10,instagram_url,true); 
 $facebook_url	= get_post_meta(10,facebook_url,true);
 $logo_white	= get_field('logo_white');
 $logo_black	= get_field('logo_black');
 
get_header(); ?>
		<!-- HEADER -->
		<!--Greeting Video with fading down function -->
		<header class="row begin" style="background-color:black; height:730px;">
			<video muted src="https://zuelligindustrial-my.sharepoint.com/personal/kulvaree_chankrachang_zuelligindustrial_com/_layouts/15/guestaccess.aspx?docid=0f6fa7a8c418d4003b6f0ced6cbf1d576&authkey=AXKFCkqBf42OT93JRA5vy6A" 
					type="video/mp4" autoplay loop class="inline mx-auto"
			></video>
			<img class="logowhite" src="<?php echo $logo_white['url']; ?>" alt="Mattia Baldi Studio"
				data-anchor-target=".begin"
				data-bottom-top="transform: translateY(0px); opacity: 1;"
				data-top-bottom="transform: translateY(250px); opacity: .2"
			></img>
			<!--Angle down anchor -->
			<section id="section01" class="demo" 
				style="position:relative; left:0; top:-200px; height:50px;"
			><a href="#section02"><span></span></a>
			</section>
		</header>
		<!-- END ============ header-->
		<!-- nav bar with fade up function fade-in fade-ani-->
        <div class="navbar-wrapper fade-in fade-ani" id="section02" data-spy="affix" data-offset-top="775" >
            <nav class="navbar navbar-dark navbar-inverse" style="opacity:0.9;background-color:white" >
                <a class="navbar-brand" href="home" id="logoblack">
				<img src="<?php echo $logo_black['url']; ?>" alt="Mattia Baldi Studio"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
				
				<div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <center><a class="nav-link" href="photos-gallery"><?php echo $nav_works; ?></a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="moving"><?php echo $nav_moving; ?></a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="contact"><?php echo $nav_contact; ?></a></center>
                        </li>
                        <!-- social icons with the 3x size and on the center-->
                        <li><div class = "row"><div class="span6" style="float: none; margin: 0 auto;">
                            <!--facebook icon -->
                            <a href="<?php echo $facebook_url;?>" class="badge social facebook" target="_blank">
                                <span class="fa-stack fa-lg fa-3x">
                                    <span><i class="fa fa-circle fa-stack-2x" style = "color:black"></i></span>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                            <!--instagram icon -->
                            <a href="<?php echo $instagram_url;?>" class="badge social instragram" target="_blank">
                                <span class="fa-stack fa-lg fa-3x">
                                    <span><i class="fa fa-circle fa-stack-2x" style = "color:black"></i></span>
                                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </div></div></li>	<!-- END ============ social icons-->
                    </ul>
                </div>
				
            </nav>
		</div><!-- END ================== nav bar with fade up function -->


		<!-- Photo Contents -->
		<ul class="grid row masonry" data-rows style="margin-left:2em;">
			<!-- <div class="grid-sizer"></div> -->
			<!-- <div class="gutter-sizer"></div> -->
				<li class="grid-item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/MBtest1.png">
					<div id="info">
						<center>
						<h5><?php echo $project_test; ?></h5>
						<p style="color:grey"><?php echo $pic_description1; ?></p1>
						</center>
					</div>
				</li>	
				<li class="grid-item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/MBtest2.png">
					<div id="info">
						<center>
						<h5><?php echo $project_test; ?></h5>
						<p style="color:grey"><?php echo $pic_description2; ?></p1>
						</center>
					</div>
				</li>
				<li class="grid-item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/MBtest3.png" height="580px">
					<div id="info">
						<center>
						<h5><?php echo $project_test; ?></h5>
						<p style="color:grey"><?php echo $pic_description3; ?></p1>
						</center>
					</div>
				</li>
				<li class="grid-item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/MBtest1.png">
					<div id="info">
						<center>
						<h5><?php echo $project_test; ?></h5>
						<p style="color:grey"><?php echo $pic_description1; ?></p1>
						</center>
					</div>
				</li>
				<li class="grid-item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/MBtest2.png">
					<div id="info">
						<center>
						<h5><?php echo $project_test; ?></h5>
						<p style="color:grey"><?php echo $pic_description2; ?></p1>
						</center>
					</div>
				</li>
				<li class="grid-item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/MBtest3.png">
					<div id="info">
						<center>
						<h5><?php echo $project_test; ?></h5>
						<p style="color:grey"><?php echo $pic_description3; ?></p1>
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
                            <center><a class="nav-link" href="home"><?php echo $nav_home; ?><span class="sr-only">HOME</span></a></center>
                        </li>
                        <li class="nav-item active">
                            <center><a class="nav-link" href="photos-gallery"><?php echo $nav_works; ?></a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="moving"><?php echo $nav_moving; ?></a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="contact"><?php echo $nav_contact; ?></a></center>
                        </li>
                        
                    </ul>
                    <!--name on the footer-->
                    <p style = "color:white">&copy;2017 Mattia Baldi Studio</p>
                </nav>
            </div>
        </footer>


<?php get_footer(); ?>
