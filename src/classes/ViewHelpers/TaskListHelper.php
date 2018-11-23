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
            $output .= self::DisplayInput($task);
            $output .= '<span>' . $task->getDesc() . '</span>';
            $output .= '</li>';
        }
        return $output;
    }

    public static function DisplayInput($task)
    {
        $id = $task->getId();
        $status = $task->getStatus();
        return '<input type="checkbox" id="'. $id . '" name="'. $id .  '"'. self::DisplayTaskStatus($status) . '>';
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