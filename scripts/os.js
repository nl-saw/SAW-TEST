/* # Video, no slides:
$(function() {
var BV = new $.BigVideo();
BV.init();
BV.show('videos/northern-hd.mp4',{ambient:true});
});
*/

/* # No Video but slides:
$(document).ready(function(){
	$('#backdrops').cycle({
	fx: 'fade',
	log: false,
	pause: 0,
	speed: 1600,
	timeout: 35000
  });
});
*/

/* Preferenced code: */
$(document).ready(function(){
	$('#backdrops').cycle({
	fx: 'fade',
	log: false,
	pause: 0,
	speed: 1600,
	timeout: 35000
  });
});


$(function(){
	/*----------Optional Ajax Loader----------*/
	$("body").ajaxStart(function(){
		$(this).prepend('<div class="ajax-loader"><img src="images/ajax-loader.gif" alt="Loading" /></div>');
	})
	$("body").ajaxComplete(function(){
		$(".ajax-loader").remove();
	})
	/*----------Shortcuts----------*/
	$("button.new-window").click(function(e){
		e.preventDefault();
		newWindow($(this).attr('href'),$(this).attr('title'),$(this).attr("rel"),0)
	})
	$("button.iframe").click(function(e){
		e.preventDefault();
		newWindow($(this).attr('href'),$(this).attr('title'),$(this).attr("rel"),1)	
	})
	$("button.parent").click(function(e){
		e.preventDefault();
		window.location.href=$(this).attr('href');
	})
	$("#shortcuts").css({
		/* "left":($(window).width() - $("#shortcuts").width())/2+"px", */
		"width":$("#shortcuts").width()+150+"px",
		"margin-left":-($("#shortcuts").width()+150)/2+"px",
		opacity:"0.75"
	})
	 $("#shortcuts").hover(
		 function(){
			 $(this).fadeTo(300,1).css({"z-index":4000})
		 },
		 function(){
			 $(this).fadeTo(300,0.75).css({"z-index":100})
		 }
	 )
	$(".shortcut").hover(
		function(){
			$(this).fadeTo(300,1)
			$(this).children("img").animate({width:"+=6px"},200)
			$(this).children("img").next("span").html($(this).children("img").attr("alt")).fadeIn(200)
		},
		function(){
			$(this).fadeTo(300,0.75)
			$(this).children("img").animate({width:"-=6px"},200)
			$(this).children("img").next("span").fadeOut(100)
		}
	)
	$("#font_inc").click(function(e){
		e.preventDefault();
		$("body").animate({"font-size":"+=2px"},1)
	})
	$("#font_dec").click(function(e){
		e.preventDefault();
		$("body").animate({"font-size":"-=2px"},1)
	})
	/*----------Widgets----------*/
	$(".widget").css({
		opacity:"0.6"
	}).draggable();
	$(".widget").hover(
		function(){
			$(this).fadeTo(300,1).css({"z-index":0})
		},
		function(){
			$(this).fadeTo(300,0.6).css({"z-index":0})
		}
	)
})
function expand(id){
	$("#window_"+(id)).resizable("enable");
	$("#window_"+(id)).animate({
		width: "600px",
		height: "200px"
	},300)
	$("#window_"+(id)+" .w-ml").animate({width:"599px",height:"160px"},100)
	$("#window_"+(id)+" .expand").remove()
	$("#window_"+(id)+" .w-tbm").append('<img class="minimize" src="images/black/minimize.png" width="22" height="20" alt="-" title="Minimize Window" onclick="minimize('+id+')" />')
}
function minimize(id) {
	$("#window_"+(id)).animate({width:"200px",height:"50px",left:"10px",},300,function(){
			$(this).children(".w-ml").css({height:"10px",width:"198px"})
			$(this).find("iframe").css({height:"120px",width:"100%"})
			$(this).addClass("minimized")
			$(this).fadeTo(300,0.3)
			$(this).resizable("disable")
		})
	$("#window_"+(id)+" .w-tbm").append('<img src="images/black/expand.png" title="Expand Window" alt="oO" class="expand" onclick="expand('+id+')"/>');
	$("#window_"+(id)+" .minimize").remove()
}
function newWindow($uri,$title,$width,$iframe){
	var $id = $(".window:last").index()+1;
	jQuery.get("window.tmpl.php",{title : $title, id : $id, width : $width, uri : $uri, iframe : $iframe},function(tmpl){
		$("#windows").append(tmpl)
			var $top = ($(window).height() - $(".window:last").height())/2;
			if($top<0) $top = 50;
			$(".window:last").css({
				left: ($(window).width() - $(".window:last").width())/2+"px",	
				top: $top+"px"
			})
			$(".window:last").fadeIn(300)
			$(".window:not(:last)").fadeTo(300,0.3)
	})
}
function strlen(string){ 
	return string.length;
}
function validateText($id) {
	if(strlen($.trim($("#"+$id).val())) < 6) {
		$("#"+$id).removeClass("validinput")
		$("#"+$id).addClass("required")
	}
	else {
		$("#"+$id).removeClass("required")
		$("#"+$id).addClass("validinput")
	}
}
function validateMessage() {
	if(strlen($.trim($("#contact_message").val())) < 10) {
		$("#contact_message").removeClass("validinput")
		$("#contact_message").addClass("required")
	}
	else {
		$("#contact_message").removeClass("required")
		$("#contact_message").addClass("validinput")
	}
}
function validateEmail() {
    var email = document.getElementById('contact_email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email.value)) {
		$("#contact_email").removeClass("validinput")
		$("#contact_email").addClass("required")
	}
	else {
		$("#contact_email").removeClass("required")
		$("#contact_email").addClass("validinput")
	}
}
function sendMessage() {
	validateText("contact_name")
	validateText("contact_subject")
	validateEmail()
	validateMessage()
	if ($("#contact_email,#contact_message,#contact_name,#contact_subject").hasClass("required")) {
		newWindow("includes/message_error.php","Who0Ps!",400)
	}
	else {
		name = $("#contact_name").attr("value");
		email = $("#contact_email").attr("value");
		subject = $("#contact_subject").attr("value");
		message= $("#contact_message").val().replace(/<\/?[^>]+>/gi, '');
		jQuery.post("includes/send_message.php",{name : name, email : email, subject : subject, message : message},
			function (status) {
				if(status==1) newWindow("includes/message_sent.php","Message successfully sent.",400)
				else newWindow("includes/server_error.php","Who0Ps!",400)
			}
		);
	}
}
