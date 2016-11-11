<?php
//variabel $_POST["nama"] sudah didefinisikan atau belum?
//Fungsi isset menyatakan variabel itu sudah ada atau belum kalau tidak true atau false
 
	if(!isset($_POST["identitas"])){
	echo "nama belum di kirim, silahkan isi form";
	exit;
	}
	   if(!isset($_GETS["nama"])){
	echo "nama belum di kirim, silahkan isi form";
	exit;
	}
	if(!isset($_POST["umur"])){
	echo "nama belum di kirim, silahkan isi form";
	exit;
	}
	//deklarasi apakah sudah ada isi / nilainya ?
    $nama=$_POST["nama"];
	$identitas=$_POST["identitas"];
	$umur=$_POST["umur"];
	$tahun_lahir =0;
	
	//validasi apakah sudah ada isi nilainya ?
	if($nama == ""){ //mengecek sudah ada isinya apa belum
	    echo "Nama belum diisi";
		exit;//Exit digunakan untuk stop program
		}
	if($identitas == ""){ //mengecek sudah ada isinya apa belum
	    echo "Nama belum diisi";
		exit;//Exit digunakan untuk stop program
		}
	//proses
	if($umur == ""){ //mengecek sudah ada isinya apa belum
	    echo "Nama belum diisi";
		exit;//Exit digunakan untuk stop program
		}
	$tahun_lahir = 2016-$umur;
	//Menampilkan Data
	echo "Nomor identitas ". $identitas;
	echo "<br/>";
	echo "Nama adalah ". $nama;
	echo "<br/>";
	echo "Umur ". $umur;
	echo "<br/>";
	echo "tahun umur adalah ". $tahun_lahir;
?>