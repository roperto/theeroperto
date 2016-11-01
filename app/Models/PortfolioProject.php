<?php
namespace App\Models;

/**
 * Class PortfolioProject
 *
 * Holds the information about an specific portfolio project.
 */
class PortfolioProject {
    /** @var string Keyword to identify the project. */
    private $key;

    /** @var string Project title. */
    private $title;

    /** @var MonthYear Started date. */
    private $started;

    /** @var string Project summary. */
    private $summary = '';

    /** @var string Project objective. */
    private $objective = '';

    /** @var string Responsibilities within project. */
    private $responsibilities = '';

    /** @var string HTML for an embedded video. */
    private $videoHTML = '';

    /** @var string[] Technologies involved. */
    private $technologies = [];

    /** @var PortfolioProjectFeatureGroup[] Project feature groups. */
    private $featureGroups = [];

    /**
     * PortfolioProject constructor.
     * @param string $key
     * @param string $title
     * @param MonthYear $started
     */
    public function __construct(string $key, string $title, MonthYear $started) {
        $this->key = $key;
        $this->title = $title;
        $this->started = $started;
    }

    /**
     * @return string
     */
    public function getTechnologiesSummary() {
        return implode(", ", array_keys($this->technologies));
    }

    /**
     * @return string[]
     */
    public function getTechnologiesSorted() {
        $sorted = $this->technologies;
        ksort($sorted, SORT_STRING | SORT_NATURAL);
        return $sorted;
    }

    /**
     * @return string
     */
    public function getKey() : string {
        return $this->key;
    }

    /**
     * @param string $keyword
     * @param string $description
     * @return PortfolioProject
     */
    public function addTechnology(string $keyword, string $description): PortfolioProject {
        $this->technologies[$keyword] = $description;
        return $this;
    }

    /**
     * @return MonthYear
     */
    public function getStarted(): MonthYear {
        return $this->started;
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

    /**
     * @param string $summary
     * @return PortfolioProject
     */
    public function setSummary(string $summary) : PortfolioProject {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjective(): string {
        return $this->objective;
    }

    /**
     * @param string $objective
     * @return PortfolioProject
     */
    public function setObjective(string $objective): PortfolioProject {
        $this->objective = $objective;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponsibilities(): string {
        return $this->responsibilities;
    }

    /**
     * @param string $responsibilities
     * @return PortfolioProject
     */
    public function setResponsibilities(string $responsibilities): PortfolioProject {
        $this->responsibilities = $responsibilities;
        return $this;
    }

    /**
     * @param PortfolioProjectFeatureGroup $group
     * @return PortfolioProject
     */
    public function addFeatureGroup(PortfolioProjectFeatureGroup $group): PortfolioProject {
        $this->featureGroups[] = $group;
        return $this;
    }

    /**
     * @return PortfolioProjectFeatureGroup[]
     */
    public function getFeatureGroups(): array {
        return $this->featureGroups;
    }

    /**
     * @param string $html
     * @return $this
     */
    public function setVideoHTML(string $html) {
        $this->videoHTML = $html;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoHTML(): string {
        return $this->videoHTML;
    }
}
