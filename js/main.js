$(function () {

	var $button        = $('button.get-more');
	var paginateNumber = 0;

	/**
	 *
	 *  getImages() accepts a single argument paginateNumber or any positive integer
	 *
	 *  Declare a variable data and set it equal to a plain object
	 *  The variable data should have a property "paginate" with the value of the argument paginateNumber
	 *  create a POST request to the url '/images.php'
	 *  use the variable data as a request parameter to get the correct grouping of images
	 *
	 * The response from the request needs to be passed as an argument to addToPage()
	 *
	 * http://api.jquery.com/jquery.post/
	 *
	 */

	var getImages = function () {
		var data = {
			paginate: paginateNumber,
		};

		$.post("/images.php", data, function(response) {
	      addToPage(response);
	    });

	};

	/**
	 *
	 * The argument will be an array of objects.
	 * Append each result as an <img /> element to div.images
	 * set the property url as the value of the attribute src
	 * set the description url as the value of the attribute alt
	 * if the response is empty then append to the end of the list
	 * <h1> No More Images Broski </h1>
	 *
	 */

	var addToPage = function (images) {
		if (images.length <=0 ) {
			$('.images').append('<h1> No More Images Broski </h1>');
		} else {
			for (var i = 0; i < images.length; i++) {
				$('.images').append('<img src="'+ images[i].url + '">');
			}
		}
	};

	/**
	 *
	 *  On click event handler
	 *  Find a way to increment the variable paginateNumber every time a user clicks
	 *
	 */

	$button.on('click', function () {
		getImages(paginateNumber);
		paginateNumber += 1;
	});

});

/**
 *
 * Extra Bonus Points:
 * Do this in vanilla JS
 *
 * Extra Extra Bonus Points:
 * Do this in Vue.js
 *
 */