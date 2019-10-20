$(function(){
	//Dropdown
	$(".dropdown-btn").click(function(){
		$(this).children(".dropdown-cont").toggle();
	});

	//Active item
	var url = $(location).attr("href");
	var urlArr = url.split("/");
	
	var viewName = urlArr[4];

	$(".main-item:contains("+viewName+")").addClass("active");
	$("child-item a:contains("+viewName+")").addClass("active");

	$("child-item .active").parent().show();

	//Disable
	$(".disable").click(function(){
		return false;
	});

	//Delete Confirm
	$(".confirm").click(function(){
		var r = confirm("Are you sure?");
		if(!r) return false;
	});

	//Change user position 
	$("select[position]").change(function(){
		var r = confirm("Are you sure?");
		if(r){
			var id = $(this).attr("id");

			var position = $(this).val();

			$(location).attr("href","/Submit/main.php?n=authorEdit&pos="+position+"&id="+id);
		}
		else
			return false;
	});


	//CKeditor
	CKEDITOR.replace( 'eng-cont', {
	filebrowserBrowseUrl: '/Public/ckfinder/ckfinder.html',
	filebrowserUploadUrl: '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
	contentsCss: "body {font-size: 26px; font-family:Arial; padding:0px 20px }"
});
	CKEDITOR.replace( 'vi-cont', {
	filebrowserBrowseUrl: '/Public/ckfinder/ckfinder.html',
	filebrowserUploadUrl: '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
	contentsCss: "body {font-size: 26px; font-family:Arial; padding:0px 20px }"
});
	CKEDITOR.config.height = 700;
	CKEDITOR.config.width = 800;

	

	
});

//Data tables
$(document).ready( function () {
    $('#blog-list').DataTable();
    $('#cate-list').DataTable();
    $('#sub-list').DataTable();
    $('#feed-list').DataTable();
    $('#author-list').DataTable();
    $('#cen-list').DataTable();
    $('#author-rank').DataTable({
    	"paging":   false,
    	"bFilter": false,
    	 "info":     false
    });
});