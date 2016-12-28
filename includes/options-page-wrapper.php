<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h1><?php esc_attr_e( 'Ultra Light Social Share Buttons options', 'wp_admin_style' ); ?></h1>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">
					<form name="form-social-buttons" method="post" action="#">
						<div class="postbox">
							<div class="handlediv" title="Click to toggle"><br></div>
							<!-- Toggle -->

							<h2 class="hndle"><span><?php esc_attr_e( 'Display position', 'wp_admin_style' ); ?></span>
							</h2>

							<div class="inside">

									<input type="hidden" name="form_submitted" value="Y">
									<table class="form-table">
										<tr>
											<th scope="row"><?php esc_attr_e( 'Share Buttons Position', 'wp_admin_style' ); ?></th>
											<td>
												<fieldset><legend class="screen-reader-text"><span><?php esc_attr_e( 'Share Buttons Position', 'wp_admin_style' ); ?></span></legend>
													<label><input type="radio" name="position" value="top" <?php checked( $options['position'],'top',true ); ?>><?php esc_attr_e( 'Top', 'wp_admin_style' ); ?></label><br>
													<label><input type="radio" name="position" value="bot" <?php checked( $options['position'],'bot',true ); ?> ><?php esc_attr_e( 'Bottom', 'wp_admin_style' ); ?></label><br>
													<label><input type="radio" name="position" value="both" <?php checked( $options['position'],'both',true ); ?> ><?php esc_attr_e( 'Both', 'wp_admin_style' ); ?></label><br>
												</fieldset>
											</td>
										</tr>
									</table>
									<p><input type="submit" name="submit" class="button-primary" value="<?php esc_attr_e( 'Save', 'wp_admin_style' ); ?>" /></p>


							</div>
							<!-- .inside -->
						</div> <!-- .postbox -->

						<div class="postbox">
							<div class="handlediv" title="Click to toggle"><br></div>
							<!-- Toggle -->

							<h2 class="hndle"><span><?php esc_attr_e( 'Disable / Enable social buttons', 'wp_admin_style' ); ?></span>
							</h2>

							<div class="inside">

									<input type="hidden" name="form_submitted" value="Y">
									<table class="form-table">
										<tr>
											<th scope="row"><?php esc_attr_e( 'Facebook: ', 'wp_admin_style' ); ?></th>
											<td> <fieldset><legend class="screen-reader-text"><span><?php esc_attr_e( 'Facebook: ', 'wp_admin_style' ); ?></span></legend>
													<label for="facebook">
														<input name="facebook" type="checkbox" id="facebook" value="1" <?php checked( $options['facebook'],1,true ); ?> >
														<?php esc_attr_e( 'Enable / Disable', 'wp_admin_style' ); ?>
													</label>
												</fieldset>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php esc_attr_e( 'Twitter: ', 'wp_admin_style' ); ?></th>
											<td> <fieldset><legend class="screen-reader-text"><span><?php esc_attr_e( 'Twitter: ', 'wp_admin_style' ); ?></span></legend>
													<label for="twitter">
														<input name="twitter" type="checkbox" id="twitter" value="1" <?php checked( $options['twitter'],1,true ); ?> >
														<?php esc_attr_e( 'Enable / Disable', 'wp_admin_style' ); ?>
													</label>
												</fieldset>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php esc_attr_e( 'Google+: ', 'wp_admin_style' ); ?></th>
											<td> <fieldset><legend class="screen-reader-text"><span><?php esc_attr_e( 'Google+: ', 'wp_admin_style' ); ?></span></legend>
													<label for="google">
														<input name="google" type="checkbox" id="google" value="1" <?php checked( $options['google'],1,true ); ?> >
														<?php esc_attr_e( 'Enable / Disable', 'wp_admin_style' ); ?>
													</label>
												</fieldset>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php esc_attr_e( 'Linkedin: ', 'wp_admin_style' ); ?></th>
											<td> <fieldset><legend class="screen-reader-text"><span><?php esc_attr_e( 'Linkedin: ', 'wp_admin_style' ); ?></span></legend>
													<label for="linkedin">
														<input name="linkedin" type="checkbox" id="linkedin" value="1" <?php checked( $options['linkedin'],1,true ); ?> >
														<?php esc_attr_e( 'Enable / Disable', 'wp_admin_style' ); ?>
													</label>
												</fieldset>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php esc_attr_e( 'Tumblr: ', 'wp_admin_style' ); ?></th>
											<td> <fieldset><legend class="screen-reader-text"><span><?php esc_attr_e( 'Tumblr: ', 'wp_admin_style' ); ?></span></legend>
													<label for="tumblr">
														<input name="tumblr" type="checkbox" id="tumblr" value="1" <?php checked( $options['tumblr'],1,true ); ?> >
														<?php esc_attr_e( 'Enable / Disable', 'wp_admin_style' ); ?>
													</label>
												</fieldset>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php esc_attr_e( 'Email: ', 'wp_admin_style' ); ?></th>
											<td> <fieldset><legend class="screen-reader-text"><span><?php esc_attr_e( 'Email: ', 'wp_admin_style' ); ?></span></legend>
													<label for="email">
														<input name="email" type="checkbox" id="email" value="1" <?php checked( $options['email'],1,true ); ?> >
														<?php esc_attr_e( 'Enable / Disable', 'wp_admin_style' ); ?>
													</label>
												</fieldset>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php esc_attr_e( 'Pinterest: ', 'wp_admin_style' ); ?></th>
											<td> <fieldset><legend class="screen-reader-text"><span><?php esc_attr_e( 'Pinterest: ', 'wp_admin_style' ); ?></span></legend>
													<label for="pinterest">
														<input name="pinterest" type="checkbox" id="pinterest" value="1" <?php checked( $options['pinterest'],1,true ); ?> >
														<?php esc_attr_e( 'Enable / Disable', 'wp_admin_style' ); ?>
													</label>
												</fieldset>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php esc_attr_e( 'Reddit: ', 'wp_admin_style' ); ?></th>
											<td> <fieldset><legend class="screen-reader-text"><span><?php esc_attr_e( 'Reddit: ', 'wp_admin_style' ); ?></span></legend>
													<label for="reddit">
														<input name="reddit" type="checkbox" id="reddit" value="1" <?php checked( $options['reddit'],1,true ); ?> >
														<?php esc_attr_e( 'Enable / Disable', 'wp_admin_style' ); ?>
													</label>
												</fieldset>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php esc_attr_e( 'Xing: ', 'wp_admin_style' ); ?></th>
											<td> <fieldset><legend class="screen-reader-text"><span><?php esc_attr_e( 'Xing: ', 'wp_admin_style' ); ?></span></legend>
													<label for="xing">
														<input name="xing" type="checkbox" id="xing" value="1" <?php checked( $options['xing'],1,true ); ?> >
														<?php esc_attr_e( 'Enable / Disable', 'wp_admin_style' ); ?>
													</label>
												</fieldset>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php esc_attr_e( 'Whatsapp: ', 'wp_admin_style' ); ?></th>
											<td> <fieldset><legend class="screen-reader-text"><span><?php esc_attr_e( 'Whatsapp: ', 'wp_admin_style' ); ?></span></legend>
													<label for="whatsapp">
														<input name="whatsapp" type="checkbox" id="whatsapp" value="1" <?php checked( $options['whatsapp'],1,true ); ?> >
														<?php esc_attr_e( 'Enable / Disable (Mobile only)', 'wp_admin_style' ); ?>
													</label>
												</fieldset>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php esc_attr_e( 'Hacker: ', 'wp_admin_style' ); ?></th>
											<td> <fieldset><legend class="screen-reader-text"><span><?php esc_attr_e( 'Hacker: ', 'wp_admin_style' ); ?></span></legend>
													<label for="hacker">
														<input name="hacker" type="checkbox" id="hacker" value="1" <?php checked( $options['hacker'],1,true ); ?> >
														<?php esc_attr_e( 'Enable / Disable', 'wp_admin_style' ); ?>
													</label>
												</fieldset>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php esc_attr_e( 'Vk: ', 'wp_admin_style' ); ?></th>
											<td> <fieldset><legend class="screen-reader-text"><span><?php esc_attr_e( 'Vk: ', 'wp_admin_style' ); ?></span></legend>
													<label for="vk">
														<input name="vk" type="checkbox" id="vk" value="1" <?php checked( $options['vk'],1,true ); ?> >
														<?php esc_attr_e( 'Enable / Disable', 'wp_admin_style' ); ?>
													</label>
												</fieldset>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php esc_attr_e( 'Telegram: ', 'wp_admin_style' ); ?></th>
											<td> <fieldset><legend class="screen-reader-text"><span><?php esc_attr_e( 'Telegram: ', 'wp_admin_style' ); ?></span></legend>
													<label for="telegram">
														<input name="telegram" type="checkbox" id="telegram" value="1" <?php checked( $options['telegram'],1,true ); ?> >
														<?php esc_attr_e( 'Enable / Disable', 'wp_admin_style' ); ?>
													</label>
												</fieldset>
											</td>
										</tr>
									</table>
									<p><input type="submit" name="submit" class="button-primary" value="<?php esc_attr_e( 'Save', 'wp_admin_style' ); ?>" /></p>
							</div>
							<!-- .inside -->
						</div> <!-- .postbox -->
					</form>
				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h2 class="hndle"><span>About</span></h2>
						<div class="inside">

							<div>
								<ul class="wptreehouse-badges-and-points">
									<li>Plugin Developer: Adam Silva</li>
									<li>Twiiter: <a href="http://twitter.com/adambatera" target="_blank">@adambatera</a></li>
									<li>Website: <a href="http://www.f5themes.com" target="_blank">F5 Themes</a></li>
								</ul>
							</div>

						</div> <!-- .inside -->

					</div>
					<!-- .postbox -->


				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->
