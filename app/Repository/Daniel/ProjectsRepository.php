<?php
namespace App\Repository\Daniel;

use App\Models\Project;

/**
 * Class ProjectsRepository
 *
 * Hardcoded repository for Daniel's portfolio projects.
 */
final class ProjectsRepository {
    /**
     * Static factory.
     */
    private function __construct() {
    }

    /**
     * Creates Daniel's Projects array.
     * @return array
     */
    public static function create() : array {
        $ps = [
            new Project('University', 'Bachelor & Masters',
                'Projects developed as study or assignments during my bachelor course at UFSC/FASP or my masters at UTS.'),
            new Project('GNLC', 'Slot Car Lap Counter',
                'Open-source Hardware and Software to manage Slot Car Races. Includes pictures and videos on how to DIY.'),
        ];

        $projects = [];
        foreach ($ps as $p) {
            $projects[$p->getKey()] = $p;
        }

        return $projects;
    }
}
