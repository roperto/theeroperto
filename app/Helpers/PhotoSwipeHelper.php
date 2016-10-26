<?php
namespace App\Helpers;

class PhotoSwipeHelper {
	private function __construct() { }
	
	private static $used = false;
	
	private static $groups = [];
	public static function hasGroup($group='gallery') {
		return array_key_exists($group, self::$groups);
	}
	
	public static function generateIncludes() {
		if (!self::$used) return;
		
		return <<<'EOD'
<link rel="stylesheet" href="/assets/photoswipe/photoswipe.css"> 
<link rel="stylesheet" href="/assets/photoswipe/default-skin/default-skin.css"> 
<script src="/assets/photoswipe/photoswipe.min.js"></script> 
<script src="/assets/photoswipe/photoswipe-ui-default.min.js"></script> 
EOD;
	}
	
	public static function generateHTML() {
		if (!self::$used) return;
	
		return <<<'EOD'
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
EOD;
	}
	
	public static function generatePictures($size, $base, $pics) {
		self::$used = true;

		$r = '<div class="pictures-box pictures-'.$size.'">';
		for ($i=0; $i<count($pics); $i++) {
            $p = $pics[$i];

            $filepath = $base.$p[0].'.png';
            $sizepath = $base.$p[0].'.'.$size.'.png';

            // TODO move everything to cache
            if (!file_exists(public_path().$sizepath)) {
                $sizepath = 'cache/'.$sizepath;
            }

			$r .= '<a href="'.url($filepath).'" '
				.'data-ps-size="'.$p[2].'" data-ps-index="'.$i.'" '
				.'onclick="return showPhotoSwipe(this);">'
				.'<img src="'.url($sizepath).'" '
				.'alt="'.htmlentities($p[1]).'" /></a>';
		}
		$r .= '</div>';
		return $r;
	}
	
	public static function generateLink($description, $url, $size, $group='gallery') {
		self::$used = true;
		
		// save information for future use (create gallery)
		if (!array_key_exists($group, self::$groups)) self::$groups[$group] = array();
		$index = count(self::$groups[$group]);
		self::$groups[$group][] = ['url'=>$url, 'size'=>$size, 'title'=>$description];
		
		return $description.' <small><a class="screenshot" href="'.url($url.'.png').'"'
			.' data-ps-size="'.$size.'" data-ps-index="'.$index.'" data-ps-group="'.$group.'" '
			.' onclick="return showPhotoSwipeGroup(this);">'
			.'<span class="glyphicon glyphicon-camera"></span> Screenshot</a></small>';
	}

	public static function generateLinkGallery($size, $group='gallery') {
		if (!self::hasGroup($group)) throw new \InvalidArgumentException('Group not found.');
		$group = self::$groups[$group];

		$r = '<div class="pictures-box pictures-'.$size.'">';
		for ($i=0; $i<count($group); $i++) {
			$p = $group[$i];
			$r .= '<a href="'.url($p['url'].'.png').'" '
				.'data-ps-size="'.$p['size'].'" data-ps-index="'.$i.'" '
				.'onclick="return showPhotoSwipe(this);">'
				.'<img src="'.url("cache/{$p['url']}.{$size}.png").'" '
				.'alt="'.$p['title'].'" /></a>';
		}
		$r .= '</div>';
		return $r;
	}
}