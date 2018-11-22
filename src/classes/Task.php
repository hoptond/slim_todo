<?php

namespace Todo;

class Task
{
    private $id;
    private $desc;
    private $status;

    /**
     * Task constructor.
     * @param int $id The id of this task in the database.
     * @param string $desc The user submitted description of this task in the database.
     * @param int $status The status of this current task.
     * @throws \Exception on no task description.
     */
    public function __construct(int $id, string $desc, string $status)
    {
        $this->id = $id;
        $this->desc = $desc;
        if(trim($desc) === '') {
            throw new \Exception('No task description submitted.');
        }
        $this->status = $status;
    }


}