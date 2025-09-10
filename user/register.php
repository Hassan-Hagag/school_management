<?php
// add student to database
include_once "../conect.php";

if(isset($_POST['user_name'])){
    $obgconect = new Conect();
    if($obgconect->insert($_POST,'user')){
        // الانتقال الى صفحة الindex user
        header('location:\school_managment\user\index.php?add=success');
        exit;
    } else {
        print "<div class='alert alert-danger text-center mt-3'>Failed to add user</div>";
    }
}

include_once "../header.php";
?>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary">Add New User</h2>
        <p class="text-muted">Fill the form below to register a new user</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="post" class="p-5 shadow-lg rounded" style="background: #ffffff; border: 1px solid #dee2e6;">
                
                <div class="mb-4">
                    <label class="form-label fw-bold">Username</label>
                    <input type="text" class="form-control form-control-lg" name="user_name" placeholder="Enter your username" required>
                    <div class="form-text text-muted">Your username should be unique</div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Enter your email" required>
                    <div class="form-text text-muted">We'll never share your email with anyone else</div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Enter your password" required>
                    <div class="form-text text-muted">Choose a strong password</div>
                </div>

                <button type="submit" class="btn btn-primary btn-lg w-100" style="transition: 0.3s;">Submit</button>
            </form>
        </div>
    </div>
</div>

<style>
/* تحسين شكل الصفحة */
body {
    background: linear-gradient(to right, #e0f7fa, #ffffff);
}

form input:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 5px rgba(13, 110, 253, 0.5);
    outline: none;
}

form button:hover {
    background-color: #0b5ed7;
    transform: translateY(-2px);
}
</style>

<?php include_once "../footer.php"; ?>
