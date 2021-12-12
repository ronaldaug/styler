<!-- Post -->
<div class="card my-5 border-0">

	<!-- Load Bludit Plugins: Page Begin -->
	<?php Theme::plugins('pageBegin'); ?>

	<!-- Cover image -->
	<?php if ($page->coverImage()): ?>
	<img class="card-img-top mb-3" alt="Cover Image" src="<?php echo $page->coverImage(); ?>"/>
	<?php endif ?>

	<div class="card-body p-4">
		<!-- Title -->
		<a class="title text-dark" href="<?php echo $page->permalink(); ?>">
			<h1 class="card-title"><?php echo $page->title(); ?></h1>
		</a>

		<?php if (!$page->isStatic() && !$url->notFound()): ?>
		<!-- Creation date -->
		<div class="card-subtitle my-3 text-muted">
			<p><span data-feather="calendar" class="me-2"></span><?php echo $page->date(); ?> </p>
			<p><span data-feather="clock" class="me-2"></span><?php echo $L->get('Reading time') . ': ' . $page->readingTime() ?> </p>
	    </div>
		<?php endif ?>

		<!-- Full content -->
		<?php echo $page->content(); ?>

	</div>

	<!-- Load Bludit Plugins: Page End -->
	<?php Theme::plugins('pageEnd'); ?>

</div>
