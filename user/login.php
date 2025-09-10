<?php
  
  include_once "../header.php";
  include_once "../conect.php";
  $conect=new Conect;
  if(isset($_POST['user_name'])){
    $user=$conect->login($_POST['user_name'],$_POST['password']);
        if(count($user) > 0){
            print "<div class='alert alert-success mt-1'>User login success</div>";
            // يتم تسجيل سيشن بيانات للمستخدم
             $_SESSION['userName']=$user['user_name'];
             $_SESSION['id']=$user['id'];
             header('location:\school_managment\home.php');
              exit;
        }
        else {
            print "<div class='alert alert-danger mt-1'>User not login success</div>";
            // header('location:\school_managment\user\registeration.php');
        }
    }




?>
<div class="row justify-content-center mt-5">
  <div class="col-md-6 col-lg-4">
    <div class="card shadow-lg border-0 rounded-3">
      <div class="card-header bg-primary text-white text-center fw-bold fs-4">
        <i class="bi bi-box-arrow-in-right"></i> Login
      </div>
      <div class="card-body p-4">
        <form method="POST">
          <div class="mb-3">
            <label class="form-label">User Name</label>
            <input type="text" class="form-control" name="user_name" placeholder="Enter your username">
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your password">
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">
              <i class="bi bi-box-arrow-in-right"></i> Login
            </button>
            <a class="btn btn-outline-primary" href="/school_managment/user/register.php">
              <i class="bi bi-person-plus-fill"></i> Register
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php include_once "../footer.php";?>