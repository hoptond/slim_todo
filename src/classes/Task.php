<?php

namespace Todo;

class Task
{
    protected $id;
    protected $desc;
    protected $status;

    /**
     * @return int Gets the ID for this Task.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int status Gets the status of this Task.
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string Gets the description for this task.
     */
    public function getDesc()
    {
        return $this->desc;
    }


}