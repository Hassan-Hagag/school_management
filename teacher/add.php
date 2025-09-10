<?php

include_once "../conect.php";

if(isset($_POST['frist_name'])){
  $obgconect = new Conect();
  if($obgconect->insert($_POST,'teacher')){
    header('location:\school_managment\teacher\index.php?add=success');
    exit;
    print "<div class='alert alert-success'>yes you add</div>";
  }
  else {
    print "<div class='alert alert-danger'>no do not add</div>";
  }
}
include_once "../header.php";
?>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-success">Add New Teacher</h2>
        <p class="text-muted">Fill in the details below to add a new teacher</p>
    </div>

    <?php if(isset($_SESSION['userName'])){ ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg rounded">
                <div class="card-body p-4">
                    <form method="post">

                        <!-- First Name -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">First Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control form-control-lg" name="frist_name" placeholder="Enter first name" required>
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Last Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                                <input type="text" class="form-control form-control-lg" name="last_name" placeholder="Enter last name" required>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="Enter password" required>
                            </div>
                        </div>

                        <!-- Age -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Age</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-calendar-heart"></i></span>
                                <input type="number" class="form-control form-control-lg" name="age" placeholder="Enter age" required>
                            </div>
                        </div>

                        <!-- Hidden: Added By -->
                        <input type="hidden" name="user_id" value="<?= $_SESSION['id']?>">

                        <!-- Submit -->
                        <button type="submit" class="btn btn-success btn-lg w-100 mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php } else {
        header('location:\school_managment\user\login.php');
    } ?>
</div>

<style>
body {
    background: linear-gradient(to right, #f1f8e9, #ffffff);
}
form input:focus {
    border-color: #198754;
    box-shadow: 0 0 6px rgba(25, 135, 84, 0.4);
    outline: none;
}
button:hover {
    transform: translateY(-2px);
    transition: 0.3s;
}
</style>

<?php include_once "../footer.php"; ?>
