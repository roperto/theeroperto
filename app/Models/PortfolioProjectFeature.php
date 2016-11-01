<?php
namespace App\Models;

use InvalidArgumentException;

/**
 * Class PortfolioProjectFeature
 */
class PortfolioProjectFeature {
    /** @var string */
    private $title;

    /** @var string */
    private $imageFile;

    /** @var int */
    private $imageWidth;

    /** @var int */
    private $imageHeight;

    /**
     * PortfolioProjectFeature constructor.
     * @param string $title
     * @param string $imageFile (optional)
     * @param int $imageWidth (optional)
     * @param int $imageHeight (optional)
     */
    public function __construct(string $title, string $imageFile = null, int $imageWidth = null, int $imageHeight = null) {
        $this->title = $title;
        if (!is_null($imageFile)) {
            if (is_null($imageWidth) || is_null($imageHeight)) {
                throw new InvalidArgumentException('If an image file is provided, width and height must also be provided.');
            }
            $this->imageFile = $imageFile;
            $this->imageWidth = $imageWidth;
            $this->imageHeight = $imageHeight;
        }
    }

    /**
     * @return bool
     */
    public function hasImage(): bool {
        return !is_null($this->imageFile);
    }

    /**
     * @return string
     */
    public function getImageFile(): string {
        return $this->imageFile;
    }

    /**
     * @return string Size as WIDTHxHEIGHT.
     */
    public function getSize(): string {
        return $this->imageWidth.'x'.$this->imageHeight;
    }

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }
}
