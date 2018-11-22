<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 22/11/2018
 * Time: 16:06
 */

namespace Todo\Factories;


use Todo\Controllers\UpdateListController;

class UpdateListControllerFactory
{
    public function __invoke($c)
    {
        $logger = $c->get('logger');
        $renderer = $c->get('renderer');
        $update = $c->get('UpdateDBModel');
        return new UpdateListController($logger, $renderer, $update);
    }
}