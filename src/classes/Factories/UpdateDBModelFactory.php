<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 22/11/2018
 * Time: 16:06
 */

namespace Todo\Factories;


use Todo\Models\UpdateDBModel;

class UpdateDBModelFactory
{
    public function __invoke($c)
    {
        $db = $c->get('DBConnection');
        return new UpdateDBModel($db);
    }
}