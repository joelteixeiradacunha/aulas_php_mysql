<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";
@$tipo = $_REQUEST['tipo'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Pesquisas no Banco de Dados</title>

    <!-- Fonte Open Sans Condensed -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">

    <!-- Ícones Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    }

    body{
    font-family: Arial, Helvetica, sans-serif;
    background:#faf9f7;
    }

    /* HEADER */
    header{
    width:100%;
    height:200px;
    background:#fc8803;
    color:white;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    position:relative;
    }

    header h1{
    font-family:'Open Sans Condensed', sans-serif;
    font-size:42px;
    text-align:center;
    padding:0 20px;
    }

    .social{
    position:absolute;
    top:20px;
    right:30px;
    display:flex;
    gap:18px;
    }

    .social a{
    color:white;
    font-size:30px;
    transition:0.3s;
    }

    .social a:hover{
    transform:scale(1.2);
    color:#222;
    }

    /* MAIN */
    main{
    background:#faf9f7;
    }

    .form-pesquisa{
        margin-top:20px;
        padding: 20px;
    }
    .form-pesquisa input{
        width:25%;
        padding:10px;
        border-radius: 10px;
    }
    /* CARD */
    .card{
        background:white;
        width:700px;
        border-radius:12px;
        box-shadow:0 6px 18px rgba(0,0,0,0.15);
        padding:20px;
        display:flex;
        gap:20px;
        margin: 20px;
    }

    .card img{
    width:150px;
    height:200px;
    object-fit:cover;
    border-radius:8px;
    }

    .conteudo{
    display:flex;
    flex-direction:column;
    }

    .conteudo h2{
    margin-bottom:12px;
    color:#333;
    }

    .conteudo p{
    color:#555;
    line-height:1.6;
    margin-bottom:20px;

    /* Aproximadamente 5 linhas */
    display:-webkit-box;
    -webkit-line-clamp:5;
    -webkit-box-orient:vertical;
    overflow:hidden;
    }

    .botao{
    align-self:flex-start;
    text-decoration:none;
    background:#fc8803;
    color:white;
    padding:12px 18px;
    border-radius:6px;
    font-weight:bold;
    transition:0.3s;
    }

    .botao:hover{
    background:#d96f00;
    }

    /* Responsivo */
    @media (max-width:768px){

    header h1{
    font-size:28px;
    }

    .card{
    flex-direction:column;
    align-items:center;
    width:100%;
    max-width:380px;
    }

    .conteudo{
    text-align:center;
    }

    .botao{
    align-self:center;
    }
    }
    .card-pesquisa{
        display:flex;
        flex-direction: row;
        justify-content: space-between;
        padding:10px;
        margin: 20px;
    </style>
</head>
<body>

<header>
    <div class="social">
        <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://x.com" target="_blank"><i class="fab fa-x-twitter"></i></a>
    </div>

    <h1>Função - Pesquisas no Banco de Dados</h1>
</header>

<main>
    <div class="form-pesquisa">
        <form method='post' action='funcao_select.php'>
            <input type='text' name='tipo' id='tipo'>
            <input type='submit' name='enviar' id='enviar' value='Enviar'>
        </form>
    </div>

    <?php
    $sql = "SELECT id_aluno, nome, email, tipo, telefone, imagem FROM cadastro_aluno where tipo= '$tipo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "
            <div class='row row-cols-1 row-cols-md-2 g-4'>
                <div class='col'>
                    <div class='card'>
                        <img src='$row[imagem]' alt='Imagem aleatória' width='100' height='150' class='card-img-top'>
                        <div class='card-body'>
                            <div class='conteudo'>
                                <h3 class='card-title'>Nome: $row[nome]</h3>
        
                                <p class='card-text'>E-mail: $row[email]</p>
                                <p class='card-text'>Tipo: $row[tipo]</p>
                                <p class='card-text'>Telefone: $row[telefone]</p>
    
                                <a href='https://pt.wikipedia.org/wiki/SQL' target='_blank' class='botao'>
                Saiba mais sobre SQL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
               ";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
   
</main>

</body>
</html>