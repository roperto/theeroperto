<?php

namespace App\Structures;

/**
 * Class CachedImageParameters
 * @package App\Structures
 */
class CachedImageParameters {
    /** @var string */
    private $originalImagePath;

    /** @var string */
    private $cachedImagePath;

    /** @var Dimension */
    private $size;

    public function __construct(string $originalImagePath, string $cachedImagePath, Dimension $size) {
        $this->originalImagePath = $originalImagePath;
        $this->cachedImagePath = $cachedImagePath;
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getOriginalImagePath(): string {
        return $this->originalImagePath;
    }

    /**
     * @param string $originalImagePath
     */
    public function setOriginalImagePath(string $originalImagePath) {
        $this->originalImagePath = $originalImagePath;
    }

    /**
     * @return string
     */
    public function getCachedImagePath(): string {
        return $this->cachedImagePath;
    }

    /**
     * @param string $cachedImagePath
     */
    public function setCachedImagePath(string $cachedImagePath) {
        $this->cachedImagePath = $cachedImagePath;
    }

    /**
     * @return Dimension
     */
    public function getSize(): Dimension {
        return $this->size;
    }

    /**
     * @param Dimension $size
     */
    public function setSize(Dimension $size) {
        $this->size = $size;
    }
}
