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
use Todo\Models\UpdateDBModel;

class UpdateListController
{
    private $logger;
    private $renderer;
    private $updateDBModel;

    public function __construct($logger, $renderer, UpdateDBModel $updateDBModel)
    {
        $this->logger = $logger;
        $this->renderer = $renderer;
        $this->updateDBModel = $updateDBModel;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $this->logger->info("Slim-Skeleton '/' route");
        if (isset($_POST['new_task'])) {
            $this->updateDBModel->AddNewTask($_POST['new_task']);
        }
        unset($_POST['new_task']);
        $this->updateDBModel->UpdateExistingTasks($_POST);
        return $response->withRedirect('/');
    }
}