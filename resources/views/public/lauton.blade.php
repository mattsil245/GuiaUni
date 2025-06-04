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

    <div class="relative h-96 2xl:h-[50rem] bg-gray-500 flex flex-col items-center justify-center">
        <h3 class="text-white text-2xl 2xl:text-4xl font-bold">VOCÊ está em dúvida em ...</h3>
        <h2 class="text-white text-3xl 2xl:text-5xl font-bold">QUAL CURSO ESCOLHER?</h2>
        <button class=""></button>
    </div>

    <!-- SESSÃO DO TESTE VOCACIONAL -->
    <section class="pl-24 pr-24 mb-12 mt-12 text-left">
        <h3 class="text-xl sm:text-2xl 2xl:text-4xl font-bold">Cursos perto de você</h3>
        <h3 class="text-base sm:text-2xl 2xl:text-4xl mb-6 2xl:mb-12">mostrando curso perto de <span
                class="text-blue-400 hover:underline">São
                Paulo,SP</span></h3>


        <!-- Container com 3 cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white shadow-md rounded-xl p-6 border-b-8 border-blue-500 sm:hidden">
                <!-- ESSE CARD SÓ VAI APARECER QUANDO A TELA ESTIVER PEQUENA -->
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-44 rounded mb-4"></div> <!-- SERIA A IMAGEM -->
                <h4 class="text-xl font-bold text-left text-left">Análise e Desenvolvimento de Sistemas </h4>
                <p class="text-gray-600 text-left mt-2">Saiba Mais...</p>
            </div>

            <div class="bg-white shadow-sm rounded-xl p-6 border-b-8 border-blue-500 sm:hidden">
                <!-- ESSE CARD SÓ VAI APARECER QUANDO A TELA ESTIVER PEQUENA -->
                <div class="bg-gray-300 h-44 rounded mb-4"></div>
                <h4 class="text-xl font-bold text-left text-left">Análise e Desenvolvimento de Sistemas </h4>
                <p class="text-gray-600 text-left mt-2">Saiba Mais...</p>
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
    <section class="pl-24 pr-24 mb-12 ">
        <div class="bg-white h-auto rounded-xl p-6 border-2 border-gray-200 md:flex">
            <div class="w-full bg-gray-300 h-80 rounded mb-4 md:mr-9 md:h-64 md:w-80"></div> <!-- SERIA A IMAGEM -->
            <div class="w-fit flex flex-col justify-between h-auto md:h-64 ">
                <h3 class="text-base font-bold text-left md:text-2xl">
                    Nós, do GuiaUni, desenvolvemos um teste vocacional personalizado,
                    com o objetivo principal de esclarecer a mente de todos e ajudá-las a escolher uma área que mais se
                    encaixa com você!
                </h3>
                <p class="hidden text-gray-600 text-left md:block">
                    Não fique de fora, faça o teste agora mesmo!
                </p>
                <button class="bg-blue-500 w-full h-10 text-white font-bold rounded-xl mt-4">
                    Saiba Mais
                </button>

            </div>
        </div>
    </section>


    <!-- SESSÃO DA INSTITUIÇÃO -->
    <section class="pl-24 pr-24 mb-12  text-left">
        <h3 class="text-xl sm:text-2xl 2xl:text-3xl font-bold">Cursos perto de você</h3>
        <h3 class="text-base sm:text-2xl 2xl:text-3xl mb-6 2xl:mb-12">mostrando curso perto de <span
                class="text-blue-400 hover:underline">São
                Paulo,SP</span></h3>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white shadow-sm rounded-xl p-6">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div> <!-- SERIA A IMAGEM -->
                <h4 class="text-xl 2xl:text-3xl font-bold text-left text-center">Anhanguera </h4>
                <div class="flex bg-cyan-100 border-2 border-cyan-300 justify-center text-cyan-600 h-10 rounded-xl items-center mt-4 mb-4">Nota no MEC:3</div>
                <p class="text-gray-600 text-center 2xl:text-3xl mt-2 text-green-600 pt-2 border-t-2 border-gray-200">A partir de R$132/mês</p>
            </div>

            <div class="bg-white shadow-sm rounded-xl p-6">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div>
                <h4 class="text-xl 2xl:text-3xl font-bold text-left text-center">Unip </h4>
                <div class="flex bg-cyan-100 border-2 border-cyan-300 justify-center text-cyan-600 h-10 rounded-xl items-center mt-4 mb-4">Nota no MEC:3</div>
                <p class="text-gray-600 text-center 2xl:text-3xl mt-2 text-green-600 pt-2 border-t-2 border-gray-200">A partir de R$107/mês</p>
            </div>

            <div class="bg-white shadow-sm rounded-xl p-6">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div> <!-- SERIA A IMAGEM -->
                <h4 class="text-xl 2xl:text-3xl font-bold text-left text-center">Anhanguera </h4>
                <div class="flex bg-cyan-100 border-2 border-cyan-300 justify-center text-cyan-600 h-10 rounded-xl items-center mt-4 mb-4">Nota no MEC:3</div>
                <p class="text-gray-600 text-center 2xl:text-3xl mt-2 text-green-600 pt-2 border-t-2 border-gray-200">A partir de R$132/mês</p>
            </div>

            <div class="bg-white shadow-sm rounded-xl p-6">
                <!-- Espaço reservado para imagem -->
                <div class="bg-gray-300 h-32 rounded mb-4"></div>
                <h4 class="text-xl 2xl:text-3xl font-bold text-left text-center">Unip </h4>
                <div class="flex bg-cyan-100 border-2 border-cyan-300 justify-center text-cyan-600 h-10 rounded-xl items-center mt-4 mb-4">Nota no MEC:3</div>
                <p class="text-gray-600 text-center 2xl:text-3xl mt-2 text-green-600 pt-2 border-t-2 border-gray-200">A partir de R$107/mês</p>
            </div>
        </div>
    </section>

    <section class="pl-24 pr-24 mb-12 text-left">
        <h3 class="text-xl sm:text-2xl 2xl:text-4xl font-bold">Cursos populares</h3>
        <h3 class="text-base sm:text-2xl 2xl:text-4xl mb-6">Confira informações detalhadas como duração do curso, carga
            horária, área
            de atuação, e muito mais.</h3>


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
    </section>

<?php
require_once("assets/elementos/footer.php")
?>
</body>
</html>