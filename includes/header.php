<?php
session_start();
include_once('inc/connect.php');
include_once('inc/users.php');
include_once('inc/show.php');
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Assignment</title>
<link rel="stylesheet" href="css/main.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<!-- bootstrap, jquery and angularjs -->
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/angular.min.js" type="text/javascript"></script>
</head>
<body ng-app="">