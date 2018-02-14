<div class="container">
  <div class="nav py-1 mb-2 justify-content-center">
    <nav class="nav d-flex">
      <a class="text-uppercase active" href="#">Acceuil</a>
      <a class="text-uppercase" href="#">Genèse du projet</a>
      <a class="text-uppercase" href="#">L'équipe</a>
      <a class="text-uppercase" href="#">Enquête</a>
      <a class="text-uppercase" href="#">Contact</a>
    </nav>
  </div>
  </div>
  <main class="container">
    <div class="row mb-2 justify-content-center">
      <div class="col-4"> 
        <div class="signupForm">
          <form method="post" action="<?php echo base_url(); ?>index.php">
            <div class="form-group">
              <label for="nom">Nom <span class="star">*</span></label>
              <input type="text" name="nom" class="form-control form-control-lg" id="nom" placeholder="Nom">
              <span><?php echo form_error('nom'); ?></span>
            </div>
            <!-- <div class="form-group">
              <label for="nomdusage">Nom d'usage</label>
              <input type="text" name="nomdusage" class="form-control form-control-lg" id="nomdusage" placeholder="Nom d'usage">
              <span><?php echo form_error('nomdusage'); ?></span>
            </div> -->
            <div class="form-group">
              <label for="prenom">Prenom <span class="star">*</span></label>
              <input type="text" name="prenom" class="form-control form-control-lg" id="prenom" placeholder="Prenom">
              <span><?php echo form_error('prenom'); ?></span>
            </div>
            <div class="form-group">
              <label for="id">E-mail <span class="star">*</span></label>
              <input type="mail" name="id" class="form-control form-control-lg" id="id" placeholder ="votremail@domain.fr">
              <span><?php echo form_error('id'); ?></span>
            </div>
            <div class="form-group">
              <label for="mdp">Mot de passe <span class="star">*</span></label>
              <input type="password" name="mdp" class="form-control form-control-lg" id="mdp" placeholder="Mot de passe">
              <span><?php echo form_error('mdp'); ?></span>
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="ras" class="custom-control-input form-control-lg" id="ras">
                <label for="ras" class="custom-control-label">Vous étes une personne à Risque Aggravé de Santé ? <span class="star">*</span></label>
              </div>
              <span><?php echo form_error('ras'); ?></span>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Valider</button>
              <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>
            </div>
          </form>
        </div>