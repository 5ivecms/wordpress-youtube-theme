<?php
/**
 * @var VideoData $video
 * @var $metaDescription string
 * @var $metaTitle string
 * @var $videoObjectDescription string
 * @var $ogImgAlt string
 */

$video = $args['video'] ?? null;
$metaDescription = $args['metaDescription'] ?? '';
$metaTitle = $args['metaTitle'] ?? '';
$videoObjectDescription = $args['videoObjectDescription'] ?? '';
$ogImgAlt = $args['ogImgAlt'] ?? '';

?>

<!doctype html>
<?php if ($video !== null): ?>
<html prefix="og: http://ogp.me/ns# video: http://ogp.me/ns/video#" lang="ru">
<?php else: ?>
<html lang="ru">
<?php endif; ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
    <?php if ($video): ?>
        <?php get_template_part('template-parts/video-schema', null, [
            'video' => $video,
            'metaDescription' => $metaDescription,
            'videoObjectDescription' => $videoObjectDescription,
            'ogImgAlt' => $ogImgAlt
        ]) ?>
    <?php else: ?>
        <?php get_template_part('template-parts/base-schema', null, [
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription,
        ]) ?>
    <?php endif; ?>
</head>

<body>

<div id="page" class="wrap">
    <header class="header">
        <div class="header-in wrap-center fx-row fx-middle">
            <a href="/" class="logo fw700 nowrap">
                <i class="fa fa-play" aria-hidden="true"></i>
                YoutubeAPI
            </a>
            <?php get_search_form(); ?>
            <ul class="h-menu">
                <li><a href="<?= getTrendsUrl() ?>">Тренды</a></li>
                <li><a href="<?= getLastQueriesUrl() ?>">Сейчас ищут</a></li>
            </ul>
            <div class="btn-menu"><span class="fa fa-reorder"></span></div>
        </div>
    </header>
