<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script src="<?php bloginfo( 'template_url' ) ?>/script/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ) ?>/script/twitter.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#voltarAoTopo").click(function(){
		$(document).scrollTop(0);
	});
});
</script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
<?php wp_head(); ?>
</head>
<body>
    <div id="tudo">
        <div id="conteudo">
            <div id="header">
                <div id="backgroundHeader" class="blackOpacity">
                </div>
                <div id="contentHeader">
                    <div>
                        	<?php
								wp_nav_menu( array('menu' => 'Menu Header 1', 'container' => '')); 						 	
								echo('
								<script type="text/javascript">									
									$("#contentHeader ul, #contentHeader ul li, #contentHeader ul li a").removeAttr("class").removeAttr("id");
									$.map($("#contentHeader ul li a"), function(t,index){
										$(t).attr("class", "linkMenuHeader upperCase");
									});
								</script>
								');
							 ?> 
                    </div>
                    <div class="logoMenu shadowBoxLogo">
                        <img src="<?php bloginfo( 'template_url' ) ?>/images/logoMrt.png" alt="Mrt Arquitetura" width="279" height="100" />
                    </div>
                    <div class="menuRigth">
                        <ul>
                        	<?php
								wp_nav_menu( array('menu' => 'Menu Header 2', 'container' => '')); 						 	
								echo('
								<script type="text/javascript">
									$("#contentHeader ul, #contentHeader ul li, #contentHeader ul li a").removeAttr("class").removeAttr("id");
									$.map($("#contentHeader ul li a"), function(t,index){
										$(t).attr("class", "linkMenuHeader upperCase");
									});
								</script>
								');
							 ?> 
                        </ul>
                    </div>
                </div>
                <div id="banner">
                    <div>
                    <?php /*?><img src="<?php bloginfo( 'template_url' ) ?>/images/bannerRotativo.png" alt="" /><?php */?>
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('BannerHeader') ) : endif; 
					?>
                    </div>
                </div>
                <div class="clearDivBanner"></div>
                <div id="subMenu">
                    <div id="backgroundSubMenu" class="blackOpacity">
                    </div>
                    <div>
                    	<div id="menuSubMenu">                            
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
										$(t).attr("class", "linkMenuHeader upperCase");
										var id = removeAcento($(t).text().split(" ")[0]);
										if(pag.toLowerCase() == id.toLowerCase())
											$($(t).parent()[0]).attr("class", "active");
									});
								</script>
								');
							 ?> 
                        </div>
                        <div id="searchSubMenu">
                        	<ul>
                                <li>
                                <form role="search" method="get" id="searchform" action="http://localhost:8089/MrtArquitetura/">                                
                                <input type="text" id="searchSubMenu" name="s" placeholder="Faça uma busca no site" value="" /> 
                                <input type="submit" id="searchSubMenu" value="" />
                                </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>