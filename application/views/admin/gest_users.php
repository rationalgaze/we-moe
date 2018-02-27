
        <div class="row help">
          <div class="col-xl-12 col-xs-12 col-sm-6 px-3 mb-4 text-center">
            <div class="personal-info bg-white rounded py-5 px-3">
              <h4 class="pb-4 text-warning">Espace de gestion d'utilisateurs</h4>
              <div class="list-users">
                <table class="table table-striped table-hover text-left">
                  <thead>
                    <tr>
                      <th scope="col">Nom</th>
                      <th scope="col">Prenom</th>
                      <th scope="col">En RAS</th>
                      <th scope="col">E-mail</th>
                      <th scope="col">Modifier les droits</th>
                      <th scope="col">Supprimer l'utilisateur</th>
                    </tr>
                  </thead>
                  <?php foreach($users as $usr): ?>
                    <tr>
                      <td>
                        <?php echo $usr['nom']; ?>
                      </td>
                      <td>
                        <?php echo $usr['prenom']; ?>
                      </td>
                      <td>
                        <?php echo ($usr['ras'] == 0) ? "Oui" : "Non"; ?>
                      </td>
                      <td>
                        <?php echo $usr['mail']; ?>
                      </td>
                      <td>
                        <a href="#" class="btn btn-warning">Donner les droits d'admin</a>
                        <a href="#" class="btn btn-primary">Enlever les droits d'admin</a>
                      </td>
                      <td>
                        <a href="#" class="btn btn-danger">Supprimer</a>
                      </td>
                    </tr>
                  <?php endforeach;?>
                </table>  
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>