<!DOCTYPE html>
<html lang="pl-PL">

<head>
  <title>Szczecin, moje miasto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylesheet/styles.css">
  <link rel="stylesheet" href="stylesheet/register.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js/script.js"> </script>
</head>

<body>
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">times;</span>
  <form class="modal-content animate" action="index.php?page=rejestracja" method="POST">
    <div class="imgcontainer">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>E-Mail</b></label>

        <input type="text" placeholder="Enter Password" name="email" required><br>



        <label for="uname"><b>Nazwa Użytkownika</b></label>

        <input type="text" placeholder="Enter Username" name="uname" required>





        <label for="passwd"><b>Hasło</b></label>

        <input type="password" placeholder="Enter Password" name="passwd" required>



        <label for="passwd"><b>Powtórz Hasło</b></label>

        <input type="password" placeholder="Enter Password" name="re-passwd" required>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signup" name="butt">Sign Up</button>
      </div>
    </div>
  </form>
</body>

</html>

<?php
$uname = '';
$passwd = '';
if (isset($_POST['butt'])) {
 if($_POST['passwd']!=$_POST['re-passwd']){

 echo "Nie poprawne hasło!!";

 }else{
 $uname = $_POST['uname'];
 $passwd = $_POST['passwd'];

 addToDB($uname, $passwd);}

} ?>

