<?php
if(isset($_POST["save"])){
  

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT FORM</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" >




</head>
 
 
<body>
     <div class="container">
        <form class="form" action="index.php" method="POST" enctype="multipart/form-data">    
              <h1>CONTACT INFORMATIONS</h1>
            <br/>
            
            <input class="form-control" type="text" name="FirstName" placeholder="Enter Your First Name">
            <i class="fa fa-user fa-fw" ></i>
            <br/>
            <input class="form-control" type="text" name="LastName" placeholder="Enter Your Last Name">
            <i class="fa fa-user fa-fw" ></i>
            <br/>
            <input class="form-control" type="date" name="age" placeholder="Enter Your Age">
            <i class="fas fa-calendar fa-fw"></i>
            <br/>
            <input class="form-control" type="email" name="email" placeholder="Type an Valid Email">
            <i class="fa fa-envelope fa-fw" ></i>
            <br/>                 
            <input class="form-control" type="tel" name="PhoneNumber" placeholder="Please Enter Your Phone Number" pattern="[0-9]+" title="Please enter only numeric characters" required>
            <i class="fas fa-phone"></i>
            
            <br/>
            <h6>Choose a Picture</h6>
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="imageInput" name="image" accept=".png, .jpg, .jpeg" required>
            <label class="custom-file-label" for="imageInput" aria-placeholder="Select image file...">
             Select image file...</label>
             <p id="fileType"></p>
            <br/>
                 
               <br/>
               <input class="btn btn-success btn-block" type="submit" name="save" value="Submit">
        </form>
     </div>
     
    <script src="js/jquery3.7.1.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <script>
  
  $(document).ready(function() {
    $('#imageInput').change(function() {
      var file = this.files[0];

      if (file) {
        var extension = file.name.split('.').pop().toLowerCase();

        $('#fileType').text(extension);
        $('#fileTypeAlert').show();
      } else {
        $('#fileTypeAlert').hide();
      }
    });
  });
</script>

</body>
</html>











