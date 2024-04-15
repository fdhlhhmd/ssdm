
<?php
include '../header.php';
?>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Website Details</h2>

      <form class="form-inline" action="formprocessing.php" method="post">
        
        <label for="intro">Intro: </label>
        <input type= "text" name="intro"><br>
        
        <label for="name">Name: </label>
        <input type="text" name="name"><br>

        Birthday: <input type="date" name="bday"><br>
        Qualification: <input type="text" name="qualification"><br>
        E-mail: <input type="text" name="email"><br>
        Phone: <input type="text" name="phone"><br>
        City: <input type="text" name="city"><br>
        Freelance: <input type="text" name="freelance"><br>
        Description: <input type="text" name="description"><br>

        <!-- Id, Intro, Name, Birthday, Qualification, Phone, Email, City, 
  Freelance, Description -->

      <button type="submit">Submit</button>
      </form>

    </div>

  </div>
</div>


<?php
include '../footer.php';
?>
</body>
</html>
