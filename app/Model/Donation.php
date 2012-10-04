<?php

class Donation extends AppModel {
	public $belongsTo = array ('Donor', 'Project');
}

?>
