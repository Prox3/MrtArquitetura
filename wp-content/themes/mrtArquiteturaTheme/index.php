<?php get_header(); ?>
<div id="container" class="shadowBoxBlack">
    <div id="content">
        <div>
            <h1 class="capitalize">
                <span class="listItemTitulo">//</span> Dicas e Notícias
            </h1>  
            
            <?php 
						query_posts( array( 'cat' => 10, 'orderby' => 'date', 'order' => 'DESC' ) );
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
										$(t).attr("width", "211").attr("height","159");
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
<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-15461352-1']);
		_gaq.push(['_trackPageview']);

		(function () {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

</script>
<?php get_footer(); ?>