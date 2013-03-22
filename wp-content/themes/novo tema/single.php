<?php 

/**
 * @package WordPress
 * @subpackage Shoppica
*/

get_header(); 
  
$data = get_option(OPTIONS);
$data = filter_mobile($data);

$breadcrumbs = get_post_meta($post->ID, 'cc_meta_post_breadcrumbs');
if(isset($breadcrumbs[0])) {
$breadcrumbs = $breadcrumbs[0];
}
$post_title = get_post_meta($post->ID, 'cc_meta_post_title');
if(isset($post_title[0])) {
$post_title = $post_title[0];
}
$post_slogan = get_post_meta($post->ID, 'cc_meta_post_slogan');
if(isset($post_slogan[0])) {
$post_slogan = $post_slogan[0];
}
$show_author = get_post_meta($post->ID, 'cc_meta_post_author');
if(isset($show_author[0])) {
$show_author = $show_author[0];
}
$show_featured = get_post_meta($post->ID, 'cc_meta_show_featured'); 
if(isset($show_featured[0])) {
$show_featured = $show_featured[0];
}
$sidebar_layout_single = get_post_meta($post->ID, 'cc_meta_sidebar_layout'); 
if(isset($sidebar_layout_single[0]) && $sidebar_layout_single[0] == '') {
  $sidebarlayout = $data['sidebar_layout'];
} else {
  $sidebarlayout = $sidebar_layout_single[0];
}
$leftsidebarid = get_post_meta($post->ID, 'cc_meta_left_sidebar'); 
if(isset($leftsidebarid[0])) {
$leftsidebarid = $leftsidebarid[0];
}
$rightsidebarid = get_post_meta($post->ID, 'cc_meta_right_sidebar'); 
if(isset($rightsidebarid[0])) {
$rightsidebarid = $rightsidebarid[0];
}

if($sidebarlayout == "sidebar-none") {
    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb-post-featured-full-nocols');
} else {
    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb-post-featured-full');
}
$preview = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post_preview');

?>


    <!-- ---------------------- -->
    <!--     I N T R O          -->
    <!-- ---------------------- -->
    <?php if($breadcrumbs != "false" || $post_title != "false" || $post_slogan != ""): ?>
    <section id="intro">
    <div id="intro_wrap">
      <div class="s_wrap">
        <?php if(isset($breadcrumbs) && $breadcrumbs != "false"): ?>
        <div id="breadcrumbs">
          <?php the_breadcrumb(); ?>
        </div>
        <?php endif; ?>
        <?php if(isset($post_title) && $post_title != "false"): ?>
        <h1><?php the_title(); ?></h1>
        <?php endif; ?>
        <?php if(isset($post_slogan) && !empty($post_slogan)): ?>
        <p class="s_slogan"><?php echo $post_slogan; ?></p>
        <?php endif; ?>
      </div>
    </div>
    </section>
    <?php endif; ?>
    <!-- end of intro -->

    
    <!-- ---------------------- -->
    <!--      C O N T E N T     -->
    <!-- ---------------------- -->
    <section id="content" class="s_wrap">
    
      <div id="post" class="s_main_col">
      
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post_<?php echo $post->ID; ?>" <?php post_class(); ?>>

          <?php if(has_post_thumbnail() && $show_featured == "true"): ?>
          <div class="s_media clearfix">
            <a class="s_thumb" href="<?php echo $preview[0]; ?>" rel="prettyPhoto">
              <img src="<?php echo $thumb[0]; ?>" alt="<?php echo the_title(); ?>" />
            </a>
          </div>
          <?php endif; ?>

          <div class="s_meta clearfix">
            <p class="s_date s_icon_20 s_single_color"><span class="s_icon s_date_16"></span><?php the_time('j'); ?> <?php the_time('M'); ?>, <?php  the_time('Y'); ?></p>
            <!--<p class="s_author s_icon_20 s_single_color"><span class="s_icon s_user_16"></span><?php _e('Author:', 'shoppica'); ?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author"><?php echo get_the_author(); ?></a></p>-->
            <?php if (get_the_tag_list()): ?>
            <div class="s_tags s_icon_20 s_single_color"><span class="s_icon s_tag_16"></span><?php echo get_the_tag_list( '', ', ' ); ?></div>
            <?php endif; ?>
            <!--<p class="s_comments s_icon_20 s_single_color"><span class="s_icon s_comments_16"></span><a href="<?php comments_link(); ?>"><?php  comments_number( __('no comments', 'shoppica'), __('one comment', 'shoppica'), __('% comments', 'shoppica') ); ?></a></p>-->
          </div>

          <div class="the-content" <?php post_class(); ?>>
            <?php if(isset($data['single_image']) && $data['single_image'] == "1"): $blog_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb-post-featured'); ?>
            <?php if(has_post_thumbnail()): ?>
            <div class="postImage">
              <img src="<?php echo $blog_thumb[0]; ?>" class="alignnone" alt="<?php echo the_title(); ?>" />
            </div>
            <?php endif; ?>
            <?php endif; ?>
            
            <div class="s_info_page entry-content"><?php the_content(); ?></div>
            <?php wp_link_pages( array( 'before' => '<div class="pagination"><strong class="s_label">' . __( 'Pages:', 'shoppica' ) . '</strong><div class="links">', 'after' => '</div></div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

            <?php if(isset($show_author[0]) && $show_author[0] == true): ?>
            <!--<div class="s_author_card s_box_2">
              <div class="s_thumb"><?php echo get_avatar(get_the_author_meta('ID'), 60); ?></div>
              <h3><?php _e('About', 'shoppica'); ?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author"><?php the_author_meta('display_name'); ?></a></h3>
              <p><?php echo the_author_meta('description'); ?></p>
              <a class="s_more s_main_color" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php _e('All posts by', 'shoppica'); ?> <?php the_author_meta('display_name'); ?> <?php _e('&rsaquo;', 'shoppica'); ?></a>
            </div>-->
            <?php endif; ?>
              
          </div>
        
        </article>
        
        <?php endwhile; endif; ?> 
      
        <?php //comments_template(); ?>
      
      </div>
      
      <?php left_sidebar($sidebarlayout, $leftsidebarid); ?>
      <?php right_sidebar($sidebarlayout, $rightsidebarid); ?>

      <?php wp_enqueue_style('prettyphoto_css', get_template_directory_uri() . '/js/prettyphoto/css/prettyPhoto.css', false, false, 'all'); ?>
      <?php wp_enqueue_script('prettyphoto_js', get_template_directory_uri() . '/js/prettyphoto/js/jquery.prettyPhoto.js', 'jquery', false, false); ?>
      <script type="text/javascript">
      jQuery(function($) {
        $("a[rel^='prettyPhoto']").prettyPhoto({
          theme: 'light_square',
          opacity: 0.5,
          social_tools: "",
          deeplinking: false
        });
      });
      </script>
    
    </section>
    <!-- end of content -->

<?php get_footer(); ?>
