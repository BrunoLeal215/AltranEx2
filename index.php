<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', false);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );

?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AltranEx2</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all" />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="js/menu.js"></script>
      </head>
    <body class="container-fluid">
        <?php include_once('Template/TopMenu.php'); ?>
        
        <section id='imgGrande'>
            <img alt="conteudo" src="images/middlegrande.png"/>
        </section>
        <section id='imgMedia'>
            <img alt="conteudo" src="images/middle (1).png"/>
            <img alt="conteudo" src="images/middle (3).png"/>        
        </section>
        
        <section id='imgMedia1'>
            <img alt="conteudo" src="images/middle (2).png"/>
            <img alt="conteudo" src="images/middle (4).png"/>
        </section>
        
        <section id="wordpress">
            <?php
                $args = array('post_type' => 'conteudo');
                $query = new WP_Query($args);
                while($query -> have_posts()) : $query -> the_post();
            ?>

            <h5><?php the_title(); ?></a></h5>
            <ul>
                <li><strong>Nome:</strong> 
                    <?php echo(types_render_field( "novo-conteudo", array( 'raw' => true) )); ?></li>
            </ul>

            <?php endwhile; ?>
        </section>
        
        <footer id='rodape'>
            <?php include_once('Template/BottomMenu.php'); ?>
        </footer>
        
    </body>
</html>
