<?php

$db = new mysqli('localhost', 'root', '', 'pertemuan11pbw');
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $this->db->connect_error . ']');
}
