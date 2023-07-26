<?php
include_once('connect.php');

$sql = "SELECT * FROM `score`, `students` WHERE scores.student_id = students.id;";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC)

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  </head>
  <body>
    <div class="m-5 d-flex flex-wrap justify-content-center">
      <form style="padding-right: 30px" class="col-12 col-md-4" method="POST" action="">
        <h1 class="mb-4">INPUT DATA</h1>
        <div class="mb-3">
          <label for="nama">Nama</label>
          <input id="nama" type="text" name="nama" class="form-control" />
        </div>
        <div>
          <label for="nilai">Nilai</label>
          <input id="nilai" type="number" name="nilai" class="mb-3 form-control" />
        </div>
        <button class="btn btn-primary" type="submit">KIRIM</button>
        <hr />
      </form>

      <div class="col-12 col-md-8">
        <h1 class="mb-4 text-center">DAFTAR RANKING</h1>
        <table class="table table-bordered table-hover border-dark text-center" border="1">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Nilai</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($data as $key => $d): ?>

<tr>
  <td><?= $key + 1 ?></td>
  <td><?= $d['name']?></td>
  <td><?= $d['score'] ?></td>

</tr>
<?php endforeach ?>
            
          </tbody>
          <tfoot>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Nilai</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </body>
</html>
