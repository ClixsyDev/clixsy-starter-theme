<article class="h-full">
    <div class="blog h-full relative rounded-md shadow overflow-hidden group">
        <?php
        $thumbnail = get_the_post_thumbnail_url();
        $thumbnail_placeholder = get_stylesheet_directory_uri() . '/_assets/public/images/placeholder.svg';
        ?>
        <a class="block group-hover:scale-105 transform transition-all cases" href="<?php the_permalink() ?>">
            <?php if ($thumbnail) { ?>
                <img class="w-full h-64 object-cover grayscale" src="<?php echo $thumbnail ?>" alt="">
            <?php } else { ?>
                <img class="w-full h-64 object-contain grayscale" src="<?php echo $thumbnail_placeholder ?>" alt="<?php the_title() ?>">
            <?php } ?>
        </a>
        <div class="content p-6">
            <a href="<?php the_permalink() ?>" class="h5 text-lg font-medium hover:text-accent duration-500 ease-in-out"><?php the_title() ?></a>
        </div>
    </div>
</article>