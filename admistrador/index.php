<?php
if($_POST) {
  header ('Location:inicio.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Csss -->
        <link rel="alternate" href="./css/bootstrap.min.css" type="application/rss+xml" title="RSS">
        <link rel="stylesheet" href="./css/CSS2.css">

          
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSs/bootstrap.min.css">

  </head>
  <body>
    <!-- Nav tabs -->

    <!-- Tab panes -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>    
    
    <div class="container">
        <div class="row">

<div class="col-md-4">
    
</div>

            <div class="col-md-4">
            <br> <br>  <br>

            <div class="card">
                <div class="card-header">
                <h1> Login</h1>
                </div>
                <div class="card-body">

                <!-- ENVIO DE DADOS A BASE DE DADOS EM  MYSQL -->

                    <form method="POST"  >

                        <!-- CRIANDO MENU LOGIN -->
                    <div class = "form-group">
                  
                    <label for="exampleInputEmail1">  Usuario</label>
                            
                    <br>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   
                    <small id="emailHelp" class="form-text text-muted"> </small>
                   
                </div>
                
                <div class="form-group">
                    
                <label for="exampleInputPassword1">Codigo</label>
                  <br>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  
            </div>  
                <br>

                    <button type="submit" class="btn btn-primary"><center> Entrar no Sistema  </center></button>
        
</form>
                               
                </div>
               
                </div>
                
            </div>
            
        </div>
    </div>
  </body>
</html>
