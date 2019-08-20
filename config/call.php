<?php
session_start();
include 'settings.php';
include 'connect.php';
include 'helpers.php';
include 'loginfunctions.php';
include 'userfunctions.php';
include 'tourpackages.php';
include 'partnerfunctions.php';
include 'programfunction.php';
include 'imagesliderfunctions.php';
include 'galleryfunctions.php';
include 'achievementfunction.php';
include 'messagefunction.php';
include 'categoryfunction.php';
$conn = new Connection(DBSERVER,DBUSER,DBPASS,DBNAME);
$conn = $conn->connectDB();

