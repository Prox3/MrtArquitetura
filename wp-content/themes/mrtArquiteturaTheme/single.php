<?php get_header(); ?>
<?php setPostViews(get_the_ID()); ?>
<div id="container" class="shadowBoxBlack">
    <div id="content">
        <div>
            <h1>
                <span class="listItemTitulo">//</span> <?php echo get_the_title(); ?> 
            </h1>                      
            <div class="alturaminima">
            <?php 
				if ( have_posts() ) : 
					while ( have_posts() ) : the_post(); 
						the_content();
					endwhile; 
				endif;
			?>
            </div>
        </div>
        <div id="pagPost">
            <div id="postAntigos">
            	<?php previous_post('%', 'Postagens mais antigas', 'no'); 
					echo('
						<script type="text/javascript">
							$("#postAntigos a").removeAttr("width").removeAttr("height");
							$.map($("#postAntigos a"), function(t,index){
								$(t).attr("class", "linkBtnPost centralizarVertical");
							});
						</script>
					');
				?>
				<?php //previous_posts_link('postagens mais antigas') ?>
                <!--<a href="#" class="linkBtnPost centralizarVertical"></a>-->
            </div>
            <div id="postNovos">
            	<?php 
					next_post('%', 'Novas postagens', 'no');
					echo('
						<script type="text/javascript">
							$("#postNovos a").removeAttr("width").removeAttr("height");
							$.map($("#postNovos a"), function(t,index){
								$(t).attr("class", "linkBtnPost centralizarVertical");
							});
						</script>
					');
				?>
                <?php //next_posts_link('') ?>
                <!--<a href="#" class="linkBtnPost centralizarVertical"></a>-->
            </div>
        </div>
        <div id="facebook" class="fb-comments" data-href="<?php echo get_permalink($id); ?>" data-num-posts="30" data-width="705">
        </div>
    </div>
    
    <!--O código da sidebar ficava aqui-->
    <?php get_sidebar(); ?>
    <!--Fim o código da sidebar ficava aqui-->
</div>
<?php get_footer(); ?>