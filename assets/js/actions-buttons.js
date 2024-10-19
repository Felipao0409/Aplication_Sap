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
//   const isLoggedIn = localStorage.setItem("isLoggedIn", true);
//   isLoggedIn = localStorage.getItem("isLoggedIn");
//   if (!isLoggedIn) {
//     window.location.href = "login.html";
//   }