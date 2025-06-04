<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cursos</title>
    <!-- Importa Tailwind CSS via CDN (puxa o framework diretamente da web) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans ">

    <div class="relative h-auto p-6 bg-white flex flex-col items-start justify-center">
        <h4 class="text-gray-600 self-start mb-2"><span class="text-blue-400 hover:underline">Instituição</span> /<span
                class="text-blue-400 hover:underline"> USP</span> / Curso
        </h4>
        <div class="w-fit flex justify-between items-center">
            <div class="bg-gray-300 h-40 w-64 rounded mb-4 mr-4"></div><!-- "img" -->
            <div class="w-fit flex-collunm">
                <h2 class="flex sm:text-2xl text-left font-bold mb-4">USP - Universidade de São Paulo</h2>
                <h4
                    class="text-aline text-cyan-500 font-bold border-2 border-cyan-500 bg-cyan-200 rounded h-auto w-16 mb-2 ">
                    MEC 3</h4>
                <h4 class="flex sm: text-xl text-left mb-2">
                    <div class="font-bold mr-2">Site:</div> www5.usp.br
                </h4>
                <h4 class="flex sm: text-xl text-left mb-2">
                    <div class="font-bold mr-2">Telefone:</div> 4002-8922
                </h4>
            </div>
        </div>
        <!-- input -->
        <section class="flex bg-white h-28 w-full justify-between items-center px-14">
            <div class="w-64">
                <label class="font-bold text-base">Qual tipo de curso deseja fazer?</label>
                <select class="border-2 border-gray-200 w-72 h-10 rounded mt-2" name="" id="">
                    <option value="sla">
                        sla
                    </option>
                </select>
            </div>
            <div class="w-64">
                <label class="font-bold text-base">Qual curso deseja estudar?</label>
                <input class="border-2 border-gray-200 w-72 h-10 rounded mt-2" list="listaLocal" type="text">
                <datalist name="" id="listaLocal">
                    <div class="border-2 border-gray-200 w-72 h-10 mt-2 rounded">
                        <option value="usp"></option>
                    </div>
            </div>
            <div class="w-64">
                <label class="font-bold text-base">Escolha o local desejado</label>
                <input class="border-2 w-72 h-10 rounded mt-2 items-center" list="listaLocal" type="text">
                <datalist name="" id="listaLocal">
                    <div class="border-2 border-gray-200 w-72 h-10 mt-2 rounded">
                        <option value="usp">
                        <option value="dzsfdas">

                    </div>
                </datalist>
            </div>
    </div>


    </section>
    </div>

    <div class="justify-center items-center flex p-8">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 justify-between gap-8">

            <div class="bg-white border-2 border-gray-300 h-72 w-64 rounded mb-4 mr-4 p-4">
                <div class="w-fit flex flex-col">
                    <div class="flex items-center mb-4">
                        <h4 class="font-bold mr-2">Análise e Desenvolvimento de Sistemas</h4>
                        <div class="bg-gray-300 h-8 w-8 rounded"></div> <!-- "Coração" -->
                    </div>

                    <h5 class="text-green-500 font-bold">Gratuito</h5>
                    <h6 class="text-xs">Essa Instituição Oferece Mensalidade Grátis</h6>

                    <h5 class="font-bold">Presencial / Tarde</h5>
                    <h6 class="text-xs">Bacharelado (Graduação)</h6>

                    <h5 class="font-bold">Gratuito</h5>
                    <h6 class="text-xs">Essa Instituição Oferece Mensalidade Grátis</h6>

                    <button class="bg-blue-500 w-full h-10 text-white font-bold rounded-xl mt-4">
                        Saiba Mais
                    </button>
                </div>
            </div>


            <div class="bg-white border-2 border-gray-300 h-72 w-64 rounded mb-4 mr-4"></div>
            <div class="bg-white border-2 border-gray-300 h-72 w-64 rounded mb-4 mr-4"></div>
            <div class="bg-white border-2 border-gray-300 h-72 w-64 rounded mb-4 mr-4"></div>
            <div class="bg-white border-2 border-gray-300 h-72 w-64 rounded mb-4 mr-4"></div>
            <div class="bg-white border-2 border-gray-300 h-72 w-64 rounded mb-4 mr-4"></div>
            <div class="bg-white border-2 border-gray-300 h-72 w-64 rounded mb-4 mr-4"></div>
            <div class="bg-white border-2 border-gray-300 h-72 w-64 rounded mb-4 mr-4"></div>
        </div>
    </div>

</body>

</html>