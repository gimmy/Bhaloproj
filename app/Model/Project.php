<?php

class Project extends AppModel {
	public $displayField = 'name';
	public $belongsTo = array ('Country', 'Priority', 'Area', 'State');
	public $hasMany = array ('Donation');
}

?>
