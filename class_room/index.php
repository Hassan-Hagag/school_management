<?php
 include_once "../conect.php";
 $conect =new Conect;
 include_once "../header.php";

 if(!isset($_SESSION['userName'])){
    header('location:\school_managment\user\login.php');
}
 if(isset($_POST['id'])){
    if($conect->delete('class_room',$_POST['id'])){
            header('location:\school_managment\class_room\index.php?delete=success');
            exit;
    }
 }
$classRoomData=$conect->select("class_room");
?>

<div class="container mt-5">
  <!-- Title -->
  <div class="row justify-content-center mb-4">
    <div class="col-lg-8">
      <div class="card shadow-sm border-0 rounded-4">
        <div class="card-header bg-danger text-white text-center rounded-top-4">
          <h3 class="mb-0"><i class="bi bi-building"></i> Class Room Management</h3>
        </div>
        <div class="card-body text-center">
          <a href="\school_managment\class_room\add.php" class="btn btn-success btn-lg rounded-3 shadow-sm">
            <i class="bi bi-plus-circle"></i> Add New Class Room
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Alerts -->
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <?php
        if(isset($_GET['add']) && $_GET['add']=="success"){
          print "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                  ✅ Class Room added successfully
                  <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                 </div>";
        }
        if(isset($_GET['delete']) && $_GET['delete']=="success"){
          print "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                  🗑️ Class Room deleted successfully
                  <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                 </div>";
        }
        if(isset($_GET['edit']) && $_GET['edit']=="success"){
          print "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                  ✏️ Class Room edited successfully
                  <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                 </div>";
        }
      ?>
    </div>
  </div>

  <!-- Table -->
  <div class="row justify-content-center mt-4">
    <div class="col-lg-10">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
          <table class="table table-striped table-hover align-middle text-center">
            <thead class="table-dark">
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Number Of Students</th>
                <th>Added By</th>
                <th>Delete</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($classRoomData as $key=>$value){ ?>
              <tr>
                <td class="fw-bold"><?= $key + 1 ?></td>
                <td><?= $value['name']?></td>
                <td><?= $value['number_student']?></td>
                <!-- @ هى علامة بتخلى لو موجوده تمام طب لو مش موجودة مطلعش ايرور -->
                <td><?= @$conect->selectOne('user',$value['user_id'])['user_name'] ?></td>
                <td>
                  <form method="POST" onsubmit="return confirm('Are you sure you want to delete this class room?')">
                    <input type="hidden" name="id" value=<?= $value['id']?>>
                    <button type="submit" class="btn btn-sm btn-danger rounded-3 shadow-sm">
                      <i class="bi bi-trash-fill"></i> Delete
                    </button>
                  </form>
                </td>
                <td>
                  <a class="btn btn-sm btn-info rounded-3 shadow-sm" href="\school_managment\class_room\edit.php?id=<?= $value['id']?>">
                    <i class="bi bi-pencil-square"></i> Edit
                  </a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once "../footer.php";?>
