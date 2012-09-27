<?php 
@header('Content-type: text/css' );
include "../../../wp-load.php";

global $options, $options_design, $options_gallery;
foreach ($options as $value) {
	if (get_option( $value['id'] ) === FALSE) { $value['id'] = $value['std']; }
	else { $value['id'] = get_option( $value['id'] ); }
	}

foreach ($options_design as $value) {
	if (get_option( $value['id'] ) === FALSE) { $value['id'] = $value['std']; }
	else { $value['id'] = get_option( $value['id'] ); }
	}
	
foreach ($options_gallery as $value) {
	if (get_option( $value['id'] ) === FALSE) { $value['id'] = $value['std']; }
	else { $value['id'] = get_option( $value['id'] ); }
	}
	
?>

#wrapper {
	padding: <?php echo get_option('sl_wrapper_padding'); ?>px;
	width: <?php echo get_option('sl_wrapper_width'); ?>px;
}
	
#header {
	margin: <?php echo get_option('sl_header_margin'); ?>;
	height: <?php echo get_option('sl_header_height'); ?>px;
	width: <?php echo get_option('sl_header_width'); ?>px;
}
	
#sidebar, #searchform input {
	width: <?php echo get_option('sl_sidebar_width'); ?>px;
}
	
#content-index, #content-single, #content-page-sidebar {
	width: <?php echo get_option('sl_entry_width'); ?>px;
}

#myInfoContainer {
	width: <?php echo get_option('sl_infocontainer_width'); ?>px;
	}
	
.outerNavLeft {
	margin-left: -<?php echo (get_option('sl_wrapper_padding') + 60); ?>px;
	}
	
.outerNavRight {
	margin-right: -<?php echo (get_option('sl_wrapper_padding') + 60); ?>px;
	} 
	
a.outPause, a.outThumbs, a.outLeft, a.outRight {
	opacity: <?php echo get_option('sl_gallery_outside_controls_opacity'); ?>;
	}
	
	a.outPause:hover, a.outThumbs:hover, a.outLeft:hover, a.outRight:hover {
		opacity: <?php echo get_option('sl_gallery_outside_controls_opacity_hover'); ?>;
		background-color: #<?php echo get_option('sl_gallery_outside_controls_bg'); ?>;
		}
		
.galleria-image-nav-left, .galleria-image-nav-right {
	opacity: <?php echo get_option('sl_gallery_outside_controls_opacity'); ?>;
}

.galleria-image-nav-left:hover, .galleria-image-nav-right:hover {
	opacity: <?php echo get_option('sl_gallery_outside_controls_opacity_hover'); ?>;
}
		
/*a.outLeft:hover, a.outRight:hover {
	background-color: #<?php echo get_option('sl_gallery_outside_controls_bg'); ?>;
}*/


body {
	background-color: #<?php echo get_option('sl_color_body_bg'); ?>;
	color: #<?php echo get_option('sl_body_font_color'); ?>;
	font-size: <?php echo get_option('sl_body_font_size'); ?>;
}
	
h2, h3 {
	color: #<?php echo get_option('sl_page_h2_color'); ?>;
}
	
p {
	font-size: <?php echo get_option('sl_body_text_size'); ?>;
}

input, textarea  {
	color: #<?php echo get_option('sl_input_color'); ?>;
	}
	
a:link, a:visited {
	color: #<?php echo get_option('sl_body_link_color'); ?>;
}

a:hover, a:active {
	color: #<?php echo get_option('sl_body_link_color_hover'); ?>;
}


/* Header */
	
#header {
	background-color: #<?php echo get_option('sl_header_bg'); ?>;
	color: #<?php echo get_option('sl_header_font_color'); ?>;
	font-size: <?php echo get_option('sl_header_font_size'); ?>;
}

/* Wrapper */

#wrapper {
	background-color: #<?php echo get_option('sl_color_wrapper_bg'); ?>;
	border: 1px solid #<?php echo get_option('sl_color_wrapper_border'); ?>;
}

/* Sidebar */

#header h3 {
	color: #<?php echo get_option('sl_sidebar_h2_color'); ?>;
}

/* Footer */

