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
          <form method="post" action="<?php echo base_url(); ?>index.php/">
            <div class="form-group">
              <label for="id">Identifiant</label>
              <input type="text" name="id" class="form-control form-control-lg" id="id" onfocus="if(this.value =='Identifiant'){this.value =''}" onblur="if(this.value ==''){this.value ='Identifiant'}" value ="Identifiant">
              <span><?php echo form_error('id'); ?></span>
            </div>
            <div class="form-group">
              <label for="mdp">Mot de passe</label>
              <input type="password" name="mdp" class="form-control form-control-lg" id="mdp" onfocus="if(this.value =='Mot de passe'){this.value =''}" onblur="if(this.value ==''){this.value ='Mot de pass'}" value ="Mot de passe">
              <span><?php echo form_error('mdp'); ?></span>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Valider</button>
              <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>
            </div>
          </form>
        </div>