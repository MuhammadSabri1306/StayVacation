<?php
$data = null;

$this->db()->query('SELECT * FROM products');
if($this->db()->numRows() > 0){
	$data = $this->db()->resultSet();
}
