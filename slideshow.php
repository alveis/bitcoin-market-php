<style>
#bubblebox{ width:1000px; height:450px; margin:4px auto; border:1px solid #AAA; }
#bubbles{ width:auto; margin:0px auto; text-align:center; }
#bubbles > div{ display:inline-block; width:10px; height:10px; margin:24px 10px 0px 10px; background:rgba(0,0,0,.1); text-align:center; border:2px solid #999; border-radius:100%; font-size:24px; text-decoration:none; transition: background 0.3s linear 0s; cursor:pointer; }
#bubblecontent{ margin:0px auto; transition:opacity 0.3s linear 0s; font-family: Arial;}
#bubblecontent > h2{ text-align:center; color:#7EA800; }
#bubblecontent > p{ font-size:16px; line-height:1.5em; padding:10px 5px; color:#777; }
</style>
<div style="font-size: 24px; color: #CD6839; ">
<script>
// This simple function returns object reference for elements by ID
function _(x){return document.getElementById(x);}
// Variables for bubble array, bubble index, and the setInterval() variable
var ba, bi=0, intrvl;
// bca - Bubble Content Array. Put your content here.
var bca = [
    '<p><h2><img src="images/s1.jpg"></img></h2></p>',
	'<h2><img src="images/s2.jpg"></img></h2><p></p>',
	'<h2><img src="images/s3.jpg"></img></h2><p></p>',
	'<h2><img src="images/s4.jpg"></img></h2><p></p>'
];
// This function is triggered by the bubbleSlide() function below
function bubbles(bi){
	// Fade-out the content
	_("bubblecontent").style.opacity = 8;
	// Loop over the bubbles and change all of their background color
	for(var i=0; i < ba.length; i++){
		ba[i].style.background = "rgba(0,0,0,.1)";
	}
	// Change the target bubble background to be darker than the rest
	ba[bi].style.background = "#999";
	// Stall the bubble and content changing for just 300ms
	setTimeout(function(){
		// Change the content
		_("bubblecontent").innerHTML = bca[bi];
		// Fade-in the content
		_("bubblecontent").style.opacity = 1;
	}, 300);
}
// This function is set to run every 5 seconds(5000ms)
function bubbleSlide(){
	bi++; // Increment the bubble index number
	// If bubble index number is equal to the amount of total bubbles
	if(bi == ba.length){
		bi = 0; // Reset the bubble index to 0 so it loops back at the beginning
	}
	// Make the bubbles() function above run
	bubbles(bi);
}
// Start the application up when document is ready
window.addEventListener("load", function(){
	// Get the bubbles array
	ba = _("bubbles").children;
	// Set the interval timing for the slideshow speed
	intrvl = setInterval(bubbleSlide, 5000);
});
</script>
<div id="bubblebox">
  <div id="bubbles">
    <div onclick="bubbles(0); clearInterval(intrvl);" style="background:#999;"></div>
    <div onclick="bubbles(1); clearInterval(intrvl);"></div>
    <div onclick="bubbles(2); clearInterval(intrvl);"></div>
    <div onclick="bubbles(3); clearInterval(intrvl);"></div>
  </div>
  <div id="bubblecontent">
    <h2><img src="images/s5.jpg"></img> </h2>
    <p></p>
  </div>
</div>
</div>