<?php extract($args) ?>
<a href="<?php echo $args['link'] ?>" class="btn <?php echo !empty($args['classes']) ? $args['classes'] : '' ?>">
    <span>
        <?php echo $args['text'] ?>
    </span>
    <span class="btn-fade-in transition-all duration-500 ease-in-out opacity-0 w-0  block">
        ⟶
    </span>
</a>