<?php if (empty($content)): ?>
<div class="mt-4">
	<?php $language->p('No pages found') ?>
</div>
<?php endif ?>

<div class="card-columns">

	<?php
    $i = 1;
    foreach ($content as $page): ?>
	<!-- Post -->
	<div class="card border-0 my-3 boxshadow-2" data-sal="slide-up"
		data-sal-delay="<?php echo $i * 100; ?>">

		<!-- Load Bludit Plugins: Page Begin -->
		<?php Theme::plugins('pageBegin'); ?>

		<a href="<?php echo $page->permalink(); ?>">

			<div class="img-wrap">
				<!-- Cover image -->
				<?php if ($page->coverImage()): ?>
				<img class="card-img-top" alt="Cover Image"
					src="<?php echo $page->coverImage(); ?>" />
				<?php else: ?>
				<img class="card-img-top" alt="Cover Image"
					src="<?php echo DOMAIN_THEME.'assets/img/default.jpg'; ?>" />
				<?php endif ?>
			</div>

		</a>

		<div class="card-body p-4">
			<!-- Title -->
			<a class="title text-dark"
				href="<?php echo $page->permalink(); ?>">
				<h2 class="card-title"><?php echo $page->title(); ?>
				</h2>
			</a>

			<!-- Creation date -->
			<div class="card-subtitle my-3 text-muted">
				<p>
				   <span data-feather="calendar" class="me-2"></span><?php echo $page->date(); ?>
				</p>
				<p>
				   <span data-feather="clock" class="me-2"></span><?php echo $L->get('Reading time') . ': ' . $page->readingTime(); ?>
				</p>
			</div>

			<!-- Breaked content -->
			<?php echo $page->contentBreak(); ?>

			<!-- "Continuous Reading" button -->
			<?php if ($page->readMore()): ?>
			<a href="<?php echo $page->permalink(); ?>"><?php echo $L->get('Continuous Reading'); ?></a>
			<?php endif ?>

		</div>

		<!-- Load Bludit Plugins: Page End -->
		<?php Theme::plugins('pageEnd'); ?>

	</div>
	<?php
        $i++;
        endforeach;
    ?>
</div>
<!-- Pagination -->
<?php if (Paginator::numberOfPages()>1): ?>
<nav class="paginator">
	<ul class="pagination flex-wrap">

		<!-- Previous button -->
		<?php if (Paginator::showPrev()): ?>
		<li class="page-item me-2">
			<a class="page-link border-0 boxshadow-2"
				href="<?php echo Paginator::previousPageUrl() ?>"
				tabindex="-1"><span data-feather="arrow-left"></span> <?php echo $L->get('Previous'); ?></a>
		</li>
		<?php endif; ?>

		<!-- Home button -->
		<li
			class="page-item <?php if (Paginator::currentPage()==1) {
        echo 'disabled';
    } ?>">
			<a class="page-link border-0 boxshadow-2"
				href="<?php echo Theme::siteUrl() ?>">Home</a>
		</li>

		<!-- Next button -->
		<?php if (Paginator::showNext()): ?>
		<li class="page-item ms-2">
			<a class="page-link border-0 boxshadow-2"
				href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('Next'); ?> <span
					data-feather="arrow-rihgt"></span></a>
		</li>
		<?php endif; ?>

	</ul>
</nav>
<?php endif;
