<?php
 include_once "../conect.php";
 $conect = new Conect;
 include_once "../header.php";

 if(!isset($_SESSION['userName'])){
    header('location:\school_managment\user\login.php');
}
 if(isset($_POST['id'])){
    if($conect->delete('teacher',$_POST['id'])){
            header('location:\school_managment\teacher\index.php?delete=success');
            exit;
    }
 }
$teacherData=$conect->select("teacher");
?>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary">Teachers Management</h2>
        <p class="text-muted">Here you can view, add, edit, or delete teachers</p>
    </div>

    <!-- زرار الإضافة -->
    <div class="mb-3 text-end">
        <a href="\school_managment\teacher\add.php" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Add New Teacher
        </a>
    </div>

    <!-- الرسائل -->
    <?php
    if(isset($_GET['add']) && $_GET['add']=="success"){
        print "<div class='alert alert-success shadow-sm'>✅ Teacher added successfully</div>";
    }
    if(isset($_GET['delete']) && $_GET['delete']=="success"){
        print "<div class='alert alert-danger shadow-sm'>🗑️ Teacher deleted successfully</div>";
    }
    if(isset($_GET['edit']) && $_GET['edit']=="success"){
        print "<div class='alert alert-info shadow-sm'>✏️ Teacher edited successfully</div>";
    }
    ?>

    <!-- Card للجدول -->
    <div class="card shadow-lg rounded">
        <div class="card-body">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Added By</th>
                        <th scope="col" class="text-center">Delete</th>
                        <th scope="col" class="text-center">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($teacherData as $key=>$value){ ?>
                        <tr>
                            <th scope="row"><?= $key + 1 ?></th>
                            <td><?= $value['frist_name']?></td>
                            <td><?= $value['last_name']?></td>
                            <td><?= $value['age']?></td>
                              <!-- @ هى علامة بتخلى لو موجوده تمام طب لو مش موجودة مطلعش ايرور -->
                            <td><?= @$conect->selectOne('user',$value['user_id'])['user_name'] ?></td>
                            <td class="text-center">
                                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this teacher?')">
                                    <input type="hidden" name="id" value=<?= $value['id']?>>
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-info btn-sm" href="\school_managment\teacher\edit.php?id=<?= $value['id']?>">
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



<?php include_once "../footer.php"; ?>
