<?php include 'php/edit.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="php/edit.php" method="post">
            <h4 class="display-4 text-center">Editar</h4><hr><br>
            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
            <div class="form-group">
                <label for="name">Nome Completo</label>
                <input type="name" class="form-control" id="name" name="name" value="<?=$row['name']?>">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?=$row['email']?>">
            </div>
            <div class="form-group">
                <label for="phone">Celular</label>
                <input type="phone" class="form-control" id="phone" name="phone" value="<?=$row['phone']?>">
            </div>
            <div class="form-group">
                <label for="date">Data de nascimento</label>
                <input type="date" class="form-control" id="date" name="date" value="<?=$row['date']?>">
            </div>
            <input type="text" name="id" value="<?=$row['id']?>" hidden>

            <button type="submit" class="btn btn-success" name="edit"><span class="glyphicon glyphicon-refresh"></span> Atualizar</button>
          <a href="read.php" class="link-primary">Lista dos estudantes</a>
        </form>
    </div>
    
</body>
</html>                                                                     