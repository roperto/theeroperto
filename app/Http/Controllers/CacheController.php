<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Intervention\Image\Facades\Image;

/**
 * Class CacheController
 * @package App\Http\Controllers
 */
class CacheController extends Controller {
    private $allowedSizes = ['100x75'];

    public function getImage($url) {
        $parameters = $this->getImageParameters($url);
        $this->createCacheDirectory($parameters['cache']);
        $this->generateCachedImage($parameters);
        return response(file_get_contents($parameters['cache']))->header('Content-Type', 'image/png');

        // WITH INTERVENTION -- Not compatible with HostPapa
        // // read source
        // $img = Image::make($sourcePath);
        // $w = $img->width();
        // $h = $img->height();
        // // resize before cropping
        // if (($w / $h) > ($size[0] / $size[1])) {
        // $w = round($w * ($size[1] / $h));
        // $h = $size[1];
        // }
        // else {
        // $h = round($h * ($size[0] / $w));
        // $w = $size[0];
        // }
        // $img = $img->resize($w, $h)->crop($size[0], $size[1]);
        // // save cache and show it
        // $img->save($cachePath);
        // return $img->response();
    }

    private function getImageParameters($url) {
        $originalImagesBasePath = public_path().'/images/';
        $originalImageDirectory = $originalImagesBasePath.dirname($url);

        $requestedFileParts = explode('.', basename($url));
        if (count($requestedFileParts) != 3) {
            abort(400, 'Invalid file.');
        }

        list($name, $size, $extension) = $requestedFileParts;
        if ($extension != 'png') {
            abort(400, 'Invalid file type.');
        }
        if (!in_array($size, $this->allowedSizes)) {
            abort(400, 'Invalid size.');
        }

        $originalImagePath = realpath($originalImageDirectory.'/'.$name.'.'.$extension);
        if ($originalImagePath === false) {
            abort(404, 'File not found.');
        }

        $cachedImagesBasePath = public_path().'/cache/images/';
        $cachedImagePath = $cachedImagesBasePath.$url;

        // paranoid check: prevent directory traversal attack and DOS. If original image is valid, cached is also valid.
        if (substr($originalImagePath, 0, strlen($originalImagesBasePath)) !== $originalImagesBasePath) {
            abort(400, 'Invalid source file.');
        }
        if (file_exists($cachedImagePath)) {
            abort(500, 'Cache already exists.');
        }

        return [
            'original' => $originalImagePath,
            'cache' => $cachedImagePath,
            'size' => $size,
        ];
    }

    private function createCacheDirectory($cache) {
        $dir = dirname($cache);
        if (!file_exists($dir) && !mkdir($dir, 0777, true)) {
            abort(500, 'Invalid cache path.');
        }
        if (!is_dir($dir)) {
            abort(500, 'Cache directory not found.');
        }
    }

    private function generateCachedImage($parameters) {
        // calculate size
        $size = explode('x', $parameters['size']);
        list($w, $h) = getimagesize($parameters['original']);
        $crop_w = $w;
        $crop_h = $h;
        if (($w / $h) > ($size[0] / $size[1])) {
            $crop_w = round($crop_h * $size[0] / $size[1]);
        } else {
            $crop_h = round($crop_w * $size[1] / $size[0]);
        }
        $crop_x = round(($w - $crop_w) / 2);
        $crop_y = round(($h - $crop_h) / 2);
        // return "src:[w={$w} h={$h}] crop:[w={$crop_w} h={$crop_h} x={$crop_x} y={$crop_y}] size:[w={$size[0]} h={$size[1]}]";
        // open source and create resized
        $src = imagecreatefrompng($parameters['original']);
        $dst = imagecreatetruecolor($size[0], $size[1]);
        imagecopyresampled($dst, $src, 0, 0, $crop_x, $crop_y, $size[0], $size[1], $crop_w, $crop_h);
        imagedestroy($src);
        imagepng($dst, $parameters['cache'], 9);
        imagedestroy($dst);
    }
}
