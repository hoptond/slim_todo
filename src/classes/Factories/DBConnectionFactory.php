<?php

namespace Todo\Factories;

use Todo\DBConnection;

class DBConnectionFactory
{
    public function __invoke()
    {
        $db = new \PDO('mysql:dbname=todo;host=192.168.20.20','root');
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return new DBConnection($db);
    }

}