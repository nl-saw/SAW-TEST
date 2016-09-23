/*----------Widgets----------*/
/*Digital clock section start*/
var maxnumhours = 23;
var maxnummins = 59;
var maxnumsecs = 60;
var maxmilisecs = 999;
$(document).ready(function() {
  updateClock(); 
  setInterval('updateClock()', 250 );
});
function hexifyWithZeroLead(tohex){
  var rtn = tohex.toString(16);
  return ( rtn.length == 1 ? "0" : "" ) + rtn;
}
function updateClock ()
{
  //Set Current Time Variables
  var currentTime = new Date ( );
  var currentHours = currentTime.getHours();
  var currentMinutes = currentTime.getMinutes();
  var currentSeconds = currentTime.getSeconds();
  var currentMiliSeconds = currentTime.getMilliseconds();
  var rounded = currentSeconds + (currentMiliSeconds / maxmilisecs);
  //zerolead the time for display
  currentHours = ( currentHours < 10 ? "0" : "" ) + currentHours;
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;
  //append the values
  jQuery("#clock").html("<span id='hours'>" + currentHours + "</span>:<span id='minutes'>" + currentMinutes + "</span><span id='seconds'><small>:" + currentSeconds + '</small></span>');
}
/*Digital clock section end*/