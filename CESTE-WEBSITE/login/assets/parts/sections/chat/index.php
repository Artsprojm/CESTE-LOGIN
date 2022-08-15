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
    <title>Chat</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../../styles/css/admin.css">
</head>
<body>
</head>
<body>
    <header>
        <a class="ceste-title-part" href="">
            <picture>
                <img src="../../../styles/img/Escudo.png" alt="">
            </picture>
            <div class="text">
                <p>Colegio <br> <strong>CESTE</strong> </p>
            </div>
        </a>
        <a href="../../admin.php">
            <p>Inicio</p>
        </a>
        <a href="../../sections/DataP/Profile_Dates.php?Correct Access">
            <p>Datos</p>
        </a>
        <a href="">
            <p>Notas</p>
        </a>
        <a href="">
            <p>Actividades</p>
        </a>
        <a href="../../sections/chat/index.php">
            <p>Chat</p>
        </a>
        <a href="../../../../backend/logout.php">
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
        <section id="chat">
            <script>
                const wo_acces = document.getElementById("without-access");
                let grade = ("");
                /*
                function getacc() {
                    wo_acces.classList.remove("without-access_visible");
                };
                */
               const primero = ('primero'); 
                if(grade = 'primero'){
                    getacc();  
                }
                if(grade = 'segundo'){
                    getacc();  
                }
                if(grade = 'tercero'){
                    getacc();  
                }
                if(grade = 'cuarto'){
                    getacc();  
                }
                if(grade = 'quinto'){
                    getacc();  
                }
            </script>
        <h1>Chats</h1>
            <div class="listchat">
                <div class="box1 box">
                    <div class="img">
                        <img src="https://img.freepik.com/free-vector/white-gold-geometric-pattern-background-vector_53876-140726.jpg?w=2000" alt="">
                    </div>
                    <p>Chats de 1ro</p>
                    <div class="without-access" id="without-access">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
                            <g>
                                <path d="M150,0C67.29,0,0,67.29,0,150s67.29,150,150,150s150-67.29,150-150S232.71,0,150,0z M150,270c-66.169,0-120-53.832-120-120 S83.831,30,150,30s120,53.832,120,120S216.169,270,150,270z"/>
                                <path d="M215.606,84.394c-5.857-5.857-15.355-5.857-21.213,0L150,128.787l-44.394-44.393c-5.857-5.857-15.355-5.857-21.213,0 c-5.858,5.857-5.858,15.355,0,21.213L128.787,150l-44.393,44.394c-5.858,5.857-5.858,15.355,0,21.213 C87.322,218.535,91.161,220,95,220s7.678-1.465,10.606-4.394L150,171.213l44.394,44.393C197.322,218.535,201.161,220,205,220 s7.678-1.465,10.606-4.394c5.858-5.857,5.858-15.355,0-21.213L171.213,150l44.393-44.394 C221.464,99.749,221.464,90.251,215.606,84.394z"/>
                            </g>
                        </svg>
                        <h3>Sin Acceso</h3>
                    </div>
                </div>
                <div class="box2 box">
                    <div class="img">
                        <img src="https://img.freepik.com/free-vector/white-gold-geometric-pattern-background-vector_53876-140726.jpg?w=2000" alt="">
                    </div>
                    <p>Chats de 2do</p>
                    <div class="without-access" id="without-access">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
                            <g>
                                <path d="M150,0C67.29,0,0,67.29,0,150s67.29,150,150,150s150-67.29,150-150S232.71,0,150,0z M150,270c-66.169,0-120-53.832-120-120 S83.831,30,150,30s120,53.832,120,120S216.169,270,150,270z"/>
                                <path d="M215.606,84.394c-5.857-5.857-15.355-5.857-21.213,0L150,128.787l-44.394-44.393c-5.857-5.857-15.355-5.857-21.213,0 c-5.858,5.857-5.858,15.355,0,21.213L128.787,150l-44.393,44.394c-5.858,5.857-5.858,15.355,0,21.213 C87.322,218.535,91.161,220,95,220s7.678-1.465,10.606-4.394L150,171.213l44.394,44.393C197.322,218.535,201.161,220,205,220 s7.678-1.465,10.606-4.394c5.858-5.857,5.858-15.355,0-21.213L171.213,150l44.393-44.394 C221.464,99.749,221.464,90.251,215.606,84.394z"/>
                            </g>
                        </svg>
                        <h3>Sin Acceso</h3>
                    </div>
                </div>
                <div class="box3 box">
                    <div class="img">
                        <img src="https://img.freepik.com/free-vector/white-gold-geometric-pattern-background-vector_53876-140726.jpg?w=2000" alt="">
                    </div>
                    <p>Chats de 3ro</p>
                    <div class="without-access" id="without-access">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
                            <g>
                                <path d="M150,0C67.29,0,0,67.29,0,150s67.29,150,150,150s150-67.29,150-150S232.71,0,150,0z M150,270c-66.169,0-120-53.832-120-120 S83.831,30,150,30s120,53.832,120,120S216.169,270,150,270z"/>
                                <path d="M215.606,84.394c-5.857-5.857-15.355-5.857-21.213,0L150,128.787l-44.394-44.393c-5.857-5.857-15.355-5.857-21.213,0 c-5.858,5.857-5.858,15.355,0,21.213L128.787,150l-44.393,44.394c-5.858,5.857-5.858,15.355,0,21.213 C87.322,218.535,91.161,220,95,220s7.678-1.465,10.606-4.394L150,171.213l44.394,44.393C197.322,218.535,201.161,220,205,220 s7.678-1.465,10.606-4.394c5.858-5.857,5.858-15.355,0-21.213L171.213,150l44.393-44.394 C221.464,99.749,221.464,90.251,215.606,84.394z"/>
                            </g>
                        </svg>
                        <h3>Sin Acceso</h3>
                    </div>
                </div>
                <div class="box4 box">
                    <div class="img">
                        <img src="https://img.freepik.com/free-vector/white-gold-geometric-pattern-background-vector_53876-140726.jpg?w=2000" alt="">
                    </div>
                    <p>Chats de 4to</p>
                    <div class="without-access" id="without-access">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
                            <g>
                                <path d="M150,0C67.29,0,0,67.29,0,150s67.29,150,150,150s150-67.29,150-150S232.71,0,150,0z M150,270c-66.169,0-120-53.832-120-120 S83.831,30,150,30s120,53.832,120,120S216.169,270,150,270z"/>
                                <path d="M215.606,84.394c-5.857-5.857-15.355-5.857-21.213,0L150,128.787l-44.394-44.393c-5.857-5.857-15.355-5.857-21.213,0 c-5.858,5.857-5.858,15.355,0,21.213L128.787,150l-44.393,44.394c-5.858,5.857-5.858,15.355,0,21.213 C87.322,218.535,91.161,220,95,220s7.678-1.465,10.606-4.394L150,171.213l44.394,44.393C197.322,218.535,201.161,220,205,220 s7.678-1.465,10.606-4.394c5.858-5.857,5.858-15.355,0-21.213L171.213,150l44.393-44.394 C221.464,99.749,221.464,90.251,215.606,84.394z"/>
                            </g>
                        </svg>
                        <h3>Sin Acceso</h3>
                    </div>
                </div>
                <div class="box5 box">
                    <div class="img">
                        <img src="https://img.freepik.com/free-vector/white-gold-geometric-pattern-background-vector_53876-140726.jpg?w=2000" alt="">
                    </div>
                    <p>Chats de 5to</p>
                    <div class="without-access" id="without-access">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
                            <g>
                                <path d="M150,0C67.29,0,0,67.29,0,150s67.29,150,150,150s150-67.29,150-150S232.71,0,150,0z M150,270c-66.169,0-120-53.832-120-120 S83.831,30,150,30s120,53.832,120,120S216.169,270,150,270z"/>
                                <path d="M215.606,84.394c-5.857-5.857-15.355-5.857-21.213,0L150,128.787l-44.394-44.393c-5.857-5.857-15.355-5.857-21.213,0 c-5.858,5.857-5.858,15.355,0,21.213L128.787,150l-44.393,44.394c-5.858,5.857-5.858,15.355,0,21.213 C87.322,218.535,91.161,220,95,220s7.678-1.465,10.606-4.394L150,171.213l44.394,44.393C197.322,218.535,201.161,220,205,220 s7.678-1.465,10.606-4.394c5.858-5.857,5.858-15.355,0-21.213L171.213,150l44.393-44.394 C221.464,99.749,221.464,90.251,215.606,84.394z"/>
                            </g>
                        </svg>
                        <h3>Sin Acceso</h3>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <style>
