<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>php-6015261004-w12</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="bootstrap/js/html5shiv.min.js"></script>
            <script src="bootstrap/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>        
        <div class="container">
            <div class="row"> 
                <div class="jumbotron" style="background-color: cornflowerblue;">
                    <?php include 'topbanner.php';?>
                </div>
            </div>
            <div class="row">
                <?php include 'menu.php';?>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <p>Login Area</p>
                </div>  
                <div class="col-sm-12 col-md-9 col-lg-9">
                <h4>เพิ่มประเภทโครงการ</h4>    
                <?php
                    if(isset($_GET['submit'])){
                        $ptt_name = $_GET['ptt_name'];
                        $sql = "insert into project_type (ptt_name) values ('$ptt_name')";
                        echo $sql;
                        include 'connectdb.php';
                        if(mysqli_query($conn,$sql)){
                            echo "เพิ่มประเภทโครงการ $ptt_name เรียบร้อยแล้ว<br>";
                        }else{
                            echo "เพิ่มประเภทโครงการ $ptt_name ผิดพลาด<br>";
                        }
                        mysqli_close($conn);
                        echo '<a href="project_type_list.php">แสดงประเภทโครงการทั้งหมด</a>';
                    }else{
                ?>
                    <form class="form-horizontal" role="form" name="project_type" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <div class="form-group">
                            <label for="ptt_name" class="col-md-6 col-lg-6 control-label">ประเภทโครงการ</label>
                            <div class="col-md-6 col-lg-6">
                                <input type="text" name="ptt_name" id="ptt_name" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-lg-10">
                                <input type="submit" name="submit" value="ตกลง" class="btn btn-default">
                            </div>    
                        </div>
                    </form>
                <?php
                    }
                ?>
                </div>    
            </div>
            <div class="row">
                <address>คณะวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ</address>
            </div>
        </div>    
    </body>
</html>