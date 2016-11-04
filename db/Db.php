<?php
namespace Db;

class Db
{
    protected $database;

    public function __construct()
    {
        $this->database = new \PDO('mysql:host=127.0.0.1;dbname=urecord', 'root', '');
    }

    public function execute($sql)
    {
        $sth = $this->database->prepare($sql);
        $res = $sth->execute();
        return $res;
    }

    /**
     * return DB array
     *
     */
    public function query($sql)
    {
        $sth = $this->database->prepare($sql);
        $res = $sth->execute();
        if (false !== $res) {
            return $sth->fetchAll();
        }
        return [];
    }

}
