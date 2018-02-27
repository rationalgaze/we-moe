<!DOCTYPE html>
<html>
<head lang="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Awesome Description Here">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <title>we-moë | Espace Administrateur</title>
    <link rel="stylesheet" href='<?php echo base_url();?>styles/main.css'>
    <link rel="stylesheet" href='<?php echo base_url();?>styles/bootstrap.min.css'>
    <link rel="stylesheet" href='<?php echo base_url();?>styles/fontawesome-all.min.css'>
</head>
<body>
  <div class="profile container-fluid">
    <div class="row">
      <aside class="px-0 sidebar-nav">
        <div class="disconnect">
          <h3 class="pb-2"><?php echo $mongo[0]['prenom'];?></h3>
          <a href="<?php echo base_url(); ?>index.php/login/logout" class="btn">Se deconnecter</a>
        </div>
        <nav class="nav flex-column">
          <a class="nav-link" href="<?php echo base_url();?>"><i class="fas fa-home mr-2"></i> Acceuil</a>
          <a class="nav-link" href="#"><i class="far fa-envelope mr-2"></i> Nous contacter</a>
          <a class="nav-link" href="#"><i class="far fa-question-circle mr-2"></i> FAQ</a>
          <a class="nav-link disabled" href="#"><i class="fab fa-accessible-icon mr-2"></i> Aide</a>
        </nav>
      </aside>
      <main class="col py-md-3">
        <div class="row mb-2 mb-4">
          <div class="col-12 px-3">
            <div class="personal-info bg-white rounded p-3">
              <div class="row py-3">
                <div class="col-xl-3 col-md-4 col-xs-12 text-center">
                  <div class="usr-avatar rounded-circle text-center">
                    <img src="<?php echo base_url();?>images/admin.jpg" class="rounded-circle" alt="avatar" width="200" height="200">
                  </div>
                </div>
                <div class="col-xl-9 col-md-8 col-xs-12">
                  <h3 class="mb-0"><?php echo $users[0]['nom'];?> <?php echo $mongo[0]['prenom'];?></h3>
                  <p class="text-warning"><?php echo $email; ?></p>
                  <div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-3">
                      <p>Nombre d'utilisateurs</p>
                      <span class="num"><?php echo count($users);?></span>
                    </div>
                    <div class="col-3">
                      <p>Personnes en risque</p>
                      <span class="num">2</span>
                    </div>
                    <div class="col-3">
                      <p>Personnes sans risque</p>
                      <span class="num">76</span>
                    </div>
                    <div class="col-3">
                      <p>Nombre de visites</p>
                      <span class="num">87</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row help mb-2">
          <div class="col px-3 mb-4 text-center">
            <div class="personal-info bg-white rounded py-5 px-3">
              <h4 class="pb-4 text-warning">Gestion d'utilisateurs</h4>
              <a href="<?php echo base_url();?>index.php/administrateur/gestion_utilisateurs" class="block"><i class="fas fa-user fa-5x mr-2"></i></a>
            </div>
          </div>
          <div class="col px-3 mb-4 text-center">
            <div class="personal-info bg-white rounded py-5 px-3">
              <h4 class="pb-4 text-warning">Gestion du site</h4>
              <a href="#" class="block"><i class="fas fa-sitemap fa-5x mr-2"></i></a>
            </div>
          </div>
          <div class="col px-3 mb-4 text-center">
            <div class="personal-info bg-white rounded py-5 px-3">
              <h4 class="pb-4 text-warning">Statistique du site</h4>
              <a href="#" class="block"><i class="fas fa-chart-pie fa-5x mr-2"></i></a>
            </div>
          </div>
          <div class="col px-3 mb-4 text-center">
            <div class="personal-info bg-white rounded py-5 px-3">
              <h4 class="pb-4 text-warning">Messagerie</h4>
              <a href="#" class="block"><i class="fas fa-envelope fa-5x mr-2"></i></a>
            </div>
          </div>
          <div class="col px-3 mb-4 text-center">
            <div class="personal-info bg-white rounded py-5 px-3">
              <h4 class="pb-4 text-warning">Mon agenda</h4>
              <a href="<?php echo base_url();?>index.php/administrateur/agenda" class="block"><i class="fas fa-calendar-alt fa-5x mr-2"></i></a>
            </div>
          </div>
        </div>
    