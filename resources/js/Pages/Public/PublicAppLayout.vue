<template>
    <div class="flex glassy w-full fixed z-50">
        <div class="text-white flex p-3">

            <!--            Hamburger-->
            <div class="my-auto px-4">
                <button @click="isOpen=!isOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
            <!--                Logo-->
            <div class="flex-none px-5 hidden lg:flex">
                <a href="#"><img style="height: 60px" src="icons/png/logo_echo_full_bw.png"></a>
            </div>

            <!--            Search Input-->
            <div class="flex">
                <div class="my-auto flex-none px-3">
                    <form class="items-center">
                        <div class="relative w-full">
                            <input style="border-radius: 30px; height: 30px" type="text"
                                   class="bg-transparent border border-white text-white text-sm rounded-lg focus:none focus:border-white block w-full pr-8 p-3 "
                                   placeholder="Трек, альбом, артист">
                            <div
                                class="flex absolute inset-y-0 right-0 items-center pr-3 pointer-events-none justify-items-end">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="white" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!--            LogIn-->
            <div class="flex-none my-auto ml-48 sm:flex sm:justify-end justify-center ">
                <a class=" flex-none text-lg text-white" href="#">Войти</a>
            </div>



        </div>

        <!--            Social Media-->

        <div class="flex justify-end w-full my-auto hidden lg:flex space-x-4 px-5">
            <!-- Instagram -->
            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-2.5 py-2.5 mb-2 text-black font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4">
                    <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                </svg>
            </button>

            <!-- Youtube -->
            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-2.5 py-2.5 mb-2 text-black font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-4 h-4">
                    <path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/>
                </svg>
            </button>

            <!-- Facebook -->
            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-2.5 py-2.5 mb-2 text-black font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-4 h-4">
                    <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                </svg>
            </button>
        </div>
    </div>



    <section>
        <div class="bg-black absolute pb-36 lg:px-40 md:px-30">
            <div class="px-16  mt-28">
                <h1 class="text-white font-bold text-4xl">Главная</h1>
                <div class="lg:space-x-5 py-12 space-y-5">
                    <button  class="bg-gradient-to-tr from-cyan-400 to-fuchsia-600 text-white uppercase text-lg px-14 py-2 rounded-lg hover:scale-105 duration-300 transition-all transform shadow">МУЗЫКАЛЬНЫЙ ТОП</button>
                    <button  class="bg-gradient-to-r from-purple-500 to-amber-400 text-white uppercase text-lg bg-amber-500 py-2 px-14 rounded-lg hover:scale-105 duration-300 transition-all transform shadow">S.KHALIL PRODUCTION</button>
                </div>

                <div class="flex justify-between">
                    <span class="text-white uppercase text-xl shadow-white shadow-2xl font-bold">Слушайте</span>
                    <a class="text-white mr-12 hover:text-blue-600" href="">больше музыки </a>
                </div>

                <div class="grid md:grid-cols-1 lg:grid-cols-2 mt-8">
                    <div class="space-y-1 grid rounded-sm px-2">

                        <song-card></song-card>
                        <song-card></song-card>
                        <song-card></song-card>
                        <song-card></song-card>
                        <song-card></song-card>
                        <song-card></song-card>

                    </div>
                    <div class="space-y-1 px-2">
                        <song-card></song-card>
                        <song-card></song-card>
                        <song-card></song-card>
                        <song-card></song-card>
                        <song-card></song-card>
                        <song-card></song-card>
                    </div>
                </div>

                <div class="mt-8">
                    <div class="mt-10 flex justify-between">
                        <span class="text-white uppercase text-xl shadow-white shadow-2xl font-bold">Исследуйте</span>
                        <a class="text-white mr-12 hover:text-blue-600" href="">больше альбомов</a>
                    </div>


                    <div>
                        <!-- component -->
                        <main class="grid place-items-center p-5">
                            <div>
                                <section class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-1 gap-6">
                                    <album-card></album-card>
                                    <album-card></album-card>
                                    <album-card></album-card>
                                    <album-card></album-card>
                                    <album-card></album-card>
                                </section>
                            </div>
                        </main>
                    </div>

                </div>

                <div class="mt-8">
                    <div class="mt-10 flex justify-between">
                        <span class="text-white uppercase text-xl shadow-white shadow-2xl font-bold">Смотрите</span>
                        <a class="text-white mr-12 hover:text-blue-600" href="">больше клипов</a>
                    </div>
                    <div class="mt-8 g gap-2 grid md:grid-cols-1 lg:grid-cols-6 ">
                        <div class="flex flex-col">
                            <video class="w-36 h-36" controls >
                                <source src="" type="vide/mp4">
                            </video>
                            <span>
                            <a class="text-sm text-gray-400" href="">Далер Назаров - Чак чаки борон</a>
                            </span>
                        </div>

                        <div class="flex flex-col">
                            <video class="w-36 h-36" controls >
                                <source src="" type="vide/mp4">
                            </video>
                            <span>
                            <a class="text-sm text-gray-400" href="">Далер Назаров - Чак чаки борон</a>
                            </span>
                        </div>

                        <div class="flex flex-col">
                            <video class="w-36 h-36" controls >
                                <source src="" type="vide/mp4">
                            </video>
                            <span>
                            <a class="text-sm text-gray-400" href="">Далер Назаров - Чак чаки борон</a>
                            </span>
                        </div>

                        <div class="flex flex-col">
                            <video class="w-36 h-36" controls >
                                <source src="" type="vide/mp4">
                            </video>
                            <span>
                            <a class="text-sm text-gray-400" href="">Далер Назаров - Чак чаки борон</a>
                            </span>
                        </div>

                        <div class="flex flex-col">
                            <video class="w-36 h-36" controls >
                                <source src="" type="vide/mp4">
                            </video>
                            <span>
                            <a class="text-sm text-gray-400" href="">Далер Назаров - Чак чаки борон</a>
                            </span>
                        </div>

                        <div class="flex flex-col">
                            <video class="w-36 h-36" controls >
                                <source src="" type="vide/mp4">
                            </video>
                            <span>
                            <a class="text-sm text-gray-400" href="">Далер Назаров - Чак чаки борон</a>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <div class="mt-10 flex justify-between">
                        <span class="text-white uppercase text-xl shadow-white shadow-2xl font-bold">Читайте</span>
                        <a class="text-white mr-12 hover:text-blue-600" href="">больше статей</a>
                    </div>
                </div>

                <div class="mt-4 grid  space-x-6 lg:grid-cols-4 ">

                    <div class="flex flex-col hover:scale-105 duration-300 transition-all transform ">
                        <img class=" border-2" src="public/images/png/logo_full_bw.png" width="200" height="250">
                        <span class="text-white text-2xl mt-2">Сборники и альбомы</span>
                        <p class="text-gray-400 space-y-4 text-md">
                            Далер Назаров рассказывает об
                            истории своих первых неофициальных
                            альбомов, о важности соблюдения
                            хронологического порядкаи
                            разниe между тематическим
                            альбомом и сборником.
                            <span class="text-sm"> 09.06.2020 Далер Назаров</span> </p>


                    </div>

                    <div class="flex flex-col hover:scale-105 duration-300 transition-all transform ">
                        <img class=" border-2" src="public/images/png/logo_full_bw.png" width="200" height="250">
                        <span class="text-white text-2xl mt-2"> О записи</span>
                        <p class="text-gray-400 w-72 text-md">

                            Сегодня для нас ценно схваченное мгновение,
                            в котором ещё не остыло состояние, принесённое
                            вдохновением новой песни. Её надо моментально
                            фиксировать, это и будет её единственный след.
                            <span class="text-sm"> 13.07.2020 Далер Назаров 0:00</span> </p>
                    </div>
                </div>


            </div>
        </div>

    </section>

    <!--    Footer-->
    <!-- component -->
    <div class="fixed bottom-0 w-full">
        <div class="glassy rounded-tl-xl">
            <div class="space-y-2">
                <div class="bg-gray-200 dark:bg-black rounded-full overflow-hidden">
                    <div class="bg-lime-500 dark:bg-lime-400 w-1/2 h-1.5" role="progressbar" aria-valuenow="1456" aria-valuemin="0" aria-valuemax="4550"></div>
                </div>
            </div>
            <div class="flex w-full lg:justify-between justify-center py-4">
                <div class="flex items-center space-x-3.5 sm:space-x-5 lg:space-x-3.5 xl:space-x-5 hidden lg:flex px-5">
                    <img src="https://fullstackradio.com//podcast-cover.jpg" alt="" width="160" height="160" class="flex-none w-20 h-20 rounded-lg bg-gray-100" />
                    <div class="min-w-0 flex-auto space-y-0.5">
                        <h2 class="text-black dark:text-white text-base sm:text-xl lg:text-base xl:text-xl font-semibold truncate">
                            Scaling CSS at Heroku with Utility Classes
                        </h2>
                        <p class="text-gray-500 dark:text-gray-400 text-base sm:text-lg lg:text-base xl:text-lg font-medium">
                            Full Stack Radio
                        </p>
                    </div>
                </div>
                <div class="bg-transparent dark:text-white lg:rounded-b-xl py-4 px-1 sm:px-3 lg:px-1 xl:px-3 grid grid-cols-5 sm:grid-cols-7 lg:grid-cols-5 xl:grid-cols-7 items-center gap-7">
                    <button type="button" class="mx-auto">
                        <svg width="24" height="24" fill="none">
                            <path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </button>
                    <button type="button" class="hidden sm:block lg:hidden xl:block mx-auto">
                        <svg width="17" height="18">
                            <path d="M0 0h2v18H0V0zM4 9l13-9v18L4 9z" fill="currentColor" />
                        </svg>
                    </button>
                    <button type="button" class="mx-auto">
                        <svg width="34" height="39" fill="none">
                            <path d="M12.878 26.12c1.781 0 3.09-1.066 3.085-2.515.004-1.104-.665-1.896-1.824-2.075v-.068c.912-.235 1.505-.95 1.5-1.93.005-1.283-1.048-2.379-2.727-2.379-1.602 0-2.89.968-2.932 2.387h1.274c.03-.801.784-1.287 1.64-1.287.892 0 1.475.541 1.471 1.346.004.844-.673 1.398-1.64 1.398h-.738v1.074h.737c1.21 0 1.91.614 1.91 1.491 0 .848-.738 1.424-1.765 1.424-.946 0-1.683-.486-1.734-1.262H9.797c.055 1.424 1.317 2.395 3.08 2.395zm7.734.025c2.016 0 3.196-1.645 3.196-4.504 0-2.838-1.197-4.488-3.196-4.488-2.003 0-3.196 1.645-3.2 4.488 0 2.855 1.18 4.5 3.2 4.504zm0-1.138c-1.18 0-1.892-1.185-1.892-3.366.004-2.174.716-3.371 1.892-3.371 1.172 0 1.888 1.197 1.888 3.37 0 2.182-.712 3.367-1.888 3.367z" fill="currentColor" />
                            <path d="M1 22c0 8.837 7.163 16 16 16s16-7.163 16-16S25.837 6 17 6" stroke="currentColor" stroke-width="1.5" />
                            <path d="M17 0L9 6l8 6V0z" fill="currentColor" />
                        </svg>
                    </button>
                    <button type="button" class="mx-auto">
                        <svg width="50" height="50" fill="none">
                            <circle class="text-gray-300 dark:text-gray-500" cx="25" cy="25" r="24" stroke="currentColor" stroke-width="1.5" />
                            <path d="M18 16h4v18h-4V16zM28 16h4v18h-4z" fill="currentColor" />
                        </svg>
                    </button>
                    <button type="button" class="mx-auto">
                        <svg width="34" height="39" fill="none">
                            <path d="M12.878 26.12c1.781 0 3.09-1.066 3.085-2.515.004-1.104-.665-1.896-1.824-2.075v-.068c.912-.235 1.505-.95 1.5-1.93.005-1.283-1.048-2.379-2.727-2.379-1.602 0-2.89.968-2.932 2.387h1.274c.03-.801.784-1.287 1.64-1.287.892 0 1.475.541 1.471 1.346.004.844-.673 1.398-1.64 1.398h-.738v1.074h.737c1.21 0 1.91.614 1.91 1.491 0 .848-.738 1.424-1.765 1.424-.946 0-1.683-.486-1.734-1.262H9.797c.055 1.424 1.317 2.395 3.08 2.395zm7.734.025c2.016 0 3.196-1.645 3.196-4.504 0-2.838-1.197-4.488-3.196-4.488-2.003 0-3.196 1.645-3.2 4.488 0 2.855 1.18 4.5 3.2 4.504zm0-1.138c-1.18 0-1.892-1.185-1.892-3.366.004-2.174.716-3.371 1.892-3.371 1.172 0 1.888 1.197 1.888 3.37 0 2.182-.712 3.367-1.888 3.367z" fill="currentColor" />
                            <path d="M33 22c0 8.837-7.163 16-16 16S1 30.837 1 22 8.163 6 17 6" stroke="currentColor" stroke-width="1.5" />
                            <path d="M17 0l8 6-8 6V0z" fill="currentColor" />
                        </svg>
                    </button>
                    <button type="button" class="hidden sm:block lg:hidden xl:block mx-auto">
                        <svg width="17" height="18" viewBox="0 0 17 18" fill="none">
                            <path d="M17 0H15V18H17V0Z" fill="currentColor" />
                            <path d="M13 9L0 0V18L13 9Z" fill="currentColor" />
                        </svg>
                    </button>
                    <button type="button" class="mx-auto border border-gray-300 rounded-md text-sm font-medium py-0.5 px-2 text-gray-500 dark:border-gray-600 dark:text-gray-400">
                        1.0x
                    </button>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
import SongCard from "../../Components/SongCard.vue";
import AlbumCard from "../../Components/AlbumCard.vue";

export default {
    name: "PublicAppLayout",
    components:{
        SongCard, AlbumCard
    },
    data(){
        return{
            isOpen:false
        }
    }
}
</script>
