<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Página com Tailwind</title>
    <!-- Importa Tailwind CSS via CDN(ELE VAI PUXAR O FRAMEWORK VIA WEB) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
<?php
require_once("assets/elementos/nav.php")
?>
    <section class="flex bg-white h-28 w-full justify-between items-center px-16">
        <button class="h-10 w-24 font-bold text-white rounded bg-cyan-500">Filtros</button>
        <div class="w-64">
            <label>Qual tipo de curso deseja fazer?</label>
            <select class="border-2 border-gray-200 w-72 h-8 rounded" name="" id="">
                <option value=""></option>
            </select>
        </div>
        <div class="w-64">
            <label>Qual curso deseja estudar?</label>
            <input class="border-2 border-gray-200 w-72 h-8 rounded" list="listaLocal" type="text">
            <datalist name="" id="listaLocal">
                <div class="border-2 border-gray-200 w-72 h-8 rounded">
                    <option value="usp">
                    <option value="dzsfdas">
                    <option value="sdfs\daf">
                    <option value="ddddddd">
                    <option value="ggggggg">
                </div>
        </div>
        </div>
        <div class="w-64 mr-6">
            <label>Escolha o local desejado</label>
            <input class="border-2 border-gray-200 w-72 h-8 rounded" list="listaLocal" type="text">
            <datalist name="" id="listaLocal">
                <div class="border-2 border-gray-200 w-72 h-8 rounded">
                    <option value="usp">
                    <option value="dzsfdas">
                    <option value="sdfs\daf">
                    <option value="ddddddd">
                    <option value="ggggggg">
                </div>
            </datalist>
        </div>

    </section>

    <!-- SESSÃO DO TESTE VOCACIONAL -->
    <section class="pl-24 pr-24 mb-12 mt-12 text-left">
        <h3 class="text-xl sm:text-2xl 2xl:text-4xl font-bold mb-6">Cursos interessantes com base na sua atividade</h3>


        <!-- Container com 3 cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="hidden bg-white rounded-xl p-6 border-2 border-gray-200 h-72 2xl:h-96 sm:block">
                <!--SÓ IRA APARECER QUANDO A TELA ESTIVER GRANDE -->
                <div class="flex justify-between">
                    <div class="bg-gray-300 h-14 w-28 2xl:h-28 2xl:w-52 rounded mb-4 "></div>
                    <div class="bg-gray-300 h-14 w-14 2xl:w-28 2xl:h-28 rounded mb-4 "></div>
                </div>
                <div class="flex gap-14 h-10% flex-col">
                    <h4 class="text-xl 2xl:text-3xl font-bold text-left">Análise e Desenvolvimento de Sistemas</h4>
                    <div class="flex justify-between">
                        <div class="flex sm:flex-col justify-between">
                            <p class="text-gray-600 2xl:text-2xl text-left">Presencial - Tarde</p>
                            <p class="text-gray-600 2xl:text-2xl text-left">São Paulo,SP</p>
                        </div>
                        <p class="hidden text-gray-600 text-left 2xl:text-2xl mt-4 sm:flex">Gratuito</p>
                    </div>
                </div>
            </div>
            <div class="hidden bg-white rounded-xl p-6 border-2 border-gray-200 h-72 2xl:h-96 sm:block">
                <!--SÓ IRA APARECER QUANDO A TELA ESTIVER GRANDE -->
                <div class="flex justify-between">
                    <div class="bg-gray-300 h-14 w-28 2xl:h-28 2xl:w-52 rounded mb-4 "></div>
                    <div class="bg-gray-300 h-14 w-14 2xl:w-28 2xl:h-28 rounded mb-4 "></div>
                </div>
                <div class="flex gap-14 h-10% flex-col">
                    <h4 class="text-xl 2xl:text-3xl font-bold text-left">Análise e Desenvolvimento de Sistemas</h4>
                    <div class="flex justify-between">
                        <div class="flex sm:flex-col justify-between">
                            <p class="text-gray-600 2xl:text-2xl text-left">Presencial - Tarde</p>
                            <p class="text-gray-600 2xl:text-2xl text-left">São Paulo,SP</p>
                        </div>
                        <p class="hidden text-gray-600 text-left 2xl:text-2xl mt-4 sm:flex">Gratuito</p>
                    </div>
                </div>
            </div>
            <div class="hidden bg-white rounded-xl p-6 border-2 border-gray-200 h-72 2xl:h-96 sm:block">
                <!--SÓ IRA APARECER QUANDO A TELA ESTIVER GRANDE -->
                <div class="flex justify-between">
                    <div class="bg-gray-300 h-14 w-28 2xl:h-28 2xl:w-52 rounded mb-4 "></div>
                    <div class="bg-gray-300 h-14 w-14 2xl:w-28 2xl:h-28 rounded mb-4 "></div>
                </div>
                <div class="flex gap-14 h-10% flex-col">
                    <h4 class="text-xl 2xl:text-3xl font-bold text-left">Análise e Desenvolvimento de Sistemas</h4>
                    <div class="flex justify-between">
                        <div class="flex sm:flex-col justify-between">
                            <p class="text-gray-600 2xl:text-2xl text-left">Presencial - Tarde</p>
                            <p class="text-gray-600 2xl:text-2xl text-left">São Paulo,SP</p>
                        </div>
                        <p class="hidden text-gray-600 text-left 2xl:text-2xl mt-4 sm:flex">Gratuito</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pl-24 pr-24 mb-12 text-left">
        <h3 class="text-xl sm:text-2xl 2xl:text-4xl mb-6 font-bold border-t-2 border-gray-300 pt-8">Cursos encontrados
        </h3>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white shadow-sm rounded-xl p-2">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div> <!-- SERIA A IMAGEM -->
                <h4 class="text-xl 2xl:text-2xl text-left text-center">Análise e Desenvolvimento de Sistemas
                </h4>
            </div>

            <div class="bg-white shadow-sm rounded-xl p-2">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div> <!-- SERIA A IMAGEM -->
                <h4 class="text-xl 2xl:text-2xl text-left text-center">Análise e Desenvolvimento de Sistemas
                </h4>
            </div>
            <div class="bg-white shadow-sm rounded-xl p-2">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div> <!-- SERIA A IMAGEM -->
                <h4 class="text-xl 2xl:text-2xl text-left text-center">Análise e Desenvolvimento de Sistemas
                </h4>
            </div>
            <div class="bg-white shadow-sm rounded-xl p-2">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div> <!-- SERIA A IMAGEM -->
                <h4 class="text-xl 2xl:text-2xl text-left text-center">Análise e Desenvolvimento de Sistemas
                </h4>
            </div>
            <div class="bg-white shadow-sm rounded-xl p-2">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div> <!-- SERIA A IMAGEM -->
                <h4 class="text-xl 2xl:text-2xl text-left text-center">Análise e Desenvolvimento de Sistemas
                </h4>
            </div>

            <div class="bg-white shadow-sm rounded-xl p-2">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div> <!-- SERIA A IMAGEM -->
                <h4 class="text-xl 2xl:text-2xl text-left text-center">Análise e Desenvolvimento de Sistemas
                </h4>
            </div>
            <div class="bg-white shadow-sm rounded-xl p-2">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div> <!-- SERIA A IMAGEM -->
                <h4 class="text-xl 2xl:text-2xl text-left text-center">Análise e Desenvolvimento de Sistemas
                </h4>
            </div>
            <div class="bg-white shadow-sm rounded-xl p-2">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div> <!-- SERIA A IMAGEM -->
                <h4 class="text-xl 2xl:text-2xl text-left text-center">Análise e Desenvolvimento de Sistemas
                </h4>
            </div>
            <div class="bg-white shadow-sm rounded-xl p-2">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div> <!-- SERIA A IMAGEM -->
                <h4 class="text-xl 2xl:text-2xl text-left text-center">Análise e Desenvolvimento de Sistemas
                </h4>
            </div>

            <div class="bg-white shadow-sm rounded-xl p-2">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div> <!-- SERIA A IMAGEM -->
                <h4 class="text-xl 2xl:text-2xl text-left text-center">Análise e Desenvolvimento de Sistemas
                </h4>
            </div>
            <div class="bg-white shadow-sm rounded-xl p-2">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div> <!-- SERIA A IMAGEM -->
                <h4 class="text-xl 2xl:text-2xl text-left text-center">Análise e Desenvolvimento de Sistemas
                </h4>
            </div>
            <div class="bg-white shadow-sm rounded-xl p-2">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div> <!-- SERIA A IMAGEM -->
                <h4 class="text-xl 2xl:text-2xl text-left text-center">Análise e Desenvolvimento de Sistemas
                </h4>
            </div>
        </div>
        <div class="flex justify-center mt-6 space-x-2">

            <button class=" h-10 w-10 text-xl font-bold text-cyan-700">
                < </button>
                    <button
                        class=" h-10 w-10 font-bold text-cyan-700 border-2 rounded border-cyan-700 bg-cyan-100">5</button>
                    <button class=" h-10 w-10 font-bold text-cyan-700">6</button>
                    <button class=" h-10 w-10 font-bold text-cyan-700">7</button>
                    <button class=" h-10 w-10 font-bold text-cyan-700">8</button>
                    <button class=" h-10 w-10 font-bold text-cyan-700">9</button>
                    <button class=" h-10 w-10 font-bold text-cyan-700">10</button>
                    <button class=" h-10 w-10 font-bold text-cyan-700">11</button>
                    <button class=" h-10 w-10 font-bold text-cyan-700">12</button>
                    <button class=" h-10 w-10 text-xl font-bold text-cyan-700"> > </button>
        </div>
    </section>

    <footer
        class="flex bg-white h-[20rem] w-full text-gray-400 justify-between items-center p-2 2xl:scale-125 2xl:origin-top-left">
        <div class="flex ml-8 items-center">
            <div class="bg-gray-300 h-16 rounded w-1/4  rounded"></div>
            <div class="w-1/4 h-full pl-12 pr-12 ml-8 cursor-pointer flex-col  text-left">
                <h1 class="text-black mb-2">Sobre Nós</h1>
                <h3>Conectamos os jovens ao ensino superior, oferecendo informações claras sobre intituições e cursos.
                </h3>
                <div class="flex justify-between mt-4">
                    <div class="bg-gray-300 h-10 rounded w-10 rounded"></div>
                    <div class="bg-gray-300 h-10 rounded w-10 rounded"></div>
                    <div class="bg-gray-300 h-10 rounded w-10 rounded"></div>
                </div>
            </div>
            <div class="w-1/4 h-full p-2 ml-8 cursor-pointer flex-col text-left">
                <h1 class="text-black">Entre em Contato</h1>
                <div class="flex items-center mt-2">
                    <div class="bg-gray-300 h-10 rounded w-10 rounded mr-2"></div>
                    <h3>(11) 98271-2381</h3>
                </div>
                <div class="flex items-center mt-2">
                    <div class="bg-gray-300 h-10 rounded w-10 rounded mr-2"></div>
                    <h3>guiauni@gmail.com</h3>
                </div>
                <div class="flex items-center mt-2">
                    <div class="bg-gray-300 h-10 rounded w-10 rounded mr-2"></div>
                    <div>
                        <h3>Rua Feliciano Mendonça, 120</h3>
                        <h3>São Paulo, SP</h3>
                    </div>
                </div>
            </div>
            <div class="w-1/4 h-full p-8 ml-6 cursor-pointer flex-col text-left">
                <h1 class="text-black">Cadastro - Instituição</h1>
                <div class="mb-6 mt-6">
                    <h3>Representa uma Instituição?</h3>
                    <h3>Cadastre-se agora e faça parte do GuiaUni!</h3>
                </div>
                <h3 class="text-black">Cadastrar agora</h3>
            </div>
        </div>

    </footer>
</body>

</html>