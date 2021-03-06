<?php get_header(); ?>
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