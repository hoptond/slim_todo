<?php

namespace Todo;

class Task
{
    protected $id;
    protected $desc;
    protected $status;

    /**
     * @return string Returns the description for this task.
     */
    public function getDesc()
    {
        return $this->desc;
    }
}