<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>List</title>
  </head>
  <body>
    <center><h1>Hello, Customer</h1></center>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên</th>
      <th scope="col">Năm Sinh</th>
    </tr>
  </thead>
  <tbody>
  <?php
            require_once("connect.php");

            $query = "SELECT id, full_name, dob FROM customer ORDER BY id";
            $result = mysqli_query($conn, $query);

            echo "<b>Số lượng khách hàng: </b> ".mysqli_num_rows($result);

            while ($post = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo "<tr><td>".$post["id"]."</td><td>".$post["full_name"]."</td><td>".$post["dob"]."</td></tr>";
        }
        ?>
  </tbody>
</table>
  </body>
</html>