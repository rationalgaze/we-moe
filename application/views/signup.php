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
          <form method="post" class="needs-validation" action="<?php echo base_url(); ?>index.php/signup/signup_validation" novalidate>
            <?php
              if ($this->session->flashdata("error")) {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata("error");
                echo '</div>';
              }
            ?>

            <div class="form-group">
              <label for="nom">Nom <span class="star">*</span></label>
              <input type="text" name="nom" class="form-control form-control-lg" id="nom" placeholder="Nom" value="<?php echo set_value('nom'); ?>" required>
              <div class="invalid-feedback">
                Entrez votre nom s'il vous plaît
              </div>
              <span class="text-danger"><?php echo form_error('nom'); ?></span>
            </div>

            <div class="form-group">
              <label for="prenom">Prenom <span class="star">*</span></label>
              <input type="text" name="prenom" class="form-control form-control-lg" id="prenom" placeholder="Prenom" value="<?php echo set_value('prenom'); ?>" required>
              <div class="invalid-feedback">
                Entrez votre prenom s'il vous plaît
              </div>
              <span class="text-danger"><?php echo form_error('prenom'); ?></span>
            </div>
            <div class="form-group">
              <label for="mail">E-mail <span class="star">*</span></label>
              <input type="mail" name="mail" class="form-control form-control-lg" id="mail" placeholder ="votremail@domain.fr" value="<?php echo set_value('mail'); ?>" required>
              <span class="text-danger"><?php echo form_error('mail'); ?></span>
              <div class="invalid-feedback">
                Entrez votre adresse mail s'il vous plaît
              </div>
            </div>
            <div class="form-group">
              <label for="mdp">Mot de passe <span class="star">*</span></label>
              <input type="password" name="mdp" class="form-control form-control-lg" id="mdp" placeholder="Mot de passe" value="<?php echo set_value('mdp'); ?>" required>
              <div class="invalid-feedback">
                Entrez votre adresse s'il vous plaît
              </div>
              <span class="text-danger"><?php echo form_error('mdp'); ?></span>
            </div>
            
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="ras" class="custom-control-input form-control-lg" id="ras" value="0" <?php echo set_checkbox('ras', '1'); ?> onclick="(this.value==0) ? (this.value=1) : (this.value=0);">
                <label for="ras" class="custom-control-label">Vous étes une personne à Risque Aggravé de Santé ?</label>
              </div>
              <span class="text-danger"><?php echo form_error('ras'); ?></span>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Valider</button>
            </div>
          </form>
        </div>