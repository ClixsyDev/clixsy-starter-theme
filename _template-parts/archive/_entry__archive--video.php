<?php
$video_id = get_field('video_id');
if ($video_id) { ?>
    <article class="h-full">
        <div class="blog h-full relative rounded-md shadow overflow-hidden ">

            <div class="block video-container__videos">
                <iframe class="lozad" data-src="https://www.youtube.com/embed/<?php echo $video_id ?>" title="<?php echo the_title() ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="content p-6">
                <h5 class="h5 text-lg font-medium hover:text-accent duration-500 ease-in-out text-center"><?php the_title() ?></h5>
            </div>
        </div>
    </article>
<?php } ?>