#chat .listchat{
    display: flex;
    flex-direction: column;
}
#chat .listchat .box{
    width: calc(100% - 70px);
    height: 100px;
    background: #6d666c;
    border-radius: 8px;
    overflow: hidden;
    margin: 20px 0;
}
#chat .listchat .box .without-access{
    position: absolute;
    display: flex;
    flex-direction: row;
    color: #000;
    background: rgba(255, 103, 103,1);
    box-shadow: 0px 0px 10px 0px rgba(255, 103, 103,1);
    z-index: 1;
    border-radius: 5px;
    padding: 5px 20px;
    right: 100px;
    transform: translateY(-85px) scale(0.95);
    /*
    visibility: hidden;
    */
}
#chat .listchat .box .without-access_visible{
    visibility: visible;
}
#chat .listchat .box .without-access svg{
    width: 40px;
    margin-right: 10px;
}
#chat .listchat .box1{
    margin-top: 0;
}
#chat .listchat .box1 p,
#chat .listchat .box2 p,
#chat .listchat .box3 p,
#chat .listchat .box4 p,
#chat .listchat .box5 p{
    position: absolute;
    transform: translateY(-90px) translateX(20px);
    color: #fff;
    text-transform: uppercase;
    font-size: 25px;
    font-weight: 700;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
#chat .listchat .box .img{
    height: 100%;
    width: 100%;
    overflow: hidden;
    z-index: 10;
}
#chat .listchat .box .img img{
    height: 100%;
    width: 100%;
    z-index: -1;
}
#chat .listchat .box .img::before{
    content: '';
    position: absolute;
    width: calc(100% - 70px);
    height: 100px;
    background: #000;
    filter: opacity(0.7);
    border-radius: 8px;
}
#chat h1{
    font-size: 30px;
    text-transform: uppercase;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
    </style>
</body>
</html>
<?php
} else {
    header("Location: ../../../../index.php?Acces denied");
    exit();
}
?>