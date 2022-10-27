<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="../css/css2/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../css/css2/bootstrap.css">

        <!-- Bootstrap CSS v5.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Bootstrap CSS v5.0.2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
 integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script>
function addTable()
{
alert('Adicionar');
var dados = getElementById("tbData").value;
console.log(dados);
alert(dados);
}
</script>
</head>
<body>

<?php  include("../templete/cabeca.php")?>
<?php include ("../config/db.php")?>      
<?php
// print_r ($_POST);  print_r ($_FILES);

$txtID=(isset($_POST['txtID']))?$_POST['txtID']: "";

$txtNome=(isset($_POST['txtNome']))?$_POST['txtNome']: "";

$txtImagem=(isset($_FILES['txtImagem'] ['name'])) ?$_FILES['txtImagem']['name']:"";

$txtaccion=(isset ($_POST['accion']))?$_POST['accion']: "";

echo $txtID. "<br/>";
echo $txtNome. "<br/>"; 
echo $txtImagem. "<br/>";
echo $txtaccion. "<br/>";

// INSERT INTO `livros` (`id`, `Nome`, `Imagem`) VALUES (NULL, 'Livro de php', 'imagem.jpg');

switch ($accion)
 {
    case "Adicionar":

        $sentencialSQL= $conexion-> prepare ("INSERT INTO `livros` (`id`, `Nome`, `Imagem`) VALUES (NULL, 'Livro de php', 'imagem.jpg');");
      $sentencialSQL-> execute ();
        echo "Adicionando";
        break;
    case "Modificar":
        echo "Modificando";
        break;      
    case "Cancelar":
        echo "Canselando";
        break;
    }
?> 
    <div class="col-md-5">

        <div class="card">
            <div class="card-header">
              <p> <h1> <strong> Dados dos livros </strong> </h1>  </p>
            </div>

            <div class="card-body">
            
            <form method="POST" enctype="multipart/form-data " >

<div class = "form-group">
<p> <label for="txtID">ID: </label>
<input type="text" class="form-control" name="txtID" id="txtID" a placeholder="ID">
</div>

<br>
<div class = "form-group">
<label for="txtNome">Nome:</label>
<input type="text" class="form-control" name="txtNome" id="txtNome" a placeholder="Nome do Livro">
</div>
<br>

<div class = "form-group">
<label for="txtNome">Imagem: </label>
<input type="file" class="form-control" name="txtImagem" id="txtImagem" a placeholder="ID">
</div>

<br>
<div class="btn-group" role="group" aria-label="">
    <button type="button" name="accion" value="Adicionar"  class="btn btn-success" onclick="addTable()">Adicionar </button>
    <button type="button" name="accion" value="Modificar" class="btn btn-warning"> Modificar</button>
    <button type="button" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button> </p>
</div>
</form>
        
            </div>
           
        </div>

    </div>
    
    <div class="col-md-7">
        <table id ="tbData" class="table table-bordered striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome dp Livro</th>
                    <th>Imagem</th>
                    <th>Acoes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2</td>
                    <td>Aprende PHP</td>
                    <td>Imagens.jpg</td>
                    <td>Selecionar | Burrar</td>
                </tr>
            </tbody>
        </table>
        
    </div>


<?php include ("../templete/pie.php ")?>
</body>
</html>