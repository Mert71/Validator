 <html>
<head>
<style>
 table{
    margin-left: auto;
    margin-right: auto;
      }

.error {color: #FF0000;}

h2{
  margin-left: 41%;
  }

table{
background: lightgrey;
padding: 2%;
}



 </style>
</head>

  <body>
   <?php
      // define variables and set to empty values
      $nameError = $passwordError = $phoneError = $cityError = $adressError = $zipError = $artistError = $shoesError = $gameError = "";
      $name = $password = $phoneNumber = $city = $adress = $zipcode = $artist = $shoes = $game = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


       if (empty($_POST["name"])) {
          $nameError = "Name is required";
       }else {
          $name = test_input($_POST["name"]);
       }

       if (empty($_POST["password"])) {
          $passwordError = "Password is required";
       }else {
          $password = test_input($_POST["password"]);
       }

       if (empty($_POST["phoneNumber"])) {
          $phoneError = "PhoneNumber is required";
       }else {
          $phoneNumber = test_input($_POST["phoneNumber"]);
       }

       if (empty($_POST["city"])) {
          $cityError = "City is required";
       }else {
          $city = test_input($_POST["city"]);
       }

       if (empty($_POST["adress"])) {
          $adressError = "Adress is required";
       }else {
          $adress = test_input($_POST["adress"]);
       }


       if (empty($_POST["zipcode"])) {
          $zipError = "ZipCode is required";
       }else {
          $zipcode = test_input($_POST["zipcode"]);
       }

       if (empty($_POST["Artist"])) {
          $artistError = "Favorite artist is required";
       }else {
          $artist = test_input($_POST["artits"]);
       }

       if (empty($_POST["Shoes"])) {
          $shoesError = "Shoes is required";
       }else {
          $shoes = test_input($_POST["Shoes"]);
       }
       if (empty($_POST["Game"])) {
          $gameError = "Game is required";
       }else {
          $game = test_input($_POST["Game"]);
       }
    }

      function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
      }
       ?>

       <form method = "post" action = "<?php
        echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>


<tr class="tr">
<td class="td">Name:</td>
    <td class="td"><input type = "text" name = "name">
      <span class = "error"> <?php echo $nameError;?></span>
    </td>
</tr>

 <tr>
    <td class="td">Password: </td>
    <td class="td"><input type = "password" name = "password">
       <span class = "error"> <?php echo $passwordError;?></span>
    </td>
 </tr>

 <tr>
    <td class="td">Phone Number:</td>
    <td class="td"> <input type = "text" name = "phoneNumber">
       <span class = "error"><?php echo $phoneError;?></span>
    </td>
 </tr>

 <tr>
    <td class="td">City:</td>
    <td class="td"> <input type = "text" name = "city">
       <span class = "error"><?php echo $cityError;?></span>
    </td>
 </tr>

 <tr>
    <td class="td">Address:</td>
    <td class="td"> <input type = "text" name = "adress">
       <span class = "error"><?php echo $adressError;?></span>
    </td>
 </tr>

  <tr>
     <td class="td">Zip Code:</td>
     <td class="td"> <input type = "text" name = "zipcode">
        <span class = "error"><?php echo $zipError;?></span>
     </td>
  </tr>

  <tr>
     <td class="td">Favorite Artist:</td>
     <td class="td"> <input type = "text" name = "Artist">
        <span class = "error"><?php echo $artistError;?></span>
     </td>
  </tr>

  <tr>
     <td class="td">Favorite Shoes:</td>
     <td class="td"> <input type = "text" name = "Shoes">
        <span class = "error"><?php echo $shoesError;?></span>
     </td>
  </tr>

  <tr>
     <td class="td">Favorite Game:</td>
     <td class="td"> <input type = "text" name = "Game">
        <span class = "error"><?php echo $gameError;?></span>
     </td>
  </tr>

 <td>
    <input type = "submit" name = "submit" value = "Submit">
 </td>

          </table>
   </form>
   <!-- <?php
      echo "<h2>Your given values are as:</h2>";

      echo $name;
      echo "<br>";

      echo $password;
      echo "<br>";

      echo $phoneNumber;
      echo "<br>";

      echo $city;
      echo "<br>";

      echo $adress;
      echo "<br>";

      echo $zipcode;

   ?> -->
</body>
 </html>
