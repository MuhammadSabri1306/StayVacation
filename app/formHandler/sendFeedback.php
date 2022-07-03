<?php

$this->db()->query('INSERT INTO feedback (fullname, email, telp, message) VALUES (:fullname, :email, :telp, :message)');
$this->db()->bind('fullname', $name);
$this->db()->bind('email', $email);
$this->db()->bind('telp', $telp);
$this->db()->bind('message', $message);

$success = $this->db()->execute();
