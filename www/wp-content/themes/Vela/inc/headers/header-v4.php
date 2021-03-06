<?php
    global $wyde_options;
    
?>
<div class="header-top">
    <div class="container">
        <div class="header-left">
            <?php
            if($wyde_options['top_bar_menu']=='1'){
            ?>
            <div class="top-nav dropdown-nav">
                <ul>
                <?php  wyde_menu('top', 5); ?>
                </ul>
            </div>
            <?php } ?>            
            <?php if($wyde_options['menu_social_icon']=='1'){ ?>
            <?php wyde_social_icons('bottom');?>        
            <?php } ?>
        </div>
        <div class="header-right">
            <?php
            if($wyde_options['top_bar_menu']=='2'){
            ?>
            <div class="top-nav dropdown-nav">
                <ul>
                <?php  wyde_menu('top', 5); ?>
                </ul>
            </div>
            <?php } ?>            
            <?php if($wyde_options['menu_social_icon']=='2'){ ?>
            <?php wyde_social_icons('bottom');?>        
            <?php } ?>
            <?php if($wyde_options['menu_shop_cart'] && function_exists('wyde_woocommerce_menu')){ ?>
            <ul id="shop-menu">
            <?php 
            echo wyde_woocommerce_menu(); 
            ?>
            </ul>
            <?php } ?>
            <?php if($wyde_options['menu_search_icon']){ ?>
            <div id="search">
                <?php get_template_part('/inc/ajax-search');?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="header">
    <div class="container">
        <div class="mobile-nav-icon">
            <i class="fa fa-bars"></i>
        </div>            
        <span id="logo">
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
        </span>
        <div class="nav-wrapper">
            <nav id="nav" class="nav <?php echo wp_is_mobile()?'mobile-nav':'dropdown-nav'?>">
                <ul class="menu">
                    <?php wyde_primary_menu(); ?>
                </ul>
            </nav>
        </div>
    </div>
</div>