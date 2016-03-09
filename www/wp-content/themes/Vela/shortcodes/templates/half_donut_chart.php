<?php
	extract( shortcode_atts( array(
            'title' => '',
            'value' => 80,
            'label_mode' => '',
            'label'  => '',
            'icon_set' => '',
            'icon' => '',
	        'icon_openiconic' => '',
	        'icon_typicons' => '',
	        'icon_entypoicons' => '',
	        'icon_linecons' => '',
	        'icon_entypo' => '',
            'style' => '',
            'bar_color'   => '',
            'bar_border_color'   => '',
            'fill_color'   => '',
            'start'   => '',
            'animation' =>  '',
            'animation_delay' =>  0,
            'el_class' =>  '',
            'css' =>  '',
    ), $atts ) );


    $attrs = array();

    $classes = array();

    $classes[] = 'half-donut-chart';

    if( !empty($el_class) ){
        $classes[] = $el_class;
    }

    if( !empty($css) ) $classes[] = vc_shortcode_custom_css_class( $css, '' );

	$attrs['class'] = implode(' ', $classes);

    if($animation) $attrs['data-animation'] = $animation;
    if($animation_delay) $attrs['data-animation-delay'] = floatval( $animation_delay );

    if( !empty($icon_set) ){
        vc_icon_element_fonts_enqueue( $icon_set );
        $icon = ${"icon_" . $icon_set};
    } 
?>
<div<?php echo wyde_get_attributes( $attrs );?>>
    <?php echo do_shortcode( sprintf('[donut_chart value="%s" label_mode="%s" label="%s" icon="%s" style="%s" bar_color="%s" bar_border_color="%s" fill_color="%s" start="%s" type="half"]',
            intval( $value ), 
            esc_attr( $label_mode ), 
            esc_attr( $label ), 
            esc_attr( $icon ), 
            esc_attr( $style ), 
            esc_attr( $bar_color ), 
            esc_attr( $bar_border_color ), 
            esc_attr( $fill_color ), 
            esc_attr( $start )
        ) );
    ?>
    <?php if( $title || $content): ?>
    <div class="chart-content">
    <?php if(!empty($title)) : ?> 
        <h3><?php echo esc_html( $title );?></h3>
    <?php endif; ?>
    <?php if(!empty($content)) :?>
    <?php echo wpb_js_remove_wpautop($content, true); ?>
    <?php endif; ?>
    </div>
    <?php endif; ?>
</div>