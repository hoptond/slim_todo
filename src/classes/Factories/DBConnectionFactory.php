<?php

namespace Todo\Factories;

use Todo\DBConnection;

class DBConnectionFactory
{
    public function __invoke()
    {
        return new DBConnection(new \PDO('mysql:dbname=danH_CMS;host=192.168.20.20','root'));
    }

}