<?php
session_start();
include 'settings.php';
include 'connect.php';
include 'helpers.php';
include 'loginfunctions.php';
include 'userfunctions.php';
include 'tourpackages.php';
include 'flightsfunctions.php';
include 'blogfunction.php';
include 'imagesliderfunctions.php';
include 'galleryfunctions.php';
include 'projectfunction.php';
include 'messagefunction.php';
include 'categoryfunction.php';
$conn = new Connection(DBSERVER,DBUSER,DBPASS,DBNAME);
$conn = $conn->connectDB();

