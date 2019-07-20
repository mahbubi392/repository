<?php
ob_start();
session_start();
include '../koneksi/koneksi.php';
unset($_SESSION['username']);
header("location: login.php");