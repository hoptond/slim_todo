<?php

namespace Todo;

class Task
{
    private $id;
    private $desc;
    private $status;

    /**
     * @return string Returns the description for this task.
     */
    public function getDesc()
    {
        return $this->desc;
    }
}