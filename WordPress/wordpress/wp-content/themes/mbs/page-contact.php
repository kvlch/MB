<?php
/**
 * The template Name: Contact Page
 * @package MBS
 */
 
 /*Custom Fields*/
 $nav_home				= get_post_meta(10,nav_home,true);
 $nav_works				= get_post_meta(10,nav_works,true);
 $nav_moving			= get_post_meta(10,nav_moving,true);
 $nav_contact			= get_post_meta(10,nav_contact,true);
$bio					= get_post_meta(14,bio,true);
$contact_description	= get_post_meta(14,contact_description,true);
$emailto				= get_post_meta(14,emailto,true);
$profile_pic			= get_field('profile_picture');
$logo_black	= get_field('logo_black');
  
get_header(); ?>

<!-- nav bar fixed top-->
        <div class="navbar-wrapper">
            <nav class="navbar navbar-dark navbar-inverse fixed-top" role="navigation" style="opacity:0.9; background-color:white;" >
                <a class="navbar-brand" href="home"><img src="<?php echo $logo_black['url']; ?>" alt="Mattia Baldi Studio" width="270px"></a>
                <i class="fa fa-bars fa-2x" style="color:lightgrey;" aria-hidden="true" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </i>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <center><a class="nav-link" href="photos-gallery" style="color:black; font-size:30px;"><?php echo $nav_works; ?></a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="moving" style="color:black; font-size:30px;"><?php echo $nav_moving; ?></a></center>
                        </li>
                        <li class="nav-item active">
                            <center><a class="nav-link" href="contact" style="color:black; font-size:30px;"><?php echo $nav_contact; ?></a></center>
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
        </div></div>
        
        <!--placeholder div to prevent jumpy content when nav gets pinned-->
        <div style="padding:2em;" data-0="display:none;" data-top-top="display:block;" data-anchor-target="#nav" data-edge-strategy="set">&nbsp;</div>
        
        <!-- Contact Contents -->
        <div class="container" style="margin-bottom:50px"><div class="row">
            <!--profile picture-->
            <div class="col-md-5">
				<?php if(!empty($profile_pic)) : ?>
					<img src="<?php echo $profile_pic['url']; ?>" width="300">
				<?php endif; ?>
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
                            <center><a class="nav-link" href="<?php echo $nav_home; ?>">HOME<span class="sr-only">HOME</span></a></center>
                        </li>
                        <li class="nav-item active">
                            <center><a class="nav-link" href="<?php echo $nav_works; ?>">WORKS</a></center>
                        </li>
                        <li class="nav-item">
                            <center><a class="nav-link" href="<?php echo $nav_moving; ?>">MOVING</a></center>
                        </li>
                        <li class="nav-item active">
                            <center><a class="nav-link" href="<?php echo $nav_contact; ?>">CONTACT</a></center>
                        </li>
                        
                    </ul>
                    <!--name on the footer-->
                    <p style = "color:white">&copy;2017 Mattia Baldi Studio</p>
                </nav>
            </div>
        </footer>

<?php get_footer(); ?>