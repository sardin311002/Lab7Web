<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
   <h2>TUGAS</h2>
    <form class="form" method="post" >
            <label>Nama: </label>
            <br>
            <input type="text" name="nama">
            <br>
            <label>Tanggal Lahir: </label>
            <br>
            <input type="text" name="tgl_lahir">
            <br>
            <label>Pekerjaan: </label>
            <br>
            <select name='pekerjaan'>
                <option value="-">>---Pilih Pekerjaan---<</option>
                <option value='Fullstack Developer'>Fullstack Developer</option>
                <option value='Front end Developer'>Front end Developer</option>
                <option value='Back end Developer'>Back end Develope</option>
                <option value='UI/UX'>UI/UX</option>
                <option value="Project Manager">Project Manager</option>
            </select>
            <br>
            <br>
            <button type="submit">Kirim</button>
    </form>
    <h2>HASIL</h2>

    <?php
        # Memanggil Nama
        echo 'Nama: ' . $_POST['nama'];

        # Merubah Tanggal Lahir menjadi Umur (Tahun)
        $tgl_lahir = @$_POST['tgl_lahir'];

        $lahir = new DateTime($tgl_lahir);
        $hari_ini = new DateTime();

        $diff = $hari_ini->diff($lahir);

        # Memanggil fungsi umur yg sudah dibuat diatas
        echo "<br> Umur: ". $diff->y ." Tahun";

        # Memanggil pekerjaan
        echo "<br> Pekerjaan: ". $_POST['pekerjaan'];

        # Kondisi if pekerjaan untuk menentukan gaji
        $pekerjaan = @$_POST['pekerjaan'];

        if($pekerjaan == "Fullstack Developer"){
            echo '<br> Gaji: Rp. 30.000.000,-';
        }elseif($pekerjaan == "Front end Developer"){
            echo '<br> Gaji: Rp. 12.000.000,-';
        }elseif($pekerjaan == "Back end Developer"){
            echo '<br> Gaji: Rp. 15.000.000,-';
        }elseif($pekerjaan == "UI/UX"){
            echo '<br> Gaji: Rp. 55.000.000,-';
        }elseif ($pekerjaan == "Project Manager"){
            echo '<br> Gaji: Rp. 60.000.000,-';
        }

    ?>
  </body>
</html>