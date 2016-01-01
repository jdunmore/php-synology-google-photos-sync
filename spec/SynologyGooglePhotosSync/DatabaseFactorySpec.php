<?php

namespace spec\SynologyGooglePhotosSync;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DatabaseFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('SynologyGooglePhotosSync\DatabaseFactory');
    }

    function it_should_return_an_sqlite3_database_for_a_given_path()
    {
    	$this->init(':memory:');
    }
}
