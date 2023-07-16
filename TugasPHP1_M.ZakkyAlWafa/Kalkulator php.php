<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
        <a class="nav-link" id="pills-contact-tab" href="Login.php" role="tab" aria-selected="false">FormData</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="pills-contact-tab" href="Kalkulator php.php" role="tab" aria-selected="True">Kalkulator</a>
      </li>
    </ul>
  </div>
</nav>



<div class="container" style="Padding: 30px 400px 0 400px">

    <h4 style="text-align: Center;">Kalkulator Sederhana Dengan PHP</h4>

    <form method="POST" action="">
        <div class="mb-3">
            <label for="num1" class="form-label">Number 1:</label>
            <input type="number" name="num1" id="num1" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="num2" class="form-label">Number 2:</label>
            <input type="number" name="num2" id="num2" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="operator" class="form-label">Operator:</label>
            <select name="operator" id="operator" class="form-select">
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (*)</option>
                <option value="divide">Division (/)</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];
        $result = 0;

        switch ($operator) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Error: Division by zero is not allowed.";
                }
                break;
            default:
                echo "Error: Invalid operator selected.";
                break;
        }

        echo "<div class='mt-3'>Result: " . $result . "</div>";
    }
    ?>
</div>

</body>
</html>
