<?php

namespace Todo\ViewHelpers;

class TaskListHelper
{
    public static function ListTasks($tasks)
    {
        $output = '';
        foreach ($tasks as $task)
        {
            $output .= '<li>';
            $output .= '<input type="checkbox" id="'. $task->getId() . '" name="'. $task->getId() .  '"'. self::DisplayTaskStatus($task->getStatus()) . '><span>' . $task->getDesc() . '</span>';
            $output .= '</li>';
        }
        return $output;
    }

    public static function DisplayTaskStatus($status)
    {
        switch ($status)
        {
            case '0': return '';
            case '1': return 'checked';
            default: return '';
        }
    }
}