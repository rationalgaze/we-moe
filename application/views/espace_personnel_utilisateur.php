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
          <h3 class="pb-2"><?php echo $mongo[0]['prenom'];?></h3>
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
        <div class="row mb-2 mb-4">
          <div class="col-12 px-3">
            <div class="personal-info bg-white rounded p-3">
              <div class="row py-3">
                <div class="col-xl-3 col-md-4 col-xs-12 text-center">
                  <div class="usr-avatar rounded-circle text-center">
                    <img src="<?php echo base_url();?>images/portman.jpg" class="usr-photo" alt="avatar">
                  </div>
                </div>
                <div class="col-xl-9 col-md-8 col-xs-12">
                  <h3 class="mb-0"><?php echo $mongo[0]['nom'];?> <?php echo $mongo[0]['prenom'];?></h3>
                  <p class="text-warning"><?php echo $email; ?></p>
                  <div>
                    <div>Age : <?php echo (date('Y') - $mongo[0]['annee_naiss']);?></div>
                    <div>De : <?php echo $mongo[0]['ville'];?></div>
                    <div>En risque : <?php echo ($mongo[0]['ras'] == 0) ? "No" :  "Yes";?></div>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row help mb-2">
          <div class="col-4 px-3 text-center">
            <div class="personal-info bg-white rounded py-5 px-3">
              <h4 class="pb-4 text-warning">Questionnaire</h4>
              <a href="#" class="block"><i class="fas fa-clipboard fa-7x mr-2"></i></a>
            </div>
          </div>
          <div class="col-4 px-3 text-center">
            <div class="personal-info bg-white rounded py-5 px-3">
              <h4 class="pb-4 text-warning">Télécharger kit d’aide</h4>
              <a href="#" class="block"><i class="fas fa-download fa-7x mr-2"></i></a>
            </div>
          </div>
          <div class="col-4 px-3 text-center">
            <div class="personal-info bg-white rounded py-5 px-3">
              <h4 class="pb-4 text-warning">Contrat collectif</h4>
              <a href="#" class="block"><i class="fas fa-handshake fa-7x mr-2"></i></a>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>