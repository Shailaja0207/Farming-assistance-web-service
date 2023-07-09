<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>COMPLAIN PAGE</title>
    <link rel="stylesheet" href="FarmingTips.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;600&display=swap" rel="stylesheet">
  </head>

  
  <body>

    <form action="" method="POST">

 
      <div class="title">
        <h2>FARMER TIPS PAGE</h2>
      </div>
       <div class="half">
        
        <div class="item">
          <label for="id">Farmer Id</label>
          <input type="id" placeholder="farmer_id" required="" id = "id" name="farmer_id">
        </div>
        
      </div>
      <div class="full">
        <label for="message">Tips</label>
        <textarea id="Tip" name="Tip"></textarea>
      </div>
      <div class="action">
        <input type="submit" value = "submit" name="save">
        <input type="reset" value = "Cancel" name="reset">
      </div>
      
<input type="button" value="Go back!" onclick="history.back()">
    </form>
    <?php
    
    $servername="localhost";
    $username="root";
    $password="";
    $database="web_service";

    $conn = mysqli_connect($servername,$username,$password,$database);

    // now check the connection
    /*if(!$conn)
    {
      die("connection failed :" . mysqli_connect_error())
    }
    */


  
      if(isset($_POST['save']))
    {
     
      $farmer_id = $_POST['farmer_id'];
      $Tip = $_POST['Tip'];


      $sql_query = "INSERT INTO farmingtips(Farmer_ID,Tips) VALUES('$farmer_id','$Tip')";

      if(mysqli_query($conn , $sql_query))
      {
        echo "New Details entry Inserted Successfully!!";
      }
      else
      {
        echo "Error: " , $sql_query . "" . mysqli_error($conn);
      }
      mysqli_close($conn);

    }
    ?>

      </body>

  
</html>