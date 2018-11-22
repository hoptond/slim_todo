<?php

namespace Todo\Factories;

use Todo\TaskList;

class TaskListFactory
{
    public function __invoke($c)
    {
        $db = $c->get('DBConnection');
        $stmt = $db->prepare('SELECT id, desc, status FROM tasks');
        $results = $stmt->fetchAll(\PDO::FETCH_CLASS, 'Todo\Task');
        return new TaskList($results);
    }
}