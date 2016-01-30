var br = "<br>";
/*window.nod23 = 56;
document.write(br);
screen.;
navigator.;
window.frames[5].;
window.location.;
window.history.;
document.forms[].elements[].options[];
document.anchors[].;
document.links[].;
document.images[].;
document.applets[].;
Location.protocol;
Location.host;
Location.pathname;
Location.search.substring()*/
/*var availW = screen.availWidth;
var availH = screen.availHeight;

var windowWidth = window.outerWidth;
var windowHeight = window.outerHeight;
document.write(windowWidth + ", " + windowHeight + br);

var windowX = window.screenX;
var windowY = window.screenY;
document.write(windowX + ", " + windowY + br);

var viewportWidth = window.innerWidth;
var viewportHeight = window.innerHeight;
document.write(viewportWidth + ", " + viewportHeight + br);



var horizontalScroll = window.pageXOffset;
var verticalScroll = window.pageYOffset;
document.write(horizontalScroll + ", " + verticalScroll + br);
*/
/*var browser = "PROPERTYES OF BROWSER:\n";
for(var propname in navigator){
	browser += propname + ": " + navigator[propname] + "\n";
}
alert(browser);
*/
/*
var w = window.open("https://en.wikipedia.org/wiki/Smartphone", "", "");
w.close();*/

var bounce = {
	x:0, y:0, w:100, h:100,
	dx:5, dy:5,
	interval: 50,
	win: null,
	timer: null,

	//animation
	start: function(){
		bounce.x = (screen.width - bounce.w)/2;
		bounce.y = (screen.height - bounce.h)/2;

		bounce.win = window.open('javascript:"<h1>Back!</h1>"',"","left=" + bounce.x + ", top=" + bounce.y + ", status=yes");

		//set interval
		bounce.timer = setInterval(bounce.nextFrame, bounce.interval);
	},

	stop: function(){
		clearInterval(bounce.timer);
		if(!bounce.win.closed) bounce.win.close();
	},

	//Show next frame
	nextFrame: function(){
		if(bounce.win.closed){
			clearInterval(bounce.timer);
			return;
		}
		if((bounce.x + bounce.dx > (screen.availWidth - bounce.w))||(bounce.x + bounce.dx < 0)) bounce.dx = -bounce.dx;

		if((bounce.y + bounce.dy > (screen.availHeight - bounce.h))||(bounce.y + bounce.dy < 0)) bounce.dy = -bounce.dy;

		bounce.x += bounce.dx;
		bounce.y += bounce.dy;

		bounce.win.moveTo(bounce.x, bounce.y);

		bounce.win.defaultStatus = "(" + bounce.x + ", " + bounce.y + ")";
	}
}