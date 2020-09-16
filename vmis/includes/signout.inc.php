<?php

session_start();
//delete session varibles
session_unset();
//destroy session
session_destroy();

//go back to index page

header("Location: ../signIn.php");
