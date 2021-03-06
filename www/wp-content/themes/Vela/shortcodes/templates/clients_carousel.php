<?php
	
	extract( shortcode_atts( array(
        'title' => '',
        'image_size' => 'thumbnail',
	    'images' => array(),
        'auto_play' => '',
        'auto_height' => '',
        'visible_items' => 1,
        'loop' => '',
        'show_navigation' => '',
        'show_pagination' => '',
        'animation' =>  '',
        'animation_delay' =>  0,
        'el_class' =>  '',
    ), $atts ) );


    $attrs = array();

    $classes = array();

    $classes[] = 'clients-carousel';

    if( !empty($el_class) ){
        $classes[] = $el_class;
    }

	$attrs['class'] = implode(' ', $classes);

    if($animation) $attrs['data-animation'] = $animation;
    if($animation_delay) $attrs['data-animation-delay'] = floatval( $animation_delay );

    $slider_attrs = array();

    $slider_attrs['class'] = 'owl-carousel';

    $slider_attrs['data-items'] =  intval( $visible_items );
    $slider_attrs['data-auto-play'] = ($auto_play == 'true' ? 'true':'false');
    $slider_attrs['data-auto-height'] = ($auto_height == 'true' ? 'true':'false');
    $slider_attrs['data-navigation'] = ($show_navigation == 'true'?  'true':'false');
    $slider_attrs['data-pagination'] = ($show_pagination == 'true' ? 'true':'false');
    $slider_attrs['data-loop'] = ($loop == 'true' ? 'true':'false');
    $slider_attrs['data-item-margin'] = 5;

    $images = explode(',', $images );

?>
<div<?php echo wyde_get_attributes( $attrs ); ?>>
    <?php if(!empty($title)) : ?> 
    <div class="content-header">
        <h2><?php echo esc_html( $title ); ?></h2>
    </div>
    <?php endif; ?>
    <div<?php echo wyde_get_attributes( $slider_attrs );?>>
    <?php foreach ($images as $image_id ){ ?>
        <div>
        <?php $image_attrs = wp_get_attachment_image_src($image_id, $image_size); ?>
        <?php if($image_attrs[0]) :?>
            <img src="<?php echo esc_url( $image_attrs[0] ); ?>" alt="<?php esc_attr( $title ); ?>" />
        <?php endif; ?>
        </div>
    <?php } ?>
    </div>
</div>