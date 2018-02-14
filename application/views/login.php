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
    <div class="row my-4 justify-content-center">
      <h4 class="mb-2">Merci de vous identifier</h4>
    </div>
    <div class="row mb-2 justify-content-center">
      <div class="col-4"> 
        <div class="signupForm">
          <form method="post" action="<?php echo base_url(); ?>index.php/login/login_validation">
            
            <?php
              if ($this->session->flashdata("error")) {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata("error");
                echo '</div>';
                echo '
                  <div class="form-group">
                    <label for="id">Identifiant</label>
                    <input type="text" name="id" class="form-control form-control-lg is-invalid" id="id" placeholder="mail@exemple.ex">
                    <div class="text-danger mt-2">
                      <?php echo form_error("id"); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" name="mdp" class="form-control form-control-lg is-invalid" id="mdp" placeholder ="Mot de passe">
                    <div class="text-danger mt-2">
                      <?php echo form_error("mdp"); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Valider</button>
                  </div>';
              } else {
                echo '
                <div class="form-group">
                  <label for="id">Identifiant</label>
                  <input type="text" name="id" class="form-control form-control-lg" id="id" placeholder="mail@exemple.ex" required>
                  <div class="text-danger mt-2">
                    <?php echo form_error("id"); ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="mdp">Mot de passe</label>
                  <input type="password" name="mdp" class="form-control form-control-lg" id="mdp" placeholder ="Mot de passe" required>
                  <div class="text-danger mt-2">
                    <?php echo form_error("mdp"); ?>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Valider</button>
                </div>';
              }
            ?>
          </form>
        </div>