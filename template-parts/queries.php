<?php
/**
 * @var array $queries
 * @var string $title
 */

if (isset($args)) {
    $queries = $args['queries'];
    $title = $args['title'];
}
?>

<?php if (count($queries) > 0): ?>

    <?php if ($title && strlen($title) > 0): ?>
        <h1 class="items-title last-queries-title fw700"><?= $title ?></h1>
    <?php endif; ?>

    <div class="items clearfix">
        <ul class="last-queries">
            <?php foreach ($queries as $query): ?>
                <li class="last-queries-item">
                    <a href="<?= getSearchUrl() ?>/<?= $query['keyword'] ?>"><?= $query['keyword'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

<?php endif; ?>