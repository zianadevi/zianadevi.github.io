<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "dbpsytest");

function registrasi($data) {
  global $conn;

  date_default_timezone_set('Asia/Jakarta');
  $nama = stripslashes($data["nama"]);
  $jenis_kelamin = $data["jenis_kelamin"];
  $umur = $data["umur"];
  $tanggal = date("Y-m-d H:i:s");

  //tambahkan user baru ke database
  mysqli_query($conn, "INSERT INTO users VALUES('','$nama', '$jenis_kelamin', '$umur', '$tanggal')");

  return mysqli_affected_rows($conn);
}

function signin($data) {
  global $conn;

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  //cek username udah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");
  
  if( mysqli_fetch_assoc($result) ) {
    echo "<script>
              alert('Admin sudah terdaftar!');
          </script>";
    return false;
  }
  
  //cek konfirmasi password
  if( $password !== $password2 ) {
    echo "<script>
              alert('Konfirmasi Password tidak sesuai!');
          </script>";
    return false;
  }

  //enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  //tambahkan user baru ke database
  mysqli_query($conn, "INSERT INTO admin VALUES('','$username', '$password')");

  return mysqli_affected_rows($conn);
}

function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data) {
  global $conn;
  $id_gejala = htmlspecialchars($data["id_gejala"]);
  $gejala = htmlspecialchars($data["gejala"]);
  $ifyes = htmlspecialchars($data["ifyes"]);
  $ifno = htmlspecialchars($data["ifno"]);
  //insert data
  $query = "INSERT INTO gejala VALUES ('$id_gejala', '$gejala', '$ifyes', '$ifno')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambahdiag($data) {
  global $conn;
  $id_penyakit = htmlspecialchars($data["id_penyakit"]);
  $penyakit = htmlspecialchars($data["penyakit"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $solusi = htmlspecialchars($data["solusi"]);
  //insert data
  $query = "INSERT INTO penyakit VALUES ('$id_penyakit', '$penyakit', '$keterangan', '$solusi')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($id_gejala) {
  global $conn;
  mysqli_query($conn, "DELETE FROM gejala WHERE id_gejala = '$id_gejala'");
  return mysqli_affected_rows($conn);
}

function hapusdiag($id_penyakit) {
  global $conn;
  mysqli_query($conn, "DELETE FROM penyakit WHERE id_penyakit = '$id_penyakit'");
  return mysqli_affected_rows($conn);
}

function hapushasil($nama) {
  global $conn;
  mysqli_query($conn, "DELETE FROM users WHERE nama = '$nama'");
  return mysqli_affected_rows($conn);
}

function hapuspesan($pesan) {
  global $conn;
  mysqli_query($conn, "DELETE FROM kontak WHERE pesan = '$pesan'");
  return mysqli_affected_rows($conn);
}

function edit($data) {
  global $conn;
  $id_gejala = $data["id_gejala"];
  $gejala = htmlspecialchars($data["gejala"]);
  $ifyes = htmlspecialchars($data["ifyes"]);
  $ifno = htmlspecialchars($data["ifno"]);
  //insert data
  $query = "UPDATE gejala SET 
              gejala = '$gejala',
              ifyes = '$ifyes',
              ifno = '$ifno'
            WHERE id_gejala = '$id_gejala'
          ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function editdiag($data) {
  global $conn;
  $id_penyakit = $data["id_penyakit"];
  $penyakit = htmlspecialchars($data["penyakit"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  $solusi = htmlspecialchars($data["solusi"]);
  //insert data
  $query = "UPDATE penyakit SET 
              penyakit = '$penyakit',
              keterangan = '$keterangan',
              solusi = '$solusi'
            WHERE id_penyakit = '$id_penyakit'
          ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

//function cari($keyword) {
  //$query = "SELECT * FROM penyakit WHERE penyakit LIKE '%$keyword%' OR keterangan LIKE '%$keyword%' OR solusi LIKE '%$keyword%'";
  //return query($query);
//}

function kontak($data) {
  global $conn;

  $fname = $data["fname"];
  $lname = $data["lname"];
  $email = $data["email"];
  $subject = $data["subject"];
  $pesan = $data["pesan"];

  //tambahkan pesan ke database
  mysqli_query($conn, "INSERT INTO kontak VALUES('','$fname', '$lname', '$email', '$subject', '$pesan')");

  return mysqli_affected_rows($conn);
  
}
?>



