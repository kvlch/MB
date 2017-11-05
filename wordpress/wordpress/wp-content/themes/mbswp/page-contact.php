<?php
/**
 * The template Name: Contact Page
 * @package MBS
 */
 
 /*Custom Fields*/
 /*main*/
 $instagram_url	= get_post_meta(10,instagram_url,true); 
 $facebook_url	= get_post_meta(10,facebook_url,true);
 $logo_black	= get_field('logo_black');
/*contact info*/
$bio					= get_post_meta(14,bio,true);
$contact_description	= get_post_meta(14,contact_description,true);
$emailto				= get_post_meta(14,emailto,true);
$profile_pic			= get_field('profile_picture');
  
get_header(); ?>

<!-- nav bar fixed top-->
        <div class="navbar-wrapper">
            <nav class="navbar navbar-light navbar-inverse fixed-top" role="navigation" style="opacity:0.9;background-color:white" >
                <a class="navbar-brand" href="home"><img src="<?php echo $logo_black['url']; ?>" style="width:300px" alt="Mattia Baldi Studio"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <center><a class="nav-link" href="works">WORKS</a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="#">MOVING</a></center>
                        </li>
                        <li class="nav-item active">
                            <center><a class="nav-link" href="contact">CONTACT</a></center>
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
        </div></div>
        
        <!--placeholder div to prevent jumpy content when nav gets pinned-->
        <div style="padding:2em;" data-0="display:none;" data-top-top="display:block;" data-anchor-target="#nav" data-edge-strategy="set">&nbsp;</div>
        
        <!-- Contact Contents -->
        <div class="container" style="margin-bottom:50px"><div class="row">
            <!--profile picture-->
            <div class="col-md-5">
                <img src="<?php echo $profile_pic['url']; ?>" width="300">
            </div>
            <!--About-->
            <div class="col-lg-7" style="margin-top:30px">
                <p><?php echo $bio; ?></p>
            </div>
            <!--Contact-->
            <div class="col-md-8">
                <p style="color:grey"><?php echo $contact_description; ?></p>
                <p>Contact: <p class="btn-default btn-copy js-tooltip js-copy" data-toggle="tooltip" data-placement="bottom" data-copy="<?php echo $emailto; ?>" title="Copy to clipboard"><?php echo $emailto; ?></p></p>
            </div>
        </div></div><!--END ========= Contact Contents -->
        
        
        
        <footer>
            
            <!-- nav bar-->
            <div class="navbar-wrapper">
                <nav class="navbar navbar-expand-md navbar-dark navbar-inverse bg-dark" role="navigation" style="position:absolute; bottom:0px; width:100%;">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <center><a class="nav-link" href="home">HOME<span class="sr-only">HOME</span></a></center>
                        </li>
                        <li class="nav-item active">
                            <center><a class="nav-link" href="works">WORKS</a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="#">MOVING</a></center>
                        </li>
                        <li class="nav-item active">
                            <center><a class="nav-link" href="contact">CONTACT</a></center>
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
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/popper.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/dist/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
        <!-- Salvattore Content Layout-->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/salvattore.min.js"></script>
        <!--copy mail to clipboard-->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/copymail.js"></script>

<?php get_footer(); ?>