<?php

// Add Shortcode
function img_shortcode( $atts , $content = null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'width' => '',
            'height' => '',
        ),
        $atts,
        'img'
    );
    $template = 'Kuchen ';
    $template .= <<<EOT
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img src="http://lorempixel.com/output/city-q-c-640-480-8.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="http://lorempixel.com/output/city-q-c-640-480-8.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="http://lorempixel.com/output/city-q-c-640-480-8.jpg" alt="Third slide">
    </div>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
EOT;



    // Return image HTML code
    return $template;

}
add_shortcode( 'img', 'img_shortcode' );