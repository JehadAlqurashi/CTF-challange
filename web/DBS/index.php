<?php
$connect =new mysqli("localhost","root","","ctf");
if($connect->error){
    echo $connect->error;
}
if($_SERVER['REQUEST_METHOD']=="POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $check = $connect->query("select * from users where email='$email' and password='$password' ");
    if(!$check->num_rows){
        $fail =  "Email Or Password is Wrong";
    }else{
        $sucess= "RmxhZ3s4NWFmYWFiNWYzYjZhNjM4MjY5ZTMzZDEyZGEyZmVkZn0K";
    }
}



?>
<link rel="stylesheet" href="DBS.css">
<?php
if(isset($sucess)){
      echo $sucess;
  };
  ?>
<div class="login">
    
  <div class="form">
  <?php if(isset($fail)){
      echo $fail;
  };


   ?>

    <form class="login-form" action="" method="post">
      <span class="material-icons">lock</span>
      <input name="email" type="text" placeholder="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
      <input name="password" type="password" placeholder="password" required />
      <button>login</button>
    </form>  
  </div>
</div>