			<footer id="site-footer" role="contentinfo">
			
					<div class="twelve columns">

						<div class="row">
							<div class="mobile-footer">
								<a href="#top"><i class="icon-caret-up icon-3x"><h5>Return to top</h5></i></a>
							</div>		
							<nav class="twelve columns clearfix">
								<div id="footer1" class="sidebar four columns" role="complementary">
									<div class="footer-widget1">				
										<?php if (!function_exists('dynamic_sidebar') || ! dynamic_sidebar( 'footer1' )): ?>
										<?php endif; ?>
									</div>
								</div>
								<div id="footer2" class="sidebar four columns" role="complementary">
									<div class="footer-widget2">				
										<?php if (!function_exists('dynamic_sidebar') || ! dynamic_sidebar( 'footer2' )): ?>
										<?php endif; ?>
									</div>
								</div>
								<div class="four columns">
									<ul class="social-media-icons">
										<li>
											<a href="#"><i class="icon-facebook-sign icon-3x"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon-twitter icon-3x"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon-instagram icon-3x"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon-tumblr icon-3x"></i></a>
										</li>
									</ul>
								</div>
							</nav>
							
							<p class="attribution">
								Designed by Joe Widener using
								<a href="http://320press.com">320press</a>
							</p>

						</div>

					</div>
					
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>