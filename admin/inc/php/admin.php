<?php
	//require_once ('localhost/sumi/config/koneksi.php');
	header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("127.0.0.1", "root", "", "spk_sumi");


if(isset($_POST["data"])&&$_POST["triger"]==='tambah'){
	
	$obj  = json_decode($_POST["data"], false);

	if (empty($obj->username) === false) {
		$sql    = "INSERT INTO admin (username, password, nama_admin, tanggal_lahir, jenis_klamin) 
		values (" . "'$obj->username','$obj->password', '$obj->namaAdmin', '$obj->tanggalLahir','$obj->jenisKlamin')";
		$result = $conn->query($sql);

		if ($result === TRUE) {
			//echo "New record created successfully";
		} else {
			echo "Error: " . $result . "<br>" . $conn->error;
		}
	}
}else if(isset($_POST["data"])&&$_POST["triger"]==='update'){

	$obj  = json_decode($_POST["data"], false);
	$sql = "UPDATE ADMIN set username='$obj->username', password='$obj->password', nama_admin='$obj->namaAdmin',
	tanggal_lahir='$obj->tanggalLahir', jenis_klamin='$obj->jenisKlamin' where  kd_admin=$obj->idAdmin";
	$result= $conn->query($sql);
}

if(isset($_POST['triger'])&&$_POST['triger']==='del') {
	$id = $_POST['id'];
	$sql = "delete from admin where kd_admin='$id' ";
	$conn->query($sql);
}

$selectTable = $conn->query("SELECT * FROM ADMIN limit 5");


//ambi data yang akan diedit
if(isset($_POST['triger'])&&$_POST['triger']==='edit'){
	$id = $_POST['id'];
	$sql = "select *from admin where kd_admin='$id' ";
	$selectTable = $conn->query($sql);
}

//delet admin


$outp = array();
$outp = $selectTable->fetch_all(MYSQLI_ASSOC);




echo json_encode($outp);
?>