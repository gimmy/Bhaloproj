<?php

class State extends AppModel {
	public $displayField = 'name';
	public $hasMany = 'Project';
}
