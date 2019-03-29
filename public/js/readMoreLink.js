            
(function(){
	
	var quoteButton = $('.quote-button'),
		blockquote = $('blockquote');
	
	quoteButton.on('click', function(e) {
		e.preventDefault();
		var quoteButtonText = quoteButton.text();
		
		blockquote.slideToggle(200, function(){
			quoteButtonText == "Leggi meno" ? quoteButton.text("Leggi tutto") : quoteButton.text("Leggi meno");
		});

	});
	
})();