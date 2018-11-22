<?php

namespace Todo\Factories;


use Todo\Controllers\TaskListController;

class TaskListControllerFactory
{
    function __invoke($c)
    {
        $logger = $c->get('logger');
        $renderer = $c->get('renderer');
        $taskList = $c->get('TaskList');
        return new TaskListController($logger, $renderer, $taskList);
    }
}