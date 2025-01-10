<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONG de Adoção de Animais</title>
    <link rel="stylesheet" href="pesqui_animais.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900&display=swap" rel="stylesheet">
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
    <main>
        <section class="search-section">
            <h2>Pesquisa Inteligente</h2>
            <form onsubmit="redirecionar(); return false;"> 
                <div class="form-group">
                    <label for="tipo-animal">Tipo de Animal:</label>
                    <select id="tipo-animal" name="tipo-animal" onchange="atualizarRacas()">
                        <option value="">Selecione</option>
                        <option value="cachorro">Cachorro</option>
                        <option value="gato">Gato</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="raca">Raça:</label>
                    <select id="raca" name="raca">
                        <option value="">Selecione</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tamanho">Tamanho:</label>
                    <select id="tamanho" name="tamanho">
                        <option value="">Selecione</option>
                        <option value="pequeno">Pequeno</option>
                        <option value="medio">Médio</option>
                        <option value="grande">Grande</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="temperamento">Temperamento:</label>
                    <select id="temperamento" name="temperamento">
                        <option value="">Selecione</option>
                        <option value="calmo">Calmo</option>
                        <option value="agitado">Agitado</option>
                        <option value="nervoso">Nervoso</option>
                        <option value="amigavel">Amigável</option>
                    </select>
                </div>

                
                <div class="form-group">
                    <label for="idade">Idade:</label>
                    <select id="idade" name="idade">
                        <option value="">Qualquer idade</option>
                        <option value="1-5">Entre 1 e 5 anos</option>
                        <option value="5-10">Entre 5 e 10 anos</option>
                        <option value="10-15">Entre 10 e 15 anos</option>
                    </select>
                </div>

                <button type="submit" class="enviar">Buscar</button>
            </form>
        </section>
    </main>

    <script>
        function toggleMenu() {
            const menuLateral = document.getElementById("menuLateral");
            menuLateral.style.width = menuLateral.style.width === "250px" ? "0" : "250px";
        }

        const tipoAnimal = document.getElementById('tipo-animal');
        const racaSelect = document.getElementById('raca');

        const racasGato = [
            { value: 'persa', text: 'Persa' },
            { value: 'siames', text: 'Siamês' },
            { value: 'outra_raca', text: 'Outro' }
        ];

        const racasCachorro = [
            { value: 'golden', text: 'Golden' },
            { value: 'bulldog', text: 'Bulldog' },
            { value: 'corgi', text: 'Corgi' },
            { value: 'pinscher', text: 'Pinscher' },
            { value: 'vira-lata', text: 'Vira-lata' },
            { value: 'salsicha', text: 'Salsicha' },
            { value: 'outra_raca', text: 'Outro' }
        ];

        function atualizarRacas() {
            racaSelect.innerHTML = '<option value="">Selecione</option>';
            let racas = tipoAnimal.value === 'gato' ? racasGato : tipoAnimal.value === 'cachorro' ? racasCachorro : [];
            racas.forEach(raca => {
                const option = document.createElement('option');
                option.value = raca.value;
                option.textContent = raca.text;
                racaSelect.appendChild(option);
            });
        }

        function redirecionar() {
            const tipoAnimal = document.getElementById("tipo-animal").value;
            const raca = document.getElementById("raca").value;
            const tamanho = document.getElementById("tamanho").value;
            const temperamento = document.getElementById("temperamento").value;
            const idade = document.getElementById("idade").value;

            const url = `pagina_animais.php?tipo-animal=${tipoAnimal}&raca=${raca}&tamanho=${tamanho}&temperamento=${temperamento}&idade=${idade}`;
            window.location.href = url;
        }
    </script>
</body>
</html>
