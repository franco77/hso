<script>
$(document).ready(function(){
	$('#images').orakuploader({
		orakuploader_path : 'inc/libs/upload_img/orakuploader/',
		
		orakuploader_main_path : 'files',
		orakuploader_thumbnail_path : 'files/ts',
		
		orakuploader_add_image : 'inc/libs/upload_img/orakuploader/images/add.png',
		orakuploader_add_label : 'Browser for images',
		
		orakuploader_resize_to : 600,
		orakuploader_thumbnail_size : 150
	});
});

</script>