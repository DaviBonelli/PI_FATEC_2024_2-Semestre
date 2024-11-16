
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="icon" href="img/navicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 18px sans-serif;
            background-color: #1D3736;
            color:#ffffff
        }
        .wrapper{ width: 350px; padding: 20px; }

        .green-buttom {
            box-sizing: border-box;
            text-align: center;
            display: block;
            line-height: 30px;
            width: 100%; 
            height: 50px;
            padding: 10px; 
            border-radius: 4px; 
            border: 0px solid #ccc; 
            background-color: #1EE27A; 
            color: #1D3736;
        }
        .green-buttom:hover { 
            background-color: #1ec96d;
            color: white; 
            text-decoration: none;
        }

        
        .red-buttom {
            box-sizing: border-box;
            text-align: center;
            display: block;
            line-height: 30px;
            width: 100%; 
            height: 50px;
            padding: 10px; 
            border-radius: 4px; 
            border: 0px solid #ccc;  
            background-color: #E21E41; 
            color: white;
        }
        .red-buttom:hover{
            background-color: #c01937; 
            color: white;
            text-decoration: none;
        }

        

        .orange-buttom {
            box-sizing: border-box;
            text-align: center;
            display: block;
            line-height: 30px;
            width: 100%; 
            height: 50px;
            padding: 10px; 
            border-radius: 4px; 
            border: 0px solid #ccc; 
            background-color: #F39C36; 
            color: #1D3736;
        }
        .orange-buttom:hover {
            background-color: #d88a31;
            color: white;
            text-decoration: none;
        }
        

        .blue-buttom {
            box-sizing: border-box;
            text-align: center;
            display: block;
            line-height: 30px; 
            width: 100%; 
            height: 50px;
            padding: 10px; 
            border-radius: 4px; 
            border: 0px solid #ccc; 
            background-color: #0E7FBE; 
            color: white;
        }
        .blue-buttom:hover {
            background-color: #0c6ea2;
            color: white;
            text-decoration: none;
        }

        
        .input-base {
            box-sizing: border-box;
            text-align: center;
            display: block;
            line-height: 30px;
            width: 100%; 
            height: 40px;
            padding: 10px; 
            border-radius: 4px; 
            border: 0px solid #ccc; 
            background-color: #D9D9D9; 
            color: black;
        }

    </style>
</head>
<center>
<body>
    <div class="wrapper">
    <img src="img/dottext.png" alt="erro" style="position: fixed; bottom: 0; left: 0; width: 100px; height: 40px;">
    <img src="img/loginicon.png" alt="erro" width="90" height="65">
        <h2>CADASTAR</h2>
        <p>Favor inserir usuario e senha.</p>
        <form action="controle.php" method="post">
            <div class="form-group">
                <label>USUARIO</label>
                <center>
                <input type="text" name="usuario" id="usuario" class="input-base">
                </center>
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>SENHA</label>
                <center>
                <input type="password" name="senha" id="senha" class="input-base">
                </center>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <center>
                <input type="submit" class="blue-buttom" name="action" value="Cadastrar">
                </center>
                <span class="help-block"></span>

                <span class="help-block"></span>
                <!--<div class="form-group" style="background-color:blue">-->
            <a href="login.php" class="red-buttom">Realizar Login</a>
            <span class="help-block"></span>
            </div>
            
        </form>
    </div>    
</body>
    </center>

</html>