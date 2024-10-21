<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHPaintHub - Cadastro</title>
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
        <div class="border-2 border-black rounded mx-7 text-xl text-center py-5 mt-14 mb-10">
            <h1 class="text-3xl font-bold mb-4">Cadastro</h1>
            <form id="registrationForm" method="POST"> 
                <div class="mb-4">
                    <label class="inline-flex items-center mr-4">
                        <input type="radio" name="tipo" value="fisica" onclick="mostrarFormulario()" class="form-radio text-black" checked>
                        <span class="ml-2">Pessoa Física</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="tipo" value="juridica" onclick="mostrarFormulario()" class="form-radio text-black">
                        <span class="ml-2">Pessoa Jurídica</span>
                    </label>
                </div>

                <!-- Formulário Pessoa Física -->
                <div id="form-fisica" class="text-left px-10">
                    <label class="block mb-1" for="nome">Nome completo:</label>
                    <input type="text" id="nome" name="nome" class="block w-full mb-4 p-2 border border-black rounded" required>

                    <label class="block mb-1" for="dataNascimento">Data de nascimento:</label>
                    <input type="date" id="dataNascimento" name="dataNascimento" class="block w-full mb-4 p-2 border border-black rounded" required>

                    <span class="block mb-1">Sexo:</span>
                    <div class="mb-4 border rounded p-2">
                        <label class="inline-flex items-center mr-4">
                            <input type="radio" name="sexo" value="M" onclick="mostrarFormulario()" class="form-radio text-black" checked>
                            <span class="ml-2">Masculino</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="sexo" value="F" onclick="mostrarFormulario()" class="form-radio text-black">
                            <span class="ml-2">Feminino</span>
                        </label>
                    </div>

                    <span class="block mb-1">Endereço:</span>
                    <div class="border px-4 rounded mb-4">
                        <div class="flex gap-2">
                            <label class="block mb-1" for="cep">CEP:
                                <input type="text" id="cep" name="cep" class="block w-full mb-4 p-2 border-2 border-black rounded" required>
                            </label>

                            <label class="block mb-1" for="cidade">Cidade:
                                <input type="text" id="cidade" name="cidade" class="block w-full mb-4 p-2 border-2 border-black rounded" required>
                            </label>
                        </div>
                        <label class="block mb-1" for="logradouro">Logradouro:</label>
                        <input type="text" id="logradouro" name="logradouro" class="block w-full mb-4 p-2 border-2 border-black rounded" required>
                        <div class="flex gap-2">
                            <label class="block mb-1" for="numero">Número:
                                <input type="text" id="numero" name="numero" class="block w-full mb-4 p-2 border-2 border-black rounded" required>
                            </label>

                            <label class="block mb-1" for="complemento">Complemento:
                                <input type="text" id="complemento" name="complemento" class="block w-max mb-4 p-2 border-2 border-black rounded">
                            </label>
                        </div>
                        <label class="block mb-1" for="bairro">Bairro:</label>
                        <input type="text" id="bairro" name="bairro" class="block w-full mb-4 p-2 border-2 border-black rounded" required>
                    </div>

                    <label class="block mb-1" for="email">Email:</label>
                    <input type="email" id="email" name="email" class="block w-full mb-4 p-2 border border-black rounded" required>

                    <label class="block mb-1" for="telefone">Telefone para contato:</label>
                    <input type="tel" id="telefone" name="telefone" class="block w-full mb-4 p-2 border border-black rounded" required>
                </div>

                <!-- Formulário Pessoa Jurídica -->
                <div id="form-juridica" class="hidden text-left px-10">
                    <label class="block mb-1" for="razao-social">Razão Social:</label>
                    <input type="text" id="razao-social" name="razao-social" class="block w-full mb-4 p-2 border border-black rounded" required>

                    <label class="block mb-1" for="cnpj">CNPJ:</label>
                    <input type="text" id="cnpj" name="cnpj" class="block w-full mb-4 p-2 border border-black rounded" required>

                    <span class="block mb-1">Endereço:</span>
                    <div class="border px-4 rounded mb-4">
                        <div class="flex gap-2">
                            <label class="block mb-1" for="cep">CEP:
                                <input type="text" id="cep" name="cep" class="block w-full mb-4 p-2 border-2 border-black rounded" required>
                            </label>

                            <label class="block mb-1" for="cidade">Cidade:
                                <input type="text" id="cidade" name="cidade" class="block w-full mb-4 p-2 border-2 border-black rounded" required>
                            </label>
                        </div>
                        <label class="block mb-1" for="logradouro">Logradouro:</label>
                        <input type="text" id="logradouro" name="logradouro" class="block w-full mb-4 p-2 border-2 border-black rounded" required>
                        <div class="flex gap-2">
                            <label class="block mb-1" for="numero">Número:
                                <input type="text" id="numero" name="numero" class="block w-full mb-4 p-2 border-2 border-black rounded" required>
                            </label>

                            <label class="block mb-1" for="complemento">Complemento:
                                <input type="text" id="complemento" name="complemento" class="block w-max mb-4 p-2 border-2 border-black rounded">
                            </label>
                        </div>
                        <label class="block mb-1" for="bairro">Bairro:</label>
                        <input type="text" id="bairro" name="bairro" class="block w-full mb-4 p-2 border-2 border-black rounded" required>
                    </div>

                    <label class="block mb-1" for="email">Email:</label>
                    <input type="email" id="email" name="email" class="block w-full mb-4 p-2 border border-black rounded" required>

                    <label class="block mb-1" for="telefone">Telefone para contato:</label>
                    <input type="tel" id="telefone" name="telefone" class="block w-full mb-4 p-2 border border-black rounded" required>
                </div>

                <button class="border border-black rounded py-2 px-3 hover:bg-black hover:text-white mt-4 w-96 self-center" type="submit">Cadastrar</button>
            </form>

            <span class="mt-4 block">
                Já possui cadastro?
                <a class="text-blue-500 hover:underline" href="login">Entre aqui</a>
            </span>
        </div>
    </main>
    <script src="src/scripts/registerForm.js"></script>
</body>
</html>
