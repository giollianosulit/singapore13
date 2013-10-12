<?php
class Place extends AppModel{
	var $belongsTo = array(
    'Dates' => array(
        'className'    => 'Dates',
        'foreignKey'    => 'dates_iddates'
    )
);  
	 public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}
?>