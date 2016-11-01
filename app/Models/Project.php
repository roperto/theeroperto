<?php
namespace App\Models;

/**
 * Class project
 *
 * Holds the information about an specific portfolio project.
 */
class Project {
    /** @var string Keyword to identify the project. */
    private $key;

    /** @var string Project title. */
    private $title;

    /** @var string Project summary. */
    private $summary = '';

    /**
     * Project constructor.
     * @param string $key
     * @param string $title
     * @param string $summary
     */
    public function __construct($key, $title, $summary) {
		$this->key = $key;
		$this->title = $title;
		$this->summary = $summary;
	}

    /**
     * @return string
     */
    public function getKey(): string {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getSummary(): string {
        return $this->summary;
    }
}
