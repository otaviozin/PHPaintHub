<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHPaintHub - Login</title>
</head>
<body>
    <header>
        <nav class="flex justify-between mt-11 mx-7 items-center">
            <a class="text-3xl font-bold" href="home">PHPaintHub</a>
            <div class="flex text-xl gap-3 items-center">
                <a href="catalog">Catálogo</a>
                <a href="about">Sobre</a>
                <a class="border border-black rounded py-2 px-3 hover:bg-black hover:text-white" href="login">Login</a>
            </div>
        </nav>
    </header>
    
    <main>
        <div class="border-2 mx-7 border-black rounded text-xl text-center py-5 mt-52">
            <h1 class="text-3xl font-bold mb-4">Login</h1>
            <form class="flex flex-col px-10 text-left mb-4" action="GET">
                <label class="mb-1" for="userEmail">E-mail:</label>
                <input class="border-2 border-black rounded p-2 mb-4" name="userEmail" type="text" required>

                <label class="mb-1" for="userPassword">Senha:</label>
                <input class="border-2 border-black rounded p-2" name="userPassword" type="password" required>
                <a class="hover:text-blue-500" href="#">Esqueceu a senha?</a>

                <button class="border border-black rounded py-2 px-3 hover:bg-black hover:text-white mt-4 w-96 self-center" type="submit">Login</button>
            </form>
            <span>
                Não tem uma conta?
                <a class="text-blue-500 hover:underline" href="register">Cadastre-se</a>
            </span>
        </div>
    </main>
</body>
</html>