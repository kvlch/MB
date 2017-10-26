<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mbswp
 */
get_header(); ?>
	<!-- remove bullet on the list-->
		<style>
			li {list-style-type: none;}
			
			.logowhite{
				position:relative; top:-450px; left:25%;
			}
		</style>
	<!-- HEADER -->
		<!--Greeting Video with fading down function -->
		<header class="row begin" style="background-color:black">
			<video muted src="https://zuelligindustrial-my.sharepoint.com/personal/kulvaree_chankrachang_zuelligindustrial_com/_layouts/15/guestaccess.aspx?docid=0f6fa7a8c418d4003b6f0ced6cbf1d576&authkey=AXKFCkqBf42OT93JRA5vy6A" 
					type="video/mp4" autoplay class="inline mx-auto"
			></video>
			<img class="logowhite" src="assets/img/logo-white-transparent.png" alt="Mattia Baldi Studio"
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
				<img src="assets/img/logo.png" alt="Mattia Baldi Studio"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <center><a class="nav-link" href="photos-gallery.html">WORKS</a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="#">MOVING</a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="contact.html">CONTACT</a></center>
                        </li>
                        <!-- social icons with the 3x size and on the center-->
                        <li><div class = "row"><div class="span6" style="float: none; margin: 0 auto;">
                            <!--facebook icon -->
                            <a href="https://facebook.com/mattiabaldi" class="badge social facebook" target="_blank">
                                <span class="fa-stack fa-lg fa-3x">
                                    <span><i class="fa fa-circle fa-stack-2x" style = "color:black"></i></span>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                            <!--instagram icon -->
                            <a href="http://instagram.com/mattiabaldi_studio" class="badge social instragram" target="_blank">
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
	<div id="primary" class="content-area">
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
        
        
        <!-- Bootstrap core JavaScript
         ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="assets/js/vendor/popper.min.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="assets/js/vendor/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <!-- Salvattore Content Layout-->
        <script src="assets/js/vendor/salvattore.min.js"></script>
        <!--Fading when scroll-->
        <script src="assets/js/vendor/fading.js"></script>
        <!--Affix effect on the nav bar -->
        <script src="assets/js/vendor/affix.js"></script>
        <!--Scroll down angle-->
        <script src="assets/js/vendor/scroll-down.js"></script>
		<!--Skrollr effect-->
		<script src="assets/js/vendor/skrollr.js"></script>

<?php
get_sidebar();
get_footer();
