<?php
 
include_once "../conect.php";
$conect = new Conect;
$user = $conect->selectOne('user', $_GET['id']);
//  print "<pre>";
//  var_dump($student);
//   exit;

if (isset($_POST['user_name'])) {
    $conect->update($_POST, 'user', $user['id']);
    header('location:\school_managment\user\index.php?edit=success');
}

include_once "../header.php";

if (!isset($_SESSION['userName'])) {
    header('location:\school_managment\user\login.php');
}
?>

<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-header bg-warning text-dark text-center">
                <h4>Edit User  <?=$user['user_name']?></h4>
            </div>
            <div class="card-body">
                <form method="POST">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    
                    <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" class="form-control" name="user_name" value="<?= $user['user_name'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="<?= $user['password'] ?>" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="/school_managment/user/index.php" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once "../footer.php"; ?>
