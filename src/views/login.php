<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHPaintHub - Login</title>
</head>
<body>
    <header>
        <nav class="flex justify-between mt-11 mx-7 items-center">
            <a class="text-3xl font-bold" href="index.php">PHPaintHub</a>
            <div class="flex text-xl gap-3 items-center">
                <a href="#">Catálogo</a>
                <a href="#">Sobre</a>
                <a class="border border-black rounded py-2 px-3 hover:bg-black hover:text-white" href="src/views/login.php">Login</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="border-2 mx-7 text-xl text-center py-5 mt-52">
            <h1 class="text-3xl font-bold">Login</h1>
            <form class="flex flex-col px-10 text-left mb-4" action="GET">
                <label class="mt-4" for="userEmail">E-mail</label>
                <input class="border-2 border-black rounded p-2" name="userEmail" type="text">

                <label class="mt-4" for="userPassword">Senha</label>
                <input class="border-2 border-black rounded p-2" name="userPassword" type="password">
                <a class="hover:text-blue-500" href="forgotPass.php">Esqueceu a senha?</a>

                <button class="border border-black rounded py-2 px-3 hover:bg-black hover:text-white mt-4 w-96 self-center" type="submit">Login</button>
            </form>
            <span>
                Não tem uma conta?
                <a class="text-blue-500 hover:uderline" href="register.php">Cadastre-se</a>
            </span>
        </div>
    </main>
</body>
</html>