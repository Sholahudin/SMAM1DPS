<?php

function list_post_shortcode( $atts ) {
    ob_start();

    // define attributes and their defaults
    extract( shortcode_atts( array (
        'type' => 'post',
        'order' => 'date',
        'orderby' => 'ASC',
        'posts' => -1,
        'category' => '',
        'taxname' => '',
        'taxfield' => 'slug',
        'taxterms' => '',
        'term_second' => ''
    ), $atts ) );

    $tax_query = array('relation' => 'OR');
    if( $taxterms != '' ){
        $tax_query[] = array(
            'taxonomy' => $taxname,
            'field'    => $taxfield,
            'terms'    => $taxterms,
        );
    }
    if( $term_second != '' ){
        $tax_query[] = array(
            'taxonomy' => $taxname,
            'field'    => $taxfield,
            'terms'    => $term_second,
        );
    }

    // define query parameters based on attributes
    $args = array(
        'post_type' => $type,
        'order' => $order,
        'orderby' => $orderby,
        'posts_per_page' => $posts,
        'category_name' => $category,
        'tax_query' => $tax_query
    );
    $listQuery = new WP_Query( $args );
    // run the loop based on the query
    if ( $listQuery->have_posts() ) { ?>
        <ul class="list-post">
        <?php 
            while( $listQuery->have_posts() ) : $listQuery->the_post(); ?>
                <li>
                    <div class="wrap-image">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <div class="wrap-content">
                        <p class="date-post"><?php the_date() ?></p>
                        <h2><?php the_title() ?></h2>
                        <p><?php the_excerpt() ?></p>
                    </div>
                </li>
            <?php endwhile;
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
        </ul>
    <?php
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode( 'list_post', 'list_post_shortcode' );

function list_program_shortcode( $atts ) {
    ob_start();

    // define attributes and their defaults
    extract( shortcode_atts( array (
        'post_type' => 'program_sekolah',
        'order' => 'date',
        'orderby' => 'ASC',
        'posts' => -1,
    ), $atts ) );

    // define query parameters based on attributes
    $args = array(
        'post_type' => $post_type,
        'order' => $order,
        'orderby' => $orderby,
        'posts_per_page' => $posts,
    );
    $listQuery = new WP_Query( $args );
    // run the loop based on the query
    if ( $listQuery->have_posts() ) { ?>
        <ul class="list-program">
        <?php 
            while( $listQuery->have_posts() ) : $listQuery->the_post();
            $photo = get_field( "foto" );
            ?>
                <li>
                    <figure class="wrap-image">
                        <img src="<?php echo $photo['url'] ?>" alt="">
						<figcaption>
							<h2><?php the_title() ?></h2>
						</figcaption>
					</figure>
                </li>
            <?php endwhile;
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
        </ul>
    <?php
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode( 'list_program', 'list_program_shortcode' );

function list_pegawai_shortcode( $atts ) {
    ob_start();

    // define attributes and their defaults
    extract( shortcode_atts( array (
        'post_type' => 'employee',
        'order' => 'date',
        'orderby' => 'ASC',
        'posts' => -1,
    ), $atts ) );

    // define query parameters based on attributes
    $args = array(
        'post_type' => $post_type,
        'order' => $order,
        'orderby' => $orderby,
        'posts_per_page' => $posts,
    );
    $listQuery = new WP_Query( $args );
    // run the loop based on the query
    if ( $listQuery->have_posts() ) { ?>
        <ul class="list-pegawai">
        <?php 
            while( $listQuery->have_posts() ) : $listQuery->the_post();
            $photo = get_field( "foto" );
            $nik = get_field( "nik" );
            $nip = get_field( "nip" );
            $nuptk = get_field( "nuptk" );
            $jenis_kelamin = get_field( "jenis_kelamin" );
            $tempat_lahir = get_field( "tempat_lahir" );
            $tanggal_lahir = get_field( "tanggal_lahir" );
            $agama = get_field( "agama" );
            $pendidikan = get_field( "pendidikan" );
            $jurusan = get_field( "jurusan" );
            $status = get_field( "status" );
            $jenis_gtk = get_field( "jenis_gtk" );
            $alamat = get_field( "alamat" );
            $telepon = get_field( "telepon" );
            $email = get_field( "email" );
            ?>
                <li>
                    <figure class="wrap-image">
                        <div class="bubble">
                            <img src="<?php echo $photo['url'] ?>" alt="">
                        </div>
                        <div class="primary-text">
                            <h2><?php the_title() ?></h2>
                            <p><?php echo $jenis_gtk ?></p>
                        </div>
					</figure>
                    <figcaption>
                        <div class="secondary-text">
                            <ul>
                                <li>
                                    <i class="ion ion-ios-school"></i>
                                    <span><?php echo $pendidikan ?></span>
                                </li>
                                <li>
                                    <i class="ion ion-ios-calendar"></i>
                                    <span><?php echo $tempat_lahir ?>, <?php echo $tanggal_lahir ?></span>
                                </li>
                                <li>
                                    <i class="ion ion-ios-mail"></i>
                                    <p><?php echo $email ?></p>
                                </li>
                                <li>
                                    <i class="ion ion-ios-call"></i>
                                    <span><?php echo $telepon ?></span>
                                </li>
                                <li>
                                    <i class="ion ion-ios-pin"></i>
                                    <span><?php echo $alamat ?></span>
                                </li>
                            </ul>
                        </div>
                    </figcaption>
                </li>
            <?php endwhile;
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
        </ul>
    <?php
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode( 'list_pegawai', 'list_pegawai_shortcode' );

function add_theme_scripts() {
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/assets/css/my-style/my-style.css');
    wp_enqueue_style('ionicons', 'https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css');

    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/my-script/script.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>