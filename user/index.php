<?php
 include_once "../conect.php";
 $conect = new Conect;
 include_once "../header.php";

 if(!isset($_SESSION['userName'])){
    header('location:\school_managment\user\login.php');
 }

 if(isset($_POST['id'])){
    if($conect->delete('user', $_POST['id'])){
        header('location:\school_managment\user\index.php?delete=success');
        exit;
    }
 }

 $userData = $conect->select("user");
?>

<div class="container my-5">
  <!-- Dashboard Header -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-primary">
      <i class="bi bi-people-fill"></i> Manage Users
    </h2>
    <a href="\school_managment\user\add.php" class="btn btn-success">
      <i class="bi bi-person-plus-fill"></i> Add New User
    </a>
  </div>

  <!-- Alerts -->
  <?php if(isset($_GET['add']) && $_GET['add']=="success"): ?>
    <div class="alert alert-success">✅ User added successfully</div>
  <?php endif; ?>

  <?php if(isset($_GET['delete']) && $_GET['delete']=="success"): ?>
    <div class="alert alert-danger">🗑️ User deleted successfully</div>
  <?php endif; ?>

  <?php if(isset($_GET['edit']) && $_GET['edit']=="success"): ?>
    <div class="alert alert-info">✏️ User updated successfully</div>
  <?php endif; ?>

  <!-- Users Table -->
  <div class="card shadow-lg border-0 rounded-3">
    <div class="card-body">
      <table class="table table-hover table-striped align-middle">
        <thead class="table-primary">
          <tr>
            <th scope="col">#</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <th scope="col" class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($userData as $key => $value): ?>
          <tr>
            <th scope="row"><?= $key + 1 ?></th>
            <td><?= $value['user_name']?></td>
            <td><?= $value['email']?></td>
            <td class="text-center">
              <!-- Delete -->
              <form method="POST" class="d-inline" onsubmit="return confirm('Are you sure to delete this user?')">
                <input type="hidden" name="id" value=<?= $value['id']?>>
                <button type="submit" class="btn btn-sm btn-outline-danger">
                  <i class="bi bi-trash"></i> Delete
                </button>
              </form>

              <!-- Edit -->
              <a href="\school_managment\user\edit.php?id=<?= $value['id']?>" class="btn btn-sm btn-outline-info ms-1">
                <i class="bi bi-pencil-square"></i> Edit
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include_once "../footer.php"; ?>
