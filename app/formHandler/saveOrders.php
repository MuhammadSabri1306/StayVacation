<?php

$this->db()->query('INSERT INTO orders (fullname, email, telp, products) VALUES (:fullname, :email, :telp, :products)');
$this->db()->bind('fullname', $name);
$this->db()->bind('email', $email);
$this->db()->bind('telp', $telp);
$this->db()->bind('products', $products);

$success = $this->db()->execute();
