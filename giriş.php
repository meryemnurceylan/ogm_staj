<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bursa Orman Bölge Müdürlüğü</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include "navbar.php";
?>

<div class="container-fluid">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <p><br><br><br><br><br><br><br></p>
                    <img class="card-img-top" src="login.jpg" alt="Card image">
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
            <form action="girişişlem.php"  method="POST" class="was-validated">
    <p><br><br><br></p>
    <p1 style="font-size:30px;"><br>&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGiriş Yap</p1>
    &nbsp&nbsp&nbsp&nbsp
    <div class="form-group">
      <label for="uname">Kullanıcı Adı:</label>
      <input type="text" class="form-control" id="uname" placeholder="İsminizi Giriniz" name="uname" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Lütfen bu alanı doldurun.</div>
    </div>
    
    <div class="form-group">
      <label for="pwd">Şifre:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Şifrenizi Giriniz" name="pswd" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Lütfen bu alanı doldurun.<br></div>
    </div>

<center><button type="submit" name="submit" value="submit" class="btn btn-primary">Giriş Yap</button></center>
</form>
<p><br><br><br><br><br><br><br><br><br></p>
            </div>
        </div>
            
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                <p><br><br><br><br><br><br><br></p>
                    <img class="card-img-top" src="login.jpg" alt="Card image">
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
