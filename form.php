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
              <form  method="post" action="action_create.php">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" />
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="name" name="name" />
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="phone" name="phone" />
                  </div>
                  <button class="btn btn-primary">Simpan</button>
              </form>
              <!-- <a href="/index.php" class="btn btn-primary">Simpan</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
