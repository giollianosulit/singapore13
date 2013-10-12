<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Place</h1>
<?php
echo $this->Form->create('Place');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('dates_iddates');
echo $this->Form->end('Save place');
?>