<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\MenuItem;

class MenuItemTest extends TestCase
{
	protected function checkObject($short, $long, $url, $sub, $obj, $test) {
		$this->assertEquals($short, $obj->getShortTitle(), $test.' getShortTitle()');
		$this->assertEquals($long, $obj->getLongTitle(), $test.' getLongTitle()');
		$this->assertEquals($url, $obj->getUrl(), $test.' getUrl()');
		$this->assertEquals($sub, $obj->getSubItems(), $test.' getSubItems()');
	}

    public function testCreate()
    {
		$a = MenuItem::create();
		$this->checkObject('-', '-', '#', [], $a, 'create()');
		
		$b = MenuItem::create('title_and_url');
		$this->checkObject('title_and_url', 'title_and_url', 'title_and_url', [], $b, 'create($titles_url)');
		
		$c = MenuItem::create('title', 'url');
		$this->checkObject('title', 'title', 'url', [], $c, 'create($title, $url)');

		$d = MenuItem::create('short', 'long', 'url');
		$this->checkObject('short', 'long', 'url', [], $d, 'create($short, $long, $url)');

		$e = MenuItem::create('title_and_url', [$a, $b]);
		$this->checkObject('title_and_url', 'title_and_url', 'title_and_url', [$a, $b], $e, 'create($titles_url, $submenu)');

		$f = MenuItem::create('title', 'url', [$b, $c]);
		$this->checkObject('title', 'title', 'url', [$b, $c], $f, 'create($titles, $url, $submenu)');

		$g = MenuItem::create('short', 'long', 'url', [$a, $b, $c]);
		$this->checkObject('short', 'long', 'url', [$a, $b, $c], $g, 'create($short, $long, $url, $submenu)');
	}
	
	/**
     * @expectedException InvalidArgumentException
     */
	 public function testException1() {
		MenuItem::create([]);
	}

	/**
     * @expectedException InvalidArgumentException
     */
	public function testException2() {
		MenuItem::create([], 'title');
	}

	/**
     * @expectedException InvalidArgumentException
     */
	public function testException3() {
		MenuItem::create('title', [], 'url');
	}

	/**
     * @expectedException InvalidArgumentException
     */
	public function testException4() {
		MenuItem::create('short', 'long', [], 'url');
	}

	/**
     * @expectedException InvalidArgumentException
     */
	public function testException5() {
		MenuItem::create('short', 'long', 'url', [], 'extra');
	}

	/**
     * @expectedException InvalidArgumentException
     */
	public function testException6() {
		MenuItem::create('titles_url', ['a']);
	}

	/**
     * @expectedException InvalidArgumentException
     */
	public function testException7() {
		MenuItem::create('titles_url', [new stdClass()]);
	}
}
