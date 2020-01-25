<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package hashtag
 */

get_header();
?>

<head>
<style>
body{
	background-color: black;
}
.site-header{
	font-size: x-large;
	font-wieght: bold;
}
h1,p { 
	color: white;
}
.page-content{
	padding-top: 100px;
	padding-bottom: 250px;	
	padding-left: 30%;
	text-align: center;
}
.page-title{
	text-align: center;
	padding-left: 30%;
}
.search-form{
	text-align: center;
}
.image {
    position: relative;
    top: 10%;
    left: 10%;
    margin:-60px 0 0 -60px;
    -webkit-animation:spin 4s linear infinite;
    -moz-animation:spin 4s linear infinite;
    animation:spin 4s linear infinite;
}
</style>
</head>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Error Message: 404', 'hashtag' ); ?></h1>
				</header><!-- .page-header -->
				
				<div class="page-content">
				<img class="image" src= "/aaumiller66/wordpress/wp-content/themes/hashtag/assets/nothing.jpeg">
				<br>
				<br>
				<br>
					<p><?php esc_html_e( 'Nothing was found at this location. Try searching below.', 'hashtag' ); ?></p>
						
					<?php
					get_search_form();

					// the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<!-- <div class="widget widget_categories"> -->
						<!-- <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'hashtag' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul> -->
					<!-- </div>.widget -->

					<?php
					/* translators: %1$s: smiley */
					// $hashtag_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'hashtag' ), convert_smilies( ':)' ) ) . '</p>';
					// the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$hashtag_archive_content" );

					// the_widget( 'WP_Widget_Tag_Cloud' );
					// ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
