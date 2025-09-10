<!-- add student to database -->
<?php
include_once "../conect.php";

if(isset($_POST['frist_name'])){
  $obgconect=new Conect();
  if($obgconect->insert($_POST,'student_info')){
    // حفظ بيانات آخر طالب في الكوكيز
    setcookie("lastStudent",$_POST['frist_name'],time()+(86400 * 7),'/');
    setcookie("lastStudentlast",$_POST['last_name'],time()+(86400 * 7),'/');
    setcookie("lastStudentEmail",$_POST['email'],time()+(86400 * 7),'/');
    setcookie("lastStudentage",$_POST['age'],time()+(86400 * 7),'/');

    header('location:\school_managment\student\index.php?add=success');
    exit;
  }
  else {
    print "<div class='alert alert-danger'>no do not add</div>";
  }
}
include_once "../header.php";
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-primary text-white text-center py-3 rounded-top-4">
          <h4 class="mb-0">➕ Add New Student</h4>
        </div>
        <div class="card-body p-4">
          <?php if(isset($_SESSION['userName'])){ ?>
          <form method="post">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label fw-bold">First Name</label>
                <input type="text" class="form-control rounded-3" name="frist_name" required>
                <div class="form-text">Enter student's first name</div>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-bold">Last Name</label>
                <input type="text" class="form-control rounded-3" name="last_name" required>
                <div class="form-text">Enter student's last name</div>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-bold">Email</label>
                <input type="email" class="form-control rounded-3" name="email" required>
                <div class="form-text">Enter a valid email address</div>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-bold">Age</label>
                <input type="number" class="form-control rounded-3" name="age" required>
                <div class="form-text">Enter student's age</div>
              </div>
            </div>

            <input type="hidden" name="user_id" value="<?= $_SESSION['id']?>">

            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-success btn-lg rounded-3 shadow-sm">
                <i class="bi bi-person-plus-fill"></i> Add Student
              </button>
            </div>
          </form>
          <?php } else {
            header('location:\school_managment\user\login.php');
          } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once "../footer.php";?>
