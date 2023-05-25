<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
        if ($_POST) {
            $nome = $_POST['nome'] ?? NULL;
            $email = $_POST['email'] ?? NULL;
            $idade = $_POST['idade'] ?? NULL;
            $hobbie = $_POST['hobbie'] ?? NULL;

            function testaIdade($idade){
      
                $msg_menor = "Sua idade é: ". $idade.
                             " Você ainda não tem 18 anos!!";
             
                $msg_maior = "Parabéns, você tem ". $idade.
                             " anos. você pode avançar. É maior de idade";	  
                 
                return $idade < 18 ? $msg_menor : $msg_maior;
             }
             
            if (strlen($nome) < 6) {
                echo 'Nome Invalido, caracteres menor que 6';
                exit;
            }
            
            echo testaIdade($idade);

             if ($idade > 18) {
                ?>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Idade</th>
                                    <th>Hobbie</th>
                                </tr>
                                    <tr>
                                    <?php
                                        foreach($_POST as $dado =>$dados){
                                    ?>
                                    <td><?= $dados?></td>
                                    <?php
                                        }
                                    ?>
                                    </tr>
                            </table>
                            </div>
                    </div>  
                <?php
                    }
                    }
                ?>
            <a href="formulario.php" class="btn btn-danger">Voltar</a>
        </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>