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

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">

                    <?php foreach($slider as $key => $slide): ?>
                        
                        <?php 
                                // if the first loop, add "active" class
                                reset($slider);
                                if ($key === key($slider)){
                                    echo '<div class="carousel-item active">';
                                }else{
                                    echo '<div class="carousel-item">';
                                }
                            ?>
                                
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
                        </div>
                        
                    <?php endforeach ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    endif; // end $content empty
?>
