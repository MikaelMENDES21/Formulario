<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
 <body>
     <form action="proc.php" method="post">
    <div>
       <label> Nome: </label>
       <input type="text" id="nome" name="nome"/>
       <?php 
       if(isset($_GET['erro']) && $_GET['erro'] == "nome"){
           echo "<span style= 'color:red'>*</span>";
       }
       ?>
    </div>

    <div> 
     <Label> Sexo: </Label>
     <input type = "radio" id="sexo" name="sexo" value="f"/> feminino
     <input type ="radio" id="sexo"  checked name="sexo" value="m"/> masculino 1
     </div>
      
      <div>
          <labelfor ="x"> Senha: </label>
          <input type="password" id="x" name="senha"/>
          <?php 
       if(isset($_GET['erro']) && $_GET['erro'] == "senha"){
           echo "<span style= 'color:red'>*</span>";
       }
       ?>
      </div>    
      
      <div>
          <label>CPF:</label>
          <input type="text" id="CPF"/>
          <?php 
       if(isset($_GET['erro']) && $_GET['erro'] == "CPF"){
           echo "<span style= 'color:red'>*</span>";
       }
       ?>
      </div>

      <div>
          <label>RG:</label>
          <input type="text" id="RG"/>
          <?php 
       if(isset($_GET['erro']) && $_GET['erro'] == "RG"){
           echo "<span style= 'color:red'>*</span>";
       }
       ?>
      </div>

      <div>
          <label>Endereço:</label>
          <input type="text" id="Endereço"/>
          <?php 
       if(isset($_GET['erro']) && $_GET['erro'] == "Endereço"){
           echo "<span style= 'color:red'>*</span>";
       }
       ?>
      </div>

      <div>
          <label>Telefone:</label>
          <input type="text" id="Telefone"/>
          <?php 
       if(isset($_GET['erro']) && $_GET['erro'] == "Telefone"){
           echo "<span style= 'color:red'>*</span>";
       }
       ?>
      </div>

      <form action="upload.php" method="post" enctype="multipart/form-data">
          <input type="file" name="upload" />
          <input type="submit" value="fazer upload" >    
    </form>    

     <input type="submit" value="cadastro"/>
</body>
</html>