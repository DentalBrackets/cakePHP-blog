<h1>Add you Article</h1>
<?= $this->Form->create($article); ?>
    <?= $this->Form->control('title'); ?>
    <?= $this->Form->control('body', ['rows' => 3]); ?>
    <?= $this->Form->submit(__('Save Article')) ?> 
<?= $this->Form->end(); ?>