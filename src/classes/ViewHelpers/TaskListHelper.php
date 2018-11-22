<?php

namespace Todo\ViewHelpers;

class TaskListHelper
{
    public static function ListTasks($tasks)
    {
        $output = '';
        $integer = 1;
        foreach ($tasks as $task)
        {
            $output .= '<li><input type="checkbox" id="'. $integer . '" name="'. $integer . '"><span>' . $task->getDesc() . '</span>';
            $integer++;
        }
        return $output;
    }
}