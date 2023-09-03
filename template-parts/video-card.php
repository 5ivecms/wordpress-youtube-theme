<?php
/**
 * @var VideoModel $video
 * @var $thumbRelay boolean
 * @var $relayDomain string
 */

$video = $args['video'] ?? null;
$thumbRelay = $args['thumb_relay'] ?? false;
$relayDomain = $args['relay_domain'] ?? '';

$videoUrl = getVideoUrl($video->id, $video->title);

?>

<div class="item">
    <a href="<?= $videoUrl ?>" class="item-link">
        <div class="item-in">
            <div class="item-img img-resp icon-left">
                <?php if ($thumbRelay && strlen($relayDomain) > 0): ?>
                    <img src="<?= $relayDomain ?>/img/<?= strrev($video->id) ?>/<?= getSlug($video->title) ?>.webp"
                         alt="<?= $video->title ?>"/>
                <?php else: ?>
                    <img src="https://i.ytimg.com/vi_webp/<?= $video->id ?>/mqdefault.webp"
                         alt="<?= $video->title ?>"/>
                <?php endif; ?>
                <?php if (strlen($video->duration)): ?>
                    <div class="item-meta meta-time"><span
                                class="fa fa-clock-o"></span><?= $video->readabilityDuration ?></div>
                <?php endif; ?>
            </div>
            <div class="item-title"><?= $video->title ?></div>
        </div>
    </a>
</div>