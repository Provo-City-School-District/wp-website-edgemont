<aside id="mainSidebar">
	<?php
	$page = get_post(20548);
	if ($page) {
		echo do_shortcode($page->post_content);
	}
	?>
</aside>