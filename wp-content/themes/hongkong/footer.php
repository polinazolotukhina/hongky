			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
		         
		          <div id="widget-footer" class="clearfix row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
					
					<nav class="clearfix">
						<div class="container">
							<div class="col-lg-9 col-md-9 text-center"><p class="attribution">&copy; <?php bloginfo('name'); ?>.  Все права на тексты, изображения, видео и аудио принадлежат их авторам. Материалы  
могут быть использованы в некоммерческих целях при указании авторства и гиперссылки на источник. Связаться со мной: lina_po@mail.ru </p>
						</div></div>
					</nav>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		<?php wp_footer(); // js scripts are inserted using this function ?>

		<!-- remove this for production -->

		<script src="//localhost:35729/livereload.js"></script>

	</body>

</html>