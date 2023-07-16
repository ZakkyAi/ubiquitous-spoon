<!DOCTYPE html>
<html>
<head>
    <title>Fill-in Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary-subtle">
  <div class="container-fluid">
    <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link " id="pills-home-tab" href="home.php" role="tab" aria-selected="false">Home</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-profile-tab" href="LoginBootstrap.php" role="tab" aria-selected="false">Login</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="pills-contact-tab" href="Login.php" role="tab" aria-selected="true">FormData</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-contact-tab" href="Kalkulator php.php" role="tab" aria-selected="false">Kalkulator</a>
      </li>
    </ul>
  </div>
</nav>




    <div class="container" style="padding: 30px 300px 0 350px">

    <h4 style="text-align: Center; padding: 10px 0 30px 0">Form biodata Sederhana Dengan PHP</h4>
        <form method="POST" action="login2.php">
            <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>

            <div class="mb-3">
                <label for="birth_place" class="form-label">Tempat Lahir:</label>
                <input type="text" class="form-control" name="birth_place" id="birth_place" required>
            </div>

            <div class="mb-3">
                <label for="birth_date" class="form-label">Tanggal Lahir:</label>
                <input type="date" class="form-control" name="birth_date" id="birth_date" required>
            </div>

            <div class="mb-3">
                <label for="religion" class="form-label">Agama:</label>
                <select class="form-select" name="religion" id="religion" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="major" class="form-label">Jurusan:</label>
                <select class="form-select" name="major" id="major" required>
                    <option value="Biologi">Biologi</option>
                    <option value="Kimia">Kimia</option>
                    <option value="Fisika">Fisika</option>
                    <option value="Matematika">Matematika</option>
                    <option value="Informatika">Informatika</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Laki-laki" id="gender_male" required>
                    <label class="form-check-label" for="gender_male">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Perempuan" id="gender_female" required>
                    <label class="form-check-label" for="gender_female">Perempuan</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Hobby:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="hobby[]" value="Membaca" id="hobby_reading">
                    <label class="form-check-label" for="hobby_reading">Membaca</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="hobby[]" value="Olahraga" id="hobby_sports">
                    <label class="form-check-label" for="hobby_sports">Olahraga</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="hobby[]" value="Menulis" id="hobby_writing">
                    <label class="form-check-label" for="hobby_writing">Menulis</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="hobby[]" value="Bermain Musik" id="hobby_music">
                    <label class="form-check-label" for="hobby_music">Bermain Musik</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Alamat:</label>
                <textarea class="form-control" name="address" id="address" rows="4" cols="50" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
