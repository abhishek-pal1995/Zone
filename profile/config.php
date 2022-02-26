<?php

$link = new mysqli('localhost', 'root', '', 'zone_peoples');

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