#footer {
	color: #<?php echo get_option('sl_footer_font_color'); ?>;
	font-size: <?php echo get_option('sl_footer_font_size'); ?>;
	width: <?php echo get_option('sl_footer_width'); ?>px;
}
	
	#footer a {
		color: #<?php echo get_option('sl_footer_link_color'); ?>;
	}
		
	#footer a:hover {
		color: #<?php echo get_option('sl_footer_link_color_hover'); ?>;
	}
	
/* Links */

a:link, a:visited {
	color: #<?php echo get_option('sl_body_link_color'); ?>;
	text-decoration: none;
}

a:hover, a:active { 
	color: #<?php echo get_option('sl_body_link_color_hover'); ?>;
	text-decoration: none;
}
	

	
/* Images */

img {
	border: 1px solid #<?php echo get_option('sl_image_border_color'); ?>;	
	box-sizing:border-box;
	-moz-box-sizing:border-box; /* Firefox */
	-webkit-box-sizing:border-box; /* Safari */
}

a img { 
	border: 1px solid #<?php echo get_option('sl_image_border_color'); ?>;	
}

	a:hover img { 
		border: 1px solid <?php echo get_option('sl_image_border_color'); ?>; 
	}

/* Posts */

.post-title a {
	color: #<?php echo get_option('sl_entry_header_color'); ?>;
}
	
	.post-title a:hover {
		color: #<?php echo get_option('sl_entry_header_color_hover'); ?>;
	}
		
.date, .post-cat {
	color: #<?php echo get_option('sl_entry_date_color'); ?>;
}

.entry {
	border-bottom: 1px solid #<?php echo get_option('sl_entry_divider'); ?>;
}

.commentlist li {
	border-bottom: 1px solid #<?php echo get_option('sl_entry_divider'); ?>;
}
	
.wp-caption p.wp-caption-text {
	color: #<?php echo get_option('sl_sologallery_caption'); ?>;
}
	
.wp-caption img {
	border: 1px solid# <?php echo get_option('sl_image_border_color'); ?>;
}

/* Navigation */

<?php if (get_option('sl_sidebar_layout') == 'no') {?>

#suckerfishnav {
	background-color: #<?php echo get_option('sl_menu_bg'); ?>;
	}

#suckerfishnav a, #header ul li a, #footer ul li a {
	color: #<?php echo get_option('sl_menu_a_color'); ?>;
	font-size: <?php echo get_option('sl_menu_a_font_size'); ?>;
}
		
#suckerfishnav li:hover a, #suckerfishnav li.sfhover a, #footer ul li a:hover {
	color: #<?php echo get_option('sl_menu_a_hover_color'); ?>;
}
	
#suckerfishnav li li a, #suckerfishnav li:hover li a, #suckerfishnav li li:hover li a, #suckerfishnav li li li:hover li a, #suckerfishnav li li li li:hover li a  {
	color: #<?php echo get_option('sl_menu_a_color'); ?>;
	font-size: <?php echo get_option('sl_menu_dropdown_font_size'); ?>;  
}
		    
#suckerfishnav li:hover a, #suckerfishnav li.sfhover a {
	color: #<?php echo get_option('sl_menu_a_hover_color'); ?>;
}

/* Dropdown link highlighting */
#suckerfishnav li ul li:hover a, #suckerfishnav li ul li li:hover a, #suckerfishnav li ul li li li:hover a, #suckerfishnav li ul li li li:hover a, #footer ul li a:hover {
	color: #<?php echo get_option('sl_menu_a_hover_color'); ?>;
	}

/* Dropdown font size */

#suckerfishnav li li a {
	font-size: <?php echo get_option('sl_menu_dropdown_font_size'); ?>;  
	}


/* Dropdown ul background */
#suckerfishnav li:hover ul, #suckerfishnav li li:hover ul, #suckerfishnav li li li:hover ul, #suckerfishnav li li li li:hover ul, #suckerfishnav li.sfhover ul, #suckerfishnav li li.sfhover ul, #suckerfishnav li li li.sfhover ul, #suckerfishnav li li li li.sfhover ul {
	left: auto;
	background-color: #<?php echo get_option('sl_color_body_bg'); ?>;
	}

