<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Belajar PHP</title> 
    <style>
        .menampilkanData {
            padding: 30px 0;
            text-align: center;
            
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary-subtle">
  <div class="container-fluid">
    <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="pills-home-tab" href="home.php" role="tab" aria-selected="true">Home</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-profile-tab" href="LoginBootstrap.php" role="tab" aria-selected="false">Login</a>
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

        <div class="menampilkanData">
                <?php
                echo "<h4>Menampilkan Teks dengan PHP</h4> <br> " ;
                echo "<p>Nama  &nbsp;&nbsp;&nbsp;                    :&nbsp; M.Zakky Al Wafa</p>";
                echo "<p>NIM   &nbsp;&nbsp;&nbsp;&nbsp;  :&nbsp; 062230701525</p>";
                echo "<p>Jurusan &nbsp;&nbsp;                        :&nbsp; Teknik Komputer</p>";
                ?>
</body>
</html>

