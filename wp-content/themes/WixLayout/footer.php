<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage cesarebenvenuti
 * @since Cesare Benvenuti 1.0
 */

$menuItems = curlMenuItems();

$responsiveCornerMenu = "<h3 class=\"link-titulo\"><a alt=\"In&iacute;cio\" title=\"In&iacute;cio\" href=\"/\">In&iacute;cio</a></h3> 
  <div id=\"menu\">
    <ul class=\"box\">";
foreach($menuItems['items'] as $value) {
    $responsiveCornerMenu .= "<li>
				<a alt=\"".$value['alt']."\" title=\"".$value['alt'].
				"\" href=\"".$value['url']."\">".$value['link']."</a>
			     </li>";
}
$responsiveCornerMenu .= "
    </ul>
  </div><!--/#menu-->";
?>

<br style="clear:both">
<br style="clear:both">
<br style="clear:both">


    <div id="lateral">
	    <?php echo $responsiveCornerMenu ?>
    </div><!--/#lateral>-->

</div><!-- .site-content -->

	<!--<div id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">-->
			<?php
				/**
				 * Fires before the Cesare Benvenuti footer text for footer customization.
				 *
				 * @since Cesare Benvenuti 1.0
				 */
				#do_action( 'twentyfifteen_credits' );
			?>
			<!--<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'cesarebenvenuti' ), 'Esdrinhas with WordPress' ); ?></a>
		</div>--><!-- .site-info -->
	<!--</div>--><!-- .site-footer -->

<!--</div>--><!-- .site -->

<?php #wp_footer() ?>

</body>
</html>
