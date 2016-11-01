<?php
namespace App\Models;

/**
 * Class PortfolioProjectFeature
 */
class PortfolioProjectFeatureGroup {
    /** @var string */
    private $title;

    /** @var PortfolioProjectFeature[] */
    private $features;

    /**
     * PortfolioProjectFeatureGroup constructor.
     * @param string $title
     * @param array $features
     */
    public function __construct(string $title, array $features) {
        $this->title = $title;
        $this->features = $features;
    }

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getFeatures() {
        return $this->features;
    }
}
