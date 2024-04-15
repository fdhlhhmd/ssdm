<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="layout.css">
</head>
<body>


<?php
include 'header.php';
include 'linkdb.php';
?>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Welcome page</h2>

      <!-- Pass value from $_POST form -->
<?php
        $Intro= $_POST["intro"];
        $Name= $_POST["name"];
        $Birthday= $_POST["bday"];
        $Qualification= $_POST["qualification"];
        $Phone= $_POST["phone"];
        $Email= $_POST["email"];
        $City= $_POST["city"];
        $Freelance= $_POST["freelance"];
        $Description= $_POST["description"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myresume";


// insert the data to database
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO about (Intro, Name, Birthday, Qualification, Phone, Email, City, 
  Freelance, Description)
  VALUES ('$Intro', '$Name', '$Birthday', 
  '$Qualification', '$Phone', '$Email', '$City', 
  '$Freelance', '$Description')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

      <br>
      Welcome <?php echo $Name ?><br>
      Your email address is: <?php echo $Email; ?><br>
      Intro: <?php echo $Intro ?><br>
      Birthday: <?php echo $Birthday; ?><br>
      Qualification: <?php echo $Qualification ?><br>
      City:: <?php echo $City; ?><br>
      Freelance: <?php echo $Freelance ?><br>
      Description: <?php echo $Description; ?><br>

    </div>

  </div>
</div>


<?php
include 'footer.php';
?>
</body>
</html>
