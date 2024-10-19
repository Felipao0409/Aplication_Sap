<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TechInventory - Company Equipment Management</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      rel="stylesheet"
    />
    <!-- <style>
      :root {
        --primary-color: #007bff;
        --secondary-color: #6c757d;
        --background-color: #f8f9fa;
        --text-color: #333;
      }
      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background-color: var(--background-color);
        color: var(--text-color);
        transition: background-color 0.3s, color 0.3s;
      }
      .sidebar {
        height: 100vh;
        background-color: var(--primary-color);
        color: white;
        padding-top: 20px;
      }
      .sidebar .nav-link {
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 10px;
      }
      .sidebar .nav-link:hover {
        color: white;
      }
      .sidebar .nav-link.active {
        background-color: rgba(255, 255, 255, 0.1);
      }
      .content {
        padding: 20px;
      }
      .table {
        background-color: white;
      }
      .dark-mode {
        --background-color: #333;
        --text-color: #f8f9fa;
      }
      .dark-mode .table {
        color: var(--text-color);
        background-color: #444;
      }
      .dark-mode .card {
        background-color: #444;
        color: var(--text-color);
      }
      #darkModeToggle {
        cursor: pointer;
      }

      .card-center{
        margin-top: 10%;
      }
    </style> -->
    <style>
      body{
       /* 
        background-attachment: fixed;
        background-image: url("/assets/img/bg.webp");
        background-position: center;
        background-repeat: no-repeat;
        background-size:cover; */
        background-color: #5faecc;
      }
      .center_div{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;  
        padding: 0;     
      }
    </style>
  </head>
  <body>
    <!-- <img src="/assets/img/bg.webp"> -->
    <div class="center_div">
      <div class="w-75">
        <!-- Sidebar -->
        <!-- <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
          <div class="position-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <i class="fas fa-home"></i> Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-laptop"></i> Equipment
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-users"></i> Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-clipboard-list"></i> Assignments
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-chart-bar"></i> Reports
                </a>
              </li>
            </ul>
          </div>
        </nav> -->

        <!-- Main content -->
        <main class="">
          <div class="container ">
            <div class="row justify-content-center card-center">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                  <div class="text-center"><img src="/assets//img/logo.jpeg" width="100" height="50"></div>
                    <h2 class="text-center mt-2">Team Management Systems</h2>
                    
                  </div>
                  <div class="card-body">
                    <form id="loginForm" method="POST" action="./controllers/login.php">
                      <div class="mb-3">
                        <h3 align="center"><Strong><label for="username" class="form-label">ID SAP</label></Strong></h3>
                        <input
                          placeholder=""
                          type="text"
                          class="form-control"
                          id="id_sap"
                          name="id_sap"
                          required=""
                        />
                      </div>
                      <!-- <div class="mb-3">
                        <label for="password" class="form-label"
                          >Password</label
                        >
                        <input
                          type="password"
                          class="form-control"
                          id="password"
                          required=""
                        />
                      </div> -->
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                          Search
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script>
            document
              .getElementById("loginFormx")
              .addEventListener("submit", function (e) {
                e.preventDefault();
                const username = document.getElementById("username").value;
                const password = document.getElementById("password").value;

                // Here you would typically send a request to your server to validate the credentials
                // For this example, we'll just check for a dummy username and password
                if (username === "admin" && password === "password") {
                  localStorage.setItem("isLoggedIn", "true");
                  //window.location.href = "dashboard.html"; // Redirect to dashboard page
                } else {
                  alert("Invalid username or password");
                }
              });

            // Check if user is already logged in
            if (localStorage.getItem("isLoggedIn") === "true") {
              //window.location.href = "dashboard.html";
            }
          </script>
        </main>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Dark mode toggle functionality
      const darkModeToggle = document.getElementById("darkModeToggle");
      const body = document.body;

      darkModeToggle.addEventListener("click", () => {
        body.classList.toggle("dark-mode");
        const isDarkMode = body.classList.contains("dark-mode");
        localStorage.setItem("darkMode", isDarkMode);
        updateDarkModeButton(isDarkMode);
      });

      // Check for saved dark mode preference
      const savedDarkMode = localStorage.getItem("darkMode");
      if (savedDarkMode === "true") {
        body.classList.add("dark-mode");
        updateDarkModeButton(true);
      }

      function updateDarkModeButton(isDarkMode) {
        const icon = darkModeToggle.querySelector("i");
        icon.className = isDarkMode ? "fas fa-sun" : "fas fa-moon";
      }

      // Simulated login check (replace with actual authentication in a real app)
      // const isLoggedIn = localStorage.setItem("isLoggedIn", true);
      // isLoggedIn = localStorage.getItem("isLoggedIn");
      // if (!isLoggedIn) {
      //   window.location.href = "login.html";
      // }
    </script>
  </body>
</html>
