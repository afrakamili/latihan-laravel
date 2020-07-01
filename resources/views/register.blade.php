<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style1.css">
    <!--
      <style>
      h1 {
        color:lightblue;
        font:arial;
      }
    </style>
    -->
  </head>

  <body>
    <h1>Buat Account Baru!</h1>
    <h3 style="color:lightblue; font-family:arial;">Sign Up Form</h3>
    <form action="/welcome" method="POST">
      @csrf
      <label for="nama_depan">First Name:</label> <br>
      <input type="text" name="fname">
      <br><br>
      <label for="nama_last">Last Name:</label>
      <br>
      <input type="text" name="lname">
      <br><br>

      <label>Gender:</label><br>
      <input type="radio" name="Gender"> Male <br>
      <input type="radio" name="Gender"> Female <br>
      <input type="radio" name="Gender"> Other<br><br>

      <label>Nationality:</label> <br>
      <select>
        <option value="Indon" checked>Indonesia</option>
        <option value="Malay">Malaysia</option>
        <option value="Sng">Singapore</option>
      </select>
      <br><br>

      <label> Language Spoken: </label><br>
      <input type="checkbox" name="bahasa"> Bahasa Indonesia <br>
      <input type="checkbox" name="bahasa"> English <br>
      <input type="checkbox" name="bahasa"> Other 
      <br><br>

      <label for="bio"> Bio: </label> <br>
      <textarea cols="20" rows="10" id="bio"></textarea>
      <br>

      <input type="submit" value="Sign Up">

    </form>

  </body>
</html>