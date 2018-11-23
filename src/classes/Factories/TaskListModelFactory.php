<?php

namespace Todo\Factories;

use Todo\Models\TaskListModel;

class TaskListModelFactory
{
    public function __invoke($c)
    {
        return new TaskListModel($c->get('DBConnection'));
    }
}