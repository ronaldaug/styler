<?php
    if (!empty($content) && $WHERE_AM_I == 'home'):

    // Filter slider content by slider category
    $category = 'slider';
    $slider   = array_filter($content, function ($item) use ($category) {
        if (stripos($item->category(), $category) !== false) {
            return true;
        }
        return false;
    });

?>

<?php if(!empty($slider)): ?>
<div class="slider">
    <div id="glide" class="glide" data-sal="slide-up" data-sal-delay="400">
        <div data-glide-el="track" class="glide__track">
            <ul class="glide__slides">

                <?php foreach ($slider as $key => $slide): ?>
                <li class="glide__slide">
                    <a href="<?php echo $slide->permalink(); ?>">

                        <!-- if no cover image -->
                        <?php if (!empty($slide->coverImage())): ?>
                        <img class="d-block w-100"
                            src="<?php echo $slide->coverImage(); ?>"
                            alt="<?php echo $slide->title(); ?>">
                        <?php endif; ?>

                        <p class="caption">
                            <?php echo $slide->title(); ?>
                        </p>

                    </a>
                </li>
                <?php endforeach ?>

            </ul>
        </div>
    </div>
</div>
<?php 
endif;
endif; // end $content empty
