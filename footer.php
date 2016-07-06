<?php /*
	Template Name: Footer
	URI: http://linesh.com/
	Description: This is a Free WordPress theme built-in widgets and a intuitive theme settings interface... Designed by <a href="http://linesh.com/">Linesh Jose</a>. Both the design and code are  released under a <a href="http://creativecommons.org/licenses/by/3.0//">Creative Commons Attribution 3.0 Unported</a> License.
	Version: 15.05
	Author: Linesh Jose 
	Author URI: http://linesh.com/
	Tags: light, white,Three-columns,  flexible-width, right-sidebar, left-sidebar,  threaded-comments, translation-ready,white, widgets

*/?>

	</tr>
	</table>
	<!--  /Page -->


	<!--  Footer -->
	<div id="footer">
		<ul class="lefttext">
			<?php lj_get_custom_nav('MainNavigation',footer);?>
		</ul>
		<p>Copyright &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url') ?>"><?php bloginfo('name'); ?></a> all rights reserved. </p>
		<p>Proudly powered by  <a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">WordPress</a> | <a href="http://linesh.com/?rel=<?php bloginfo('url'); ?>" title="Free HTML5 and CSS3 WordPress themes" rel="generator">Lubrick</a>- Free WordPress theme by <a href="http://linesh.com/" title="Get More HTML5 and CSS3 WordPress themes" rel="generator">Linesh Jose</a></p>	
		<?php wp_footer(); ?>
	</div>
	<!--  /Footer -->

</div>
<!--  /Container -->
</body>
</html>