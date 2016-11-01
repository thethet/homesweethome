$(document).ready(function(){
	iFrameOn();
});
$(window).load(function(){
	get_data();
	$("#ititle").contents().find("head").append($("<style type='text/css'>body{padding:0px;}</style>"));
	$("#idescription").contents().find("head").append($("<style type='text/css'>body{padding:0px;}</style>"));
});
function  iFrameOn(){
	ititle.document.designMode = 'On';
	idescription.document.designMode = 'On';
}
function get_data(){
	
	var doc = document.getElementById('ititle').contentWindow.document;
		doc.open();
		doc.write($("#title").val());
		doc.close();
		
	var doc = document.getElementById('idescription').contentWindow.document;
		doc.open();
		doc.write($("#description").val());
		doc.close();	
}	

function i_Bold(){

	ititle.document.execCommand('bold',false,null);

}
function i_Underline(){

	ititle.document.execCommand('underline',false,null);

}
function i_Italic(){

	ititle.document.execCommand('italic',false,null);

}
function i_UnorderedList(){
	ititle.document.execCommand('InsertOrderedList',false,"newOL");
}
function i_OrderedList(){
	ititle.document.execCommand('InsertUnorderedList',false,"newUL");
}

function d_Bold(){

	idescription.document.execCommand('bold',false,null);

}
function d_Underline(){

	idescription.document.execCommand('underline',false,null);

}
function d_Italic(){

	idescription.document.execCommand('italic',false,null);

}
function d_UnorderedList(){
	idescription.document.execCommand('InsertOrderedList',false,"newOL");
}
function d_OrderedList(){
	idescription.document.execCommand('InsertUnorderedList',false,"newUL");
}

function submit_form(){
	var theForm = document.getElementById("frmservice");
	theForm.elements['title'].value=window.frames['ititle'].document.body.innerHTML;
	theForm.elements['description'].value=window.frames['idescription'].document.body.innerHTML;
	theForm.submit();
}	