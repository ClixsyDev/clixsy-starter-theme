<?php
$thumbnail = get_the_post_thumbnail_url($post->ID, 'full');
$thumbnail_placeholder = get_stylesheet_directory_uri() . '/_assets_child/src/img/placeholder.jpg'; ?>
<article class="h-full relative">
    <a class="group h-full bg-cover items-end" href="<?= get_permalink($post) ?>">
        <?php if (has_post_thumbnail( $post->ID )) { ?>
            <img class="w-full max-h-[230px] lg:max-h-[200] min-h-[230px] lg:min-h-[200px] relative object-cover" src="<?php echo $thumbnail ?>">
        <?php } else { ?>
            <img class="w-full max-h-[230px] lg:max-h-[200] min-h-[230px] lg:min-h-[200px]" src="<?php echo $thumbnail_placeholder ?>">
        <?php } ?>
        <div class="z-30 mt-4 w-full">
            <div class="text-accent font-second text-2xl leading-tight md:text-xl">
                <?php the_title(); ?>
            </div>
            <div class="mb-4 mt-2 text-black font-bold text-base uppercase sm:text-sm sm:my-2">
                <span><?php echo $cat[0]->name ?></span>
                <span>| <?php echo get_the_date('F d, Y') ?></span>
            </div>
            <div class="font-libre text-xl text-black mb-2 mr-11 leading-6 sm:text-sm">
                <?php the_excerpt() ?>
            </div>
            <div class="chevron_link absolute right-2 bottom-2 hidden group-hover:block">
                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37">
                    <path class="fill-accent" id="Icon_ionic-ios-arrow-dropright-circle" data-name="Icon ionic-ios-arrow-dropright-circle" d="M3.375,21.875a18.5,18.5,0,1,0,18.5-18.5A18.5,18.5,0,0,0,3.375,21.875Zm21.746,0-7.284-7.213a1.717,1.717,0,0,1,2.428-2.428l8.485,8.512a1.715,1.715,0,0,1,.053,2.366L20.443,31.5a1.714,1.714,0,1,1-2.428-2.419Z" transform="translate(-3.375 -3.375)" fill="#25dd7e" />
                </svg>
            </div>
        </div>
    </a>
</article>