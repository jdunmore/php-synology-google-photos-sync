<?php

namespace SynologyGooglePhotosSync;

class DatabaseFactory
{
    public function init($path)
    {
        return new \SQLite3($path);
    }
}
