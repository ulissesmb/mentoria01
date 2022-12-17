<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Amigos Secretos</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>

<body>

<div class="container">
    
    	<div class="page-header">
        <h3>Amigos Secretos</h3>
        </div>
        
        <div class="row">
        
        	<div class="col-lg-12">
            <img src="images/amigo-secreto.png" alt="Amigo Secreto" width="200" height="100">
            <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#myModal">
                Ver amigo Secreto
            </button>
            </div>
        
        </div>                
   

<!-- modal -->

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button  type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Seu amigo secreto é:</h4>
        </div>

        <div class="modal-body" style="text-align:center;">
          <h1>
          Raul Anderson
          </h1>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  
<!-- fim modal -->
    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>