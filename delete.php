<?php
    include('database/config.php');

    if (isset($_GET['id'])) {

        $query = mysqli_query($conn, "SELECT * FROM mahasiswa_npm WHERE id = '$id_mahasiswa'");
        $row = mysqli_fetch_assoc($query);

        // Persiapan hapus data
        $hapus = mysqli_query($conn, "DELETE FROM mahasiswa_npm WHERE id = '$_GET[id]' ");
        if ($hapus) {
            echo "<script>
                    alert('Hapus Data Sukses!');
                    document.location='index.php';
                 </script>";
        }
    }
?>