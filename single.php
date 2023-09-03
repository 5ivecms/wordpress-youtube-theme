<?php
/**
 * @var VideoData $video
 * @var $pageH1 string
 * @var $metaDescription string
 * @var $videoObjectDescription string
 * @var $ogImgAlt string
 * @var $pageSeoText string
 * @var VideoModel[] $popular
 * @var $embedRelay boolean
 * @var VideoCategory[] $categories
 */

$thumbRelay = thumbRelay();
$embedRelay = embedRelay();
$relayDomain = getRelayDomain();

?>

<?php get_template_part('template-parts/header', null, [
    'video' => $video->video,
    'metaDescription' => $metaDescription,
    'videoObjectDescription' => $videoObjectDescription,
    'ogImgAlt' => $ogImgAlt
]) ?>
<?php get_template_part('template-parts/categories', null, ['categories' => $categories]) ?>

<main class="main wrap-center">
    <article class="ignore-select full">
        <div class="fcols fx-row">
            <div class="fleft">
                <h1 class="items-title fw700"><?= $pageH1 ?></h1>
                <div class="fplayer video-box">
                    <div class="embed-responsive embed-responsive-16by9">
                        <?php if ($embedRelay && strlen($relayDomain) > 0): ?>
                            <iframe class="embed-responsive-item"
                                    src="<?= $relayDomain ?>/embed/<?= strrev($video->video->id) ?>/" frameborder="0"
                                    allowfullscreen></iframe>
                        <?php else: ?>
                            <iframe class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/<?= $video->video->id ?>" frameborder="0"
                                    allowfullscreen></iframe>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="f-desc full-text clearfix">
                    <p><a href="<?= getChannelUrl($video->video->channelId) ?>"><?= $video->video->channelTitle ?></a>
                    </p>
                    <p>Просмотров: <?= $video->video->views ?></p>
                    <p><?= $pageSeoText ?></p>
                    <p><?= $video->video->description ?></p>
                </div>
                <?php get_template_part('template-parts/comments', null, ['comments' => $video->comments]); ?>
            </div>
            <div class="fright">
                <div class="items-title fw700">Смотрите далее:</div>
                <?php foreach ($video->related as $video): ?>
                    <?php get_template_part('template-parts/video', 'card', ['video' => $video, 'thumb_relay' => $thumbRelay, 'relay_domain' => $relayDomain]); ?>
                <?php endforeach; ?>

                <div class="items-title fw700">Популярные:</div>
                <?php foreach ($popular as $video): ?>
                    <?php get_template_part('template-parts/video', 'card', ['video' => $video, 'thumb_relay' => $thumbRelay, 'relay_domain' => $relayDomain]); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </article>
</main>

<?php get_footer(); ?>
