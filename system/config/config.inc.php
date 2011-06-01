<?php

define("CONFIG_DIR", dirname(__FILE__));
define("SYSTEM_DIR", dirname(CONFIG_DIR));
define("LIB_DIR", SYSTEM_DIR . "/lib");

$config = array();

$config["email_salt"] = "Change this!";
$config["ip_per_day"] = 3;

$config["db"] = array(
    "host" => "localhost",
    "user" => "root",
    "password" => "",
    "database" => "ivotingtest",
);
