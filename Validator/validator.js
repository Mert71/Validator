function validateForm() {
  var name = document.forms["myForm"]["fname"].value;
  var lastname = document.forms["myForm"]["flastname"].value;
  var zip = document.forms["myForm"]["fzip"].value;
  var telephone = document.forms["myForm"]["ftelephone"].value;
  var mail = document.forms["myForm"]["fmail"].value;
  var city = document.forms["myForm"]["fcity"].value;
  var alert = document.getElementById('alert');

  if (name == "") {
    alert.style.display = "absolute";
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }
  if (lastname == "") {
    alert.style.display = "block";
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }
  if (zip == "") {
    alert.style.display = "block";
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }
  if (telephone == "") {
    alert.style.display = "block";
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
     return false;
  }
  if (mail == "") {
    alert.style.display = "block";
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }
  if (city == "") {
    alert.style.display = "block";
    setTimeout(function(){
    alert.style.display = "none";
    }, 2500)
    return false;
  }
}
