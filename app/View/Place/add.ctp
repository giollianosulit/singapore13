<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Place</h1>
<?php
echo $this->Form->create('Place');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('dates_iddates');
echo $this->Form->input('username');   //text
        echo $this->Form->input('password');   //password
echo $this->Form->input('birth_dt', array(
    'label' => 'Date of birth',
    'dateFormat' => 'DMY',
    'minYear' => date('Y') - 70,
    'maxYear' => date('Y') - 18,
));
echo $this->Form->end('Save place');
?>