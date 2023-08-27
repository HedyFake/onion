<?php
$data = file_get_contents("data.json");
$str = json_decode($data, true);
$dt = $str["data"];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="30" />
    <link href="https://fonts.cdnfonts.com/css/graffiti-font" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@700&family=Lobster&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Security77</title>
  </head>
  <body onLoad="getLocation()" style="background-color: #141414;">
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" style="font-family: 'Graffiti font', sans-serif; font-size: small;" href="../index.html">Security77</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> 
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="pbl.html">publish</a>
          </div>
          </div>
        </div>
      </nav>
        <div class="container">
          <div class="main mt-4">
            <div class="p mb-3">
              <p>Warnings!</p>
          </div>
          <div class="col text-center">
            <div class="s">
              <p>please tell the police I'm not like the pokemon GO you guys are looking for<p>
            </div>
          </div>
        </div>
        <div class="awl mt-4 mb-4">
            <h1>All data</h1>
          </div>
      </div>
      <div class="container">
        <div class="main">
          <table class="table">
     <thead class="table-light ">
      <tr>
        <th scope="col">#</th>
        <th scope="col">url</th>
        <th scope="col">db</th>
        <th scope="col">PUBLISH</th>
      </tr>
    </thead>
    <tbody class="table-group-divider text-white">
      <?php foreach($dt as $row):?>
      <tr>
        <th scope="row">*</th>
          <td><?= $row['web']; ?></td>
          <td><?= $row['db']; ?></td>
          <td><?= $row['lnk']; ?></td>
        <?php endforeach; ?>
      </tr>
    </tbody>
  </table>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>