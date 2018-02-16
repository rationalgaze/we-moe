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
        <div class="personal">
          <img src="<?php echo base_url();?>images/portman.jpg" class="avatar" alt="">
          <div class="profile-card px-md-3 py-md-3 text-center">
            <h5><?php echo $email; ?></h5>
            <a href="<?php echo base_url(); ?>index.php/login/logout" class="btn mt-md-3">Se deconnecter</a>
          </div>
        </div>
        <nav class="nav flex-column">
          <a class="nav-link" href="<?php echo base_url();?>"><i class="fas fa-home mr-2"></i> Acceuil</a>
          <a class="nav-link" href="#"><i class="far fa-envelope mr-2"></i> Link</a>
          <a class="nav-link" href="#"><i class="far fa-question-circle mr-2"></i> Link</a>
          <a class="nav-link disabled" href="#"><i class="fab fa-accessible-icon mr-2"></i> Disabled</a>
        </nav>
      </aside>
      <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5">
        <div class="row mb-2">
          <div class="col column">
            <h1>Session ouverte</h1>
            <ul class="breadcrumbs">
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <li>
                <span class="show-for-sr">Current: </span> Session utilisateur ouverte
              </li>
            </ul>
          </div>
        </div>
      </main>
    </div>
  </div>