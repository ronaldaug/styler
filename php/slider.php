<?php 
    if (!empty($content) && $WHERE_AM_I == 'home'):

	// Filter slider content by slider category
	$cat = 'slider';
	$slider = array_filter($content, function ($item) use ($cat){
		if (stripos($item->category(), $cat) !== false) {
			return true;
		}
		return false;
    });

?>

    <div class="container-fluid mt-4 pl-0 pr-0">
        <div class="row m-0">
            <div class="col-md-12 m-0 pl-0 pr-0">
                <div id="slider">

                    <?php foreach($slider as $key => $slide): ?>

                        <div class="slide">
                            <a href="<?php echo $slide->permalink(); ?>">

                                <!-- if no cover image -->
                                <?php if(!empty($slide->coverImage())): ?>
                                    <img class="d-block w-100" src="<?php echo $slide->coverImage(); ?>" alt="<?php echo $slide->title(); ?>">
                                <?php endif; ?>

                                <p class="caption">
                                    <?php echo $slide->title(); ?>
                                </p>

                            </a>
                        </div>
                
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </div>

<?php
    endif; // end $content empty
?>
