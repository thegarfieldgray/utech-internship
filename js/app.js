Waves.attach('.sign-up-btn', ['waves-float']);
Waves.attach('.headmaster', ['waves-circle']);
Waves.init();

$(function () {
  $('[data-toggle="popover"]').popover({
  	delay: {"show": 400, "hide": 200 }
  })
});

var overlay = document.getElementById("overlay");

window.addEventListener('load', function(){
	 overlay.style.display = 'none';
})

$(document).ready(function(){
    $("#login").click(function(){
    	document.getElementById("signup-content").style.display="none";
    		$("#login-content").fadeIn('3000');
    		console.log("a");

    })


    $("#signup").click(function(){
    	document.getElementById("login-content").style.display="none";
    		  $("#signup-content").fadeIn('3000');
    })
});

function checkpwd(){
  var xVal = document.getElementById('passwordLogin').value;
  console.log(xVal);
  var yVal = document.getElementById('passwordLoginConfirm').value;
  console.log(yVal);


  if (xVal !== yVal) {
    $("passwordLogin").addClass("inputError");
    $("passwordLoginConfirm").addClass("inputError");
  }
  else {
      $("passwordLogin").removeClass("inputError");
      $("passwordLoginConfirm").removeClass("inputError");
  }
}