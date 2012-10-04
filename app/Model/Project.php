<?php

class Project extends AppModel {
	public $displayField = 'project_name';
	public $belongsTo = array ('Country', 'Priority', 'Area', 'State', 'User', 'Result');
	public $hasMany = array ('Donation');
}

?>
