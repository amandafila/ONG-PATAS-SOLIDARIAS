<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinária Parceira</title>
    <link rel="stylesheet" href="creche_conhecer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="veterinaria.css">
</head>
<body>

    <?php include 'menu_teste.php'; ?>
<!-- Google Translate Widget -->
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'pt', // Idioma original da página (português)
      includedLanguages: 'es,en,pt', // Idiomas disponíveis (Espanhol, Inglês e Português)
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
      autoDisplay: false, // Impede a exibição automática do widget
    }, 'google_translate_element');
  }
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!-- Botões de idiomas -->
<div class="translate-buttons">
  <button onclick="translatePage('es')">
    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Flag_of_Spain.svg" alt="Español" style="width: 50px; height: 40px;">
  </button>
  <button onclick="translatePage('en')">
    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg" alt="English" style="width: 50px; height: 40px;">
  </button>
  <button onclick="translatePage('pt')">
    <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Flag_of_Brazil.svg" alt="Português" style="width: 50px; height: 40px;">
  </button>
</div>

<!-- CSS para evitar que quebre o layout -->
<style>
  /* Estilos para o widget de tradução */
  #google_translate_element {
    display: none; /* Oculta o elemento de tradução, já que o banner não é necessário */
  }

  /* Estilo para os botões de idioma */
  .translate-buttons {
    margin: 10px 0;
    padding: 10px;
    text-align: center;
  }

  .translate-buttons button {
    background: none;
    border: none;
    cursor: pointer;
    margin: 0 10px;
    padding: 0;
  }

  .translate-buttons img {
    width: 50px;
    height: 40px;
    vertical-align: middle; /* Garante que as bandeiras fiquem alinhadas */
  }
</style>

<script type="text/javascript">
  function translatePage(languageCode) {
    var googleTranslateElement = new google.translate.TranslateElement({
      pageLanguage: 'pt', // Idioma original da página
      includedLanguages: 'es,en,pt', // Idiomas permitidos (Espanhol, Inglês, Português)
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
      autoDisplay: false, // Impede a exibição automática do widget
    });
    googleTranslateElement.showBanner(languageCode); // Força a tradução para o idioma desejado
  }
</script>
    <section class="galeria">
        <h2>Conheça Nossa Veterinária Parceira</h2>
        <div class="imagem-container">
            <img src="img/clinica2.webp" alt="Creche 1" class="imagem-creche">
            <img src="img/clinica3.jpg" alt="Creche 2" class="imagem-creche">
            <img src="img/clinica4.jpg" alt="Cr eche 3" class="imagem-creche">
            <img src="img/emergência-na-rotina-clínica-artigo.jpg" alt="Creche 4" class="imagem-creche">
            <img src="img/clinica5.jpg" alt="Creche 5" class="imagem-creche">
            <img src="img/clinica6.jpg" alt="Creche 6" class="imagem-creche">
        </div>
    </section>

    <section class="descricao-creche quadro">
        <h2>Veterinária Parceira</h2>
        <p><strong>Endereço:</strong> Avenida dos animais, 123 - Bairro Wildlife, Curitiba, PR</p>
        <p>A Salve a Todos é uma clínica veterinária dedicada a oferecer cuidados excepcionais aos animais, com o compromisso de preservar o bem-estar e a saúde dos nossos queridos amigos de quatro patas. Fundada com o propósito de proporcionar
             atendimento acessível e de qualidade, a clínica se destaca como parceira essencial em nossa missão de proteger e cuidar dos animais em situação de vulnerabilidade.</p>
        <p>Contato: (41) 88888-8888</p>
        
        <a href="agendamento.php" class="botao-agendar">Cadastre uma Consulta Aqui</a>
    </section>
    <footer>
        <footer>
            <div class="footer-container">
                <div class="footer-info">
                    <h2>Contato</h2>
                    <p>Telefone: (41) 9999-9999</p>
                    <p>E-mail: <a href="mailto:patassolidariass@gmail.com">patassolidariass@gmail.com</a></p>
                </div>
                
                <div class="footer-img">
                    <img src="img/image.png" alt="Logo Patas Solidárias">
                </div>
                
                <div class="footer-social">
                    <h2>Siga-nos:</h2>
                    <a href="https://www.tiktok.com/@patassolidariass?is_from_webapp=1&sender_device=pc" class="social-link">    
                        <img src="img/tiktok.png" alt="Tiktok" class="footer-icon">
                        Tiktok
                    </a>
                    <a href="https://www.instagram.com/patassolidariass/" class="social-link">
                        <img src="img/instagram.png" alt="Instagram" class="footer-icon">
                        Instagram 
                    </a>
                    <a href="https://x.com/patasolidariass" class="social-link">
                        <img src="img/x.png" alt="Twitter" class="footer-icon">
                        Twitter 
                    </a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 PATAS SOLIDÁRIAS. Todos os direitos reservados para a equipe: Amanda Fila, Arthur Kalil, Carlos Leonardo, Eduardo Monteiro, Leonardo Grattao.</p>
            </div>
        </footer>
    </footer>

    <script>
        function toggleMenu() {
            const menuLateral = document.getElementById("menuLateral");
            if (menuLateral.style.width === "250px") {
                menuLateral.style.width = "0";
            } else {
                menuLateral.style.width = "250px";
            }
        }
    </script>
</body>
</html>