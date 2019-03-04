// CONTACT MAP

var PageContact = function() {

	var _init = function() {
	
		var mapbg = new GMaps({
			el: '#gmapbg',
			lat: 23.807525,
			lng: 90.435151,
			scrollwheel: false,
		});


		mapbg.addMarker({
			lat: 23.811578,
			lng:  90.423230,
			title: 'Tiktok, Bangladesh',
			infoWindow: {
				content: '<h3>Tiktok, Bangladesh</h3><p></p>'
			}
		}); 
		

	}

    return {
        //main function to initiate the module
        init: function() {

            _init();

        }

    };
}();

$(document).ready(function() {
    PageContact.init();
});