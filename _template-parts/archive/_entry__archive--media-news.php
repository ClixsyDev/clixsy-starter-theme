<article class="h-full news-media-article">
    <div class="blog h-full">
        <?php
        $thumbnail = get_the_post_thumbnail_url();
        $thumbnail_placeholder = get_stylesheet_directory_uri() . '/_assets/public/images/placeholder.svg';
        $media_news_acf_screen = get_field('media_news_acf_screen');
        $media_news_acf_link = get_field('media_news_acf_link');
        ?>
        <a href="<?php the_permalink() ?>" class="text-4xl sm:text-xl sm:font-semibold"><?php the_title() ?></a>

        <?php if ($media_news_acf_screen) { ?>
            <a class="block" href="<?php the_permalink() ?>">
                <?php echo wp_get_attachment_image($media_news_acf_screen, 'full', "", ["class" => "w-full mb-3"]); ?>
            </a>
        <?php } ?>

        <p class="text-right">
            <a class="text-xl font-semibold underline text-accent italic sm:text-base" href="<?php echo $media_news_acf_link['url'] ?>"><?php echo $media_news_acf_link['title'] ?></a>
        </p>

        <div class="news-media-article-content">
            <?php the_excerpt() ?>
        </div>

        <a href="<?php the_permalink() ?>" class="btn-link text-button_color font-bold text-xl sm:text-lg">read more...</a>
    </div>
</article>