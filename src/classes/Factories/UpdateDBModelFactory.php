<?php

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