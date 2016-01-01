<?php

namespace SynologyGooglePhotosSync;

class Database
{
	private $databaseFactory;
	private $dbPath;

	private $db;

    public function __construct(DatabaseFactory $databaseFactory, $path)
    {
        $this->databaseFactory = $databaseFactory;
        $this->dbPath = $path;
    }

    public function init()
    {  
        $this->db = $this->databaseFactory->init($this->dbPath);

        $this->db->exec('CREATE TABLE IF NOT EXISTS syno (filename STRING, path STRING)');
        $this->db->exec('CREATE TABLE IF NOT EXISTS google (filename STRING, path STRING)');
    }
}
