<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Plan Item</h1>
<?php echo $this->Html->link('Home',array('controller' => 'place', 'action' => 'index')); ?>
<hr/>
<?php
echo $this->Form->create('Place', array('class' => 'add-place'));
echo 'Details';
echo $this->Form->input('body', array('rows' => '8', 'cols' => '75'));
echo 'Choose a day';
echo $this->Form->input('dates_iddates', array(
    'default' => $r, // since your default value is $r
    'options' => array(
    	'1' =>'Monday 11th', 
    	'2' => 'Tuesday 12th',
    	'3' => 'Wednseday 13th',
    	'4' => 'Thursday 14th',
    	'5' => 'Friday 15th',
    	'6' => 'Saturday 16th',
    	'7' => 'Sunday 17th',
    	'8' => 'Monday 18th',
    	'9' => 'Tuesday 19th',
    	'10' => 'Wednesday 20th',
    	'11' => 'Thursday 21st',
    	'12' => 'Friday 22nd',
    	'13' => 'Saturday 23rd')
    ));
echo $this->Form->end('Add Item');
?>
<hr/>
