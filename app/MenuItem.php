<?php
namespace App;

class MenuItem {

	/**
	 * Creates an MenuItem
	 * 
	 * @param
	 *    create() to create a separator
	 *    create($titles_url)
	 *    create($title, $url)
	 *    create($short, $long, $url)
	 *    create($titles_url, $submenu)
	 *    create($titles, $url, $submenu)
	 *    create($short, $long, $url, $submenu)
	 * 
	 * @return
	 */
	public static function create() {
		$n = func_num_args();
		$a = func_get_args();
		if ($n == 0) return new MenuItem('-', '-', '#', []);
		if ($n == 1) return new MenuItem($a[0], $a[0], $a[0], []);
		if ($n == 2) {
			if (is_array($a[1])) return new MenuItem($a[0], $a[0], $a[0], $a[1]);
			return new MenuItem($a[0], $a[0], $a[1], []);
		}
		if ($n == 3) {
			if (is_array($a[2])) return new MenuItem($a[0], $a[0], $a[1], $a[2]);
			return new MenuItem($a[0], $a[1], $a[2], []);
		}
		if ($n == 4) {
			return new MenuItem($a[0], $a[1], $a[2], $a[3]);
		}
		throw new \InvalidArgumentException('Invalid parameter count.');
	}

	private $longTitle;
	public function getLongTitle() { return $this->longTitle; }

	private $shortTitle;
	public function getShortTitle() { return $this->shortTitle; }

	private $url;
	public function getUrl() { return $this->url; }

	private $submenu;
	public function addSubItem($item) { $this->submenu[] = $item; }
	public function hasSubItems() { return (count($this->submenu) > 0); }
	public function getSubItems() { return $this->submenu; }
	
	public function isSeparator() {
		return ($this->longTitle == '-')
			&& ($this->shortTitle == '-')
			&& ($this->url == '#');
	}
	
	private function __construct($shortTitle, $longTitle, $url, $submenu) {
		if (!is_string($shortTitle)) throw new \InvalidArgumentException('Invalid short title.');
		if (!is_string($longTitle)) throw new \InvalidArgumentException('Invalid long title.');
		if (!is_string($url)) throw new \InvalidArgumentException('Invalid url.');
		if (!is_array($submenu)) throw new \InvalidArgumentException('Invalid submenu.');
		
		foreach ($submenu as $sm) {
			if (gettype($sm) != 'object') throw new \InvalidArgumentException('Invalid submenu item ('.gettype($sm).'), not an object.');
			if (!($sm instanceof MenuItem)) throw new \InvalidArgumentException('Invalid submenu item ('.get_class($sm).'), not an instance of MenuItem.');
		}

		$this->shortTitle = $shortTitle;
		$this->longTitle = $longTitle;
		$this->url = $url;
		$this->submenu = $submenu;
	}
}