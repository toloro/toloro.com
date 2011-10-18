<!-- Header. -->
<div id="header">

    <div id="header-inside">
    
        <div id="header-inside-left">
            
            <?php if ($logo): ?>
            <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
            <?php endif; ?>
     
            <?php if ($site_name || $site_slogan): ?>
            <div class="clearfix">
            <?php if ($site_name): ?>
            <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
            <?php endif; ?>
            
          <!-- Header Menu. -->
          <div id="header-menu">

            <div id="header-menu-inside">
                <?php 
              $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
              print drupal_render($main_menu_tree);
              ?>
            </div><!-- EOF: #header-menu-inside -->

          </div><!-- EOF: #header-menu -->
            
            
            
            <?php if ($site_slogan): ?>
            <span id="slogan"><?php print $site_slogan; ?></span>
            <?php endif; ?>
            </div><!-- /site-name-wrapper -->
            
            
            

            
            
            
            
            
            
            
            <?php endif; ?>
            
        </div>
            
        <div id="header-inside-right">
          

          
          
          <?php print render($page['search_area']); ?>    
        </div>
    
    </div><!-- EOF: #header-inside -->

</div><!-- EOF: #header -->

<!-- Header Menu. -->
<!--<div id="header-menu"> -->

<!--<div id="header-menu-inside"> -->
    <?php 
	/*$main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
	print drupal_render($main_menu_tree);*/
	?>
<!--</div><!-- EOF: #header-menu-inside -->

<!-- </div> --><!-- EOF: #header-menu -->

<!-- Banner. -->
<div id="banner">

	<?php print render($page['banner']); ?>
	
    <?php if (theme_get_setting('slideshow_display','corporateclean')): ?>
    
    <?php if ($is_front): ?>
    
  <div id="slideshow-title">
 
  </div>
    <!--slideshow-->
    <div id="slideshow">
      
        <!--slider-item-->
        <div class="slider-item">
            <div class="content">
                
                <!--slider-item content-->
                <div style="padding:0 30px 0 0;">
                <!--<img height="250px" class="masked" src="<?php /*print base_path() . drupal_get_path('theme', 'corporateclean') ;*/?>/mockup/slide-1.jpg"/> -->
                  <a href="/content/lincoln-school-pta">
                  <img height="250px"  class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/lincolnschoolpta.png"/>
                  </a>
                </div>
               <a href="/content/lincoln-school-pta">Lincoln School PTA</a>

                <!--This website is built on Drupal 6 and includes Views, CCK, forums, etc.-->
                <!--<div style="display:block; padding:30px 0 10px 0;"><a class="more" href="#">Tell me more</a></div>-->
                <!--EOF:slider-item content-->
                
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content">
                <!--slider-item content-->
                <div style="padding:0 0 0 30px;">
                <a href="/content/digital-broadcasting-group">
                <img height="250px" class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/dbg.png"/>
                </a>
                </div>
                <a href="/content/digital-broadcasting-group">Digital Broadcasting Group</a>
                
                <!--migrating their current Flash website to a beta website built on Drupal 7 as phase 1 of a mulitphase redesign of their website.
                The projected included Drupal 7, Views, Panels, custom CSS, social software and SEO.-->
                <!--<div style="display:block; padding:30px 0 10px 0;"><a class="more" href="#">Tell me more</a></div>-->
                <!--EOF:slider-item content-->
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content">
            
                <!--slider-item content-->
                <div style="padding:0 30px 0 0;">
                <!--<img height="250px" class="masked" src="<?php /*print base_path() . drupal_get_path('theme', 'corporateclean') ;*/?>/mockup/slide-1.jpg"/> -->
                <a href="/content/writers-network">
                <img height="250px"  class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/TheWritersNetwork_crop.png"/>
                </a>
                </div>
                <a href="/content/writers-network">The Writers Network</a>

                <!--Drupal specialist for main framework of articles publishing site.--> 
                <!--<div style="display:block; padding:30px 0 10px 0;"><a class="more" href="#">Tell me more</a></div>-->
                <!--EOF:slider-item content-->
            
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content">
            
                <!--slider-item content-->
                <div style="padding:0 0 0 30px;">
                <a href="/content/adidas-moves-pulse">
                <img height="250px" class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/adidasMovesPulse_crop.png"/>
                </a>
                </div>
                <a href="/content/adidas-moves-pulse">Adidas moves pulse</a>

                <!--Created Phase 1 upload and voting Drupal site to promote adidas Moves Pulse for teenagers.-->
                <!--<div style="display:block; padding:30px 0 10px 0;"><a class="more" href="#">Tell me more</a></div>-->
                <!--EOF:slider-item content-->
            
            </div>
        </div>
        <!--EOF:slider-item-->        
        
         <!--slider-item-->
        <div class="slider-item">
            <div class="content">
            
                <!--slider-item content-->
                
                <div style="padding:0 30px 0 0;">
                <!--<img height="250px" class="masked" src="<?php /*print base_path() . drupal_get_path('theme', 'corporateclean') ;*/?>/mockup/slide-1.jpg"/> -->
                <a href="/content/innovative-credit-consultants">  
                <img height="250px"  class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/InnovativeCreditConsultants_740px.png"/>
                </a>
                </div>
                <a href="/content/innovative-credit-consultants">Innovative Credit Consultants</a>
                
                
                <!--Innovative Credit Repair - an ethical credit repair company, customers only pay for results - includes a Drupal Knowledge Center. Design by Danny Glix/Colorfury.-->
                <!--<div style="display:block; padding:30px 0 10px 0;"><a class="more" href="#">Tell me more</a></div>-->
                <!--EOF:slider-item content-->
            
            </div>
        </div>
        <!--EOF:slider-item-->
        
                <!--slider-item-->
        <div class="slider-item">
            <div class="content">
            
                <!--slider-item content-->
                <div style="padding:0 0 0 30px;">
                <a href="/content/unitarian-universalist-congregation-palisades">  
                <img height="250px" class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/images/uucpalisades.png"/>
                </a>
                </div>          
                <a href="/content/unitarian-universalist-congregation-palisades">Unitarian Universalist Congregation of the Palisades</a>

                <!--Unitarian Universalist Congregation of the Palisades is an intentionally diverse, anti-racist, welcoming community of faith. 
                We believe that love, truth, and compassion are common needs that unify all people regardless of race, sex, gender expression, sexuality or religion.-->
                <!--<div style="display:block; padding:30px 0 10px 0;"><a class="more" href="#">Tell me more</a></div>-->
                <!--EOF:slider-item content-->
            
            </div>
        </div>
        <!--EOF:slider-item-->        
        
        
        <!--slider-item-->
        <!--<div class="slider-item">-->
            <!--<div class="content">-->
                
                <!--slider-item content-->
                <!--<img height="250px" class="masked" src="<?php /*print base_path() . drupal_get_path('theme', 'corporateclean') ;*/?>/mockup/slide-3.jpg"/>-->
                <!--EOF:slider-item content-->
            
            <!--</div>-->
        <!--</div>-->
        <!--EOF:slider-item-->
        
    
    </div>
    <!--EOF:slideshow-->
    
    <!--slider-controls-wrapper-->
    <div id="slider-controls-wrapper">
        <div id="slider-controls">
            <ul id="slider-navigation">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </div>
    <!--EOF:slider-controls-wrapper-->
    
    <?php endif; ?>
    
	<?php endif; ?>  

