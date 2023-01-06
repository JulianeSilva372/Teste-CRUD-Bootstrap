<?php include"php/read.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dos Estudantes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">   
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <h4 class="display-4 text-center">Lista dos Estudantes</h4><br>
            <?php if (isset($_GET['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['success']; ?>
            </div>
            <?php } ?>
            <?php if(mysqli_num_rows($result)) { ?>
                
            <table class="table table-striped" style="min-width: 990px; margin-left: -100px;">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone/<br>Celular</th>
                    <th scope="col">Data de<br> Nascimento</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; while ($rows = mysqli_fetch_assoc($result)) {
                    $i++;
                    ?>
                    <tr>
                    <th scope="row"><?=$i?></th>
                    <td><?=$rows['name']?></td>
                    <td><?php echo $rows['email']; ?></td>
                    <td><?php echo $rows['phone']; ?></td>
                    <td><?php echo $rows['date']; ?></td>
                    <td>
                        <a href="edit.php?id=<?=$rows['id']?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
                        <a href="php/delete.php?id=<?=$rows['id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Deletar</a>
                    </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } ?>
            <div class="link-right">
                <a href="index.php" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Adicionar</a>
            </div>
        </div>
    </div>
    
</body>
</html>                                                                     