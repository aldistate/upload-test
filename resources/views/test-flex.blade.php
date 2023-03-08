<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Flex</title>
    <style>
      @media (min-width: 768px) {
        .mb-md-0 {
          margin-bottom: 0 !important;
        }
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 mb-3 mb-md-0">
          <button class="btn btn-primary">Tambah</button>
          <button class="btn btn-secondary">Import</button>
          <button class="btn btn-secondary">Export</button>
        </div>
        <div class="col-12 col-md-8">
          <div class="row">
            <div class="col-12 col-md-6 mb-3 mb-md-0">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
            </div>
            <div class="col-12 col-md-6">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pilih Tahun
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">2020</a></li>
                  <li><a class="dropdown-item" href="#">2021</a></li>
                  <li><a class="dropdown-item" href="#">2022</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>