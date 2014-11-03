jQuery(document).ready(function() {

jQuery('.upload_image_button').click(function() {

formfield = jQuery(this).prev(".upload_image");
tb_show('', 'media-upload.php?type=image&TB_iframe=true');

window.send_to_editor = function(html) {
imgurl = jQuery('img',html).attr('src');
formfield.val(imgurl);
tb_remove();
}

return false;

});
});