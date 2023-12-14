<?php

use App\Template;

$remove_title = get_field('remove_title');
$remove_breadcrumbs = get_field('remove_breadcrumbs');
$remove_table_of_content = get_field('remove_table_of_content');
$custom_table_of_content = get_field('custom_table_of_content');

global $post;
?>

<article class="blog-article ">

    <?php if (!$remove_title) { ?>
        <div class="mb-6 bg-headings_second bg-cover <?php echo !empty(get_the_post_thumbnail_url()) ? 'md:h-auto' : '' ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');">
            <div class="overlay">
                <div class="container pt-24 pb-12 xl:pt-12 xl:pb-6">
                    <div class="blog-article__title-wrapper">
                        <h1 class="font-bold  text-6xl xl:text-5xl lg:text-4xl sm:text-2xl text-white mb-3"><?php the_title() ?></h1>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>



    <?php if (!$remove_breadcrumbs) { ?>
        <div class="container breadcrumbs_wrapper lg:mb-6 sm:hidden">
            <?php if (function_exists('rw_breadcrumbs')) rw_breadcrumbs(); ?>
        </div>

    <?php } ?>
    <div class="container grid grid-cols-5 mdt:grid-cols-1">
        <div class="py-6 pr-6 md:pr-0 col-span-3">
            <?php
            $markupFixer  = new TOC\MarkupFixer();
            $tocGenerator = new TOC\TocGenerator();
            $content = wpautop($post->post_content);
            $fixed_content = $markupFixer->fix($content);
            if (!$remove_table_of_content) {
                $tocGenerator = new TOC\TocGenerator(); ?>
                <?php if (!empty($tocGenerator->getHtmlMenu($fixed_content))) { ?>
                <div class="tldp">
                    <h2 style="line-height: 1em;" class="mt-8 mb-5 text-4xl text-green font-semibold">Table of Contents:</h2>
                    <div class=" border-accent border-2 border-solid p-7 mb-14">
                        <?php
                        Template::load('/_template-parts/components/toc.php', [
                            'content' => wpautop($post->post_content)
                        ]); ?>
                    </div>
                </div>
                <?php } ?>
            <?php } else if ($custom_table_of_content && $custom_table_of_content['title'] || $custom_table_of_content['content']) { ?>
                <div class="tldp">
                    <?php if ($custom_table_of_content['title']) { ?>
                        <h2 style="line-height: 1em;" class="mt-8 mb-5 text-4xl text-green font-semibold"><?php echo $custom_table_of_content['title'] ?></h2>
                    <?php } ?>
                    <div class=" border-accent border-2 border-solid p-7 mb-14">
                        <?php echo $custom_table_of_content['content'] ?>
                    </div>
                </div>
            <?php } ?>
            <!-- Content -->
            <div class="prose-xl sm:!prose-base single-content">
                <?php
                $markupFixer  = new TOC\MarkupFixer();
                echo $markupFixer->fix($post->post_content); 
                
                // Snippet
                Template::load('_template-parts/blog-posts-snippet.php');
                ?>
            </div>
        </div>
        <?php
        Template::load('_template-parts/components/sidebar.php', [
            'hide_recent_posts' => true
        ]); ?>
    </div>
</article>