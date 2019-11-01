<footer class="footer bg-custom">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="sidebar-wrap" data-aos="fade-up" data-aos-duration="200">
					<?php Theme::plugins('siteSidebar') ?>
				</div>
			</div>
			<div class="col-md-4">

				<!-- Social Networks -->
				<ul class="social mt-3" data-aos="fade-up" data-aos-duration="400">
				<?php foreach (Theme::socialNetworks() as $key=>$label): ?>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $site->{$key}(); ?>" target="_blank">
						<img class="d-none d-sm-block nav-svg-icon" src="<?php echo DOMAIN_THEME.'img/'.$key.'.svg' ?>" alt="<?php echo $label ?>" />
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
				<p class="footer-text m-0 text-center text-white text-uppercase" data-aos-duration="600"><?php echo $site->footer(); ?><span class="ml-5 text-warning">Powered by<img class="mini-logo" src="<?php echo DOMAIN_THEME_IMG.'favicon.png'; ?>"/><a target="_blank" class="text-white" href="https://www.bludit.com">Bludit</a></span></p>
			</div>
		</div>
	</div>
</footer>


<div class="scrollDown">
	<span class="sroll-text">Scroll</span><br>
	<span class="la la-arrow-down"></span>
</div>

<a href="#top" class="scrollTop">
    <span class="la la-arrow-up"></span>
</a>