$(document).ready(function(){
	iFrameOn();	
});
$(window).load(function(){
	get_data();
	$("#iworking_experience").contents().find("head").append($("<style type='text/css'>body{padding:0px;}</style>"));
	$("#iinfo_introduce").contents().find("head").append($("<style type='text/css'>body{padding:0px;}</style>"));
});
function  iFrameOn(){
	iinfo_introduce.document.designMode = 'On';
	iworking_experience.document.designMode = 'On';
}

function get_data(){
	
	var doc = document.getElementById('iinfo_introduce').contentWindow.document;
		doc.open();
		doc.write($("#info_introduce").val());
		doc.close();
		
		
	var doc = document.getElementById('iworking_experience').contentWindow.document;
		doc.open();
		doc.write($("#working_experience").val());
		doc.close();	
}	

function i_Bold(){

	iinfo_introduce.document.execCommand('bold',false,null);

}
function i_Underline(){

	iinfo_introduce.document.execCommand('underline',false,null);

}
function i_Italic(){

	iinfo_introduce.document.execCommand('italic',false,null);

}
function i_UnorderedList(){
	iinfo_introduce.document.execCommand('InsertOrderedList',false,"newOL");
}
function i_OrderedList(){
	iinfo_introduce.document.execCommand('InsertUnorderedList',false,"newUL");
}


function w_Bold(){

	iworking_experience.document.execCommand('bold',false,null);

}
function w_Underline(){

	iworking_experience.document.execCommand('underline',false,null);

}
function w_Italic(){

	iworking_experience.document.execCommand('italic',false,null);

}
function w_UnorderedList(){
	iworking_experience.document.execCommand('InsertOrderedList',false,"newOL");
}
function w_OrderedList(){
	iworking_experience.document.execCommand('InsertUnorderedList',false,"newUL");
}


function submit_form(){
	var theForm = document.getElementById("frmmaid");
	theForm.elements['info_introduce'].value=window.frames['iinfo_introduce'].document.body.innerHTML;
	theForm.elements['working_experience'].value=window.frames['iworking_experience'].document.body.innerHTML;
	theForm.submit();
}	
