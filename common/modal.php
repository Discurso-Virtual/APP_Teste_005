<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="node_modules/bootstrap-icons/icons/">
    <link rel="stylesheet" href="<?php echo $path?>/css/skins/default.css">
    <link rel="stylesheet" href="<?php echo $path?>/css/bootstrap.min.css">
    <title>Teste</title>
</head>
<body>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p> Deseja alterar o registo com Id:</p>
        <?php echo $_POST['id']?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary">Sim</button>
      </div>
    </div>
  </div>
</div>


<?php include_once './rodape.php'; ?>