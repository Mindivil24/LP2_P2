<h1>inicio de sesion</h1>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <input type="text" name="email" placeholder="Ingrese email" required><br>
    <input type="password" name="password" placeholder="Ingrese password" required><br>
    <input type="submit" value="Ingresar"><br>
</form>
<?php

   //echo password_hash("123456", PASSWORD_DEFAULT);

    if(!empty($_POST)){
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        $errores = 0;
        
         if($email==""){
            echo "ingrese email<br>";
            $errores++;
         }
         if($password==""){
            echo "ingrese contraseña<br>";
            $errores++;
         }
         if($errores==0){

        
        require_once "controladores/UsuarioController.php";

        $uc = new UsuarioController();
        $resultado = $uc->login($email, $password);
        
        if($resultado!=0){
            header("location: bienvenido.php");
        }else{
            echo "usuario y/o contraseña incorrectos";
        }
    }
    }
?>