<?php
 
include_once "../conect.php";
$conect = new Conect;
$student = $conect->selectOne('student_info', $_GET['id']);

if(isset($_POST['frist_name']))
{
    $conect->update($_POST,'student_info',$student['id']);
    header('location:\school_managment\student\index.php?edit=success');
}
include_once "../header.php";
if(!isset($_SESSION['userName'])){
    header('location:\school_managment\user\login.php');
}
?>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-info">Edit Student</h2>
        <p class="text-muted">Update the details of <strong><?= $student['frist_name']?></strong></p>
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
                                <input type="text" class="form-control form-control-lg" 
                                       name="frist_name" value="<?= $student['frist_name']?>" required>
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Last Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                                <input type="text" class="form-control form-control-lg" 
                                       name="last_name" value="<?= $student['last_name']?>" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control form-control-lg" 
                                       name="email" value="<?= $student['email']?>" required>
                            </div>
                        </div>

                        <!-- Age -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Age</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-calendar-heart"></i></span>
                                <input type="number" class="form-control form-control-lg" 
                                       name="age" value="<?= $student['age']?>" required>
                            </div>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-info btn-lg w-100 mt-3">
                            <i class="bi bi-save"></i> Update Student
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
body {
    background: linear-gradient(to right, #f0f9ff, #ffffff);
}
form input:focus {
    border-color: #0dcaf0;
    box-shadow: 0 0 6px rgba(13, 202, 240, 0.4);
    outline: none;
}
button:hover {
    transform: translateY(-2px);
    transition: 0.3s;
}
</style>

<?php include_once "../footer.php"; ?>
