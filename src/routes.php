<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', 'TaskListController');

$app->post('/', 'UpdateListController');