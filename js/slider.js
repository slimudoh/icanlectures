
$(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 5000,            // Integer: Speed of the transition, in milliseconds
  timeout: 10000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: true,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "Previous",   // String: Text for the "previous" button
  nextText: "Next",       // String: Text for the "next" button
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});




// JAVASCRIPT FOR MY PROFILE PAGE

function myProfile(event) {
	  var pbl = document.getElementById("pbl");
	  var pbr = document.getElementById("pbr");
	  var pe = document.getElementById("pe");
	  var pp = document.getElementById("pp");

	  // pe.style.display = "none";
	  // pp.style.display = "block";

	 if (event.target === pbr) {
	 	pe.style.display = "none";
	 	pbr.style.borderBottom = "5px solid #ccc";	 	
	  	pp.style.display = "block";
	  	pbl.style.borderBottom = "5px solid #fff";
	 } else if (event.target === pbl) {
	 	pe.style.display = "block";
	 	pbr.style.borderBottom = "5px solid #fff";
	  	pp.style.display = "none";
	  	pbl.style.borderBottom = "5px solid #ccc";
	 }
}


document.getElementById("pbr").addEventListener("click", myProfile);
document.getElementById("pbl").addEventListener("click", myProfile);

