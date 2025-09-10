<?php
 include_once "../conect.php";
 $conect =new Conect;
$classRoom= $conect->selectOne('class_room',$_GET['id']);

if(isset($_POST['name']))
{
    $conect->update($_POST,'class_room',$classRoom['id']);
     header('location:\school_managment\class_room\index.php?edit=success');
}
include_once "../header.php";
if(!isset($_SESSION['userName'])){
    header('location:\school_managment\user\login.php');
}
?>

<div class="container mt-5">
  <!-- Title -->
  <div class="row justify-content-center mb-4">
    <div class="col-lg-8">
      <div class="card shadow-sm border-0 rounded-4">
        <div class="card-header bg-info text-white text-center rounded-top-4">
          <h3 class="mb-0"><i class="bi bi-pencil-square"></i> Edit Class Room: <span class="fw-bold"><?= $classRoom['name']?></span></h3>
        </div>
      </div>
    </div>
  </div>

  <!-- Form -->
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
          <form method="post">
            <div class="mb-3">
              <label class="form-label fw-bold">Name</label>
              <input type="text" class="form-control rounded-3 shadow-sm" name="name" value="<?= $classRoom['name']?>" required>
              <div class="form-text">Enter class room name</div>
            </div>
            <div class="mb-3">
              <label class="form-label fw-bold">Number Of Students</label>
              <input type="number" class="form-control rounded-3 shadow-sm" name="number_student" value="<?= $classRoom['number_student']?>" required>
              <div class="form-text">Enter number of students in this class</div>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg rounded-3 shadow-sm">
                <i class="bi bi-check-circle"></i> Save Changes
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once "../footer.php";?>
