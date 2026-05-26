<?php 
/**
 * Footer template for the site footer
 * 
 * The footer is split into three sections:
 * 
 *  - Upper footer with widgets
 *  - Instagram section
 *  - Copyright and Back to top button
 */

do_action('bunyad_pre_footer');
$mobile_menu = 'contentberg-mobile';
// Fallback to main menu for AMP if mobile is missing
if (!has_nav_menu('contentberg-mobile') && Bunyad::amp()->active()) {
	$mobile_menu = 'contentberg-main';
 }?>
 <div class="mobile-menu-container off-canvas" id="mobile-menu">
	<a href="#" class="close"><i class="fa fa-times"></i></a>
		<div class="logo">
	<?php Bunyad::get('helpers')->mobile_logo(); ?>
	    </div>
	<?php if (has_nav_menu($mobile_menu)):
		wp_nav_menu(array(
			'container' => '', 
			'menu_class' => 'mobile-menu', 
			'theme_location' => $mobile_menu,
			'walker' => class_exists('Bunyad_Theme_Amp_MenuWalker') ? new Bunyad_Theme_Amp_MenuWalker : ''
	)); 
	?>
	<?php else: ?>
		<ul class="mobile-menu"></ul>
	<?php endif;?>
 </div>

<?php get_template_part('partials/search-modal'); ?>
  <div class="footer-custom-sec">
   <?php  if ( is_active_sidebar( 'custom-footer-widget' ) ) : ?>
    <div id="custom-footer-widget" class="chw-widget-area widget-area" role="complementary">
    <?php dynamic_sidebar( 'custom-footer-widget' ); ?>
    </div>
    <?php endif; ?>
  </div>
	<div class="footer-custom">
	    <div class="bottom cf">
			<p class="copyright"><?php echo do_shortcode( wp_kses_post(Bunyad::options()->footer_copyright) ); ?> </p>
            	<?php if (Bunyad::options()->footer_back_top): ?>
						<div class="to-top">
							<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i> <?php esc_html_e('Top', 'contentberg'); ?></a>
						</div>
				<?php endif; ?>
		</div>
	</div>
	<div class="watsappic">
  <a href="https://wa.me/19895359295" target="_blank" id="whatsapp-link" rel="nofollow">
    <img src="https://emizentech.com/wp-content/uploads/2023/01/whatsicon.png" alt="whatsapp">
  </a>
</div>

<?php wp_footer(); ?>	 

	<script type="text/javascript">           
document.getElementById('whatsapp-link').addEventListener('click', function () {
    gtag('event', 'conversion', {
        'send_to': 'AW-11006513864/sBxWCO7lyZkaEMilqIAp',
        'value': 1.0,
        'currency': 'USD'
    });
});
</script>

<script>
    jQuery(document).ready(function () {
        jQuery(document).on('input paste', 'input[type="tel"]', function () {
            let sanitizedValue = this.value.replace(/\D/g, '').substring(0, 17); // Allow only numbers, max 17 digits
            jQuery(this).val(sanitizedValue);
        });
    });
</script> 

<script type="text/javascript">           
    jQuery(document).ready(function () {
        jQuery("body").bind("cut copy paste", function (e) {
            if (jQuery(e.target).closest("form.elementor-form").length > 0) {
                return true; // allow copy-paste inside Elementor form fields
            }
            e.preventDefault(); // block everywhere else
        });

        jQuery("body").on("contextmenu", function (e) {
            if (jQuery(e.target).closest("form.elementor-form").length > 0) {
                return true; // allow right-click in Elementor form fields
            }
            return false; // block elsewhere
        });
    });
</script>


<script type="text/javascript">
  jQuery(document).ready(function(){
    var elems = jQuery(".sticky-right-sidebar");
      if (elems.length) {
        var keep = Math.floor(Math.random() * elems.length);
        for (var i = 0; i < elems.length; ++i) {
          if (i !== keep) {
            jQuery(elems[i]).hide();
          }
        }
      }

  });
</script>



<script>
jQuery(document).ready(function() {
  var landingPageValue = handl_get_cookie('handl_landing_page');
  var originalRefValue = handl_get_cookie('handl_original_ref');
  var landingPageField = jQuery('#handl_landing_page');
  var originalRefField = jQuery('#handl_original_ref');
  if (landingPageField.length && landingPageValue) {
    landingPageField.val(decodeURIComponent(landingPageValue));
  }
  if (originalRefField.length && originalRefValue) {
    originalRefField.val(decodeURIComponent(originalRefValue));
  }
});

function handl_get_cookie(name) {
  var cookieValue = document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)');
  return cookieValue ? cookieValue.pop() : '';
}
</script>



</body>
</html>
 


