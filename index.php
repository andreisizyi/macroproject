<?php get_header(); ?>
<?php
//Выборка количество записей в зависимости от устройства
if(isMobileDevice()) :
	$postperpage = 10;
else :
	$postperpage = 10;
endif;
//Массив постов для загрузки одного следующего
$Query_clients_system = new WP_Query( array(
	'post_type'        => 'post', 
	'post_status'      => 'publish',
	'posts_per_page'   => 1,
	'category_name'   => 'ourprojects'
) );
$maxpages = $Query_clients_system->max_num_pages - $postperpage;
//Для обратного действия отступ			
$elements = $postperpage + 1;

//Массив текущих постов для заполнения
$current_posts = array();

//Массив текущих постов
$Query_clients = new WP_Query( array(
	'post_type'        => 'post', 
	'post_status'      => 'publish',
	'posts_per_page'   => $postperpage,
	'category_name'   => 'ourprojects'
));
?>
<div class="container-fluid main-honeycomb">
	<div class="row-honeycomb loop-portfolio-clients">
		<?php
			if ( $Query_clients->have_posts() ) {
				while ( $Query_clients->have_posts() ) { $Query_clients->the_post();
					echo '<div class="honeycomb"><a class="honeycomb-in" data-thumbnail="'.wp_get_attachment_image_url(get_post_thumbnail_id(), 'cover').'" href="'.get_permalink().'">';
					the_title();
					echo '</a></div>';
					array_push($current_posts, get_the_ID());
				}
			}
			else { echo('<p>Материалов нет.</p>'); }
				wp_reset_postdata();
				//echo implode(',', $current_posts);
			?>
	</div>
	<div class="navigation_clients">
		<?php if ( $Query_clients_system->max_num_pages > 1 ) { ?>
			<a class="a-btn btn-back-clients" data-param-posts='<?php echo serialize($Query_clients_system->query_vars); ?>' data-elements='<?php echo $elements ?>' data-other-posts='<?php echo implode(',', $current_posts) ?>' data-tpl='<?php echo $postperpage ?>' data-direction='left'
			data-page-number='1' data-page-max='<?php echo $maxpages ?>'>
			</a>
		<?php } ?>
		<?php if ( $Query_clients_system->max_num_pages > 1 ) { ?>
			<script> var this_page_logo = 1;</script>
			<a class="a-btn btn-next-clients visible-nav" data-param-posts='<?php echo serialize($Query_clients_system->query_vars); ?>' data-elements='<?php echo $elements?>' data-other-posts='<?php echo implode(',', $current_posts) ?>' data-tpl='<?php echo $postperpage ?>' data-direction='right'
			data-page-number='1' data-page-max='<?php echo $maxpages ?>'>
			</a>
		<?php } ?>
	</div>
</div>
<?php
wp_enqueue_script('honeycomb', get_stylesheet_directory_uri() .'/js/honeycomb.js', array('jquery') );
get_footer(); ?>