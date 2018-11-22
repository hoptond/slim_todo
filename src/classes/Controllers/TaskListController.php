<?php

namespace Todo\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class TaskListController
{
    private $logger;
    private $renderer;
    private $taskList;

    public function __construct($logger, $renderer, $tasklist)
    {
        $this->logger = $logger;
        $this->renderer = $renderer;
        $this->taskList = $tasklist;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $this->logger->info("Slim-Skeleton '/' route");
        $args['tasklist'] = $this->taskList;
        // Render index view
        return $this->renderer->render($response, 'index.phtml', $args);
    }

}