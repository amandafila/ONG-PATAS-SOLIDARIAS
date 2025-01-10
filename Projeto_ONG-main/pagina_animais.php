<?php 

$servername = ""; 
$username = "root"; 
$password = ""; 
$dbname = "patassolidarias";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$tipoAnimal = $_GET['tipo-animal'] ?? '';
$raca = $_GET['raca'] ?? '';
$porte = $_GET['porte'] ?? ''; 
$temperamento = $_GET['temperamento'] ?? '';


$sql = "SELECT nome, tipo, idade, raca, porte, temperamento, foto FROM animal WHERE 1=1"; 


if (!empty($tipoAnimal)) {
    $sql .= " AND tipo = '" . $conn->real_escape_string($tipoAnimal) . "'";
}
if (!empty($raca)) {
    $sql .= " AND raca = '" . $conn->real_escape_string($raca) . "'";
}
if (!empty($porte)) { 
    $sql .= " AND porte = '" . $conn->real_escape_string($porte) . "'"; 
}
if (!empty($temperamento)) {
    $sql .= " AND temperamento = '" . $conn->real_escape_string($temperamento) . "'";
}

$result = $conn->query($sql);

if (!$result) {
    die("Erro na consulta: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais para Adoção</title>
    <link rel="stylesheet" href="pagina_animais.css">
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
<h1>Animais para Adoção</h1>
<div class="animal-container">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="animal-card">';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["foto"]) . '" alt="Foto de ' . htmlspecialchars($row["nome"]) . '">';
            echo '<h3>' . htmlspecialchars($row["nome"]) . '</h3>';
            echo '<p>Tipo: ' . htmlspecialchars($row["tipo"]) . '</p>';
            echo '<p>Idade: ' . htmlspecialchars($row["idade"]) . ' anos</p>';
            echo '<p>Raça: ' . htmlspecialchars($row["raca"]) . '</p>';
            echo '<p>Porte: ' . htmlspecialchars($row["porte"]) . '</p>'; 
            echo '<p>Temperamento: ' . htmlspecialchars($row["temperamento"]) . '</p>';
            echo '<a href="https://wordmark.it/">Entre em contato com o dono!</a>';
            echo '</div>';
        }
    } else {
        echo "nao temos animais assim :(";
    }
    ?>
</div>
</body>
</html>

<?php
$conn->close();
?>
