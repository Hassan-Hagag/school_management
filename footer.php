    </div> <!-- End Container -->

    <footer class="footer text-white text-center text-md-start py-2 shadow-lg mt-auto">
      <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">

        <!-- Logo + Name -->
        <div class="mb-2 mb-md-0 d-flex align-items-center">
          <i class="bi bi-mortarboard-fill fs-4 me-2"></i>
          <span class="fw-bold fs-6">School Management</span>
        </div>

        <!-- Social Links -->
        <div class="mb-2 mb-md-0">
          <a href="https://www.facebook.com/share/1H1Ep6bioC/ " target="_blank" class="social-link facebook me-3">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://wa.me/201210393390" target="_blank" class="social-link whatsapp me-3">
            <i class="bi bi-whatsapp"></i>
          </a>
          <a href="https://www.linkedin.com/in/hassan-hagag-746b1a356 " target="_blank" class="social-link linkedin me-3">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="https://github.com" target="_blank" class="social-link github">
            <i class="bi bi-github"></i>
          </a>
        </div>
      </div>

      <div class="text-center mt-1">
        <small>&copy; <?= date("Y"); ?> School Management System | All Rights Reserved</small>
      </div>
    </footer>

<!-- Scroll to Top Button -->
<button id="scrollTopBtn" class="btn btn-warning rounded-circle shadow">
  <i class="bi bi-arrow-up"></i>
</button>

<style>
  /* Sticky Layout */
  body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }
  .container {
    flex: 1;
  }

  /* Footer Styling */
  .footer {
    background: linear-gradient(135deg, #0d6efd, #004085);
    width: 100%;
  }

  /* Social Icons Styling */
  .social-link {
    font-size: 1.4rem;
    transition: all 0.3s ease-in-out;
  }
  .social-link:hover {
    transform: scale(1.2);
  }
  .facebook { color: #1877f2; }
  .whatsapp { color: #25d366; }
  .linkedin { color: #0077b5; }
  .github { color: #fff; }

  /* Scroll To Top Button */
  #scrollTopBtn {
    position: fixed;
    width: 45px;
    height: 45px;
    bottom: 20px;
    right: 20px;
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 2000;
  }

  #scrollTopBtn i {
    font-size: 1.2rem;
  }
</style>

<script>
  const scrollTopBtn = document.getElementById("scrollTopBtn");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 200) {
      scrollTopBtn.style.display = "flex";
    } else {
      scrollTopBtn.style.display = "none";
    }
  });

  scrollTopBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
</script>
<script src="/school_managment/assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
