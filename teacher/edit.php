<?php
 
include_once "../conect.php";
$conect = new Conect;
$teacher = $conect->selectOne('teacher', $_GET['id']);

if(isset($_POST['frist_name'])) {
    $conect->update($_POST,'teacher',$teacher['id']);
    header('location:\school_managment\teacher\index.php?edit=success');
}
include_once "../header.php";
if(!isset($_SESSION['userName'])){
    header('location:\school_managment\user\login.php');
}
?>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary">Edit Teacher</h2>
        <p class="text-muted">Update the details of <strong><?= $teacher['frist_name']?></strong></p>
    </div>

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
                                <input type="text" class="form-control form-control-lg" name="frist_name" 
                                       value="<?= $teacher['frist_name']?>" required>
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Last Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                                <input type="text" class="form-control form-control-lg" name="last_name" 
                                       value="<?= $teacher['last_name']?>" required>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control form-control-lg" name="password" 
                                       value="<?= $teacher['password']?>" required>
                            </div>
                        </div>

                        <!-- Age -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Age</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-calendar-heart"></i></span>
                                <input type="number" class="form-control form-control-lg" name="age" 
                                       value="<?= $teacher['age']?>" required>
                            </div>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary btn-lg w-100 mt-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
body {
    background: linear-gradient(to right, #e3f2fd, #ffffff);
}
form input:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 6px rgba(13, 110, 253, 0.4);
    outline: none;
}
button:hover {
    transform: translateY(-2px);
    transition: 0.3s;
}
</style>

<?php include_once "../footer.php"; ?>
