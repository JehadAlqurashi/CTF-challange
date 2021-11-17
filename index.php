<?php
$connect = new mysqli("localhost",'root','','ctf');

if(isset($_POST['flag'])){
    $flag = mysqli_real_escape_string($connect,htmlspecialchars($_POST['flag']));
    $check = $connect->query("SELECT * from points where flag='$flag'");
    if($check->num_rows){
        $check = $check->fetch_assoc();
        if($check['count'] ==0){
            $connect->query("update points set count='1' where flag='$flag'");
            $success = " Congratulations!";

        }else{
                    $worng =  "Already Submit";
        }

    }else{
        $worng ="Wrong Flag";
    }
}
$count = $connect->query("select sum(point) as point from points where count='1' ")->fetch_assoc();

?>

<html>
        <head>
                <title>
                        CTF Challenge
                </title>
                <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
                <link rel="stylesheet" href="css/index.css">
                <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        </head>

        <body>
        <img src="img/banner.png">
                <div class="head">
                <h1>CTF CHALLENGES </h1>
                </div>
                <span style="font-size: 20px;margin:10px"  class="badge bg-success">Points : <?php echo $count['point']; ?></span>
                <h3 class="head2">Categories</h3>
                <div class="menu">
                    <i class="fas fa-flag"></i>
                        <div class="web">
                            <div class="title">General</div>
                            <div class="content">
                                <ul class="webOrder">
                                <a href="general/ransomware.php" ><li>Ransomware</li></a>
                                <a href="general/history.php" > <li>History</li></a>
                                <a href="general/intercept.php" > <li>Intercept</li></a>
                                <a href="general/Close_Look.php"> <li>Close Look</li></a>
                                </ul>
                            </div>
                        </div>
                        <div class="web">
                            <div class="title">Web</div>
                            <div class="content">
                                <ul class="webOrder">
                                    <a href="web/source"><li>Source</li></a>
                                  <a href="web/DBS"><li>DBS</li></a>
                                  <a href="web/Humble"><li>Humble</li></a>
                                  <a href="web/type" ><li>Types</li></a>
                                  <a href="web/Potato"><li>Potato</li></a>
                                  <a href="web/hashes"><li>Hashes</li></a>
                                </ul>
                            </div>
                        </div>
                        <div class="web">
                            <div class="title">Steganography</div>
                            <div class="content">
                                <ul class="webOrder">
                                <a href="https://ufile.io/u5rzqhhd"><li>Cat</li></a>
                                <a href="https://ufile.io/itgywu50"><li>Colors</li></a>
                                <a href="https://ufile.io/8bvkpx30" ><li>Klega</li></a>
                                </ul>
                            </div>
                        </div>

                </div>
                <div class="check" style="margin-top:20px;height:10px" >
                
                <?php 
                        if(isset($worng)){
                            echo "<span style='color:red;font-size:22px;font-weight:bolder'>$worng</span>&nbsp; &nbsp;<i style='color:black;font-size:40px;position: relative;top:9px' class='fas fa-times'></i>";
                        }
                        if(isset($success)){
                            echo "<span style='color:green;font-size:22px;font-weight:bolder'>$success</span><br>";
                        }
                    ?>
                </div>
                <form action="" method="post">
                <div class="wrap">
                <div class="search">
                    
                    <input type="text" name="flag" class="searchTerm" placeholder="Flag{MD5}">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>

                </div>
                </div>
                </form>

        </body>

</html>