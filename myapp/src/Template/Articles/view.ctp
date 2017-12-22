<!-- File: src/Template/Articles/view.ctp -->

<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<!-- <p><?= h($article->tags) ?></p> -->

<?php foreach($article->tags as $key => $tag): ?>
    <p><?= h($tag->title) ?></p>
    <?php endforeach; ?>

<?php
    foreach($article->tags as $key => $tag){
            echo $tag->title;
    }
?>


<p><small>作成日時: <?= $article->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?></p>
<p><?= $this->Html->link('Back', ['action' => 'index']) ?></p>