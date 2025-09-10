<?php include "./header.php";?>
<!-- content -->
<div class="row justify-content-center mb-4">
  <div class="col-10">
    <!-- Carousel -->
<!-- Carousel Section -->
<div class="row justify-content-center mb-4">
  <div class="col-10 col-md-8"> <!-- العرض أصغر -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide shadow rounded overflow-hidden">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="assets/images/school2.jpg" class="d-block w-100" alt="School 1">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
            <h5 class="text-white">First school</h5>
            <p class="text-light">this slider for frist school.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="assets/images/school3.jpg" class="d-block w-100" alt="School 2">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
            <h5 class="text-white">Second school</h5>
            <p class="text-light">this slider for second school.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/images/school1.jpg" class="d-block w-100" alt="School 3">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
            <h5 class="text-white">Third school</h5>
            <p class="text-light">this slider for third school.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
        data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>

<!-- ************************************** -->
<!-- start cards -->
<div class="row justify-content-center mb-5">
  <div class="card m-2 shadow-sm custom-card">
    <img src="assets/images/user1.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">User</h5>
      <p class="card-text">this pragraph expline content of user page</p>
      <a href="\school_managment\user\index.php" class="btn btn-primary">user page</a>
    </div>
  </div>

  <div class="card m-2 shadow-sm custom-card">
    <img src="assets/images/student1.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">Student</h5>
      <p class="card-text">this pragraph expline content of student page</p>
      <a href="\school_managment\student\index.php" class="btn btn-primary">student page</a>
    </div>
  </div>

  <div class="card m-2 shadow-sm custom-card">
    <img src="assets/images/teacher1.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">TEACHER</h5>
      <p class="card-text">this pragraph expline content of teacher page</p>
      <a href="\school_managment\teacher\index.php" class="btn btn-primary">teacher page</a>
    </div>
  </div>

  <div class="card m-2 shadow-sm custom-card">
    <img src="assets/images/class2.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">CLASS ROOM</h5>
      <p class="card-text">this pragraph expline content of class room page</p>
      <a href="\school_managment\class_room\index.php" class="btn btn-primary">CLASS ROOM</a>
    </div>
  </div>
</div>

<!-- Last Student Info -->
<div class="row justify-content-center mt-5">
  <div class="col-md-6 col-lg-5">
    <div class="card shadow-lg border-0 rounded-3">
      <!-- Header -->
      <div class="card-header bg-primary text-white text-center fw-bold">
        <i class="bi bi-person-fill"></i> Last Student Info
      </div>
      <!-- Body -->
      <div class="card-body text-center">
        <h5 class="card-title text-dark">
          <i class="bi bi-person-circle text-primary"></i>
          <?php echo isset($_COOKIE['lastStudent']) ? $_COOKIE['lastStudent']." ".$_COOKIE['lastStudentlast'] : "No name"; ?>
        </h5>
        <h6 class="card-subtitle mb-3 text-muted">
          <i class="bi bi-envelope-fill text-success"></i>
          <?php echo isset($_COOKIE['lastStudentEmail']) ? $_COOKIE['lastStudentEmail'] : "No Email"; ?>
        </h6>
        <h6 class="card-subtitle mb-3 text-muted">
          <i class="bi bi-calendar-heart text-danger"></i>
          <?php echo isset($_COOKIE['lastStudentage']) ? $_COOKIE['lastStudentage'] . " years" : "No Age"; ?>
        </h6>
        <div class="alert alert-success mt-3 py-2">
          ✅ Show the last student info success
        </div>
        <a href="/school_managment/student/add.php" class="btn btn-outline-primary px-4 mt-2">
          <i class="bi bi-info-circle"></i> View More Info
        </a>
      </div>
    </div>
  </div>
</div>



<!-- Custom Styles -->
<style>
  /* Carousel */
    .carousel-item img {
    height: 550px;          /* أطول */
    object-fit: cover;      /* يحافظ على تناسق الصور */
    border-radius: 15px;    /* زوايا ناعمة */
  }

  /* خلي الكاروسيل يظهر بشكل أنيق */
  #carouselExampleDark {
    border-radius: 15px;
    overflow: hidden;
  }

  /* تحكم في عرض الكاروسيل */
  .col-10.col-md-8 {
    max-width: 900px; /* العرض مايبقاش full */
  }
  /* Cards */
  .custom-card {
    width: 18rem;
    border-radius: 12px;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .custom-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
  }

  .custom-card img {
    height: 200px; /* كل الصور نفس الطول */
    object-fit: cover;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
  }

  /* Last Student Card */
  .card-header {
    font-size: 1.1rem;
  }

  .card-body h5 {
    font-weight: bold;
  }
</style>

<?php include_once "./footer.php";?>