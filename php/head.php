<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="generator" content="Bludit">

<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>

<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>

<!-- Include Favicon -->
<link rel="icon" href="<?php echo DOMAIN_THEME.'assets/img/favicon.png'; ?>" type="image/png">

<!-- Google roboto font link -->
<link href="//fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">

<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('assets/css/app.css'); ?>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
