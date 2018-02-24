/*Twitch.init({clientId: 'z3y6t0eayya49966gwhfkvs83zxgcp'}, function(error, status) {
    // the sdk is now loaded
	if (status.authenticated) {
		  // Already logged in, hide button
		  $('.twitch-connect').hide()
		}
  });
$('.twitch-connect').click(function() {
	  Twitch.login({
	    scope: ['user_read', 'channel_read']
	  });
	})*/
var builderSrc;
function buildMenu(img){
		document.getElementById(img.id).style.display = 'none';
		document.getElementById("house1").style.display = 'block';
		document.getElementById("house2").style.display = 'block';
		document.getElementById("house3").style.display = 'block';
		builderSrc = img.src; 
}
function diffImage(img) 
{
   if(img.src.match(/builder/)) img.src = "_img/house.png";
   else img.src = "_img/builder.jpg";
}
function buildHouse(img){
	document.getElementById("house1").style.display = 'none';
	document.getElementById("house2").style.display = 'none';
	document.getElementById("house3").style.display = 'none';
	document.getElementById("image1").style.display = 'block';
	builderSrc = img.src;
	
}