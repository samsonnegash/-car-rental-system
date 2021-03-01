	

Runner.pages.PageSettings.addPageEvent('carsform', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	if (proxy['saved']) {
   window.parent.location.reload();
}

lightGallery(document.getElementById("lightgallery"),{hash:false});

// Place event code here.
// Use "Add Action" button to add code snippets.;
});

//	AJAX snippets

// fields events
