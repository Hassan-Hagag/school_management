<?php
include_once "../conect.php";
$conect = new Conect;
include_once "../header.php";
if(!isset($_SESSION['userName'])){
    header('location:\school_managment\user\login.php');
}
if(isset($_POST['id'])){
    if($conect->delete('student_info',$_POST['id'])){
        header('location:\school_managment\student\index.php?delete=success');
        exit;
    }
}
$studentData = $conect->select("student_info");
?>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-success">Student Management</h2>
        <p class="text-muted">Manage all registered students from here</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <a href="\school_managment\student\add.php" class="btn btn-success mb-3">
                <i class="bi bi-person-plus"></i> Add New Student
            </a>

            <?php
            if(isset($_GET['add']) && $_GET['add']=="success"){
                print "<div class='alert alert-success mt-2 shadow-sm rounded'>✅ Student added successfully</div>";
            }
            if(isset($_GET['delete']) && $_GET['delete']=="success"){
                print "<div class='alert alert-danger mt-2 shadow-sm rounded'>🗑️ Student deleted successfully</div>";
            }
            if(isset($_GET['edit']) && $_GET['edit']=="success"){
                print "<div class='alert alert-info mt-2 shadow-sm rounded'>✏️ Student updated successfully</div>";
            }
            ?>

            <div class="card shadow-lg rounded">
                <div class="card-body">
                    <table class="table table-hover align-middle">
                        <thead class="table-success">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Age</th>
                                <th scope="col">Added By</th>
                                <th scope="col" class="text-center">Delete</th>
                                <th scope="col" class="text-center">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($studentData as $key=>$value){ ?>
                                <tr>
                                    <th scope="row"><?= $key + 1 ?></th>
                                    <td><?= $value['frist_name']?></td>
                                    <td><?= $value['last_name']?></td>
                                    <td><?= $value['email']?></td>
                                    <td><?= $value['age']?></td>
                                     <!-- @ هى علامة بتخلى لو موجوده تمام طب لو مش موجودة مطلعش ايرور -->
                                    <td><?= @$conect->selectOne('user',$value['user_id'])['user_name'] ?></td>
                                    <td class="text-center">
                                        <form method="POST" onsubmit="return confirm('Are you sure to delete this student?')">
                                            <input type="hidden" name="id" value=<?= $value['id']?>>
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-outline-info btn-sm" 
                                           href="\school_managment\student\edit.php?id=<?= $value['id']?>">
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

<style>
body {
    background: #f9fdf9;
}
.table thead th {
    text-align: center;
}
.table tbody td {
    text-align: center;
}
button:hover, a.btn:hover {
    transform: scale(1.05);
    transition: 0.2s;
}
</style>

<?php include_once "../footer.php"; ?>
