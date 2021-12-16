<!DOCTYPE html>
<html>
<head>
	<title>member card</title>
</head>
<style type="text/css">
	
* {
	margin: 0 auto;
}

#container {
	height: 303px;
	width: 505px;
}

.qr{
	height: 47px;
    width: 49px;
    z-index: 1;
    display: block;
    margin-top: -62px;
    margin-left: 64px;
}

.belakang {
	height: 204px;
	width: 321px;
	z-index: 2;
}

</style>
<body>
	<img src="<?php echo base_url()?>assets/images/belakang.jpeg" class="belakang">
	<?php foreach ($data as $dt)
    {
        echo "<img src='".base_url()."assets/images/".$dt['gambar']."' class='qr'>";
    }
	?>
</body>
</html>