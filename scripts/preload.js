jQuery(window).load(function() { // makes sure the whole site is loaded.
	jQuery("#sawpreloader").fadeOut(800); // DIV BG covering the website.
	jQuery(".circle2").fadeOut(450); // Remove fast spinning inner circle first.
	jQuery("#sawpreloaderstatus").fadeOut(1400); // then the rest. alt: delay(ms).fadeOut(ms)
})
