<?php get_header(); ?>
<div id="container" class="shadowBoxBlack">
    <div id="content">
        <div>
            <h1 class="capitalize">
                <span class="listItemTitulo">// </span><?php strtolower(single_cat_title()); ?> 
            </h1>  
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="boxPost">
                    <a href="<?php the_permalink() ?>" class="linkBoxPost">
                        <div class="imgPost">
                            <?php 
							if ( has_post_thumbnail() ) {
							  the_post_thumbnail();
							  echo('
							  	<script type="text/javascript">
									$("#content .boxPost .imgPost img").removeAttr("width").removeAttr("height");
									$.map($("#content .boxPost .imgPost img"), function(t,index){
										$(t).attr("width", "100%").attr("height","100%");
									});
								</script>
							  ');
							} 
							else{
							?>
								<img src="<?php bloginfo( 'template_url' ) ?>/images/imgBoxPost.png" width="100%" height="100%" />
                            <?php
							}
							?>
                        </div>
                        <div class="descPost">
                            <p>
                            <?php the_title(); ?>
                            </p>
                        </div>
                        <div class="divisor"></div>
                        <div class="detalhesPost">
                            <div class="datePost">
                                <span><?php the_time('d/m/Y') ?></span>
                            </div>
                            <div class="visualizacaoPost">
                                <p>
                                    <span class="iconVisualizacao"></span>
                                    <span><?php echo getPostViews(get_the_ID()); ?></span>
                                </p>
                            </div>
                        </div> 
                    </a>                           
                </div>
			<?php endwhile?>
             
            <?php else: ?>
                 
            <?php endif; ?>
        </div>
        <div id="pagPost">
            <div id="postAntigos">
            	<?php previous_posts_link('postagens mais antigas') ?>
                <!--<a href="#" class="linkBtnPost centralizarVertical"></a>-->
            </div>
            <div id="postNovos">
                <?php next_posts_link('novas postagens') ?>
                <!--<a href="#" class="linkBtnPost centralizarVertical"></a>-->
            </div>
        </div>
    </div>
    
    <!--O código da sidebar ficava aqui-->
    <?php get_sidebar(); ?>
    <!--Fim o código da sidebar ficava aqui-->
</div>
<?php get_footer(); ?>