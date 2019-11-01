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
		<p class="card-subtitle mb-3 text-muted">
		<span class="la la-calendar mr-2"></span><?php echo $page->date(); ?> <br> 
		<span class="la la-clock mr-2"></span><?php echo $L->get('Reading time') . ': ' . $page->readingTime() ?></p>
		<?php endif ?>

		<!-- Full content -->
		<?php echo $page->content(); ?>

	</div>

	<!-- Load Bludit Plugins: Page End -->
	<?php Theme::plugins('pageEnd'); ?>

</div>
