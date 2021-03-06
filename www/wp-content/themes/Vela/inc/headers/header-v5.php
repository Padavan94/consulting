<?php
    global $wyde_options;    
?>
<?php if (is_front_page()): ?>
<div class="header <?php echo pll_current_language(); ?>">
    <div class="container">
        <div class="mobile-nav-icon">
            <i class="fa fa-bars"></i>
        </div>            
        <span id="logo" class="logo">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pl-0">
                        <div class="col-md-6 pl-0">
                             <?php
                                if( isset( $wyde_options['logo_image']['url'] ) && !empty( $wyde_options['logo_image']['url'] )){
                                    
                                    $logo = $wyde_options['logo_image']['url'];
                                    $logo_retina =  $wyde_options['logo_image_retina']['url'];

                                    $sticky_logo =  $wyde_options['logo_image_sticky']['url']? $wyde_options['logo_image_sticky']['url']:$wyde_options['logo_image']['url'];
                                    $sticky_logo_retina = $wyde_options['logo_image_sticky_retina']['url']?$wyde_options['logo_image_sticky_retina']['url']:$wyde_options['logo_image_retina']['url'];

                                    $logo_height = intval( isset( $wyde_options['logo_dimensions']['height'] ) && !empty( $wyde_options['logo_dimensions']['height'] )? $wyde_options['logo_dimensions']['height']:'25');
                                    $sticky_logo_height = intval( isset( $wyde_options['logo_sticky_dimensions']['height'] ) && !empty( $wyde_options['logo_sticky_dimensions']['height'] )? $wyde_options['logo_sticky_dimensions']['height']:'16' );

                                    $logo_height = $logo_height . ( isset($wyde_options['logo_dimensions']['units']) && !empty($wyde_options['logo_dimensions']['units'])?$wyde_options['logo_dimensions']['units']:'px' ); 
                                    $sticky_logo_height = $sticky_logo_height . ( isset($wyde_options['logo_sticky_dimensions']['units']) && !empty($wyde_options['logo_sticky_dimensions']['units'])?$wyde_options['logo_sticky_dimensions']['units']:'px' ); 

                                ?>
                                <a href="<?php echo esc_url( home_url() ); ?>">
                                    <img class="normal-logo" src="<?php echo esc_url( $logo ); ?>"<?php echo $logo_retina? ' data-retina="'.esc_url( $logo_retina ).'"':'';?> alt="Logo" style="height: <?php echo esc_attr( $logo_height ); ?>;" />
                                    <img class="sticky-logo" src="<?php echo esc_url( $sticky_logo ); ?>"<?php echo $sticky_logo_retina? ' data-retina="'.esc_url( $sticky_logo_retina ).'"':'';?> alt="Logo" style="height: <?php echo esc_attr( $sticky_logo_height ); ?>;" />
                                </a>
                                <?php
                                }
                                ?>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-phones__inner mod-header">
                                <div>+38 (067) 334-56-89</div>
                                <div>+38 (096) 123-98-05</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 header__phones">
                        <div class="col-md-2">
                            <?php pll_the_languages(array('show_flags'=>1,'show_names'=>1, 'dropdown'=>1, 'display_names_as' => 'slug'));?>
                        </div>

                        <?php if(pll_current_language() === "ru"): ?>
                            <div class="col-md-4 contact"><a href="<?php echo get_site_url() ."/контакты" ?>">Контакты</a></div>
                            <div class="col-md-4 press"><a href="<?php echo get_site_url() ."/пресс-центр" ?>">Пресс-центр</a></div>
                        <?php endif ?>

                        <?php if(pll_current_language() === "en"): ?>
                            <div class="col-md-4 contact"><a href="<?php echo get_site_url() ."/contacts" ?>">Contacts</a></div>
                            <div class="col-md-4 press"><a href="<?php echo get_site_url() ."/press-center" ?>">Press center</a></div>
                        <?php endif ?>

                        <?php if(pll_current_language() === "uk"): ?>
                            <div class="col-md-4 contact"><a href="<?php echo get_site_url() ."/контакти" ?>">Контакти</a></div>
                            <div class="col-md-4 press"><a href="<?php echo get_site_url() ."/прес-центр" ?>">Прес-центр</a></div>
                        <?php endif ?>


                    </div>
                </div>
            </div>
        </span>
    </div>

