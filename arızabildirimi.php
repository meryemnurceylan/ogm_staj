


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
                    <img class="card-img-top" src="arıza.jpg" alt="Card image">
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
            <form action="arızabildirimigönder.php"  method="POST" class="was-validated">
    <p><br><br><br></p>
    <p1 style="font-size:30px;"><br>&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspArıza Destek</p1>
    &nbsp&nbsp&nbsp&nbsp
    <div class="form-group">
      <label for="uname">Mesajınız:</label>
      <input type="text" class="form-control" id="mesaj" placeholder="İletinizi Giriniz" name="mesaj" required>
     
      <div class="invalid-feedback">Lütfen bu alanı doldurun.</div>
    </div>
    <div class="form-group">
      <label for="uname">İletmek İstediğiniz Birim:</label>
      <select id="disableSelect" class="form-control" name="birim">
        <option> </option>
        <option>Orman İdaresi ve Planlama Şube Müdürlüğü</option>
        <option>Kadastro ve Mülkiyet Şube Müdürlüğü</option>
        <option>İşletme ve Pazarlama Şube Müdürlüğü</option>
        <option>Silvikültür Şube Müdürlüğü</option>
        <option>Orman Zararlılarıyla Mücadele Şube Müdürlüğü</option>
        <option>Orman Zararlılarıyla Mücadele Şube Müdürlüğü</option>
        <option>İzin ve İrtifak Şube Müdürlüğü</option>
        <option>Ağaçlandırma Şube Müdürlüğü</option>
        <option>Orman ve Köy İlişkileri Şube Müdürlüğü</option>
        <option>Orman Yangınlarıyla Mücadele Şube Müdürlüğü</option>
        <option>Ekosistem Hizmetleri Şube Müdürlüğü</option>
        <option>Personel Şube Müdürlüğü</option>
        <option>Mali İşler Şube Müdürlüğü</option>
        <option>Bilgi Sistemleri Şube Müdürlüğü</option>
        <option>Basın ve İletişim Şube Müdürlüğü</option>
      </select>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Lütfen bu alanı doldurun.</div>
    </div>
    
    <div class="custom-file">
    <label for="dosya">Eklenti Ekle:</label>
  <input type="file" class="custom-file-input" name="customFile" id="customFile">
  <label class="custom-file-label" for="customFile">Dosya Seç</label>
</div>

<center><button type="submit" name="submit" value="submit" class="btn btn-primary">Gönder</button></center>
</form>
<p><br><br><br><br><br><br><br><br><br></p>
            </div>
        </div>
            
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                <p><br><br><br><br><br><br><br></p>
                    <img class="card-img-top" src="arıza.jpg" alt="Card image">
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
