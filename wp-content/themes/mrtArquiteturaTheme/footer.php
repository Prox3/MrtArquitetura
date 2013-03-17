            <div id="footer">
            	<div id="voltarAoTopo">
                	<img src="<?php bloginfo( 'template_url' ) ?>/images/voltarAoTopo.png"  />
                </div>
                <div id="boxSocial">
                	<div class="socialBox">
                    	<h1>Menu rápido</h1>
						<?php
                            wp_nav_menu( array('menu' => 'Menu Footer', 'container' => '')); 						 	
                            echo('
                            <script type="text/javascript">
                                $("#boxSocial ul, #boxSocial ul li, #boxSocial ul li a").removeAttr("class").removeAttr("id");
                                $.map($("#boxSocial ul li a"), function(t,index){
                                    $(t).attr("class", "linkBoxSocial centralizarVertical");
                                });
                            </script>
                            ');
                        ?> 
                    </div>
                    <div class="socialBox">
                    	<h1>Twitter</h1>
                        <div id="ultimosPostTwitter">
                        	<ul>
                            </ul>
                        </div>
                        <div id="buttonTwitter" align="center">
                        <a href="https://twitter.com/mrtarquiteturaamp" class="twitter-follow-button" data-show-count="false" data-lang="pt" data-size="large">Seguir @mrtarquiteturaamp</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                        <!--<img src="<?php bloginfo( 'template_url' ) ?>/images/twitter.png" />-->
                    </div>
                    <div class="socialBox">
                    	<h1>Facebook</h1>
                        <!--<img src="<?php bloginfo( 'template_url' ) ?>/images/facebook.png" />-->
                        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FMRTARQUITETURA&amp;width=300&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=false&amp;appId=441592889248957" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:258px;background: #fff;" allowTransparency="true"></iframe>
                    </div>
                </div>
                <div id="boxSocial2">
                	<div id="titleBoxSocial2" class="boxTituloPreto40px">
                    	<p class="centralizarVertical fontGeorgia italic">Continue Conectado</p>
                    </div>
                    <div id="backgroundBoxSocial2" class="blackOpacity05">
                	</div>
                    <div id="contentBoxSocial2">
                    	<div id="redesSociais">
                        	<div class="img40 centralizarVertical">
                            	<a href="http://www.youtube.com/user/mrtarquitetura1" >
                                	<img src="<?php bloginfo( 'template_url' ) ?>/images/social/icon-you-tube.png" width="100%" height="100%" />
                            	</a>
							</div>
                            <div class="img40 centralizarVertical">
                            	<a href="https://www.facebook.com/MRTARQUITETURA" >
                                	<img src="<?php bloginfo( 'template_url' ) ?>/images/social/icon-facebook.png" width="100%" height="100%" />
                            	</a>
							</div>
                            <div class="img40 centralizarVertical">
                            	<a href="http://twitter.com/mrtarquitetura" >
                                	<img src="<?php bloginfo( 'template_url' ) ?>/images/social/icon-twitter.png" width="100%" height="100%" />
                            	</a>
							</div>
                            <div class="centralizarVertical">
                            	<a href="#" >
                                	<img src="<?php bloginfo( 'template_url' ) ?>/images/social/icon-google.png" width="100%" height="100%" />
                            	</a>
							</div>
                        </div>
                        <div id="novidades">
                        	<div id="inpTextNovidades" class="centralizarVertical">
                                <input type="text" id="novidadeSocial2" name="novidadeSocial2" value="" placeholder="Insira seu e-mail para receber novidades" />
	                        </div>
                            <div id="inpSubmitNovidades" class="centralizarVertical">
                                <input type="submit" id="submitNovidades" name="submitNovidades" value="" />
	                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div id="contentRodape">
                	<div id="msgRodape">
                    	<p class="fontGeorgia italic">MRT Arquitetura</p>
                        <p class="fontGeorgia italic">Todos os direitos reservados © 2013</p>
                    </div>
                    <div id="desenvolvedor">
                    	<a href="#" class="centralizarVertical">
                        	<img src="<?php bloginfo( 'template_url' ) ?>/images/actmob.png" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>