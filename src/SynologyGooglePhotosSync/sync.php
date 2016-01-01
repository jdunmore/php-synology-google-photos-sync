<?php

namespace SynologyGooglePhotosSync;

class sync
{
	private $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function __invoke()
    {
        $this->database->init();
    }
}
