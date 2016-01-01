<?php

namespace spec\SynologyGooglePhotosSync;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DatabaseSpec extends ObjectBehavior
{
	private $databaseFactoryMock;

	function let(\SynologyGooglePhotosSync\DatabaseFactory $databaseFactory)
	{
		$this->databaseFactoryMock = $databaseFactory;
		$this->beConstructedWith( $databaseFactory, '/path/to/database.sqlite');
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('SynologyGooglePhotosSync\Database');
    }

    function it_should_get_a_new_sqlite3_object_when_init_is_called(\SQLite3 $db)
    {
    	$this->databaseFactoryMock->init('/path/to/database.sqlite')->shouldBeCalled()->willReturn($db);
    	$this->init();
    }

    function it_should_create_all_the_tables_if_they_do_not_exist_on_init(\SQLite3 $db)
    {
    	$this->databaseFactoryMock->init('/path/to/database.sqlite')->willReturn($db);

    	$db->exec('CREATE TABLE IF NOT EXISTS syno (filename STRING, path STRING)')->shouldBeCalled();
    	$db->exec('CREATE TABLE IF NOT EXISTS google (filename STRING, path STRING)')->shouldBeCalled();

    	$this->init();
    }
}
