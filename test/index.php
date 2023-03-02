<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Test</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .row {
            margin-top: 20px;
            
        }
        .card {
            margin-right: 10px;
            margin-top: 10px;
        }
        .container{
            width: 899px;   
        }
    </style>
</head>

<body>
  
    <div class="container">
        <div class="title">
            <h1>Danh mục sản phẩm</h1>
        </div>
        <br>
        <button type="button" class="btn btn-warning">
            <a href="http://localhost/Tu_PHP/test/them.php">Thêm sản phẩm</a> 
        </button>
        <div class="row">
            
            <?php
            $arr=$_SESSION['mang'];
            for($i=0;$i<count($arr);$i++) {
                ?>
            
            <div class="card" style="width: 18rem;">
            <img src="<?php echo $arr[$i]['file']?> " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $arr[$i]['ten'] ?> </h5>
                <p class="card-text"><?php echo $arr[$i]['gia'] ?></p>
                <a href="#" class="btn btn-primary">Details</a>
            </div>
            </div>
            

            <?php
            }
            ?>
        </div>
    </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>