</div>
<div class="super-wrap">
    <div class=" container">
        <?php ubermenu( 'main' , array( 'menu' => 33 ) ); ?>
    </div>
</div>
<?php endif ?>




<?php if(!is_front_page()): ?>
    <div class="header <?php echo pll_current_language(); ?>">
    <div class="container">
        <div class="mobile-nav-icon">
            <i class="fa fa-bars"></i>
        </div>            
        <span id="logo" class="logo">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pl-0">
                        <div class="col-md-6 pl-0">
                             <?php
                                if( isset( $wyde_options['logo_image']['url'] ) && !empty( $wyde_options['logo_image']['url'] )){
                                    
                                    $logo = $wyde_options['logo_image']['url'];
                                    $logo_retina =  $wyde_options['logo_image_retina']['url'];

                                    $sticky_logo =  $wyde_options['logo_image_sticky']['url']? $wyde_options['logo_image_sticky']['url']:$wyde_options['logo_image']['url'];
                                    $sticky_logo_retina = $wyde_options['logo_image_sticky_retina']['url']?$wyde_options['logo_image_sticky_retina']['url']:$wyde_options['logo_image_retina']['url'];

                                    $logo_height = intval( isset( $wyde_options['logo_dimensions']['height'] ) && !empty( $wyde_options['logo_dimensions']['height'] )? $wyde_options['logo_dimensions']['height']:'25');
                                    $sticky_logo_height = intval( isset( $wyde_options['logo_sticky_dimensions']['height'] ) && !empty( $wyde_options['logo_sticky_dimensions']['height'] )? $wyde_options['logo_sticky_dimensions']['height']:'16' );

                                    $logo_height = $logo_height . ( isset($wyde_options['logo_dimensions']['units']) && !empty($wyde_options['logo_dimensions']['units'])?$wyde_options['logo_dimensions']['units']:'px' ); 
                                    $sticky_logo_height = $sticky_logo_height . ( isset($wyde_options['logo_sticky_dimensions']['units']) && !empty($wyde_options['logo_sticky_dimensions']['units'])?$wyde_options['logo_sticky_dimensions']['units']:'px' ); 

                                ?>
                                <a href="<?php echo esc_url( home_url() ); ?>">
                                    <img class="normal-logo" src="<?php echo esc_url( $logo ); ?>"<?php echo $logo_retina? ' data-retina="'.esc_url( $logo_retina ).'"':'';?> alt="Logo" style="height: <?php echo esc_attr( $logo_height ); ?>;" />
                                    <img class="sticky-logo" src="<?php echo esc_url( $sticky_logo ); ?>"<?php echo $sticky_logo_retina? ' data-retina="'.esc_url( $sticky_logo_retina ).'"':'';?> alt="Logo" style="height: <?php echo esc_attr( $sticky_logo_height ); ?>;" />
                                </a>
                                <?php
                                }
                                ?>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-phones__inner mod-header">
                                <div>+38 (067) 334-56-89</div>
                                <div>+38 (096) 123-98-05</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 header__phones">
                        <div class="col-md-2">
                            <?php pll_the_languages(array('show_flags'=>1,'show_names'=>1, 'dropdown'=>1, 'display_names_as' => 'slug'));?>
                        </div>
                        <div class="col-md-4 contact"><a href="<?php echo get_site_url() ."/контакты" ?>">Контакты</a></div>
                        <div class="col-md-4 press"><a href="<?php echo get_site_url() ."/пресс-центр" ?>">Пресс-центр</a></div>
                    </div>
                </div>
            </div>
        </span>
    </div>

</div>


<div class="super-wrap">
    <div class=" container">
        <?php ubermenu( 'main' , array( 'menu' => 33 ) ); ?>
    </div>
</div>
<?php endif ?>
