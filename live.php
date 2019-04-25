<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'head.php'; ?>

<body>
  <style media="screen">
    .manager {
      padding: 1%;
      width: 100%;
      background-color: grey;
    }

    .evenement {
      color: black;
    }

    .videoWrapper {
      position: relative;
      padding-bottom: 56.25%;
      padding-top: -14px;
      height: 0;
    }

    .videoWrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </style>
  <div class="manager">
    <h1 class="evenement">Evenement a venir</h1>
  </div>
  <img src="https://ultra-k.fr/wp-content/uploads/2017/07/ARTE_Ultra-HD_HDR_Carmen_de_Bizet-1024x567.jpg" alt="">
  <main>
    <section class="sectionMain">
      <a href="live1.php" target="_blank"><button class="decouvrir">Live</button></a>

    </section>

  </main>
  <?php include 'nav.php'; ?>
  <?php include 'footer.php'; ?>
</body>

</html>