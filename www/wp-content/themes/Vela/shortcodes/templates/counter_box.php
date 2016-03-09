<?php 

	extract( shortcode_atts( array(
            'title' =>  '',
            'icon_set' => '',
            'icon' => '',
	        'icon_openiconic' => '',
	        'icon_typicons' => '',
	        'icon_entypoicons' => '',
	        'icon_linecons' => '',
	        'icon_entypo' => '',
            'start' => '0',
            'value' => '100',
            'animation' =>  '',
            'animation_delay' =>  0,
            'el_class' =>  '',
    ), $atts ) );


    $attrs = array();

    $classes = array();

    $classes[] = 'counter-box';

    if( !empty($el_class) ){
        $classes[] = $el_class;
    }

	$attrs['class'] = implode(' ', $classes);

    if($animation) $attrs['data-animation'] = $animation;
    if($animation_delay) $attrs['data-animation-delay'] = floatval( $animation_delay );

    if( !empty($icon_set) ){
        vc_icon_element_fonts_enqueue( $icon_set );
        $icon = ${"icon_" . $icon_set};
    } 
?>
<div<?php echo wyde_get_attributes( $attrs ) ;?>>
    <p data-value="<?php echo esc_attr(  intval( $value ) );?>"><?php echo intval( $start );?></p>
    <?php if( !empty( $icon ) ):?>
    <span><i class="<?php echo esc_attr( $icon );?>"></i></span>
    <?php endif; ?>
    <?php if( !empty( $title ) ):?>
    <h4><?php echo esc_html( $title );?></h4>
    <?php endif; ?>
</div>