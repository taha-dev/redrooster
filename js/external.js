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
function getcart() {
  var xhttp;    
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("dropdown-content").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getcart.php", true);
  xhttp.send();
}