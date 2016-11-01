<?php
namespace App\Models;

use Iterator;

/**
 * Class Portfolio
 *
 * Holds Portfolio Projects.
 */
class Portfolio implements Iterator {
    /** @var PortfolioProject[] */
    private $projects = [];

    /**
     * @param PortfolioProject $project Adds a new project.
     */
    public function add(PortfolioProject $project) {
        $this->projects[$project->getKey()] = $project;
    }

    /**
     * Sort by projects by date (descending) then by title (ascending).
     */
    public function sortNewestFirst() {
        usort($this->projects, function ($a, $b) {
            $result = MonthYear::compare($a->getStarted(), $b->getStarted());
            $result = -$result; // Make it descending by date.
            if ($result != 0) {
                return $result;
            }
            return strcasecmp($a->getTitle(), $b->getTitle());
        });
    }

    /**
     * Return the current project.
     * @return PortfolioProject|null
     */
    public function current() {
        return current($this->projects);
    }

    /**
     * Move forward to next project.
     */
    public function next() {
        return next($this->projects);
    }

    /**
     * Return the key of the current project.
     * @return PortfolioProject|null
     */
    public function key() {
        return key($this->projects);
    }

    /**
     * Checks if current position is valid.
     * @return boolean
     */
    public function valid() {
        $key = key($this->projects);
        return (($key !== null) && ($key !== false));
    }

    /**
     * Rewind to the first project.
     */
    public function rewind() {
        reset($this->projects);
    }

    /**
     * Get a project by its key.
     * @param string $key
     * @return PortfolioProject|null The project or null if not found.
     */
    public function getProject(string $key): PortfolioProject {
        if (!array_key_exists($key, $this->projects)) {
            return null;
        }
        return $this->projects[$key];
    }
}
