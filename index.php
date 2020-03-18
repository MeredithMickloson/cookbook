<?php

ini_set("display_errors", 1);
require_once "database/Connection.php";
require_once "models/model.php";
require_once "controllers/controller.php";
require_once "route.php";

Route::start($_SERVER["REQUEST_URI"]);