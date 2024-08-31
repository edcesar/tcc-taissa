document.addEventListener('DOMContentLoaded', function () {
    const inputImagem = document.getElementById('inputImagem');
    const imagem = document.getElementById('imagem');

    inputImagem.addEventListener('change', function () {
        // Verifica se o arquivo foi selecionado
        if (inputImagem.files.length > 0) {
            const leitor = new FileReader();
            
            // Define a função de callback que será chamada quando o arquivo for carregado
            leitor.onload = function(e) {
                imagem.src = e.target.result; // Atualiza a fonte da imagem
            }
            
            // Lê o arquivo como URL de dados
            leitor.readAsDataURL(inputImagem.files[0]);
        } else {
            alert('Por favor, selecione uma imagem.');
        }
    });
});
