<template>
    <div class="container">
        <div class="glassy hover:border-sky-500 hover:drop-shadow-lg">
            <div class=" flex ">
                <img class="thumb rounded-lg" src="https://stackdiary.com/140x100.png" alt="Song Cover Image">
                <div class="">
                    <div class="truncate px-4 ">
                        <h4 class=" text-sm text-white pt-1">XUSHRUY GAPEN  </h4>
                        <span class="text-sm text-slate-400">M.AMIR</span>
                    </div>
                </div>
                <div class="my-auto flex space-x-3 justify-end w-full px-3">
                    <a href="#">
                        <img class="h-5" src="images/svg/i_download.svg">
                    </a>
                    <img class="h-8" src="images/svg/i_threedots.svg">
                    <span class="text-white text-sm mt-1">3:12</span>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SongCard"
}
</script>

<style scoped>
.thumb {
    object-fit: cover;
    width:50px !important;
    height: 50px;
}
</style>
