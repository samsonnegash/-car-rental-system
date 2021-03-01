	

Runner.pages.PageSettings.addPageEvent('carscars', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	if(proxy["email"]){
	var win = Runner.displayPopup( {
		html: "<span style='width:100%;text-align:center;'><p>Email send to <b>"+proxy["email"]+"</b></p>",
		width: 300,
		height: 130,
		header: "Message"
	});
};
});
	

Runner.pages.PageSettings.addPageEvent('carscars', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	lightGallery(document.getElementById("lightgallery"),{hash:false});
;
});

//	AJAX snippets
Runner.pages.ajaxEvents["carscars_click_row"] = function( pageObj, proxy, pageid, inlineRow, inlineObject ) { 
	var params = {}, 
		result = {}, 
		ret, reqParams, fieldsData = {},
		row = new Runner.AjaxRow( pageObj, inlineRow ),
		ajax = new Runner.form.Button({ id: 'carscars_click_row', btnName: 'carscars_click_row' }),
		before = function() {
			location.href=$("#viewLink"+row.row.id).attr("href");
return false;
		},
		after = function() {
			
		},
		submit = function() {
			params["table"] = "carscars";
			params["masterTable"] = pageObj.masterTable;
		
			params["fieldsData"] = {};
			( Runner.controls.ControlStorage.byId( inlineRow.id ) || [] ).forEach( function( ctrl ) {
				if ( !( ctrl instanceof  Runner.controls.MultiUploadField ) && !( ctrl instanceof Runner.controls.FileControl ) ) {
					params["fieldsData"][ ctrl.fieldName ] = ctrl.getValue();
				}
			});	
			
			reqParams = {
				params: JSON.stringify( params ), 
				keys: JSON.stringify( inlineRow.keys ), 
				event: "carscars_click_row"	
			};
			
			$.post( Runner.getPageUrl("buttonhandler"), reqParams, function( rawResult ) {
				try {
					result = JSON.parse( rawResult );
				} catch(e) {				
					Runner.displayGenericAjaxError( rawResult );				
				}
			
				// execute EventAfter code
				after.call( pageObj );
			})
			.fail( function( jqXHR, textStatus, errorThrown ) {
				Runner.displayGenericAjaxError( jqXHR.responseText || textStatus + ' ' + errorThrown  );
			});
		};
		
	ajax.submitHandler = submit;
	ajax.submit = submit;
	ret = before.call( pageObj );
	if ( ret === false ) {
		return;
	}
	submit();

}

// fields events
