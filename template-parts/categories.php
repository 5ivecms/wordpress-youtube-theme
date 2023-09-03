<?php
/**
 * @var VideoCategory[] $categories
 */

if (isset($args)) {
    $categories = $args['categories'] ?? [];
}


?>

<nav class="nav">
    <ul class="nav-in wrap-center fx-row">
        <?php foreach ($categories as $category): ?>
            <li><a href="<?= getCategoryUrl($category->slug) ?>"><span><?= $category->title ?></span></a></li>
        <?php endforeach; ?>
    </ul>
</nav>
