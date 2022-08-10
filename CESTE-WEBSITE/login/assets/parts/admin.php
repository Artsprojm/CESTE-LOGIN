<?php 
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="../styles/css/admin.css">
    <style>
        .container{
            margin-left: 215px;
        }
        header .ceste-title-part{
            display: flex;
            width: 180px;
            padding-left: 20px;
            align-items: center;
            border: solid 2px rgb(20, 12, 53);
            margin: 10px;
            background: rgba(255, 255, 255, 0.2);
            transition: background 400ms ease, color 200ms ease;
        }
        header .ceste-title-part:hover{
            background: rgba(255, 255, 255, 0.8);
            color: #000;
        }
        .container nav .user-nav{
            display: flex;
            justify-content: space-around;
            flex-direction: row;
            background: rgb(223, 240, 255);
            position: absolute;
            right: 0;
            top: 0;
            left: 224px;
            align-items: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-transform: uppercase;
        }
        .container nav .user-nav .right-part .user svg{
            border-radius: 50%;
        }
        .container nav .user-nav .right-part{
            display: flex;
            width: 230px;
            justify-content: space-evenly;
        }
    </style>
</head>
<body>
    <header>
        <a class="ceste-title-part" href="">
            <picture>
                <img src="../styles/img/Escudo.png" alt="">
            </picture>
            <div class="text">
                <p>Colegio <br> <strong>CESTE</strong> </p>
            </div>
        </a>
        <a href="">
            <span></span>
            <p>Inicio</p>
        </a>
        <a href="">
            <span></span>
            <p>Datos</p>
        </a>
        <a href="">
            <span></span>
            <p>Notas</p>
        </a>
        <a href="">
            <span></span>
            <p>Actividades</p>
        </a>
        <a href="">
            <span></span>
            <p>Chat</p>
        </a>
        <a href="../../backend/logout.php">
            <span></span>
            <p>Cerrar Sesion</p>
        </a>
    </header>
    <div class="container">
        <nav>
        <div class="user-nav">
            <h1><?php echo $_SESSION['name']; ?></h1>
            <div class="right-part">
                <div class="user">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 258.75 258.75" style="enable-background:new 0 0 258.75 258.75;" xml:space="preserve" width="40px" height="30px">
                            <g>
                                <circle cx="129.375" cy="60" r="60"/>
                                <path d="M129.375,150c-60.061,0-108.75,48.689-108.75,108.75h217.5C238.125,198.689,189.436,150,129.375,150z"/>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="notifications">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="40px" height="30px">
                            <g>
                                <path d="M439.653,348.114v-97.679c-0.009-86.034-59.231-158.027-139.081-177.975c3.411-6.764,5.515-14.294,5.515-22.373    C306.087,22.468,283.619,0,256,0c-27.619,0-50.087,22.468-50.087,50.087c0,8.08,2.104,15.608,5.515,22.373    c-79.85,19.948-139.072,91.941-139.081,177.975v97.679c-19.41,6.901-33.384,25.233-33.391,47.017    c0.01,27.668,22.419,50.075,50.087,50.085h85.158C181.938,483.321,215.606,511.991,256,512    c40.392-0.009,74.061-28.679,81.799-66.784h85.158c27.668-0.01,50.077-22.417,50.087-50.085    C473.036,373.347,459.063,355.015,439.653,348.114z M256,33.391c9.196,0,16.696,7.5,16.696,16.696    c0,9.196-7.5,16.696-16.696,16.696c-9.196,0-16.696-7.5-16.696-16.696C239.304,40.891,246.805,33.391,256,33.391z     M172.522,250.435c0,9.22-7.475,16.696-16.696,16.696s-16.696-7.475-16.696-16.696c0.031-64.492,52.378-116.841,116.87-116.87    c9.22,0,16.696,7.473,16.696,16.696c0,9.22-7.475,16.696-16.696,16.696v-0.002C210.013,167.038,172.605,204.447,172.522,250.435z     M256,478.61c-21.77-0.04-40.084-14-46.998-33.394h93.997C296.084,464.61,277.77,478.57,256,478.61z"/>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="chat">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" widht="40px" height="30px">
                            <path d="M54,2.5H6c-3.252,0-6,2.748-6,6v33c0,3.252,2.748,6,6,6h14.555l8.702,9.669C29.446,57.38,29.717,57.5,30,57.5  s0.554-0.12,0.743-0.331l8.702-9.669H54c3.252,0,6-2.748,6-6v-33C60,5.248,57.252,2.5,54,2.5z M12,15.5h15c0.553,0,1,0.448,1,1  s-0.447,1-1,1H12c-0.553,0-1-0.448-1-1S11.447,15.5,12,15.5z M46,33.5H12c-0.553,0-1-0.448-1-1s0.447-1,1-1h34c0.553,0,1,0.448,1,1  S46.553,33.5,46,33.5z M46,25.5H12c-0.553,0-1-0.448-1-1s0.447-1,1-1h34c0.553,0,1,0.448,1,1S46.553,25.5,46,25.5z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        </nav>
        <div class="actividades">
            <h1>Actividades Recientes</h1>
            <div class="boxes">
                <div class="1 box"></div>
                <div class="2 box"></div>
                <div class="3 box"></div>
                <div class="4 box"></div>
            </div>
        </div>
        <div class="chats">
            <h1>Foros y Chats</h1>
            <div class="boxes">
                <div class="1 box"></div>
                <div class="2 box"></div>
                <div class="3 box"></div>
                <div class="4 box"></div>
            </div>
        </div>
        <style>
            .container .actividades{
                display: flex;
                flex-direction: column;
                transform: translateY(30px);
                margin: 50px 50px;
            }
            .container .actividades h1{
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                transform: translateX(40px);
            }
            .container .actividades .boxes{
                display: flex;
                width: 100%;
                justify-content: space-evenly;
            }
            .container .actividades .boxes .box{
                width: 350px;
                height: 200px;
                background: #6d666c;
                border-radius: 5px;
            }
            .container .chats{
                display: flex;
                flex-direction: column;
                transform: translateY(30px);
                margin: 50px 50px;
            }
            .container .chats h1{
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                transform: translateX(40px);
            }
            .container .chats .boxes{
                display: flex;
                width: 100%;
                justify-content: space-evenly;
            }
            .container .chats .boxes .box{
                width: 350px;
                height: 200px;
                background: #6d666c;
                border-radius: 5px;
            }
        </style>
    </div>
</body>
</html>
<?php
} else {
    header("Location: ../../../../index.php");
    exit();
}
?>