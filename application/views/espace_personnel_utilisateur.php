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
    <main class="container">
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
    </section>
    <section class="content">
    	<div class="small-12 column">
    		<h2>Bravo ! Votre session utilisateur est bien ouverte !</h2>
    		<p>Votre pseudo : <?php echo $id; ?></p>
    		<a href="<?php echo base_url(); ?>index.php/login/signin" class="button">Logout</a>
    	</div>
    </section>