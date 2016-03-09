<?php

global $wyde_sidebar_position;
    
extract(shortcode_atts(array(
    'el_class'          => '',
    'alt_color'         => '',
    'alt_bg_color'      => '',
    'parallax'          => '',
    'background_overlay'   => '',
    'overlay_color'   => '',
    'full_width'        => '',
    'full_screen'        => '',
    'mask'        => '',
    'mask_style'        => '',
    'mask_color'        => '',
    'padding_size'      => '',
    'vertical_align'      => '',
    'css'            => '',
), $atts));
    

$attrs = array();

$classes = array();

if(is_single() || $this->settings('base')=='vc_row_inner'){
    $classes[] = 'row';
}else{
    $classes[] = 'section';
}

if( defined('ULTIMATE_VERSION') && ULTIMATE_VERSION ){ // required for vc ultimate add-ons row options
    $classes[] = 'wpb_row';
}
    
if(!empty($el_class)) $classes[] =  $el_class;
if(!empty($alt_color)) $classes[] = 'alt-color';    
if(!empty($alt_bg_color)) $classes[] = 'alt-background-color';    
if(!empty($padding_size)) $classes[] = $padding_size;    
if(!empty($parallax)) $classes[] = 'parallax';    
if(!empty($full_width)) $classes[] = 'full';    
if(!empty($full_screen)) $classes[] = 'fullscreen';    
if(!empty($vertical_align)) $classes[] = 'v-align v-'.$vertical_align;

$background_image = '';
if( !empty($css) ){
    preg_match_all('~\bbackground-image\s*:(.*?)\(\s*(\'|")?(?<image>.*?)\3?\s*\)~i', $css, $matches);
    if( $matches && isset($matches['image']) && isset($matches['image'][0]) ) {

        //Generate inline CSS   
        $styles = explode(';', wyde_get_inline_css($css) );
        for ($i = 0; $i < count($styles); $i++) {
                if ( strrpos($styles[$i], 'url') !== false ) {
		        unset( $styles[$i] );
	        }
        }

        $attrs['style'] = implode(';', $styles);

        $background_image = sprintf('<div class="bg-image" style="background-image:url(%s);"></div>', $matches['image'][0]);
            
    }else{
        $classes[] = vc_shortcode_custom_css_class( $css, '' );
    }
}

$attrs['class'] = implode(' ', $classes);

$overlay = '';
if($background_overlay){
    if($background_overlay == 'pattern'){
        $overlay = '<div class="section-overlay pattern-overlay"></div>';
    }else{
        $overlay = sprintf('<div class="section-overlay"%s></div>', (!empty($overlay_color)?' style="background-color:'.esc_attr( $overlay_color ).';"':''));
    }
}

$mask_shape = '';
if(!empty($mask)){
    $mask_left = intval($mask_style);
    $mask_right = 100 - $mask_left;
    $mask_shape = sprintf('<span class="mask mask-%s" style="border-color:%s;border-left-width:%svw;border-right-width:%svw;"></span>', esc_attr( $mask ), esc_attr( $mask_color ), esc_attr( $mask_left ), esc_attr( $mask_right ));  
} 


if(is_single() || ($wyde_sidebar_position && $wyde_sidebar_position != '0') || $this->settings('base')=='vc_row_inner'){
    $output =  sprintf('<div%s><div class="bg-wrapper">%s%s</div>%s%s</div>', wyde_get_attributes( $attrs ), $background_image, $overlay, wpb_js_remove_wpautop($content), $mask_shape);  
}else{
    if($full_screen)
        $output = sprintf('<section%s><div class="bg-wrapper">%s%s</div><div class="container"><div class="row"><div class="row-inner">%s</div></div></div>%s</section>', wyde_get_attributes( $attrs ), $background_image, $overlay, wpb_js_remove_wpautop($content), $mask_shape);  
    else
        $output = sprintf('<section%s><div class="bg-wrapper">%s%s</div><div class="container"><div class="row">%s</div></div>%s</section>', wyde_get_attributes( $attrs ), $background_image, $overlay, wpb_js_remove_wpautop($content), $mask_shape);  
}
echo $output;