<!DOCTYPE html>
<html>
<head lang="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Awesome Description Here">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <title>we-moë</title>
    <link rel="stylesheet" href='<?php echo base_url();?>styles/main.css'>
    <link rel="stylesheet" href='<?php echo base_url();?>styles/bootstrap.min.css'>
    <link rel="stylesheet" href='<?php echo base_url();?>styles/fontawesome-all.min.css'>
</head>
<body>
  <div class="profile container-fluid">
    <div class="row">
      <aside class="px-0 sidebar-nav">
        <div class="disconnect">
          <!-- <h5><?php echo $email; ?></h5> -->
          <a href="<?php echo base_url(); ?>index.php/login/logout" class="btn">Se deconnecter</a>
        </div>
        <nav class="nav flex-column">
          <a class="nav-link" href="<?php echo base_url();?>"><i class="fas fa-home mr-2"></i> Acceuil</a>
          <a class="nav-link" href="#"><i class="far fa-envelope mr-2"></i> Nous contacter</a>
          <a class="nav-link" href="#"><i class="far fa-question-circle mr-2"></i> FAQ</a>
          <a class="nav-link disabled" href="#"><i class="fab fa-accessible-icon mr-2"></i> Disabled</a>
        </nav>
      </aside>
      <main class="col py-md-3">
        <div class="row mb-2">
          <div class="col-12 px-3">
            <div class="personal-info bg-white rounded p-3">
              <div class="row">
                <div class="col-4 text-center">
                  <div class="usr-avatar rounded-circle">
                    <img src="" class="usr-photo" alt="">
                  </div>
                </div>
                <div class="col-8">
                  <h3>Nom Prenom</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>