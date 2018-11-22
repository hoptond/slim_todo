<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 22/11/2018
 * Time: 15:39
 */

namespace Todo\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Todo\DBConnection;

class UpdateListController
{
    private $logger;
    private $renderer;
    private $dbConnection;

    public function __construct($logger, $renderer, $dbConnection)
    {
        $this->logger = $logger;
        $this->renderer = $renderer;
        $this->dbConnection = $dbConnection;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $this->logger->info("Slim-Skeleton '/' route");
        if (isset($_POST['new_task'])) {
            if (trim($_POST['new_task']) !== '') {
                $this->dbConnection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $sql = 'INSERT INTO tasks (`desc`,`status`) VALUES (:desc, 0)';
                $stmt = $this->dbConnection->prepare($sql);
                $stmt->bindParam(':desc', $_POST['new_task']);
                $stmt->execute();
            }
        }
        header('Location:/');
    }
}