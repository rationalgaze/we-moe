<?php foreach($mysql as $el ): ?>
          
<div>
  <?php echo $el['id']; ?>
  <?php echo $el['nom']; ?>
  <?php echo $el['prenom']; ?>
</div>
<?php endforeach; ?>


<?php foreach($mongo as $mel ): ?>
<div>
  <?php echo $mel['_id']; ?>
  <?php echo $mel['features'][0]['type']; ?>
</div>
<?php endforeach; ?>