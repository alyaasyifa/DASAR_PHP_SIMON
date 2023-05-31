<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HITUNG NILAI !!! </title><form action="" method="post">
</head>
<body>
    <img src="https://media.tenor.com/-Y2YOay3_JoAAAAM/its-friday-dancing.gif" alt="" >
    <h1>Masukan Nilai Anda</h1> 
    <input type="number" name="matematika" placeholder="MATEMATIKA"><br>
    <input type="number" name="pipas" placeholder="PIPAS"><br>
    <input type="number" name="sejarah"placeholder="SEJARAH"><br>
    <input type="number" name="produktif" placeholder="PRODUKTIF"><br>
    <input type="number" name="bahasaindonesia" placeholder="BAHASA INDONESIA"><br>
    <input type="number" name="bahasainggris" placeholder="BAHASA INGGRIS"><br>
    <input type="number" name="nis" placeholder="NIS"><br>
    <input type="submit" name="submit"><hr>   
    
    <br>
    <a href="tampil.php">Tampilkan</a><br>
   
</body>
</html>

<?php   
if(isset($_POST['submit'])){
include "koneksi.php";

$matematika=$_POST['matematika'];
$pipas=$_POST['pipas'];
$sejarah =$_POST['sejarah'];
$produktif=$_POST['produktif'];
$bahasaindonesia=$_POST['bahasaindonesia'];
$bahasainggris=$_POST['bahasainggris'];
$nis=$_POST['nis'];


if($_POST["nis"] == null){
    echo "Isi Dulu Datanya Mas!";
    die;
}
$sql="INSERT INTO `kalkulator_nilai`(`matematika`,`pipas`, `sejarah`, `produktif`, `bahasaindonesia`, `bahasainggris`, `nis`) VALUES ('$_POST[matematika]','$_POST[pipas]','$_POST[sejarah]','$_POST[produktif]','$_POST[bahasaindonesia]','$_POST[bahasainggris]','$_POST[nis]')";
$apakah=mysqli_query($server,$sql);
    echo "<br>";
    if($apakah){
        echo "Done !! ";
    }    

echo "<br>";
$n      =    array  ($matematika,$pipas,$sejarah,$produktif,$bahasaindonesia,$bahasainggris);
// Hitung Jumlah    = $jumlah=count($n);
$jumlah =   $matematika+$pipas+$sejarah+$produktif+$bahasaindonesia+$bahasainggris; 

echo "Jumlah Nilai: ". $jumlah;
// Hitung Rata Rata = $rata =array_sum($n);
$rata = $jumlah / 6;
echo "<br>";
echo "Rata - Rata Nilai: ". $rata;

echo "<br>";
// Hitung Nilai Max
echo "Nilai Maximal:";
echo max($n);

echo "<br>";

// Hitung Nilai Min
echo "Nilai Minimal: ";
echo min($n);

echo "<br>";

// Hitung Grade
echo "Grade Nilai Kamu Adalah:";

if($jumlah>=540)        {
    echo "A";
}elseif($jumlah>=480)   {
    echo "B";
}elseif($jumlah>=420)   {
    echo"C";
}else                   {
    echo "D";
}

}
?>

</form>
