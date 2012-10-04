<?php

class CountriesController extends AppController {
	public $scaffold;
	public $hasMany = 'Projects';
	public $displayField = 'nome';
}

?>
