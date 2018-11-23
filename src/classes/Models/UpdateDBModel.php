<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 22/11/2018
 * Time: 16:25
 */

namespace Todo\Models;


use Todo\DBConnection;

class UpdateDBModel
{
    private $dbConnection;

    /**
     * UpdateDBModel constructor.
     * @param DBConnection $dbConnection
     */
    public function __construct(DBConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
        $this->dbConnection->getDb()->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function AddNewTask(string $taskdesc)
    {
        if (trim($_POST['new_task']) !== '') {
            $sql = 'INSERT INTO tasks (`desc`,`status`) VALUES (:desc, 0)';
            $stmt = $this->dbConnection->getDb()->prepare($sql);
            $stmt->bindParam(':desc', $taskdesc);
            $stmt->execute();
        }
    }

    public function UpdateExistingTasks(array $tasks)
    {
        $sql = 'UPDATE tasks SET `status` = :status WHERE `id` = :id';
        foreach ($tasks as $key => $value) {
            if ($value !== 'on' || !is_int($key)) {
                continue;
            }
            $stmt = $this->dbConnection->getDb()->prepare($sql);
            $stmt->bindParam(':status', $this->GetTaskStatus($value));
            $stmt->bindParam(':id', $key);
            $stmt->execute();
        }
    }

    private function GetTaskStatus($status)
    {
        switch ($status) {
            case 'on' :
                return 1;
                break;
            case 'off':
                return 0;
                break;
            default:
                return 0;
                break;
        }
    }

}