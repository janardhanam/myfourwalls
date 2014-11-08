<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add New Project</title>
<style>
<link rel="stylesheet" href="mystyles.css">
body {
    font-family: helvetica;
}
label {
    width: 150px;
    text-align: left;
    display: inline-block;
	padding: 20px;
}
input[type=submit] {
    width: 100px;
	
}
fieldset {
    border-radius: 10px;
    background: #FFCCFF;
    margin: 20px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,.3);
    position: relative;
    border: 2px groove threedface;
}
legend {
    position: absolute;
    top: -2px;
    background: #fff;
    padding: 10px 20px;
    border: 2px groove threedface;
    border-top: none;
    box-shadow: inset 0 -5px 5px rgba(0,0,0,.2);
    text-shadow: 1px 1px 2px rgba(0,0,0,.3);
    font-weight: bold;
}
legend span {
    display: block;
    margin: -20px;
    background: #fff;
    padding: 0px 20px;
}

#form_submit{
text-align: center;
}
</style>

</head>
<script src="js/jquery-1.11.1.min.js"></script>
<!--<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
 Place inside the <head> of your HTML
<script type="text/javascript" src="js/jquery.rte.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script> -->
<script>

 $(document).ready(function() {
        $("input[id^='upload_file']").each(function() {
            var id = parseInt(this.id.replace("upload_file", ""));
            $("#upload_file" + id).change(function() {
                if ($("#upload_file" + id).val() != "") {
                    $("#moreImageUploadLink").show();
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        var upload_number = 2;
        $('#attachMore').click(function() {
            //add more file
            var moreUploadTag = '';
            moreUploadTag += '<div class="file_upload"><label for="upload_file"' + upload_number + '>Upload File ' + upload_number + '</label>';
            moreUploadTag += '<input type="file" id="upload_file' + upload_number + '" name="upload_file' + upload_number + '"/>';
            moreUploadTag += '&nbsp;<a href="javascript:del_file(' + upload_number + ')" style="cursor:pointer;" onclick="return confirm(\"Are you really want to delete ?\")">Delete ' + upload_number + '</a></div>';
            $('<dl id="delete_file' + upload_number + '">' + moreUploadTag + '</dl>').fadeIn('slow').appendTo('#moreImageUpload');
            upload_number++;
        });
    });
</script>

<script>

	jQuery(document).ready(function()
	{
		jQuery('#submit').click(function()
		{
			var logo = jQuery('#logo').val();
			
			var project_name = jQuery('#project_name').val();
			
			var background_image = jQuery('#background_image').val();
			
			var project_overview = jQuery('#project_overview').val();
			
			var starts_from = jQuery('#starts_from').val();
			
			var project_area = jQuery('#project_area').val();
			
			var project_buildings = jQuery('#project_buildings').val();
			
			var project_bedrooms = jQuery('#project_bedrooms').val();
			
			var featured_image = jQuery('#featured_image').val();
			
			var features = jQuery('#features').val();
			
			var aminities = jQuery('.aminities:checked').val();
			
			var floor_plans = jQuery('#floor_plans').val();
			
			//var gallery = jQuery('#gallery').val();
			
			var specifications = jQuery('#specifications').val();
			
			var about = jQuery('#about').val();
			
			jQuery.ajax(
			{
				type:"POST",
				url:"project_details.php?project_name=" + project_name,
				success:function(data)
				{
					console.log(project_name);
				}
			});	
			//alert('success');
           });
	});





</script>

<body>
		<h2 align="center">CONTENT MANAGEMENT ADMIN PANEL</h2>

		
<fieldset class="project-information">		

<h2>Create New Project</h2>

	<div id="splash-screen" class="splash-screen">
		 <label>Builder Logo:</label><input type="file" id="logo" name="browse_logo"><br>
		
		 <label>Project Name:</label><input type="text" id="project_name" name="project_name"><br>
			
		 <label>Background Image:</label><input type="file" id="background_image" name="background_image"><br>
	</div>


	<div id="overview" class="overview">
		 <label>Project Overview:</label><textarea id="project_overview" name="project_overview"></textarea><br>
			
		 <label>Starts From:</label><input type="text" id="starts_from" name="starts_from"><br>
		
		 <label>Built Up Area:</label><input type="text" id="project_area" name="project_area"><br>
		
		 <label>Buildings:</label></label><input type="text" id="project_buildings" name="project_buildings"><br>
		
		 <label>Bedrooms:</label><input type="text" id="project_bedrooms" name="project_bedrooms"><br>
	</div>
	
	<div id="project_features" class="project_features">
		 <label>Featured Image:</label><input type="file" id="featured_image" name="featured_image"><br>
		
		 <label>Features:</label><textarea name="features" id="features" rows="4" cols="100"></textarea>
	</div>

	<div id="project_aminities" class="project_aminities">
		 <label>Aminities:</label><input type="checkbox" name="aminities">some text1
			  <input type="checkbox" class="aminities" value="1" name="aminities">some text2
			  <input type="checkbox" class="aminities" name="aminities">some text3
			  <input type="checkbox" class="aminities" name="aminities">some text4
			  <input type="checkbox" class="aminities" name="aminities">some text5
			  <input type="checkbox" class="aminities" name="aminities">some text6
			  <input type="checkbox" class="aminities" name="aminities">some text7
			  <input type="checkbox" class="aminities" name="aminities">some text8
			  <input type="checkbox" class="aminities" name="aminities">some text9
	</div>
	
	<div id="floor_plans" class="floor_plans">
		
		
   <div class="file_upload">
    <label>Floor Plans</label>
    <input type="file" name="upload_file1" id="upload_file1"/>
</div>
<div id="moreImageUpload"></div>
<div class="clear"></div>
<div id="moreImageUploadLink" style="display:none;margin-left: 10px;">
    <a href="javascript:void(0);" id="attachMore">Attach another file</a>
</div>

	</div>
	
	<div id="image_gallery" class="image_gallery">
		 <label>Gallery:</label><input type="file" id="gallery" multiple="multiple" name="gallery"><input name="file" type="text" /><br>
	</div>
	
	<div id="project_specifications" class="project_features">
		 <label>Specifications:</label><textarea name="specifications" id="specifications" rows="5" cols="100"></textarea><br>
	</div>
	
	<div id="about_builder" class="about_builder">
		 <label>About_builder:</label><textarea name="about" id="about" rows="5" cols="100"></textarea><br>
	</div>
		
	<div id="form_submit">	
		<input type="button" name="submit" id="submit" value="Submit"/>
	</div>
	
</fieldset>
</body>
</html>