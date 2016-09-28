/* fixing bug on left menu */
jQuery(window).load(function () {
	jQuery('#leftpanelmenu .mm-listview:eq(0) li').each(function(){
		var $this = jQuery(this);
		$this.find('a:eq(1)').attr('href', $this.find('a:eq(0)').attr('href'));
	});
});