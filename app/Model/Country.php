<?php

class Country extends AppModel {
	public $displayField = 'name';
	public $hasMany = 'Project';
}

?>
