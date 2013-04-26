<div id="sidebar">
	<div id="contentSearch" style="display:none;clear:both;">
    </div>
    <a href="<?php get_site_url(); ?>/novo/category/marcenaria/">
    	<div style="margin-bottom: 10px;">
        	<div class="tituloSidebar centralizarVertical clearDiv">
            	Marcenaria
        	</div>
    	</div>
    </a>
    <a href="<?php get_site_url(); ?>/novo/category/regularizacao-de-imoveis/">
    	<div style="margin-bottom: 10px;">
        	<div class="tituloSidebar centralizarVertical clearDiv" style="font-size: 18px;">
            	Regularização de imóveis
        	</div>
    	</div>
    </a>
    <div>
        <div class="tituloSidebar centralizarVertical clearDiv">
            Categorias
        </div>
    </div>
    <div>
    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
		<?php endif; 
		echo('
			<script type="text/javascript">
				$("#sidebar ul, #sidebar ul li, #sidebar ul li a").removeAttr("class").removeAttr("id");
				$.map($("#sidebar ul li a"), function(t,index){
					$(t).attr("class", "linkSidebar upperCase");
					var id = $(t).text();//removeAcento($(t).text().split(" ")[0]);
					if(id.toLowerCase() == "portfolio" || id.toLowerCase() == "marcenaria" || id.toLowerCase() == "regularizacao de imoveis"){
						alert(id.toLowerCase());
						$($(t).parent()[0]).remove();
					}
				});
			</script>
			');
		?>
    </div>
</div>