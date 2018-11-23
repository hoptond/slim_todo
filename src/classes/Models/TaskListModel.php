<?php

namespace Todo\Models;


use Todo\DBConnection;

class TaskListModel
{
    private $tasks;

    /**
     * TaskListModel constructor.
     * @param array $tasks
     */
    public function __construct(DBConnection $DBConnection)
    {
        $db = $DBConnection->getDb();
        $stmt = $db->prepare('SELECT `id`, `desc`, `status` FROM `tasks`');
        $stmt->execute();
        $this->tasks = $stmt->fetchAll(\PDO::FETCH_CLASS, 'Todo\Task');
    }

    /**
     * @return array Returns an array of tasks contained in this TaskListModel.
     */
    public function getTasks(): array
    {
        return $this->tasks;
    }


}