<h1>
    Articles tagged with
    <?= $this->Text->toList($tags) ?>
</h1>

<section>
<?php foreach ($articles as $article): ?>
    <article>
        <!-- Use the HtmlHelper to create a link -->
        <h4><?= $this->Html->link($article->title, $article->url) ?></h4>
        <small><?= h($article->url) ?></small>

        <!-- Use the TextHelper to format text -->
        <?= $this->Text->autoParagraph($article->description) ?>
    </article>
<?php endforeach; ?>
</section>
