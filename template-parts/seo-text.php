<?php
/**
 * @var string $text
 */

if (isset($args)) {
    $text = $args['text'];
}
?>

<?php if (strlen($text) > 0): ?>
    <section class="sect-desc clearfix">
        <p><?= $text ?></p>
    </section>
<?php endif; ?>