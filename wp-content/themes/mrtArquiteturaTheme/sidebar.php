<div id="sidebar">
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
					var id = removeAcento($(t).text().split(" ")[0]);
					if(id.toLowerCase() == "portfolio")
						$($(t).parent()[0]).remove();
				});
			</script>
			');
		?>
    </div>
</div>