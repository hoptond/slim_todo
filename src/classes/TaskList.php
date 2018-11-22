<?php

namespace Todo;


class TaskList
{
    private $tasks;

    /**
     * TaskList constructor.
     * @param array $tasks
     */
    public function __construct(array $tasks)
    {
        $this->tasks = $tasks;
    }

    /**
     * @return array Returns an array of tasks contained in this TaskList.
     */
    public function getTasks(): array
    {
        return $this->tasks;
    }


}