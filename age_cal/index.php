<?php

include_once "./agecalculator.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgeCal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow" style="background-color: #EBF5FB;border-radius:20px">
                    <div class="card-body">
                        <h3 class="text-center fw-bold">Age Calculator</h3>
                        <hr>
                        <form action="" method="POST">
                            <div class="my-3">
                                <label for="" class="fw-bold">Name</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="" class="fw-bold">Birth Date</label>
                                <input name="year" type="text" class="form-control" placeholder="--Please enter your Year of birth--"
                                
                                >
                            </div>
                            <div class="my-3 text-center">                            
                            <input name="submit" type="submit" class="btn btn-danger justify-content-center" value="Submit">
                           </div>                           
                        </form>
                    </div>
                    <div class="card-footer bg-success" style="border-radius:0px 0px 20px 20px">
                        <?php
                        
                        if( isset($_POST['submit']) ){

                            

                            // get form value

                            $name   = $_POST['name'];
                            $year    = $_POST['year'];
                            

                            if( empty($name) || empty($year) ){
                                echo "<p class=\"alert alert-danger d-flex justify-content-between fade show shadow\";>All filds are required ! <button class=\"btn-close\"; data-bs-dismiss=\"alert\";></button> </p>";
                            }else{
                               echo ageCal($name, $year);
                            }
                        }
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>