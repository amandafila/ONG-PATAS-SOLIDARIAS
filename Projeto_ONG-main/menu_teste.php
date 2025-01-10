<header>
    <button class="botao_hamburguer" onclick="toggleMenu()">
        <img src="img/menu-bar.png" width="55" height="50" alt="Menu">
    </button>
    <div class="titulo">PATAS SOLIDÁRIAS</div>
    <div class="acoes">
        <a class="link_menu" href="login.php">Entrar/Cadastrar</a>
        <button id="modoNoturno" class="modo-noturno">🌙</button>
    </div>
    <div id="google_translate_element"></div>
</header>

<!-- Menu Lateral -->
<div id="menuLateral" class="menu-lateral">
    <a href="javascript:void(0)" class="fechar" onclick="toggleMenu()">&times;</a>
    <a href="principal.php">Página Principal</a>
    <a href="meus_animais.php">Meus animais</a>
    <a href="pesqui_animais.php">Adote um animal</a>
    <a href="cadastroanimal.php">Doar animal</a>
    <a href="antes_depois.php">Antes/Depois dos animais</a>
    <a href="creche_conhecer.php">Creche</a>
    <a href="veterinaria.php">Veterinário</a>
    <a href="colaboracao_mostrar.php">Faça uma doação para a ONG</a>
    <a href="sobre_nos.php">Sobre Nós</a>
</div>

<script>
    // Alternar o menu lateral
    function toggleMenu() {
        const menuLateral = document.getElementById("menuLateral");
        menuLateral.style.width = (menuLateral.style.width === "250px") ? "0" : "250px";
    }

    // Modo Noturno
    const modoNoturnoBtn = document.getElementById("modoNoturno");

    // Aplicar o modo noturno ao carregar se salvo no localStorage
    if (localStorage.getItem("modoNoturno") === "true") {
        document.body.classList.add("dark-mode");
    }

    // Alternar o modo noturno ao clicar no botão
    modoNoturnoBtn.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
        const isDarkMode = document.body.classList.contains("dark-mode");
        localStorage.setItem("modoNoturno", isDarkMode); // Salvar estado no localStorage
    });
</script>

<style>
    /* Cores originais */
    :root {
        --amarelo: #f4d06f;
        --laranja: #ff8811;
        --verde: #9dd9d2;
        --bege: #fff8f0;
        --azul_marinho: #392f5a;
    }

    /* Cores para modo noturno */
    body.dark-mode {
        --amarelo: #8b6f00;
        --laranja: #a65d00;
        --verde: #587b7b;
        --bege: #2e2a26;
        --azul_marinho: #ddd;
        background-color: var(--bege);
        color: var(--azul_marinho);
    }

    body {
        background-color: var(--bege);
        margin: 0;
        padding: 0;
        font-family: 'Encode Sans Expanded', sans-serif;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: var(--verde);
        height: 120px;
        padding: 0 35px;
        font-family: 'Playfair Display', serif;
        color: var(--azul_marinho);
        border-bottom: 3px solid #333;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .titulo {
        font-size: 28px;
    }

    .botao_hamburguer {
        background: none;
        border: none;
        cursor: pointer;
    }

    .acoes {
        display: flex;
        gap: 10px;
    }

    .link_menu, .modo-noturno {
        font-size: 16px;
        background-color: var(--verde);
        text-decoration: none;
        border: 1px solid var(--azul_marinho);
        border-radius: 25px;
        padding: 10px;
        color: var(--azul_marinho);
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
    }

    .link_menu:hover, .modo-noturno:hover {
        background-color: var(--laranja);
        color: var(--bege);
    }

    .menu-lateral {
        height: 100%;
        width: 0;
        position: fixed;
        top: 0;
        left: 0;
        background-color: var(--azul_marinho);
        overflow-x: hidden;
        transition: width 0.5s; 
        padding-top: 70px;
        box-shadow: 3px 0 15px rgba(0, 0, 0, 0.3);
        font-family: 'Encode Sans Expanded', sans-serif;
    }

    body.dark-mode .menu-lateral {
        background-color: #222222;
    }

    .menu-lateral .fechar {
        position: absolute;
        top: 1px;
        right: 20px;
        font-size: 25px;
        color: var(--bege);
        background: none;
        border: none;
        cursor: pointer;
        transition: color 0.3s;
    }

    .menu-lateral .fechar:hover {
        color: var(--laranja);
    }

    .menu-lateral a {
        padding: 15px 20px;
        text-decoration: none;
        font-size: 20px;
        color: var(--azul_marinho);
        display: block;
        margin: 10px 0;
        background-color: var(--verde);
        transition: 0.3s;
    }

    .menu-lateral a:hover {
        background-color: var(--laranja);
        color: var(--azul_marinho);
        transform: scale(1.05);
    }
</style>
