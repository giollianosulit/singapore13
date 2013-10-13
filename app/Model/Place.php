<?php
class Place extends AppModel{
	var $belongsTo = array(
    'Dates' => array(
        'className'    => 'Dates',
        'foreignKey'    => 'dates_iddates'
    )
);  
	 public $validate = array(
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}
?>