function validateForm() {
  var name = document.forms["myForm"]["fname"].value;
  var lastname = document.forms["myForm"]["flastname"].value;
  var zip = document.forms["myForm"]["fzip"].value;
  var telephone = document.forms["myForm"]["ftelephone"].value;
  var mail = document.forms["myForm"]["fmail"].value;
  var city = document.forms["myForm"]["fcity"].value;
  var alert = document.getElementById('alert');

  if (name == "") {
    alert.style.display = "block";
    document.getElementById('error1').style.display = "block";
    setTimeout(function(){
    document.getElementById('error1').style.display = "none";
    }, 5000)
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }
  if (lastname == "") {
    alert.style.display = "block";
    document.getElementById('error2').style.display = "block";
    setTimeout(function(){
    document.getElementById('error2').style.display = "none";
    }, 5000)
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }
  if (zip == "") {
    alert.style.display = "block";
    document.getElementById('error3').style.display = "block";
    setTimeout(function(){
    document.getElementById('error3').style.display = "none";
    }, 5000)
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }
  if (telephone == "") {
    alert.style.display = "block";
    document.getElementById('error4').style.display = "block";
    setTimeout(function(){
    document.getElementById('error4').style.display = "none";
    }, 5000)
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
     return false;
  }
  if (mail == "") {
    alert.style.display = "block";
    document.getElementById('error5').style.display = "block";
    setTimeout(function(){
    document.getElementById('error5').style.display = "none";
    }, 5000)
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }
  if (city == "") {
    alert.style.display = "block";
    document.getElementById('error6').style.display = "block";
    setTimeout(function(){
    document.getElementById('error6').style.display = "none";
    }, 5000)
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }
}
