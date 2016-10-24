<?php
namespace App;

class Project {
	public $key;
	public $title;
	public $started;
	public $summary = '';
	public $objective = '';
	public $responsabilities = '';
	public $video = '';
	public $technology = [];
	public $features = [];
	private $startedText = null;
	
	public function __construct($key, $title, $started=null) {
		$this->key = $key;
		$this->title = $title;
		$this->started = $started;
	}
	
	public function getStartedText() {
		if ($this->startedText == null) {
			list($year, $month) = explode('-', $this->started);
			$month = gregoriantojd((int)$month,1,(int)$year);
			$this->startedText = jdmonthname($month, 1).', '.$year;
		}
		return $this->startedText;
	}
	
	public function getTechnologiesSummary() {
		return implode(", ", array_keys($this->technology));
	}
	
	public function getTechnologiesSorted() {
		$sorted = $this->technology;
		ksort($sorted, SORT_STRING | SORT_NATURAL);
		return $sorted;
	}
}
