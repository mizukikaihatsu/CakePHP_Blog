<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[] $posts
 */
?>
<div class="content">
    <?php foreach ($posts as $post): ?>
        <h3><?= h($post->title) ?></h3>
        <p><?= $post->created->i18nFormat('YYYY年MM月dd日 HH:mm') ?></p>
        <p><?= $this->Text->autoParagraph(h($post->description)) ?></p>
        <a href="/posts/view/<?= $post->id ?>" class="button">記事を読む</a>
        <hr>
    <?php endforeach; ?>

</div>