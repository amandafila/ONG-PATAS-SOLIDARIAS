<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="creche.css">
    <title>Creche</title>
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
    <section class="form-section">
        <div class="form-container">
            <h2>Agende um Horário na Creche</h2>
            <form action="sucessocreche.html" method="post">

                <label for="animal">Tipo de Animal:</label>
                <select id="animal" name="animal" onchange="mostrarOutroAnimal()" required>
                    <option value="">Selecione o tipo de animal</option>
                    <option value="Cachorro">Cachorro</option>
                    <option value="Gato">Gato</option>
                    <option value="Outros">Outros</option>
                </select>
                

                <div id="outroAnimalContainer" style="display: none;">
                    <label for="outroAnimal">Especifique o tipo de Animal:</label>
                    <input type="text" id="outroAnimal" name="outroAnimal" placeholder="Digite o tipo de animal">
                </div>


                <label for="nomeAnimal">Nome do Animal:</label>
                <input type="text" id="nomeAnimal" name="nomeAnimal" placeholder="Nome do animal" required>

                <label for="diaEntrada">Dia desejado para entrada:</label>
                <input type="date" id="diaEntrada" name="diaEntrada" required>

                <label for="horarioEntrada">Horário de Entrada:</label>
                <select id="horarioEntrada" name="horarioEntrada" required>
                    <option value="">Selecione o horário</option>
                    <option value="08:00">08:00</option>
                    <option value="10:00">10:00</option>
                    <option value="12:00">12:00</option>
                    <option value="14:00">14:00</option>
                    <option value="16:00">16:00</option>
                </select>

                <label for="diaSaida">Dia desejado para saída:</label>
                <input type="date" id="diaSaida" name="diaSaida" required>


                <label for="horarioSaida">Horário de Saída:</label>
                <select id="horarioSaida" name="horarioSaida" required>
                    <option value="">Selecione o horário</option>
                    <option value="08:00">08:00</option>
                    <option value="10:00">10:00</option>
                    <option value="12:00">12:00</option>
                    <option value="14:00">14:00</option>
                    <option value="16:00">16:00</option>
                </select>


                <label for="observacoes">Observações:</label>
                <textarea id="observacoes" name="observacoes" placeholder="Especifique qualquer necessidade especial do animal"></textarea>


                <button type="submit" href="sucesso_agendamento.html" class="submit">Agendar</button>
            </form>
            <div class="contact-info">
                <p><strong>Contato:</strong></p>
                <p>Telefone: (41) 9999-9999</p>
                <p>E-mail: patassolidarias@gmail.com</p>
                <p><strong>Horário de Atendimento:</strong><br>Segunda a Sexta: 8h - 18h</p>
            </div>
            

            <div style="text-align: center; margin-top: 20px;">
                Quer conhecer nossa creche?<a href="creche_conhecer.html" class="link_creche">Aperte aqui para conhecer</a>
            </div>
        </div>
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
        function mostrarOutroAnimal() {
            var selectAnimal = document.getElementById("animal");
            var outroAnimalContainer = document.getElementById("outroAnimalContainer");

            if (selectAnimal.value === "Outros") {
                outroAnimalContainer.style.display = "block";  
            } else {
                outroAnimalContainer.style.display = "none";  
            }
        }
    </script>
</body>
</html>
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