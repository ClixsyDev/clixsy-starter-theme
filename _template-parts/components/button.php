<?php extract($args) ?>
<?php if (empty($args['text_hover'])) { ?>
    <a href="<?php echo $args['link'] ?>" class="btn hover:bg-white relative transform items-center group <?php echo !empty($args['classes']) ? $args['classes'] : '' ?>">
        <span class="btn_text_1 group-hover:opacity-0 absolute block transform transition-opacity duration-300">
            <?php echo $args['text'] ?>
        </span>
        <span class="btn_text_2 opacity-0 group-hover:opacity-100 transform transition-opacity duration-300">
        <?php echo $args['text'] ?> ⟶
        </span>
    </a>
<?php } else { ?>
    <a href="<?php echo $args['link'] ?>" class="btn hover:bg-white relative transform items-center group <?php echo !empty($args['classes']) ? $args['classes'] : '' ?>">
        <span class="btn_text_1 group-hover:opacity-0 absolute block transform transition-opacity duration-300">
            <?php echo $args['text'] ?>
        </span>
        <span class="btn_text_2 opacity-0 group-hover:opacity-100 transform transition-opacity duration-300">
            <?php echo $args['text_hover'] ?> ⟶
        </span>
    </a>
<?php } ?>