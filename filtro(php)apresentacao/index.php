<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Restaurante</title>
    <style>
        * {
            margin: 0;
        }

        h1 {
            color: white;
            margin-left: 220px;
            font-size: 30px;
        }

        label {
            margin-left: 30px;
            font-size: 20px;
            color: white;
        }

        #button {
            background-color: darkgreen;
            color: white;
            border-color: white;
            cursor: pointer;
            padding: 3px;
            height: 40px;
            width: 170px;
        }

        .cabeçalho .menu li a {
            font-family: "Croissant One", serif;
            font-size: 18px;
            padding: 10px 40px;  
            margin-top: 5px;   
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            text-decoration: none;
        }

        .cabeçalho .menu li a:hover {
            color: red;
            background-color: #aaa;;
            text-decoration: none;
        }

        .select-opcoes {
            position: absolute;
            display: none;
        }

        .select-opcoes a {
            display: block;
        }

        .select-principal:hover .select-opcoes {
            display: block;
            padding-top: 9px;
        }

        header nav {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            height: 100px;
            background-color: rgb(0, 0, 0);
            width: 100%;
            border-bottom: 5px solid rgba(255, 255, 255, 1);
            
        }

        nav li {
            display: inline-block;
        }

        .menu {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
            align-items: center;
        }
        
    </style>
</head>

<body style="background-color: #2e2e2e;">
    <header>
        <nav class="cabeçalho">
            <h1>Escolha uma Opção de Genero</h1>
            <ul class="menu">
                <li class="select-principal">
                    <a href="#">Menu</a>
                    <div class="select-opcoes">
                        <a href="index.php">Radio Btn</a>
                        <a href="checkbox.php">Check box</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <div class="menu">
        <br><br>

        <form action="auxindex.php" method="get">

            <div>
                <input type="radio" id="entrada1" name="genero" value="Sci-fi">
                <label for="Sci-fi">Sci-fi</label>
            </div>
            <div>
                <input type="radio" id="opcao2" name="genero" value="Drama">
                <label for="Drama">Drama</label>
            </div>
            <div>
                <input type="radio" id="opcao3" name="genero" value="Romance">
                <label for="Romance">Romance</label>
            </div>
            <div>
                <input type="radio" id="entrada1" name="genero" value="Action">
                <label for="Action">Action</label>
            </div>
            <div>
                <input type="radio" id="opcao2" name="genero" value="Crime">
                <label for="Crime">Crime</label>
            </div>
            <div>
                <input type="radio" id="opcao3" name="genero" value="Fantasy">
                <label for="Fantasy">Fantasy</label>
            </div>
            <div>
                <input type="radio" id="entrada1" name="genero" value="Biography">
                <label for="Biography">Biography</label>
            </div>
            <div>
                <input type="radio" id="opcao2" name="genero" value="Adventure">
                <label for="Adventure">Adventure</label>
            </div>
            <br>
            <br>
            <input id="button" type="submit" value="Enviar">
        </form>

    </div>
</body>

</html>