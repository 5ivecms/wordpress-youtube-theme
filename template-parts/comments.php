<?php
/**
 * @var Comment[] $comments
 */

$comments = $args['comments'] ?? [];

?>

<?php if (count($comments) > 0): ?>
    <div class="full-comms ignore-select" id="full-comms">
        <?php foreach ($comments as $comment): ?>
            <div class="comm-item">
                <div class="comm-one clearfix">
                    <span class="comm-author"><?= $comment->author ?></span> <?= $comment->timeAgo ?>
                </div>
                <div class="comm-two clearfix"><?= $comment->text ?></div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
