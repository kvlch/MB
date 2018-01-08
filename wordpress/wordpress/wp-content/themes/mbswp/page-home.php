<?php
/**
 * The template Name: Home Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mbswp
 */
 
 /*Advanced Custom Fields*/
 $instagram_url	= get_post_meta(10,instagram_url,true); 
 $facebook_url	= get_post_meta(10,facebook_url,true);
 $logo_white	= get_field('logo_white');
 $logo_black	= get_field('logo_black');
 /*$home_page_video_url = get_post_meta(10,home_page_video_url,true);*/
get_header(); ?>
	<!-- remove bullet on the list-->
		<style>
			li {list-style-type: none;}
			
			.logowhite{
				position:relative; top:-450px;
			}
		</style> 
	<!-- HEADER -->
		<!--Greeting Video with fading down function -->
		<header class="row" style="background-color:black">
			<iframe src="https://player.vimeo.com/video/245154818?autoplay=1&loop=1&title=0&byline=0&portrait=0" frameborder="0" 
			height="800px" width="100%"></iframe>
			<!--<video src="<?php echo $home_page_video_url; ?>" 
					type="video/mp4" autoplay class="inline mx-auto"
			></video>-->
			<img class="logowhite mx-auto inline" src="<?php echo $logo_white['url']; ?>" style="width:500px;" alt="Mattia Baldi Studio"></img>
			<!--Angle down anchor -->
			<section id="section01" class="demo" style="z-index:1; background-color:black;">
				<a href="#main" style="top:-150px;"><span></span></a>
			</section>
		</header>
		<!-- END ============ header-->
        
          
        <!-- nav bar with fade up function fade-in fade-ani-->
        <div class="navbar-wrapper fade-in fade-ani" data-spy="affix" data-offset-top="800" >
            <nav class="navbar navbar-light navbar-inverse" style="opacity:0.9;background-color:white; color:black;" >
                <a class="navbar-brand" href="home" id="logoblack">
				<img src="<?php echo $logo_black['url']; ?>" style="width:300px;" alt="Mattia Baldi Studio"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <center><a class="nav-link" href="works" style="color:black;"><h2>WORKS</h2></a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="#"style="color:black;"><h2>MOVING</h2></a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="contact"style="color:black;"><h2>CONTACT</h2></a></center>
                        </li>
                        <!-- social icons with the 3x size and on the center-->
                        <li><div class = "row"><div class="span6" style="float: none; margin: 0 auto;">
                            <!--facebook icon -->
                            <a href="<?php echo $facebook_url; ?>" class="badge social facebook" target="_blank">
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
	<div id="primary" class="content-area" style="color:grey; text-align:center;">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<!--END ========= Photo Contents -->
	
	<footer>
            
            <!-- nav bar-->
            <div class="navbar-wrapper">
                <nav class="navbar navbar-expand-md navbar-dark navbar-inverse bg-dark" role="navigation">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <center><a class="nav-link" href="home">HOME<span class="sr-only">HOME</span></a></center>
                        </li>
                        <li class="nav-item active">
                            <center><a class="nav-link" href="works">WORKS</a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="#">MOVING</a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="contact">CONTACT</a></center>
                        </li>
                        
                    </ul>
                    <!--name on the footer-->
                    <p style = "color:white">&copy;2018 Mattia Baldi Studio</p>
                </nav>
            </div>
        </footer>
        
        
        <!-- Bootstrap core JavaScript
         ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/popper.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/dist/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
        <!-- Salvattore Content Layout-->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/salvattore.min.js"></script>
        <!--Fading when scroll-->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/fading.js"></script>
        <!--Affix effect on the nav bar -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/affix.js"></script>
        <!--Scroll down angle-->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/scroll-down.js"></script>
		<!--Skrollr effect-->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/skrollr.js"></script>

<?php
get_sidebar();
get_footer();
