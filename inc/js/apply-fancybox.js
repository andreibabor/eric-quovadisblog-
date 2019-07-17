jQuery(document).ready(function(){
	if(typeof jQuery('img').fancybox === "function"){
		jQuery('.entry-content').each(function(group){
			jQuery('img', this).each(function(){
				$this = jQuery(this);
				if($this.parents("a").size() == 0){
					$imgSrc = $this.attr('src');
					$path = $imgSrc.substring(0, $imgSrc.lastIndexOf('/'))+"/";
					$filename = $imgSrc.substring($imgSrc.lastIndexOf('/')+1, $imgSrc.length);
					if($filename.indexOf('-') > -1){
						$firstPart = $filename.substring(0, $filename.lastIndexOf('-'));
						$endPart = $filename.substring($filename.lastIndexOf('-'), $filename.length);
						if($endPart.indexOf('x') > -1){
							$filename = $firstPart + $filename.substring($filename.lastIndexOf('.'), $filename.length);
						}
					}
					$href = $path + $filename;
					$anchor = jQuery('<a></a>').append($this.clone()).attr('href', $href).attr('rel', 'main-fancybox-'+group);
					$this.replaceWith($anchor);
					$anchor.addClass('main-fancybox');
				}
			});
			jQuery('a.main-fancybox', this).fancybox();
		});
	}
});