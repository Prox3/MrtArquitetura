<?php get_header(); ?>
<div id="container" class="shadowBoxBlack">
    <div id="content">
        <div>
            <h1 class="capitalize">
                <span class="listItemTitulo">//</span> <?php  strtolower(the_title()); ?>
            </h1> 
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<p><?php the_content(); ?></p>
			<?php endwhile; endif;?>
				
		</div>                           
    </div>
    <!--O código da sidebar ficava aqui-->
    <?php get_sidebar(); ?>
    <!--Fim o código da sidebar ficava aqui-->
</div>
<?php get_footer(); ?>