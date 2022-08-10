<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title-script"></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./assets/styles/css/main.css">
    <script src="https://unpkg.com/react@18/umd/react.production.min.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js" crossorigin></script>
</head>
<body>
    <div class="background">
        <picture>
            <img srcset="./assets/styles/img/background_2.jpg" alt="">
        </picture>
    </div>
    <form action="./backend/login.php" method="post">
        <div class="back">
            <a href="#" style="float:right">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="30px"
                     viewBox="0 0 300.003 300.003" style="enable-background:new 0 0 300.003 300.003;" xml:space="preserve">
                    <g>
                        <path d="M150,0C67.159,0,0.001,67.159,0.001,150c0,82.838,67.157,150.003,149.997,150.003S300.002,232.838,300.002,150    
                        C300.002,67.159,232.839,0,150,0z M189.226,218.202c-2.736,2.734-6.321,4.101-9.902,4.101c-3.582,0-7.169-1.367-9.902-4.103
                        l-56.295-56.292c-0.838-0.537-1.639-1.154-2.368-1.886c-2.796-2.799-4.145-6.479-4.077-10.144    
                        c-0.065-3.667,1.281-7.35,4.077-10.146c0.734-0.731,1.53-1.349,2.368-1.886l56.043-56.043c5.47-5.465,14.34-5.467,19.808,0.003
                        c5.47,5.467,5.47,14.335,0,19.808l-48.265,48.265l48.514,48.516C194.695,203.864,194.695,212.732,189.226,218.202z"/>
                    </g>
                </svg>
            </a>
        </div>
        <picture>
            <img srcset="./assets/styles/img/Escudo.png" alt="">
        </picture>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error'] ?></p>
        <?php } ?>
        <div class="login">
            <div class="email">
                <label for="">
                    <span class="material-symbols-outlined">mail</span>
                </label>
                <input type="email" placeholder="Correo Institucional" name="mail" autocomplete="none">
            </div>
            <div class="password">
                <label for="">
                    <span class="material-symbols-outlined">lock</span>
                </label>
                <input type="password" placeholder="N. identidad / Contraseña" name="password">
            </div>
            <div class="submit">
                <button class="submit" type="submit">
                    <span>Entrar</span>
                </button>
            </div>
            <div class="things-wrong">
                <p><a href="#" class="href">¿Hay algo que no funciona?</a></p>
                <p><a href="#" class="href">¿No te acuerdas de tu correo?</a></p>
            </div>
        </div>
    </form>
<script src="./assets/js/main.js">
</script>
</body>
</html>