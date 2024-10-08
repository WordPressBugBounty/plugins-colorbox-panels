<?php
if(isset($PostID) && isset($_POST['colorbox_setting_save_action'])) {
			if (!wp_verify_nonce($_POST['wpsm_colorbox_security'], 'wpsm_colorbox_nonce_save_settings_values')) {
				die();
			}
			$colorbox_sec_title 	  	  = sanitize_text_field($_POST['colorbox_sec_title']);			
			$show_colorbox_title_icon 	  = sanitize_text_field($_POST['show_colorbox_title_icon']);
			$show_colorbox_title_icon_align 	  = sanitize_text_field($_POST['show_colorbox_title_icon_align']);
			$colorbox_radius     	  = sanitize_text_field($_POST['colorbox_radius']);
			$enable_colorbox_border   = sanitize_text_field($_POST['enable_colorbox_border']);
			$colorbox_shadow          = sanitize_text_field($_POST['colorbox_shadow']);
			$colorbox_same_height     = sanitize_text_field($_POST['colorbox_same_height']);
			$colorbox_masonry         = sanitize_text_field($_POST['colorbox_masonry']);
			$colorbox_styles          = sanitize_text_field($_POST['colorbox_styles']);
			$box_layout               = sanitize_text_field($_POST['box_layout']);
			$colorbox_title_bg_clr    = sanitize_text_field($_POST['colorbox_title_bg_clr']);
			$colorbox_title_icon_clr  = sanitize_text_field($_POST['colorbox_title_icon_clr']);
			$colorbox_desc_bg_clr  	  = sanitize_text_field($_POST['colorbox_desc_bg_clr']);
			$colorbox_desc_font_clr   = sanitize_text_field($_POST['colorbox_desc_font_clr']);
			$show_colorbox_desc_align = sanitize_text_field($_POST['show_colorbox_desc_align']);
			$title_size 		      = sanitize_text_field($_POST['title_size']);
			$des_size         	      = sanitize_text_field($_POST['des_size']);
			$font_family              = sanitize_text_field($_POST['font_family']);
			$custom_css               = stripslashes(sanitize_textarea_field($_POST['custom_css']));
			
			$Colorbox_Settings_Array = serialize( array(
				'colorbox_sec_title' 		=> $colorbox_sec_title,
				'show_colorbox_title_icon' 		=> $show_colorbox_title_icon,
				'show_colorbox_title_icon_align' 		=> $show_colorbox_title_icon_align,
				'colorbox_radius' 			=> $colorbox_radius,
				'enable_colorbox_border' 	=> $enable_colorbox_border,
				'colorbox_shadow' 		    => $colorbox_shadow,
				'colorbox_same_height' 		    => $colorbox_same_height,
				'colorbox_masonry' 		    => $colorbox_masonry,
				'colorbox_styles' 		    => $colorbox_styles,
				'box_layout' 		        => $box_layout,
				'colorbox_title_bg_clr' 	=> $colorbox_title_bg_clr,
				'colorbox_title_icon_clr'	=> $colorbox_title_icon_clr,
				'colorbox_desc_bg_clr' 		=> $colorbox_desc_bg_clr,
				'colorbox_desc_font_clr' 	=> $colorbox_desc_font_clr,
				'show_colorbox_desc_align' 	=> $show_colorbox_desc_align,
				'title_size' 			    => $title_size,
				'des_size' 				    => $des_size,
				'font_family' 			    => $font_family,
				'custom_css' 			    => $custom_css,
				) );

			update_post_meta($PostID, 'Colorbox_Settings', $Colorbox_Settings_Array);
		}
?>