<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 col-6">
        <div class="text-center">
            <h1 class="fs-1">Contact Data</h1>
        </div>
        <br>
        <br>

        <form action="php/process.php" method="post" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col">
            <div class="input-group">
                <i class="fa fa-user fa-fw"></i>
                <input type="text" class="form-control" name="firstName" placeholder="First name" aria-label="First name">
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <i class="fa fa-user fa-fw"></i>
                <input type="text" class="form-control" name="lastName" placeholder="Last name" aria-label="Last name">
            </div>
        </div>
    </div>

    <div class="mb-3">
        <div class="input-group">
            <i class="fa fa-envelope fa-fw"></i>
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="email" class="form-control" name="email" placeholder="Email address" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div id="emailHelp" class="form-text"></div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <div class="input-group">
                <i class="fas fa-phone fa-fw"></i>
                <input type="text" class="form-control" name="phoneNumber" placeholder="Phone" aria-label="Phone" pattern="[0-9]+" required>
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <i class="fas fa-calendar fa-fw"></i>
                <input type="date" class="form-control" name="age" placeholder="Birthday" aria-label="age">
                <p ></p>
            </div>
        </div>
    </div>
    

    <h6>Select image file...</h6>
    <div class="mb-3 input-group">
    
        <label for="formFile" class="form-label"></label>
        <input name="image" class="form-control" type="file" id="formFile" required>
       
    </div>

    <div class="col-4 mx-auto">
        <button type="button" name="incritBtn" id="incritBtn" class="btn btn-primary col-12 mt-3">Submit</button>
    </div>
</form>



    </div>
    <script src="./js/jquery3.7.1.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>!-->
</body>

</html>