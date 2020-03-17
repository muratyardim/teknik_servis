<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>"Borkod"</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<style>
.btn-label {position: relative;left: -12px;display: inline-block;padding: 6px 12px;background: rgba(0,0,0,0.15);border-radius: 3px 0 0 3px;}
.btn-labeled {padding-top: 0;padding-bottom: 0;}
.btn { margin-bottom:10px; }
.form-control {width: 9%;}
	</style>
</head>
<body>
<form action="" method="post">
<input type="barkod" id="ebulten" placeholder="Barkod" class="form-control" required="">
<input type="ürün_adı" id="ebulten" placeholder="Ürün adı" class="form-control" required="">
<input type="yazar_adı" id="ebulten" placeholder="yazar" class="form-control" required="">
<button type="button" class="btn btn-labeled btn-danger"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Ekle</button>
</form>
</body>
</html>