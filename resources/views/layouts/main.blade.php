<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="style.css" />

    @vite('resources/css/style.css')
  </head>
  <body>
    <div class="nav-bar">
      <img class="seal" src="images/mi6-seal.png" alt="" />
      <p>Home</p>
      <p>People of Interest</p>
      <div class="visibility-toggle">&lt;</div>
    </div>
    <div class="content">
        @yield('content')
    </div>

    <script>
      const navBar = document.querySelector(".nav-bar");
      const navBarToggle = document.querySelector(".visibility-toggle");
      navBarToggle.addEventListener("click", () => {
        navBarToggle.textContent = navBarToggle.textContent == "<" ? ">" : "<";
        navBar.classList.toggle("hidden");
      });
    </script>
  </body>
</html>
