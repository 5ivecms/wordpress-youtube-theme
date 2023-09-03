<?php /* Template Name: Последние запросы */ ?>
<?php
/**
 * @var $pageH1 string
 * @var $pageSeoText string
 * @var $queries array
 * @var $metaDescription string
 * @var $pageTitle string
 * @var VideoCategory[] $categories
 */
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
    <?php get_template_part('template-parts/queries', '', ['queries' => $queries]); ?>
    <?php get_template_part('template-parts/seo-text', '', ['text' => $pageSeoText]); ?>
</main>

<?php get_footer(); ?>
