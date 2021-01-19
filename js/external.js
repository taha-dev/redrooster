function myFunction() {
  var x = document.getElementById("mynav-menu");
  if (x.className === "nav-menu") {
    x.className += " responsive";
  } else {
    x.className = "nav-menu";
  }
}
function gotocheckout()
{
	window.location.href = "checkout.php";
}