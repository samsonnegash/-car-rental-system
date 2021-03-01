	

Runner.pages.PageSettings.addPageEvent('carsbcolor', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$("td[data-field=rgb]").each(function(){
	if($(this).html())
		$(this).css("backgroundColor",$(this).html());
});;
});

//	AJAX snippets

// fields events
