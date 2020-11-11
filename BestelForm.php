<table id="bestelForm">
  <tr>
    <th>Bestellen</th>
    <th></th>
  </tr>

  <?php     
            // selecteer alles in de database
            $sql = 'SELECT * FROM gerechten WHERE actief = 1';
            $statement = $connection->prepare($sql);
            $statement->execute();
            $gerechten = $statement->fetchAll(PDO::FETCH_OBJ);

          ?>
  <?php foreach($gerechten as $gerecht): ?>
  <tr>
    <td><?= $gerecht->gerecht;?></td>
    <td id="prijs">€<?= $gerecht->prijs; ?> &nbsp;x </td>
    <td id="aantal"><input type="number"></td>
    <td id="subTotaal">subTotaal</td>
  </tr>
  <?php endforeach; ?>

</table>

<script>
$('#bestelForm').on('change keyup blur', '.qty', function() {

  var id = $(this).attr("data-qty");
  var qty = $("#aantal" + id).val();
  var price = $("#prijs" + id).val();
  var subTotal = parseInt(qty) * parseFloat(price);
  $('#amount_' + id).val(subTotaal);

});
</script>