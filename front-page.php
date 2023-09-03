<?php
/**
 * @var VideoModel[] $videos
 * @var $pageH1 string
 * @var $metaDescription string
 * @var $pageTitle string
 * @var $pageSeoText string
 * @var $queries array
 * @var VideoCategory[] $categories
 * @var CategoriesWithVideos[] $categoriesWithVideos
 */

$thumbRelay = thumbRelay();
$relayDomain = getRelayDomain();

?>

<?php get_template_part('template-parts/header', null, [
    'metaTitle' => $pageTitle,
    'metaDescription' => $metaDescription,
]) ?>
<?php get_template_part('template-parts/categories', null, ['categories' => $categories]) ?>

<main class="main wrap-center">
    <?php if (strlen($pageH1) > 0): ?>
        <div class="items-header fx-row fx-middle">
            <h1 class="items-title fw700"><?= $pageH1 ?></h1>
        </div>
    <?php endif; ?>

    <?php if (!is_array($categoriesWithVideos)): ?>
        <p>Нет видео</p>
    <?php else: ?>
        <?php foreach ($categoriesWithVideos as $categoriesWithVideo): ?>
            <div class="items-header fx-row fx-middle">
                <h3 class="items-title fw700"><?= $categoriesWithVideo->category->title ?></h3>
            </div>
            <div class="items clearfix">
                <?php foreach ($categoriesWithVideo->videos as $video): ?>
                    <?php get_template_part('template-parts/video', 'card', ['video' => $video, 'thumb_relay' => $thumbRelay, 'relay_domain' => $relayDomain]); ?>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php get_template_part('template-parts/seo-text', '', ['text' => $pageSeoText]); ?>
    <?php get_template_part('template-parts/queries', '', ['queries' => $queries, 'title' => 'Сейчас ищут']); ?>
</main>

<?php get_footer(); ?>
