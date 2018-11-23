<?php

namespace Todo\Models;


class TaskListModel
{
    private $tasks;

    /**
     * TaskListModel constructor.
     * @param array $tasks
     */
    public function __construct(array $tasks)
    {
        $this->tasks = $tasks;
    }

    /**
     * @return array Returns an array of tasks contained in this TaskListModel.
     */
    public function getTasks(): array
    {
        return $this->tasks;
    }


}