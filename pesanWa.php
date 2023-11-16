<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pengirim Pesan WA Terenkode Base64</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Form Encode Pesan</h2>
  <form method="post">
   <div class="input-group mb-3">
    <span class="input-group-text">No. HP WA: </span>
    <input type="text" class="form-control">
   </div>
   <div class="input-group mb-3">
    <span class="input-group-text">Pesan yang akan dikirim : </span>
	<textarea class="form-control" rows="5" id="pesan" name="pesan"></textarea>
   </div>
   <button type="submit" class="btn btn-primary" name="bEncode">Encode Pesannya</button>
  </form>
<?php
if (isset($_POST['bEncode'])) {
	$pesan=$_POST['pesan'];
	$pesanbaru=base64_encode($pesan);
	echo $pesanbaru;
	echo '<a href="https://api.whatsapp.com/send?text='.$pesanbaru.'" class="btn btn-success">Kirim WA</a>';
}
?>
 </div>
</body>
</html>