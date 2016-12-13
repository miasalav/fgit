<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();
?>
<div class="wrapper" id="404-wrapper">

	<div class="container" id="content">

					
						<div class="row flex-items-xs-center section-container">
						<div class="col-md-10 page-content page-intro">
							<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.',
							'understrap' ); ?></h1>

							<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
							'understrap' ); ?></p>
							<div class="col-md-5">
							<?php get_search_form(); ?>
							</div>

							<div class="row section-container">
							<div class="col-md-6">
								<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
								<?php if ( understrap_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
									
									
										<div class="widget widget_categories">							
												<h2 class="widget-title"><?php _e( 'Most Used Categories', 'understrap' ); ?></h2>

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
												</ul>

											</div><!-- .widget -->

										<?php endif; ?>
									</div>
									<div class="col-md-6">
									
											<?php
											/* translators: %1$s: smiley */
											$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s',
											'understrap' ), convert_smilies( ':)' ) ) . '</p>';
											the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
											?>

											<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
									</div>

						</div><!--end row-->
					 </div>
					</div><!--end row-->


	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
