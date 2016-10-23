function showPhotoSwipe(element) {
	// create items
	$element = $(element);
	var items = [];
	var index = parseInt($element.data('ps-index'));
	var link = $element.parent().find('a').each(function () {
		var a = $(this);
		var img = a.find('img')[0];
		var size = a.data('ps-size').split('x');
		items.push({
			src: a.attr('href'),
			w: size[0],
			h: size[1],
			title: img.alt
		});
	});
	// init and show
	var pswp = document.querySelectorAll('.pswp')[0];
	if (!pswp) {
		console.error('PhotoSwipe HTML not found, opening picture...');
		return true; // open picture
	}
	var ps = new PhotoSwipe(pswp, PhotoSwipeUI_Default, items, {
		index: index,
		showHideOpacity:true,
		getThumbBoundsFn:false
	});
	ps.init();
	// do not follow click href
	return false;
}

function showPhotoSwipeGroup(element) {
	// create items
	$element = $(element);
	var index = parseInt($element.data('ps-index'));
	var group = $element.data('ps-group');
	var items = [];
	var link = $('a[data-ps-group="'+group+'"]').each(function () {
		var a = $(this);
		var img = a.find('img')[0];
		var size = a.data('ps-size').split('x');
		var title = a.parent().parent().contents()[0].nodeValue.trim();
		items.push({
			src: a.attr('href'),
			w: size[0],
			h: size[1],
			title: title
		});
	});
	// init and show
	var pswp = document.querySelectorAll('.pswp')[0];
	if (!pswp) {
		console.error('PhotoSwipe HTML not found, opening picture...');
		return true; // open picture
	}
	var ps = new PhotoSwipe(pswp, PhotoSwipeUI_Default, items, {
		index: index,
		showHideOpacity:true,
		getThumbBoundsFn:false
	});
	ps.init();
	// do not follow click href
	return false;
}

// make videos responsive
$(document).ready(function () {
	console.log('Preparing responsive videos...');

	var videos = $("iframe[src^='//www.youtube.com']");

	videos.each(function () {
		$(this).data('aspectRatio', this.height / this.width)
			.removeAttr('height')
			.removeAttr('width');
	});

	var resize = function() {
		videos.each(function() {
			var $this = $(this);
			var width = $this.parent().width();
			$this.width(width).height(width * $this.data('aspectRatio'));
		});
	}
	
	// set event and execute once
	$(window).resize(resize);
	resize();
});

// set active menu items
$(document).ready(function () {
	console.log('Activating menu items...');
	$('nav.check-active').each(function () {
		var checkActive = $(this);
		var found = null; // only apply to the last one (best match)
		checkActive.find('a').each(function () {
			if (window.location.href.split('#')[0].startsWith(this.href)) {
				found = this;
			}
		});
		found = $(found);
		found.parent().addClass('active');
		found = found.parent().parent();
		if (found.prop('nodeName') == 'UL') found.parent().addClass('active');
	});
});

// bootstrap tooltips
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});