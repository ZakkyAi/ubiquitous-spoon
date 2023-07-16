<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Menggunakan Bootstrap 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $validUsername = 'admin';
    $validPassword = 'admin';

    if ($username === $validUsername && $password === $validPassword) {
        echo "<script type='text/javascript'>
                alert('Selamat datang');
                window.location.href = 'home.php';
              </script>";
    } else {
        echo "<script type='text/javascript'>alert('Kamu memasukan input yang salah');</script>";
    }
}
?>

<nav class="navbar navbar-expand-lg bg-primary-subtle">
  <div class="container-fluid">
    <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link " id="pills-home-tab" href="home.php" role="tab" aria-selected="false">Home</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="pills-profile-tab" href="LoginBootstrap.php" role="tab" aria-selected="true">Login</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-contact-tab" href="Login.php" role="tab" aria-selected="false">FormData</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-contact-tab" href="Kalkulator php.php" role="tab" aria-selected="false">Kalkulator</a>
      </li>
    </ul>
  </div>
</nav>

<form style="padding: 30px 400px 0 400px; " method="POST">
        <h4 style="text-align: Center;">Form Login Admin Sederhana Dengan PHP</h4>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



<script>
  // JavaScript code to go to the "Home" tab
  function goToHome() {
    var homeTab = document.getElementById("pills-home-tab");
    homeTab.click();
  }

</script>

</body>
</html>
