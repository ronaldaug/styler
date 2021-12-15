<footer class="footer theme-bg mt-5 py-4">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="sidebar-wrap" data-sal="slide-up" data-sal-delay="300">
					<?php Theme::plugins('siteSidebar') ?>
				</div>
			</div>
			<div class="col-md-4">

				<!-- Social Networks -->
				<ul class="social mt-3" data-sal="slide-up" data-sal-delay="400">
				<?php foreach (Theme::socialNetworks() as $key=>$label): ?>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $site->{$key}(); ?>" target="_blank">
						<img class="d-none d-sm-block nav-svg-icon" src="<?php echo DOMAIN_THEME.'assets/img/'.$key.'.svg' ?>" alt="<?php echo $label ?>" />
						<span class="d-inline d-sm-none"><?php echo $label; ?></span>
					</a>
				</li>
				<?php endforeach; ?>
				</ul>

			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<p data-sal="slide-up" class="footer-text m-0 text-center text-white text-uppercase"><?php echo $site->footer(); ?>
				<span data-sal="slide-up" class="ms-5 text-warning">Powered by <img class="mini-logo" src="<?php echo DOMAIN_THEME.'assets/img/favicon.png'; ?>"/><a target="_blank" class="text-white" href="https://www.bludit.com">Bludit</a></span></p>
			</div>
		</div>
	</div>
</footer>