<?php
include_once "../conect.php";

if (isset($_POST['user_name'])) {
    $obgconect = new Conect();
    if ($obgconect->insert($_POST, 'user')) {
        header('location: \school_managment\user\index.php?add=success');
        exit;
    } else {
        print "<div class='alert alert-danger'>User not added</div>";
    }
}

include_once "../header.php";
?>

<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-header bg-primary text-white text-center">
                <h3 class="mb-0">Add New User</h3>
            </div>
            <div class="card-body p-4">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" class="form-control" name="user_name" required>
                        <div class="form-text">Enter your username</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                        <div class="form-text">Enter your email address</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                        <div class="form-text">Choose a strong password</div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="/school_managment/user/index.php" class="btn btn-secondary mt-2">Back to Users</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once "../footer.php"; ?>
