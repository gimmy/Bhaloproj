<?php

class Project extends AppModel {
	public $displayField = 'project_name';
	public $belongsTo = array ('Country', 'Priority', 'Area', 'State');
	public $hasMany = array ('Donation');
}

?>
