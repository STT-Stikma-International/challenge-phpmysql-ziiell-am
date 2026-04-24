<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];


//TODO: insert nama, nim, kelas, email
// $sql = "INSERT INTO mahasiswa (nama, nim, kelas, email)
// VALUES
// ('$nama', '$nim', '$kelas', '$email')";

// // ---
// if ($conn->query($sql) === TRUE) {
//     echo "Data berhasil disimpan";
// } else {
//     echo "Error: " . $conn->error;
// }

// $conn->close();
























//TODO: SELECT data mahasiswa
// $sql = "SELECT nama, nim, kelas, email FROM mahasiswa";
// $result = $conn->query($sql);
// // ---
// if ($result->num_rows > 0) {

//     echo "<table border='1'>";
//     echo "<tr>
//             <th>ID</th>
//             <th>Nama</th>
//             <th>NIM</th>
//             <th>Kelas</th>
//             <th>Email</th>
//         </tr>";

//     while($row = $result->fetch_assoc()) {
//         echo "<tr>
//                 <td>".$row['id']."</td>
//                 <td>".$row['nama']."</td>
//                 <td>".$row['nim']."</td>
//                 <td>".$row['kelas']."</td>
//                 <td>".$row['email']."</td>
//             </tr>";
//     }

//     echo "</table>";

// } else {
//     echo "Data tidak ditemukan";
// }
// $conn->close();























//TODO: UPDATE DATA MAHASISWA
$sql =  "UPDATE mahasiswa
SET email = 'aefil@mail.com' where id = 4";
//---
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diupdate";
} else {
    echo "Error: " . $conn->error;
}



$conn->close();

?>