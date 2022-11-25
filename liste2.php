
<html>
<head><meta charset="utf-8">
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include "navbar.php"?>
<?php include "liste.php"?>

<div class="container">
  <h2><br><br><br><br><br>Arıza Kaydınız<br><br></h2>
  <p>İlettiğiniz arıza mesajı,iletmiş olduğunuz birim ve eklentiniz aşağıdaki gibidir.</p>
  <table class="table">
    <thead>
      <tr>
        <th>Arıza Mesaj</th>
        <th>İletilen Birim</th>
        <th>Dosya</th>
      </tr>
    </thead>
    <tbody>
        
      <tr>
        <td><?php echo $mesaj; ?></td>
        <td><?php echo $birim; ?></td>
        <td><?php echo $dosya; ?></td>
      </tr>      
      
    </tbody>
  </table>
  <p><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>
</div>

<?php include "footer.php"?>
</body>
</html>
