<?php
include_once "../conect.php";

if(isset($_POST['name'])){
  $obgconect=new Conect();
  if($obgconect->insert($_POST,'class_room')){
    header('location:\school_managment\class_room\index.php?add=success');
    exit;
    print "<div class='alert alert-success'>yes you add</div>";
  }
  else
    print "<div class='alert alert-danger'>no do not add</div>";
}
include_once "../header.php";
?>

<div class="container mt-5">
  <!-- Title -->
  <div class="row justify-content-center mb-4">
    <div class="col-lg-8">
      <div class="card shadow-sm border-0 rounded-4">
        <div class="card-header bg-success text-white text-center rounded-top-4">
          <h3 class="mb-0"><i class="bi bi-plus-circle"></i> Add New Class Room</h3>
        </div>
      </div>
    </div>
  </div>

  <?php if(isset($_SESSION['userName'])){ ?>
  <!-- Form -->
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
          <form method="post">
            <div class="mb-3">
              <label class="form-label fw-bold">Class Room Name</label>
              <input type="text" class="form-control rounded-3 shadow-sm" name="name" required>
              <div class="form-text">Enter the name of the class room</div>
            </div>
            <div class="mb-3">
              <label class="form-label fw-bold">Number Of Students</label>
              <input type="number" class="form-control rounded-3 shadow-sm" name="number_student" required>
              <div class="form-text">Enter number of students in this class</div>
            </div>
            <!-- hidden input -->
            <input type="hidden" name="user_id" value="<?= $_SESSION['id']?>">
            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg rounded-3 shadow-sm">
                <i class="bi bi-check-circle"></i> Save
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php } else {
    header('location:\school_managment\user\login.php');
  } ?>
</div>

<?php include_once "../footer.php";?>
