<?php
    include 'header.php';

    $koneksi = new mysqli("localhost", "root", "", "agri");
?>

<h2>Wawasan</h2>

<table class="table table-bordered">


  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("select *from wawasan order by date_w desc"); ?>
    <?php while($pecah = $ambil->fetch_assoc()){ ?>
    <h3><?php echo $pecah['judul_w']; ?></h3>

    <img src="<?php echo site_url(); ?>assets/<?php echo $pecah['foto_w']; ?>">

    <br> posted : <?php echo $pecah['date_w']; ?></br>
    <p><?php echo $pecah['isi_w']; ?></p>

      </td>
      </tr>
      <br></br>

      <br></br>

      <br></br>
      <?php $nomor++; ?>
    <?php } ?>

  </tbody>

</table>






<?php
    include 'footer.php';
?>
