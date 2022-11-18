<?php
extract($args);
$markupFixer  = new TOC\MarkupFixer();
$tocGenerator = new TOC\TocGenerator();

$content = $args['content'];
$fixed_content = $markupFixer->fix($content);

// This generates the Table of Contents in HTML
$tocMenu = "<div class='toc table_of_content prose'>" . $tocGenerator->getHtmlMenu($fixed_content) . "</div>";
echo $tocMenu;