<?php } ?>

/* Highlight current page item */

#header .current_page_item a, #header .current_page_parent a, #suckerfishnav .current_page_item a, #suckerfishnav .current_page_parent a, #footer .current_page_parent a, #footer .current_page_item a {
	color: #<?php echo get_option('sl_menu_a_hover_color'); ?>;
	}
	
#footer ul li a:hover {
	color: #<?php echo get_option('sl_menu_a_hover_color'); ?>;
}

/* Forms */

input, textarea {
	background-color: inherit;
	border: 1px solid #<?php echo get_option('sl_input_border_color'); ?>;
}
	
input:focus, textarea:focus {
	border: 1px solid #<?php echo get_option('sl_input_border_color'); ?>;
}	

/* Gallery Styles */

.galleria-bar {
	background-color: #<?php echo get_option('sl_gallery_caption_bg'); ?>;
}

.galleria-info {
	color: #<?php echo get_option('sl_gallery_caption_color'); ?>;
}

.galleria-stage {
	background-color: #<?php echo get_option('sl_gallery_bg'); ?>;
}

.sl-sidescroll-container {
	margin-right: <?php echo get_option('sl_gallery_sidescroll_padding'); ?>px;
}

<?php if (get_option('sl_gallery_cursor_color') == 'Light') {?>

.galleria-image-nav-left {
	cursor: url("img/prev.light.cur"), move;

}
.galleria-image-nav-right {
	cursor: url("img/next.light.cur"), move;
}

<?php } else { ?>

.galleria-image-nav-left {
	cursor: url("img/prev.dark.cur"), move;
}

.galleria-image-nav-right {
	cursor: url("img/next.dark.cur"), move;
}

<?php } ?>

<?php if (get_option('sl_gallery_outside_color') == 'Dark') {?>

.galleria-play {
    background-image: url(includes/gallery/js/b-playpause.png);
}

.galleria-fullscreen {
    background-image: url(includes/gallery/js/b-fullscreen.png);
}

.galleria-thumblink {
    background: url(includes/gallery/js/b-thumbs.png) no-repeat 50% 50%;
}

.galleria-counter {
	color: #000000;
}

.galleria-thumbnails-container {
	background-color: #ffffff;
}

.galleria-thumblink:hover,
.galleria-thumblink.open,
.galleria-fullscreen:hover,
.galleria-play:hover,
.galleria-popout:hover { background-color: #eee }

<?php } ?>

<?php if (get_option('sl_sidebar_layout') == 'no') { ?>
/* 
SoloFolio
Default Navigation for normal layout only
*/

#navigation {
	width: 450px;
	}

#suckerfishnav {
	float: right;
}

#suckerfishnav, #suckerfishnav ul {
    list-style:none;
    padding:0;
    margin:0;
}

#suckerfishnav a {
    display:block;
    font-weight: normal;
    text-decoration:none;
    margin: 5px 0 2px 10px;
}

#suckerfishnav li {
    float:left;
    padding:0;
}

#suckerfishnav ul {
    position:absolute;
    left: -999em;
    height: auto;
    margin: 0;
    padding: 0;
    border: 0;
}

#suckerfishnav li li {
	display: block;
	float: none;
	text-align: left;
    position: relative;
    z-index: 10;
}

#suckerfishnav li li a {
	display: block;
	margin: 0;
    padding: 0 10px 4px 10px;
}

#suckerfishnav li ul ul {
    margin:-23px 0 0 100px;
}

#suckerfishnav li:hover a, #suckerfishnav li.sfhover a {
}

#suckerfishnav li:hover li a, #suckerfishnav li li:hover li a, #suckerfishnav li li li:hover li a, #suckerfishnav li li li li:hover li a {
}
    
#suckerfishnav li:hover ul ul, #suckerfishnav li:hover ul ul ul, #suckerfishnav li:hover ul ul ul ul, #suckerfishnav li.sfhover ul ul, #suckerfishnav li.sfhover ul ul ul, #suckerfishnav li.sfhover ul ul ul ul {
    left:-999em;
    }
