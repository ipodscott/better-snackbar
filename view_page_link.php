<?php
	$pageId = get_the_ID(); 
	$postType = get_post_type();
	?>

<div class="secret-page-link"> <a target="_blank" href="/?<?=$postType.'='.$pageId;?>"><span class="dashicons dashicons-welcome-view-site"></span></a></div>