</div><!-- EOF: #banner -->


<!-- Content. -->
<div id="content">

    <div id="content-inside" class="inside">
    
        <div id="main">
            
            <?php if (theme_get_setting('breadcrumb_display','corporateclean')): print $breadcrumb; endif; ?>
            
            <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
       
            <?php if ($messages): ?>
            <div id="console" class="clearfix">
            <?php print $messages; ?>
            </div>
            <?php endif; ?>
     
            <?php if ($page['help']): ?>
            <div id="help">
            <?php print render($page['help']); ?>
            </div>
            <?php endif; ?>
            
            <?php if ($action_links): ?>
            <ul class="action-links">
            <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
            
			<?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1><?php print $title ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            
            <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
            
            <?php print render($page['content']); ?>
            
            <?php /*print $feed_icons;*/ ?><!-- deactivated tjs 2011 October 4-->
            
        </div><!-- EOF: #main -->
        
        <div id="sidebar">
             
            <?php print render($page['sidebar_first']); ?>

        </div><!-- EOF: #sidebar -->

    </div><!-- EOF: #content-inside -->

</div><!-- EOF: #content -->

<!-- Footer -->    
<div id="footer">

    <div id="footer-inside">
    
        <div class="footer-area first">
        <?php print render($page['footer_first']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area second">
        <?php print render($page['footer_second']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area third">
        <?php print render($page['footer_third']); ?>
        </div><!-- EOF: .footer-area -->
       
    </div><!-- EOF: #footer-inside -->

</div><!-- EOF: #footer -->

<!-- Footer -->    
<div id="footer-bottom">

    <div id="footer-bottom-inside">
    
    	<div id="footer-bottom-left">
        
        
            <!-- commentted out tjs 2011 Oct 4 -->
            <?php /*print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('secondary-menu', 'links', 'clearfix')))); */ ?>
            
            <?php print render($page['footer']); ?>
            
        </div>
        
        <div id="footer-bottom-right">
        
        	<?php print render($page['footer_bottom_right']); ?>
        
        </div><!-- EOF: #footer-bottom-right -->
       
    </div><!-- EOF: #footer-bottom-inside -->

</div><!-- EOF: #footer -->