#suckerfishnav li:hover ul, #suckerfishnav li li:hover ul, #suckerfishnav li li li:hover ul, #suckerfishnav li li li li:hover ul, #suckerfishnav li.sfhover ul, #suckerfishnav li li.sfhover ul, #suckerfishnav li li li.sfhover ul, #suckerfishnav li li li li.sfhover ul {
    left:auto;
    background:#000000;
    padding: 3px 0 6px;
    z-index: 7;
    }

.solo-nav a {
	font-weight: normal;
	}

.solo-nav li {
	padding: 0 0 0 8px;
}

<?php } ?>
	
<?php if (get_option('sl_logo') != '') { ?>
#logo-noimg {
	display: none;
	}
<?php } else { ?>
#logo-img {
	display: none;
	}
<?php } ?>

<?php if (get_option('sl_sidebar_layout') == 'yes') { ?>
/*
SoloFolio
Sidebar layout
*/

a:link, a:visited {
	font-weight: normal;
}

#header {
	background-color: #fffffff;
	/*border-right: 1px solid #ccc;*/
	position: fixed;
	z-index: 5;
	left: 0;
	top: 0;
	bottom: 0;
	bottom: 40px;
	height: 100%;
	padding: 20px 0 0 20px;
}

.description {
	display: block;
}

#header div {
	margin-bottom: 15px;
}

#header h3 {
	margin: 0 0 5px 0;
	font-size: 14px;
	padding: 0;
	text-transform: uppercase;
}

#logo {
	position: static;
	bottom: 0px;
	margin-bottom: 5px;
	width: auto;
}

#header-content {
	position: relative;
	text-align: left;
	right: 0;
	width: auto;
}

#header ul li {
	list-style-type: none;
	font-weight: normal;
	padding: 0 0 5px;
	/*text-transform: uppercase;*/
	letter-spacing: 1px;
}

#suckerfishnav li {
	float: none;
}

#suckerfishnav a {
	margin: 0;
}

#suckerfishnav, #suckerfishnav ul {
	float: none;
}

#header-phone, #header-email {
	display: inline;
}

#footer {
	text-align: left;
	position: fixed;
	bottom: 10px;
	left: 20px;
	padding: 0;
	z-index: 99;
}

#sidebar-footer {

}

	#sidebar-footer p {
		font-size: 11px;
		opacity: 0.5;
		margin: 0;
	}

	#sidebar-footer a {
		text-decoration: underline;
		}
		
#sidebar-footer #help-footer {
	margin-bottom: 5px;
	}

#sidebar-footer strong {
	color: #ffffff;
}

table tr {
	vertical-align: top;
}

#navigation {
	margin-top: 30px;
}

#wrapper {
	margin-left: <?php echo (get_option('sl_header_width') + 40); ?>px;
	padding: 20px 10px 0 0;
	width: auto;
}

	#wrapper {
		max-width: <?php echo get_option('sl_wrapper_width'); ?>px;	
	}
	
	#content-page p img {
    	max-width: <?php echo get_option('sl_wrapper_width'); ?>px;
	}


/* Responsive sizing for blog */

#content-index, #content-single {
	width: 100%;
}

	#content-index .entry .wp-caption {
		width: 100%;
	}	
			
	.wp-caption img, .entry img {
		height: auto;
		width: 100%;
	}

#content-page p img {
	height: auto;
    width: 100%;
}


#pageslide {
    /* Specify the width of pageslide here */
    padding: 10px 10px 10px 0;
}

/* Time for some responsive design fun. Let's just target screens smaller than 760px for now and give them something nice and clean. */

