<?php get_header(); ?>
<?php setPostViews(get_the_ID()); ?>
<div id="container" class="shadowBoxBlack" style="margin-top:50px;">
    <div id="content">
    <div id="subMenu">
        <div id="backgroundSubMenu" style="width: 707px; position:absolute">
        </div>
        <div>
            <div id="menuSubMenu" style="width: 707px; position:absolute">             
                <?php
                    wp_nav_menu( array('menu' => 'Sub Menu Header', 'container' => '')); 						 	
                    echo('
                    <script type="text/javascript">
                        function removeAcento(strToReplace) {
                            str_acento= "áàãâäéèêëíìîïóòõôöúùûüçÁÀÃÂÄÉÈÊËÍÌÎÏÓÒÕÖÔÚÙÛÜÇ";
                            str_sem_acento = "aaaaaeeeeiiiiooooouuuucAAAAAEEEEIIIIOOOOOUUUUC";
                            var nova="";
                            for (var i = 0; i < strToReplace.length; i++) {
                                if (str_acento.indexOf(strToReplace.charAt(i)) != -1) {
                                    nova+=str_sem_acento.substr(str_acento.search(strToReplace.substr(i,1)),1);
                                } else {
                                    nova+=strToReplace.substr(i,1);
                                }
                            }
                            return nova;
                        }
                        
                        $("#menuSubMenu ul, #menuSubMenu ul li, #menuSubMenu ul li a").removeAttr("class").removeAttr("id");
                        var pag = removeAcento((location.pathname.split("/")[(location.pathname.split("/").length)-2]).split("-")[0]);
                        
                        $.map($("#menuSubMenu ul li a"), function(t,index){
                            $(t).parent().css("padding","15px 24px 15px 24px");
                            $(t).attr("class", "linkMenuHeader upperCase");
                            var id = removeAcento($(t).text().split(" ")[0]);
                            if(pag.toLowerCase() == id.toLowerCase())
                                $($(t).parent()[0]).attr("class", "active");
                        });
                    </script>
                    ');
                 ?> 
            </div>
        </div>
    </div>
    	<div>
        	<div class="breadcrumbs">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
            </div>
            <div class="shareThis">
        <span class='st_facebook' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='facebook'></span><span class='st_twitter' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='twitter'></span><span class='st_fblike' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='fblike'></span><span class='st_plusone' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='plusone'></span><span class='st_pinterest' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='pinterest'></span><span class='st_instagram' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='instagram'></span>
        </div>
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
<script type="text/javascript">
$(document).ready(function(){
	$("#header #banner, #header .clearDivBanner, #header #subMenu").hide();
	var html = '';
	html += '<div id="searchSubMenu" style="margin-left: -9px; width:260px">';
	html += '			<form role="search" method="get" id="searchform" action="http://localhost:8089/MrtArquitetura/">  ';
	html += '				<input type="text" id="searchSubMenu" name="s" placeholder="Faça uma busca no site" value="" style="width:207px !important;" /> ';
	html += ' 				<input type="submit" id="searchSubMenu" value="" />';
	html += '			</form>';
	html += '</div>';
	$("#contentSearch").html(html);
	$("#contentSearch").css("display","table");
});
</script>
<?php get_footer(); ?>