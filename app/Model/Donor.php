<?php

class Donor extends AppModel {
	public $displayField = 'surname';
	public $hasMany = 'Donations';
}

?>
