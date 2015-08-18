var main = function() {
	var menuScroll = function(whereTo) {
		var anchorTag = $("a[name='"+ whereTo +"']");
		$('html, body').animate({scrollTop:anchorTag.offset().top}, '1000');
	};

	$("#introduction").click(function() {
		menuScroll('introduction');
	});

	$("#skills").click(function() {
		menuScroll('skills');
	});

	$("#experience").click(function() {
		menuScroll('experience');
	});

	$("#education").click(function() {
		menuScroll('education');
	});

	$("#contact").click(function() {
		menuScroll('contact');
	});
};


$(document).ready(main);