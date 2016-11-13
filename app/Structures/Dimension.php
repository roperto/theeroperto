<?php
namespace App\Structures;

/**
 * Immutable Class Dimension2D
 * @package App\Structures
 */
final class Dimension {
    /** @var int */
    private $width;

    /** @var int */
    private $height;

    /**
     * Dimension constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height) {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @param $dimension
     * @return Dimension
     */
    public static function createFromString($dimension) {
        list($width, $height) = explode('x', $dimension);
        return new Dimension($width, $height);
    }

    /**
     * @return int
     */
    public function getWidth(): int {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int {
        return $this->height;
    }

    /**
     * @param $width
     * @return Dimension
     */
    public function withWidth($width) : Dimension {
        return new Dimension($width, $this->height);
    }

    /**
     * @param $height
     * @return Dimension
     */
    public function withHeight($height) : Dimension {
        return new Dimension($this->width, $height);
    }

    /**
     * Returns the object itself, it is immutable.
     * @return $this
     */
    public function __clone() {
        return $this;
    }
}
