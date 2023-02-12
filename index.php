<?php
    include "connection.php";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card mt-5">
            <div class="card-header">
              <h5 class="card-title">Mahasiswa</h5>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Telepon</th>
                  </tr>
                </thead>
                <tbody>
                <?php $nomor = 0;
                  $data = mysqli_query($mysqli,"SELECT * FROM mahasiswa"); 
                  while ($show = mysqli_fetch_array($data)) { 
                  $nomor++;
                ?>
                  <tr>
                    <th scope="row"><?php echo $nomor;?></th>
                    <td><?php echo $show['email'];?></td>
                    <td><?php echo $show['name'];?></td>
                    <td><?php echo $show['phone'];?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <a href="form.php" class="btn btn-primary">Tambah</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
