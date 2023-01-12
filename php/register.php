<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register_Page_Proyecto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css" integrity="sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    
    <a href="index.php">
        <button><i class="fa-solid fa-house-user"></i> &nbsp; HOME</button>
      </a> 

    <section>
        <aside>
            <h1>Register</h1>
            <h2>Por favor, rellena todos los datos</h2>
            <form id="signupForm">

                <label for="firstName">Nombre:</label>
                <input type="text" id="firstName" name="firstName">

                <label for="lastName">Apellido:</label>
                <input type="text" id="lastName" name="lastName">

                <label for="email">Correo electrónico:</label>
                <input type="text" id="email" name="email">

                <label for="numberPhone">Telefono:</label>
                <input type="text" id="numberPhone" name="numberPhone">

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password">

                <label for="passwordConfirm">Confirma tu contraseña:</label>
                <input type="password" id="passwordConfirm" name="passwordConfirm">
                
                <button type="submit" value="submit">Register</button>
                
            </form>
            <p>¿Estas logeado? <a href="login.php">Logeate</a></p>
        </aside>
    </section>
    <script src="../js/register.js"></script>
</body>
</html>