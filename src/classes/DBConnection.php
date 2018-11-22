<?php

namespace Todo;


class DBConnection
{
    private $db;

    /**
     * DBConnection constructor.
     * @param \PDO $db
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    /**
     * @return mixed
     */
    public function getDb() : \PDO
    {
        return $this->db;
    }


}