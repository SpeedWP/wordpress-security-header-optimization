<?php
/**
 * Intro admin template
 *
 * @package    optimization
 * @subpackage optimization/admin
 * @author     Optimization.Team <info@optimization.team>
 */

if (!defined('ABSPATH')) {
    exit;
}

$module_name = $view->module->name();
$module_version = $view->module->version();

?>
<style>
/* https://securityheaders.io/?q=securityheaders.io */
.score_lightgreen {
	background-color: #34af00;
    border: 2px solid #309d00;
    border-radius: 12px;
    font-family: Arial,Helvetica,sans-serif;
    text-align: center;
    margin: auto;
    width: 180px;
    height: 180px;
    font-size: 90px;
    line-height: 180px;
    color: #fff;
    font-weight: 700;

}
</style>
<div class="wrap">

	<div class="metabox-prefs">
		<div class="wrap about-wrap" style="position:relative;">
			<div style="float:right;">
				<div class="score_lightgreen"><span>A+</span></div>
			</div>
			<h1><?php print $module_name; ?> <?php print $module_version; ?></h1>

			<p class="about-text" style="min-height:inherit;">Thank you for using the <?php print $module_name; ?> plugin by <a href="https://github.com/o10n-x/" target="_blank" rel="noopener" style="color:black;text-decoration:none;">Optimization.Team</a></p>
			
			<p class="about-text" style="min-height:inherit;">This plugin is a toolkit for advanced HTTP Security Header optimization for WordPress.</p>

			<!--p class="about-text info_white" style="min-height:inherit;border-color:#0073aa;background:#f1faff;"><strong><span class="dashicons dashicons-welcome-comments" style="line-height: 32px;font-size: 34px;width: inherit;color:#0073aa;"></span></strong> The optimization plugins have been removed from WordPress.org. Read the story <a href="https://github.com/o10n-x/wordpress-css-optimization/issues/4" target="_blank">here</a>.</p-->

			<p class="about-text" style="min-height:inherit;">Getting started? Read <a href="https://developers.google.com/web/fundamentals/security/csp/" target="_blank">this article</a> about Content Security Policy by Google and <a href="https://www.smashingmagazine.com/2016/09/content-security-policy-your-future-best-friend/" target="_blank">this extensive guide</a> by <a href="https://www.smashingmagazine.com/" target="_blank" style="color:#d33a2c;font-weight:bold;">Smashing Magazine</a>. Test your security header configuration at <a href="https://securityheaders.io/?q=<?php print urlencode(home_url()); ?>&followRedirects=on" target="_blank" rel="noopener">securityheaders.io</a>.</p>

			<p class="about-text" style="min-height:inherit;">If you are happy with the plugin, please consider to <span class="star" style="display:inline-block;vertical-align:middle;"><a class="github-button" data-manual="1" data-size="large" href="https://github.com/o10n-x/wordpress-security-header-optimization" data-icon="octicon-star" data-show-count="true" aria-label="Star o10n-x/wordpress-security-header-optimization on GitHub">Star</a></span> on Github.</p>
			
			<hr />

			<h3>WordPress WPO Collection</h3>

			<img src="<?php print O10N_CORE_URI; ?>admin/images/google-lighthouse.png" alt="Google Lighthouse" height="50" border="0">
			
			<p class="about-text" style="min-height:inherit;">This plugin is part of a <a href="https://github.com/o10n-x/" target="_blank">WPO plugin collection</a> that is designed to achieve perfect <a href="https://developers.google.com/web/tools/lighthouse/" target="_blank">Google Lighthouse</a> scores.</p>
			


		</div>
	</div>

</div>