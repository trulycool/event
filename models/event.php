<?php
class Event extends AppModel{
	var $name = 'Event';
	
	var $belongsTo = array(
		'Node'
	);
}
?>
