<nav class="navbar navbar-expand-md bg-custom text-uppercase boxshadow-4">
	<div class="container">
		<a data-aos="fade-down" data-aos-duration="800" class="navbar-brand" href="<?php echo Theme::siteUrl() ?>">
			<span class="text-white"><?php echo $site->title() ?></span>
		</a>
		<button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="la la-bars"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">

				<!-- Static pages -->
				<?php foreach ($staticContent as $staticPage): ?>
				<li class="nav-item" data-aos="fade-down" data-aos-duration="600">
					<a class="nav-link" href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a>
				</li>
				<?php endforeach ?>

			</ul>
		</div>
	</div>
</nav>