@media only screen and (max-width: 770px) {

	* {
		margin: 0;
		padding: 0;
		border: none;
	}
	
	img {
		border-left: none;
		border-right: none;
	}
	
	/*#outerWrap {
		overflow: hidden;
	}*/
	
	#header {
		height: auto;
		background-color: #333333;
		position: relative;
		margin: 0 0 10px 0;
		padding: 0;
		width: auto;
	}
	
		#logo-img {
			display: none;
		}
		
		#logo-noimg {
			display: block;
		}
		
			#logo-noimg .description {
				display: none;
			}
	
		#header-content {
			padding: 0 0 10px 10px;
		}
		
		#header #header-phone, #header #header-email {
			padding-right: 5px;
		}
   			
		#header div {
			clear: both;
			margin: 0;
		}
		
		#header h3 {
			margin: 0;
			padding: 0;
		}

	#wrapper {
		border: none;
		margin: 0;
		padding: 0;
		width: 100%;
		/*overflow: hidden;*/
	}
	
		#content-index, #content-single, #content-search {
			padding: 10px 0 0;
		}
		
		.entry {
			border-bottom: medium none;
			border-bottom: medium none;
			padding: 10px;
			margin-bottom: 0;
		}
		
		p, h2, h4, h6, .commentlist .date {
			padding: 0 10px;
		}
				
		img.alignnone {
			width: 100%;
			height: auto;
		}
		
		#wrapper a img {
			border: none;
			}
	
	#sidebar-footer {
		position: relative;
		height: auto;
		bottom: auto;	
		padding: 10px 8px;
        font-size: 14px;
        line-height: 18px;
	}
		
	#wrapper #content-index {
		width: 100%;
	}
	
	#sidebar-footer #help-footer {
		display: none;
	}

}

/* LARGE DESKTOP SCREENS */
@media (min-width: <?php echo (get_option('sl_wrapper_width') + get_option('sl_header_width') + 200); ?>px) {

	#outerWrap {
		margin: 0 auto;
		position: relative;
		width: <?php echo (get_option('sl_wrapper_width') + get_option('sl_header_width') + 80); ?>px;
	}
	
	#header {
		left: auto;
	}

}

/* Pageslide magic menu */

/* Mobile and iPad Portrait */

/* Mobile Landscape and Portrait */
@media only screen and (max-width: 770px) {
	#content h1 { font-size: 22px; line-height: 30px; background-color: #000; color: #FFF; padding: 10px; }
	#header-content { display: none; }
	
	#header {
		min-width: 320px;
		left: auto;
		bottom: auto;
		margin: 0;
	}
		
		#header h3 {
			padding-top: 3px;
		}
	
		#sidebar-footer p {
   			display: inline;
   			text-align: center;
   		}
   		
   		#header ul li {
   			padding: 0;
   			font-size: 14px;
   		}
   		
   			#header ul li a {
   				display: block;
   				padding: 7px 0;
   			}
   			
   		#header-content {
   			text-align: center;
   		}
	
	.open {
		display: block; 
		position: fixed;
	}
	
		#logo {
			padding: 5px 0 5px 10px;
		}
	
	.galleria-info {
		padding: 7px 10px 0;
	}
	
	.galleria-controls {
		padding-right: 10px;
	}
	
	.entry {
		padding: 0 0 5px 0;
	}
	
		.post-meta, .wp-caption-text, .entry p {
			padding: 0 10px;
		}
		
	#wrapper {
		min-width: 320px;
	}
	
	#solofolio-social {
		 margin: 0 auto;
		 width: 120px;
	}
	
	#solofolio-social li {
		overflow: hidden;
	}
	
/* menu icon */
#menu-icon {
	display: block; /* show menu icon */
}

}

/* Phone */
@media only screen and (max-width: 480px) {
	
	#content h1 {
		font-size: 14px;
	}
	
	#outerWrap {
		overflow: hidden;
	}
	
	/* Make mobile galleries scroll vertically. */
	
	#sl-sidescroll-wrap td {
		display: block;
		margin: 0;
		padding: 0;
		width: 100%;
	}
	
	#sl-sidescroll-wrap .sl-sidescroll-container {
		margin: 0 0 20px;
		max-width: 100% !important;
		width: 100% !important; /* HACK! Override image widths that were set for Retina iPad */
		height: auto !important; /* HACK! Override image widths that were set for Retina iPad */
	}
	
		.sl-sidescroll-container img {
			border: none;
			width: 100%;
		}
		
		.sl-sidescroll-container p {
			padding: 2px 10px;
		}
	
	/* Clean up Galleria */
		
	.galleria-thumblink, .galleria-fullscreen {
		display: none;
	}
	
}

<?php } ?>
