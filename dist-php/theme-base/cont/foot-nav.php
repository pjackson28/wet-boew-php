<!-- FooterStart -->
<nav role="navigation"><div id="base-sft"><h3><?php echo $_SITE['base_sft_text_'.$_PAGE['lang1']]; ?></h3><div id="base-sft-in">
<?php

//add the four required footer menus
for( $i=1; isset($_SITE['wb_ft'.$i.'_href_'.$_PAGE['lang1']]); $i++ ) {
	$_LINK_ = $_SITE['wb_ft'.$i.'_href_'.$_PAGE['lang1']];
	$_TEXT_ = $_SITE['wb_ft'.$i.'_text_'.$_PAGE['lang1']];
	$_MENU_ = $_SITE['wb_ft'.$i.'_menu_file_'.$_PAGE['lang1']];
	echo '<section><div class="span-2"><h4 class="base-col-head"><a'.$_TARGET_.' href="'.$_LINK_.'">'.$_TEXT_."</a></h4>\n";
	if( file_exists($_MENU_) ) {
		include $_MENU_;
	}
	echo "\n</div></section>\n";
}
?>
</div></div></nav>

<section><div id="base-fullft"><h3><?php echo $_SITE['base_fullft_text_'.$_PAGE['lang1']]; ?></h3>
<p class="mobile-hide"><?php echo $_SITE['base_mobile_hide3_text_' . $_PAGE['lang1']]; ?></p>
<div id="base-fullft-in"><p class="mobile-hide"><?php echo $_SITE['base_fullft_in_text_'.$_PAGE['lang1']]?></p></div>
</div></section>
<!-- FooterEnd -->
