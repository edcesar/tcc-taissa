<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com Imagem</title>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="cab.css">
    <link rel="stylesheet" href="moldura.css">
</head>

<!-- COMANDO AUMENTAR/DIMINUIR LETRAS E ATERAR ENTRE MODO CLARO E ESCURO, PARTE DE IMAGENS -->
<input type="image" id="contraste" title="Alterar Contraste de Cor" img src="img/cont.png" height="50" width="50" align="right" accesskey="c" />
<input type="image" id="diminui" title="Diminuir fonte" img src="img/A-.png" height="50" width="45" align="right" accesskey="-" />
<input type="image" id="aumenta" title="Aumentar fonte" img src="img/A+.png" height="50" width="50" align="right" accesskey="+" />
 
 
 


<body>

    <!-- COMANDO AUMENTAR/DIMINUIR LETRAS E ATERAR ENTRE MODO CLARO E ESCURO, PARTE FUNCIONAL -->


    <script type="text/javascript">
        const aumentaFonteBtn = document.getElementById("aumenta");
        const diminuiFonteBtn = document.getElementById("diminui");

        aumentaFonteBtn.addEventListener("click", function () {
            //pegar o tamanho atual da fonte (getComputedStyle), aumentar em 2px e atribuir ao corpo do documento.
            document.body.style.fontSize = parseInt(window.getComputedStyle(document.body).fontSize) + 2 + "px";
        });

        diminuiFonteBtn.addEventListener("click", function () {
            document.body.style.fontSize = parseInt(window.getComputedStyle(document.body).fontSize) - 2 + "px";
        });

        const contraste = document.getElementById("contraste");

        contraste.addEventListener("click", function () {
            document.body.classList.toggle("contrast");

});

    </script>
    <header>
        <div class="cab">
            <nav class="navegacao">
                <ul>
                    <li><a href="cadastro.html"><img src="imagem/digital_azul.png" height="50px"alt="azul"><br>Cadastro</a></li>
                    <li class="centralizado"><img src="imagem/7.png" height="100px"></li>
                    <li><a href="exibir.html"><img src="imagem/icon.png" width="50px">Alunos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="moldura">

        <div class="container">
            <div class="image">
                <div class="container">
                    <img id="imagem" src="imagem/img.jpg" class="imagem" alt="Imagem Atual" title="foto de perfil">
                </div>
                <div>
                    <input type="file" id="inputImagem" class="input-imagem" accept="image/*">
                </div>
            </div>





        
            <div class="form-container">
                <form method="POST" action="processa_aluno.php">
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" id="name" class="name" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="date">Data de nascimento</label>
                        <input type="date" id="date" name="data_nasc" required>
                    </div>

                    <div class="form-group">
                        <label for="select">Curso:</label>
                        <select class="select" id="select" name="curso">
                            <option value="1">Informática</option>
                            <option value="2">Logistica</option>
                            <option value="3">Administração</option>
                            <option value="4">Marketing</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="message">Periodo:</label>
                        <select class="select" id="select" name="periodo">
                            <option value="1">Manhã</option>
                            <option value="2">Tarde</option>
                            <option value="3">Noite</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Série:</label>
                        <select class="select" id="select" name="serie">
                            <option value="1">1ª Serie</option>
                            <option value="2">2ª Serie</option>
                            <option value="3">3ª Serie</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="rfid">Cartão:</label>
                        <input type="text" id="rfid" class="rfid" name="cartao" required>
                    </div>

                    <div class="form-group">
                        <label for="RM">RM:</label>
                        <input type="text" id="RM" class="rm" name="id_aluno" required>
                    </div>

                    <div class="form-group">
                        <button type="submit"  alt="botão" title="Enviar">Enviar</button>

                    </div>

                </form>






            </div>
        </div>
    </div>
    <script src="script.js"></script>

    <!-- libras -->
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
</body>

</html>