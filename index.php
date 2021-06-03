<?php 
$uri0 = isset($uri[0]);
$uri1 = isset($uri[1]);

require_once "include/Database.php";
require_once "include/utils.php";
require_once "controller/Team.php";
require_once "model/TeamModel.php";
$db = new Database();
$model = new TeamModel($db);
$controller = new Team($model);

$controller->index();