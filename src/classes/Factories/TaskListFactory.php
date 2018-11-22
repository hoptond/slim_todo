<?php

namespace Todo\Factories;

use Todo\TaskList;

class TaskListFactory
{
    public function __invoke($c)
    {
        $db = $c->get('DBConnection')->getDb();
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $stmt = $db->prepare('SELECT `id`, `desc`, `status` FROM `tasks`');
        $stmt->execute();
        $results = $stmt->fetchAll(\PDO::FETCH_CLASS, 'Todo\Task');
        return new TaskList($results);
    }
}