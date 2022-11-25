<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bursa Orman Bölge Müdürlüğü</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
include "navbar.php"; 
?>

<div class="container-fluid">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <p><br><br><br><br><br><br></p>
                    <img class="card-img-top" src="fidan1.jpg" alt="Card image">
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
            <form action="bağışsayfası.php" class="was-validated" method="POST">
    <p><br><br><br></p>
    <p1 style="font-size:30px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBağış Formu</p1>
    &nbsp&nbsp&nbsp&nbsp
    <div class="form-group">
      <label for="uname">İsim/Soyisim:</label>
      <input type="text" class="form-control" id="uname" placeholder="İsim/Soyisim Giriniz" name="uname" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Lütfen bu alanı doldurun.</div>
    </div>
    <div class="form-group">
      <label for="pwd">E-Posta:</label>
      <input type="text" class="form-control" id="pwd" placeholder="E-postanızı Giriniz" name="pwd" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Lütfen bu alanı doldurun.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Telefon Numarası:</label>
      <input type="text" class="form-control" id="tel" placeholder="Telefon Numarası" name="tel" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Lütfen bu alanı doldurun.</div>
    </div>
    <div class="form-group">
      <label for="disabledSelect">Bağış Türü:</label>
      <select id="disabledSelect" class="form-control" name="opsion">
        <option>Fidan</option>
        <option>10₺</option>
        <option>20₺</option>
        <option>30₺</option>
        <option>40₺</option>
        <option>Diğer</option>
      </select>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> Kabul ediyorum.
        <div class="valid-feedback">Geçerli.</div>
        <div class="invalid-feedback">Doğruluğunu kontrol ediniz.</div>
      </label>
    </div>
    <center><button type="submit" name="submit" value="submit" class="btn btn-primary">Bağış Yap</button></center>
  </form>
            </div>
        </div>
            
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                <p><br><br><br><br><br><br></p>
                    <img class="card-img-top" src="fidan1.jpg" alt="Card image">
                    <div class="card-body">
                       
                    </div>
                </div>
            </div>
    </div>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
