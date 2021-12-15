<div class="topbar theme-bg py-1">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<a href="mailto:info@ronaldaug.work"><span data-feather="mail" class="text-white me-2"> info@ronaldaug.work</a>
				<a href="tel:+959123456"><span data-feather="phone" class="text-white me-2"> +959123456 </a>
			</div>
			<div class="col-md-6 text-md-end">
				<a href="https://github.com/ronaldaug/styler"><span data-feather="github" class="text-white me-2"></a>
				<a href="https://facebook.com"><span data-feather="facebook" class="text-white me-2"></a>
				<a href="https://twitter.com"><span data-feather="twitter" class="text-white me-2"></a>
			</div>
		</div>
	</div>
</div>


<nav class="navbar navbar-expand-md text-uppercase navbar-light bg-white py-4">
	<div class="container">
		<a class="navbar-brand theme-color" data-sal="slide-down" data-sal-delay="300"
			href="<?php echo Theme::siteUrl() ?>">
			<?php echo $site->title() ?>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				<li class="nav-item px-2" data-sal="slide-up" data-sal-delay="200">
					<a href="/" class="nav-link <?php echo empty($url->slug())?'active':''; ?>">Home</a>
				</li>
				<!-- Static pages -->
				<?php foreach ($staticContent as $staticPage): ?>
				<li class="nav-item px-2" data-sal="slide-up" data-sal-delay="200">
					<a class="nav-link <?php echo $staticPage->key() === $url->slug() ? 'active': ''; ?>"
						href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title() ?></a>
				</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
</nav>