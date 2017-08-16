<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen-Child
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <div class="cf">
            <section class="bgimg2 section2">
                <div>
                    <div id="dot" class="center">
                        <div class="text">
                            <h2 class="bluetxt">Welcome to My Website!</h2>
                            <h3>
                                <p>
                                    My name is Patricia and I am a Web Developer.<br>
                                    I have completed <a href="http://techtalentsouth.com/#code-immersion-program" class="custom">Full-time Code Immersion.</a><br>
                                    I have completed <a href="https://generalassemb.ly/education/web-design-circuit" class="custom">Web Design Circuit.</a><br>
                                    I am passionate about Web Development and Design.
                                </p>
                                <p class="cont">
                                    I have a bachelor's degree in Computer Science<br> and am completing my master's degree in <br>
                                    <a href="http://appliedtech.iit.edu/information-technology-and-management/specializations/web-design-and-application-development">
                                        Information Technology at the Illinois Institute of Technology.</a><br>
                                    I have completed Web Design <br>courses at DePaul, Richland College,<br>
                                    and General Assembly. I have<br>
                                    completed WordPress coursework <br>
                                    at Richland College and <a href="http://skillcrush.com">Skillcrush.</a><br>
                                    <a href="https://github.com/pkpatricia">Let me show you !!!!</a>
                                </p>
                            </h3>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="cf">
            <section>
                <div class="third centertext">
                    <i class="fa fa-th-list whitepicnolink"></i>
                    <h2 class="letterSpac bluetxt">Responsive</h2>
                    <p>I offer mobile first, responsive designs on all my websites.</p>
                </div>
                <div class="third centertext">
                    <i class="fa fa-bolt whitepicnolink"></i>
                    <h2 class="letterSpac bluetxt">Performant</h2>
                    <p>Your users won't wait for your page to load.  I will make sure they don't have to.</p>
                </div>
                <div class="third centertext">
                    <i class="fa fa-rocket whitepicnolink"></i>
                    <h2 class="letterSpac bluetxt">HTML5/CSS3</h2>
                    <p>I use the latest coding standards for HTML5 and CSS3.</p>
                </div>
            </section>
        </div>

        <div class="cf">
            <section class="section2">
                <div class="third centertext">
                    <h2 class="letterSpac bluetxt">Follow Me on Twitter!</h2>
                    <h1>
                        <a href="https://twitter.com/patkayparker">
                            <i class="twitter fa fa-twitter fa-5x"></i>
                        </a>
                    </h1>
                </div>
                <!--  <div class="third centertext">
				 <a href="http://twitter.com/patkayparker">
					  <i class="fa fa-twitter whitepic"></i>
				  </a>
				</div>  -->
                <div class="third centertext">
                    <h2 class="letterSpac bluetxt">Use Shopify!</h2>
                    <picture>
                        <a href="https://www.shopify.com/?ref=conjuncture-design" target="_blank">
                            <source media="(min-width: 600px)"
                                    srcset="images/shopify-partner.svg">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shopify-partner.svg" width="100%">
                        </a>
                    </picture>
                </div>
                <div class="third centertext">
                    <h2 class="letterSpac bluetxt">Hire Me for that!</h2>
                    <a class="widget ng-scope" ng-href="https://www.thumbtack.com/Patricia-Kay-Parker-Chicago-IL/service/2126961" target="_blank" href="https://www.thumbtack.com/Patricia-Kay-Parker-Chicago-IL/service/2126961">
                        <img style="height: 192px;width: 192px;" ng-src="https://static.thumbtackstatic.com/media/pages/profile/standard-widgets/pro-svg/white/2015.svg" src="https://static.thumbtackstatic.com/media/pages/profile/standard-widgets/pro-svg/white/2015.svg">
                    </a>
                    <script src="<?php echo get_stylesheet_directory_uri();?>https://www.thumbtack.com/profile/widgets/scripts/?service_id=T8sGZQbDzqZEUQ&widget_id=profile"></script>
                </div>
            </section>
        </div>

        <div class="cf">
            <section>
                <h2 class="letterSpac centertext">My Portfolio</h2>
                <div class="third centertext">
                    <picture>
                        <source media="(min-width: 600px)"
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/abstract_1024.jpg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/abstract_300.jpg" alt="My responsive images">
                    </picture>

                    <h2 class="letterSpac">Ipsum feugiat et dolor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos cumque recusandae, fugit et! Quaerat porro quisquam ut nesciunt odit tempora possimus sit explicabo sint vel saepe voluptate, recusandae quos eveniet.</p>
                    <div class="centertext">
                        <a href=""><button class="class button2 center custom"><i class="fa fa-star-half-o"></i>Find Out More</button></a>
                    </div>
                </div>
                <div class="third centertext">
                    <picture>
                        <source media="(min-width: 600px)"
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/abstract_1024.jpg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/abstract_300.jpg" alt="My responsive images">
                    </picture>
                    <h2 class="letterSpac">Sed etiam lorem nulla</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit sit ullam quibusdam facilis minus dolor similique quisquam pariatur natus delectus itaque nemo, totam, dolorem ipsam asperiores obcaecati doloribus quidem.</p>
                    <div class="centertext">
                        <a href=""><button class="class button2 center custom"><i class="fa fa-star-half-o"></i>Find Out More</button></a>
                    </div>
                </div>
                <div class="third centertext">
                    <picture>
                        <source media="(min-width: 600px)"
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/abstract_1024.jpg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/abstract_300.jpg" alt="My responsive images">
                    </picture>
                    <h2 class="letterSpac">Consequat et tempus</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, ipsa, deserunt. Cupiditate incidunt quas doloribus deserunt! Soluta nostrum iusto illo itaque incidunt odio beatae necessitatibus dicta neque, accusamus, ab quae.</p>
                    <div class="centertext">
                        <a href=""><button class="class button2 center custom"><i class="fa fa-star-half-o"></i>Find Out More</button></a>
                    </div>
                </div>
            </section>
        </div>

        <div class="cf">
            <section class="section2">
                <h2 class="centertext letterSpac">The Blog</h2>
                <article class="double centertext">
                    <picture>
                        <source media="(min-width: 600px)"
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/abstract_1024.jpg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/abstract_300.jpg"
                             alt="My responsive images">
                    </picture>
                    <h2 class="letterSpac">Magna tempus consequat lorem</h2>
                    <p>Posted 45 minutes ago</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit reprehenderit, officia. Accusamus minus eos adipisci magni facere. Placeat harum magni dignissimos repellendus, eveniet nulla aliquam pariatur necessitatibus, nam enim fugiat?</p>
                    <div class="centertext">
                        <a href=""><button class="class button2 center custom"><i class="fa fa-file-text"></i>Continue Reading</button></a>
                    </div>
                </article>
                <article class="double centertext">
                    <picture>
                        <source media="(min-width: 600px)"
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/abstract_1024.jpg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/abstract_300.jpg"
                             alt="My responsive images">
                    </picture>
                    <h2 class="letterSpac">Aptent veroeros et aliquam</h2>
                    <p>Posted 45 minutes ago</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde fuga, omnis inventore nemo odit consequuntur quis voluptatem deserunt quos laudantium quia ullam ea quam, cum illum veritatis quasi minima aut!</p>
                    <div class="centertext">
                        <a href=""><button class="class button2 center custom"><i class="fa fa-file-text"></i>Continue Reading</button></a>
                    </div>
                </article>
            </section>
        </div>

        <div class="cf">
            <section>
                <div class="third centertext">
                    <h2 class="letterSpac bluetxt">Email Me</h2>
                    <a href="<?php get_userdata( $user_email ); ?>mailto:pk.patricia@gmail.com?Subject=Hello%20again"><i class="fa fa-at whitepic"></i>
                    </a>
                </div>

                <div class="third centertext">
                    <h2 class="letterSpac bluetxt">My GitHub</h2>
                    <a href="<?php get_stylesheet_directory_uri(); ?>https://github.com/pkpatricia"><i class="fa fa-github whitepic"></i></a>
                </div>

                <div class="third centertext">
                    <h2 class="letterSpac bluetxt">My Resume</h2>
                    <a href="<?php echo wp_get_attachment_url(157); ?>"><i class="fa fa-file-pdf-o whitepic"></i></a>
                </div>

            </section>
        </div>

        <div class="cf">
        <section>
        <h2 class="centertext">Social Media Links!</h2>
            <div class="double">
                <a href="http://twitter.com/patkayparker"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/twitter.png" alt='Twitter Logo'></a>
                <h2 class="centertext">Follow Me !!!</h2>
            </div>
            <div class="double">
                <a href="http://github.com/pkpatricia"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/github.png" alt='Github Logo'></a>
                <h2 class="centertext">On Github !!!</h2>
            </div>
        </div>
        </section>
    </main><!-- #main -->
</div><!-- #primary -->

<?php // Show the selected frontpage content.
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/page/content', 'front-page' );
		endwhile;
	else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
		get_template_part( 'template-parts/post/content', 'none' );
	endif; ?>
<?php
	// Get each of our panels and show the post data.
	if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.
        /**
		 * Filter number of front page sections in Twenty Seventeen.
		 *
		 * @since Twenty Seventeen 1.0
		 *
		 * @param $num_sections integer
		 */
		$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
		global $twentyseventeencounter;
        // Create a setting and control for each of the sections available in the theme.
		for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
			$twentyseventeencounter = $i;
			twentyseventeen_front_page_section( null, $i );
		}
    endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>
<?php get_footer(); ?>
