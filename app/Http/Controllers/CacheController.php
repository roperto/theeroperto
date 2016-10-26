<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Routing\Controller;
use Intervention\Image\Facades\Image;

class CacheController extends Controller {
    private $allowedSizes = ['100x75'];

    public function getImage($url) {
        // root folders
        $rootImages = public_path().'/images/';
        $rootCache = public_path().'/cache/images/';
        // fetch information
        $sourcePath = $rootImages.$url;
        $sourceDir = dirname($sourcePath);
        $sourceFile = explode('.', basename($sourcePath));
        if (count($sourceFile) != 3)
            abort(400, 'Invalid file name.');
        if ($sourceFile[2] != 'png')
            abort(400, 'Invalid file type.');
        if (!in_array($sourceFile[1], $this->allowedSizes))
            abort(400, 'Invalid size.');
        $size = explode('x', $sourceFile[1]);
        $sourceFile = $sourceFile[0].'.'.$sourceFile[2];
        $sourcePath = realpath($sourceDir.'/'.$sourceFile);
        if ($sourcePath === false)
            abort(404, 'Cannot find source.');
        $cachePath = $rootCache.$url;
        // paranoid check: prevent directory traversal attack and DOS
        if (substr($sourcePath, 0, strlen($rootImages)) !== $rootImages)
            abort(400, 'Invalid source.');
        if (substr($cachePath, 0, strlen($rootCache)) !== $rootCache)
            abort(400, 'Invalid cache.');
        if (file_exists($cachePath))
            abort(500, 'Cache already exists.');
        // create output dir
        $dir = dirname($cachePath);
        if (!file_exists($dir)) {
            if (!mkdir($dir, 0777, true))
                abort(500, 'Invalid path.');
        }
        if (!is_dir($dir))
            abort(500, 'Path is not a directory.');
        // calculate size
        list($w, $h) = getimagesize($sourcePath);
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
        $src = imagecreatefrompng($sourcePath);
        $dst = imagecreatetruecolor($size[0], $size[1]);
        imagecopyresampled($dst, $src, 0, 0, $crop_x, $crop_y, $size[0], $size[1], $crop_w, $crop_h);
        imagedestroy($src);
        imagepng($dst, $cachePath, 9);
        imagedestroy($dst);
        return response(file_get_contents($cachePath))->header('Content-Type', 'image/png');

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
}
