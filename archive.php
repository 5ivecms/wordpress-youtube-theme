<?php
/**
 * @var VideoModel[] $videos
 * @var $pageH1 string
 * @var $metaDescription string
 * @var $pageTitle string
 * @var $pageSeoText string
 * @var VideoCategory[] $categories
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
    <div class="items-header fx-row fx-middle">
        <h1 class="items-title fw700"><?= $pageH1 ?></h1>
    </div>
    <div class="items clearfix">
        <?php foreach ($videos as $video): ?>
            <?php get_template_part('template-parts/video', 'card', ['video' => $video, 'thumb_relay' => $thumbRelay, 'relay_domain' => $relayDomain]); ?>
        <?php endforeach; ?>
    </div>
    <?php get_template_part('template-parts/seo-text', '', ['text' => $pageSeoText]); ?>
</main>

<?php get_footer(); ?>
