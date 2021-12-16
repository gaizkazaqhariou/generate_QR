<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<body>

<h3>Using CSS to style an HTML Form</h3>

<div>
  <form action="<?php echo base_url().'index.php/Home/tambah'?>" method="post">    
    <label for="Cmember">Kode member</label>
    <input type="text" id="cmember" name="cmember" placeholder="Code Member..">

    <label for="name">Nama</label>
    <input type="text" id="name" name="name" placeholder="Member Name..">

    <input type="submit" value="Submit">
  </form>
</div>

<div>
	<table id="customers">
	<thead>
        <tr>
            <th>Nama</th>
            <th>Kode</th>
            <th>Gambar</th>
            <th colspan="2">action</th>
        </tr>
    </thead>
  	<?php foreach($data as $row):?>
    <tr>
        <td style="vertical-align: middle;"><?php echo $row['nama_member'];?></td>
        <td style="vertical-align: middle;"><?php echo $row['kode_pasien'];?></td>        
        <td><img style="width: 100px;" src="<?php echo base_url().'assets/images/'.$row['gambar'];?>"></td>
        <td><button type="submit"><a href="<?php echo base_url().'Home/lihatKartu/'.$row['id_QR'];?>"> Lihat kartu </a> </button></td>
        <td><button type="submit"><a href="<?php echo base_url().'Home/print/'.$row['id_QR'];?>"> Cetak kartu </a> </button></td>
    </tr>
    <?php endforeach;?>
</table>
</div>

</body>
</html>
