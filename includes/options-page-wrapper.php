<div class="wrap">
	<div id="icon-options-general" class="icon32"></div>
	<h1><?php esc_attr_e( 'Ultra Light Social Share Buttons options', 'wp_admin_style' ); ?></h1>
				<form method="post" action="options.php">
					<?php
					settings_fields( 'ultralight_fields' );
					do_settings_sections( 'ultralight_fields' );
					submit_button();
					?>
				</form>
</div> <!-- .wrap -->
