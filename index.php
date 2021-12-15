<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">

<head>
	<?php include(THEME_DIR_PHP.'head.php'); ?>
</head>

<body>

	<!-- Load Bludit Plugins: Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin'); ?>

	<!-- Navbar -->
	<?php include(THEME_DIR_PHP.'navbar.php'); ?>

	<!-- Slider -->
	<?php include(THEME_DIR_PHP.'slider.php'); ?>

	<!-- Content -->
	<?php
                if ($WHERE_AM_I == 'category' && $page->category()) {
                    echo '<h4><span data-feather="tag" class="me-2"></span> '. $page->category() .'</h4>';
                }
                // Bludit content are pages
                // But if you order the content by date
                // These pages works as posts

                // $WHERE_AM_I variable detect where the user is browsing
                // If the user is watching a particular page/post the variable takes the value "page"
                // If the user is watching the frontpage the variable takes the value "home"
                if ($WHERE_AM_I == 'page') {
                    include(THEME_DIR_PHP.'page.php');
                } else {
                    include(THEME_DIR_PHP.'home.php');
                }
        ?>

	<!-- Footer -->
	<?php include(THEME_DIR_PHP.'footer.php'); ?>

	<!-- Javascript -->
	<?php

        // App JS
        echo Theme::js('assets/js/app.js');

    ?>


	<!-- Load Bludit Plugins: Site Body End -->
	<?php Theme::plugins('siteBodyEnd'); ?>

</body>

</html>