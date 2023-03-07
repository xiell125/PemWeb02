<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h2>Form Nilai Siswa</h2>
<form method="GET" action="proses_nilai.php">
  <div class="form-group row">
    <label for="Hakim" class="col-4 col-form-label">Rahman Hakim</label> 
    <div class="col-8">
      <input id="Hakim" name="nama" placeholder="Masukkan Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="web">pw</option>
        <option value="ddp">ddp</option>
        <option value="uiux">uiux</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai uts</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="masukkan nilai uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">nilai uas</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="masukkan nilai uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="praktikum" class="col-4 col-form-label">nilai praktikum</label> 
    <div class="col-8">
      <input id="praktikum" name="praktikum" placeholder="masukkan nilai praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
</body>
</html>