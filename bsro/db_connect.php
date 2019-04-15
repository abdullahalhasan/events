<?php
/**
 * Created by PhpStorm.
 * User: BDDL-102
 * Date: 4/7/2019
 * Time: 1:28 PM
 */
// connect to the database
$db = mysqli_connect("localhost", "root", "", "incepta_events");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} else {
    //echo "Connected successfully";
}