<?php
    session_start();

    
   

  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Contactanos</title>
</head>
<style>

   
    *{
        font-weight: 800;
        font-family: sans-serif;
    }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            
    
            height:  200vh; /* Asegura que ocupe toda la altura visible */
            margin: 0; /* Elimina el margen predeterminado del body */

            background-color: #f0f0f0;
            
        }

    .alertas{
        width: 67vh;
        padding: 25px;
        margin: 2%;

        border-radius: 25px;
        color: #fff;   
    }
    #Enviado{
        background-color: #67d86b; 
    }
    #No_Enviado{
        background-color: #d86767;
    }

    main {

        display: flex;
        flex-direction: column;
        align-items: center;

        width:  67vh;
        padding: 1%;
        margin: 1%;
        border-radius: 5%;

        background: white;
        box-shadow: 0 0 95px rgba(0, 0, 0, 0.2);
    
    }

    form {

        display: grid;

        width: 90%;

    }
    .inputs{
        margin: 2%;
        border-radius: 25px;
        border-color: aqua;
        padding: 5%;
        color: darkgray;
    }

    #enviar {

        padding: 10px 20px;
        border: none;
        border-radius: 25px;
        margin: 5%;

        cursor: pointer;
        color: #fff;
        
        background: linear-gradient(to right, #4CAF50, #388E3C); /* Gradient de verde claro a oscuro */
        transition:  0.3s ease; /* Transición de 0.3 segundos en el fondo */

    }
    #detalles {
        padding: 55px;

    }
    /* Estilo del botón al pasar el mouse sobre él */
    #enviar:hover {
        background: linear-gradient(to bottom, #388E3C, #4CAF50); /* Cambio de gradient de oscuro a claro */
    }
    .info{
        color: darkgray;
        padding: 2%;
    }
    .datos{
        padding: 2%;

    }

    
    /* Media query para pantallas de hasta 900px de ancho */
    @media ( max-width: 900px) {
        main{
            width: 95vh;
        }
       
    }
    /* Media query para pantallas de hasta 400px de ancho */
    @media (max-width: 400px) {
        main{
            width: 95%;
        }
        body{

            height: 100vh; /* Asegura que ocupe toda la altura visible */
            
        }
        .alertas{
            width: 85%;
        }
    }

</style>
<body>
        <?php if( isset ($_SESSION['status']) ): ?>

            <!-- resultado bueno -->
            <?php if($_SESSION['status'] == "success"): ?>

                <div class="alertas" id="Enviado">
                
                    <i class="fa-sharp fa-solid fa-circle-info fa-bounce"></i>

                    ¡Mensaje enviado con exito!

                </div>

                <?php $_SESSION['status'] = "";?>

            <?php endif; ?>

            <!-- resultado malo -->
            <?php if($_SESSION['status'] == "danger"): ?>

                <div class="alertas" id="No_Enviado"> 
                    
                        <i class="fa-sharp fa-solid fa-circle-info fa-bounce"></i>
                        Surgio un problema

                </div>

                <?php $_SESSION['status'] = "";?>

            <?php endif; ?>

        <?php endif; ?>

        <?php echo $_SESSION['prueba']?>

       
    <main>
        
            
            <div id="titulo">
                <h1 id="contacto">¡Contáctanos!</h1>
            </div>
            <form action="server.php" method="POST">


                <label for="name" class="labels">Nombre: </label>
                <input type="text" name="name" id="name" class="inputs" >
                

                <label for="mail" class="labels">Correo: </label>
                <input type="text" name="mail" id="mail" class="inputs" >

                <label for="asunto" class="labels">Asunto: </label>
                <input type="text" name="asunto" id="asunto" class="inputs" >

                <label for="detalles" class="labels">Detalles: </label>
                <input type="text" name="detalles" id="detalles" class="inputs" >

                <button type="submit" id="enviar" name="form"> ENVIAR</button>


            </form>
            <div class="info">

                <span id="number" class="datos">+58 414 567 1921</span>

         
                <span id="direction" class="datos"> 
                    <i class="fa-solid fa-location-dot fa-beat"></i>
                    Barinas Venezuela
                </span>
                
            </div>

      
    </main>
    <script src="https://kit.fontawesome.com/6ebe08c269.js" crossorigin="anonymous"></script>
</body>
</html>