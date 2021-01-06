<<<<<<< HEAD:Core/ControllerDB.php
<?php 

require __DIR__ . "/MySQL.php";

class ControllerDB {
	protected $connection;

	public function __construct() {
		$mysql = new MySQL();
		$this->connection = $mysql->getConnection();
	}
=======
<?php

require _DIR_ . "/MySQL.php";

class ControllerDB {
	protected $connection;

	public function _construct() {
		$mysql = new MySQL();
		$this->connection = $mysql->connection;
	}
>>>>>>> 8b3466deb86e2f59ab788849ea198934a4c003e3:__unused/ControllerDB.php
}