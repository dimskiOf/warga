// Add WYSIWYG editing events into the Text Editor.
var hb_silk_icon_set_blue = $("#htmlbox_silk_icon_set_blue").css("height","300").css("width","600").htmlbox({
    toolbars:[
	     ["cut","copy","paste","separator_dots","bold","italic","underline","strike","sub","sup","separator_dots","undo","redo","separator_dots",
		 "left","center","right","justify","separator_dots","ol","ul","indent","outdent","separator_dots","link","unlink","image"],
		 ["code","removeformat","striptags","separator_dots","quote","paragraph","hr","separator_dots",
			 {icon:"new.png",tooltip:"New",command:function(){hb_silk_icon_set_blue.set_text("<p></p>");}},	 
		  ]
	],
	icons:"silk",
	skin:"blue"
});