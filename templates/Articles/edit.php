<!-- CakePHP will determine whether a save() generates 
 an insert or an update statement based on the state of the entity.
-->

<h1>Edit Article</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->submit(__('Save Article'));
    echo $this->Form->end();
?>