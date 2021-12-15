<div class="container mt-5">
	<div class="row">

		<div class="col-12">

			<!-- Post -->
			<div class="post shadow bg-white">

				<!-- Load Bludit Plugins: Page Begin -->
				<?php Theme::plugins('pageBegin'); ?>

				<!-- Cover image -->
				<?php if ($page->coverImage()): ?>
				<img alt="<?php echo $page->title(); ?>"
					src="<?php echo $page->coverImage(); ?>" />
				<?php endif ?>

				<div class="content p-4">
					<!-- Title -->
					<a class="title text-dark"
						href="<?php echo $page->permalink(); ?>">
						<h1 class="post-title"><?php echo $page->title(); ?>
						</h1>
					</a>

					<?php if (!$page->isStatic() && !$url->notFound()): ?>
					<!-- Creation date -->
					<div class="post-subtitle my-3 text-muted">
						<p><span data-feather="calendar" class="me-2"></span><?php echo $page->date(); ?>
						</p>
						<p><span data-feather="clock" class="me-2"></span><?php echo $L->get('Reading time') . ': ' . $page->readingTime() ?>
						</p>
					</div>
					<?php endif ?>

					<!-- Full content -->
					<?php echo $page->content(); ?>

				</div>

				<!-- Load Bludit Plugins: Page End -->
				<?php Theme::plugins('pageEnd'); ?>

			</div>

		</div>

	</div>
</div>