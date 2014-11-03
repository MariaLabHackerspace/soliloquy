jQuery(document).ready(function($) {

        

    var cookieName = 'stickyTabNewAPI',

            $tabs = $('#options_content'),

            $lis = $tabs.find('ul').eq(0).find('li');



        $tabs.tabs({

            active: ($.cookies.get(cookieName) || 0),

            activate: function (e, ui) {

                $.cookies.set(cookieName, $lis.index(ui.newTab));

            }

        });    



	jQuery('.fade').delay(1000).fadeOut(1000);

    

    

    var myOptions = {

    // you can declare a default color here,

    // or in the data-default-color attribute on the input

    defaultColor: false,

    // a callback to fire whenever the color changes to a valid color

    change: function(event, ui){},

    // a callback to fire when the input is emptied or an invalid color

    clear: function() {},

    // hide the color picker controls on load

    hide: true,

    // show a group of common colors beneath the square

    // or, supply an array of colors to customize further

    palettes: true

    };

	jQuery('.color-picker').wpColorPicker(myOptions);

	

	jQuery('.colorSelector').each(function(){

		var Othis = this; 

		var initialColor = $(Othis).next('input').attr('value');

		$(this).ColorPicker({

		color: initialColor,

		onShow: function (colpkr) {

		$(colpkr).fadeIn(500);

		return false;

		},

		onHide: function (colpkr) {

		$(colpkr).fadeOut(500);

		return false;

		},

		onChange: function (hsb, hex, rgb) {

		$(Othis).children('div').css('backgroundColor', '#' + hex);

		$(Othis).next('input').attr('value','#' + hex);

	}

	});

	}); 

	

	jQuery('.upload_image_button').click(function(){

        var textfieldid = jQuery(this).prev().attr("id");

        wp.media.editor.send.attachment = function(props, attachment){jQuery('#' + textfieldid).val(attachment.url);}

        wp.media.editor.open(this);

        return false;

  });

	

		 		

});	