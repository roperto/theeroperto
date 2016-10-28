<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Project;

class ProjectTest extends TestCase
{
    public function testConstructor()
    {
		$p = new Project('Key', 'Title', '1999-01');
		$this->assertEquals($p->key, 'Key');
		$this->assertEquals($p->title, 'Title');
		$this->assertEquals($p->started, '1999-01');
		$this->assertEquals($p->summary, '');
		$this->assertEquals($p->objective, '');
		$this->assertEquals($p->responsabilities, '');
		$this->assertEquals(array(), $p->technology);
		$this->assertEquals(array(), $p->features);
    }
	
	public function testGetStartedText() {
		$this->assertEquals('January, 1999', (new Project('Key', 'Title', '1999-01'))->getStartedText());
		$this->assertEquals('February, 2000', (new Project('Key', 'Title', '2000-02'))->getStartedText());
		$this->assertEquals('March, 2001', (new Project('Key', 'Title', '2001-03'))->getStartedText());
		$this->assertEquals('April, 2002', (new Project('Key', 'Title', '2002-04'))->getStartedText());
		$this->assertEquals('May, 2003', (new Project('Key', 'Title', '2003-05'))->getStartedText());
		$this->assertEquals('June, 2004', (new Project('Key', 'Title', '2004-06'))->getStartedText());
		$this->assertEquals('July, 2005', (new Project('Key', 'Title', '2005-07'))->getStartedText());
		$this->assertEquals('August, 2006', (new Project('Key', 'Title', '2006-08'))->getStartedText());
		$this->assertEquals('September, 2007', (new Project('Key', 'Title', '2007-09'))->getStartedText());
		$this->assertEquals('October, 2008', (new Project('Key', 'Title', '2008-10'))->getStartedText());
		$this->assertEquals('November, 2009', (new Project('Key', 'Title', '2009-11'))->getStartedText());
		$this->assertEquals('December, 2010', (new Project('Key', 'Title', '2010-12'))->getStartedText());
	}
	
	public function testGetTechnologyKeys() {
		$p = new Project('Key', 'Title', '2000-01');
		$this->assertEquals('', $p->getTechnologiesSummary());
		$p->technology = [
			'A' => 'First Tech A',
			'B' => 'Second Tech B',
			'E' => 'Third Tech E',
			'D' => 'Fourth Tech D',
			'c' => 'Fifth Tech c',
		];
		$this->assertEquals('A, B, E, D, c', $p->getTechnologiesSummary());
	}
	
	public function testGetTechnologiesSorted() {
		$p = new Project('Key', 'Title', '2000-01');
		$this->assertEquals(array(), $p->getTechnologiesSorted());
		$p->technology = [
			'A' => 'First Tech A',
			'B' => 'Second Tech B',
			'E' => 'Third Tech E',
			'D' => 'Fourth Tech D',
			'c' => 'Fifth Tech c',
		];
		$sorted = [
			'A' => 'First Tech A',
			'B' => 'Second Tech B',
			'c' => 'Fifth Tech c',
			'D' => 'Fourth Tech D',
			'E' => 'Third Tech E',
		];
		$this->assertEquals($sorted, $p->getTechnologiesSorted());
	}
}
