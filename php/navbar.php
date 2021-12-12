<nav class="navbar navbar-expand-md bg-custom text-uppercase navbar-dark shadow">
	<div class="container-fluid">
		<a class="navbar-brand" data-sal="slide-down" data-sal-delay="300"
			href="<?php echo Theme::siteUrl() ?>">
			<span class="text-white"><?php echo $site->title() ?></span>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				<!-- Static pages -->
				<?php foreach ($staticContent as $staticPage): ?>
				<li class="nav-item" data-sal="slide-up" data-sal-delay="500">
					<a class="nav-link <?php echo $staticPage->key() === $url->slug() ? 'active': ''; ?>"
						href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title() ?></a>
				</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
</nav>