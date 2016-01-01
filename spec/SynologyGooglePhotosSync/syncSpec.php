<?php

namespace spec\SynologyGooglePhotosSync;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class syncSpec extends ObjectBehavior
{
	private $databaseMock;

	function let(\SynologyGooglePhotosSync\Database $database)
	{
		$this->databaseMock = $database;
		$this->beConstructedWith($database);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('SynologyGooglePhotosSync\sync');
    }

    function it_should_initialise_the_database_on_invoke()
    {
    	$this->databaseMock->init()->shouldBeCalled();
    	$this->__invoke();	
    }

    function it_should_build_a_database_of_synology_files_on_invoke()
    {
    	$this->__invoke();
    }

    function it_should_build_a_database_of_google_photos_on_invoke()
    {
    	$this->__invoke();
    }

    function it_should_call_the_synology_to_google_photos_sync()
    {
    	$this->__invoke();
    }

    function it_should_call_the_google_photos_to_synology_sync()
    {
    	$this->__invoke();
    }
}
