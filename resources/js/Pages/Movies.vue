<script setup>
import HomeLayout from '@/Layouts/HomeLayout.vue';
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  movies: Array,
  genres: Array,
})

defineOptions({
    layout: HomeLayout
})

const getCategoryName = (id) => {
    const category = props.genres.find(category => category.id === id);
    return category ? category.name : 'Unknown';
};
</script>

<template>
    <div class="flex justify-center">
        <div class="flex flex-wrap gap-4 p-8 w-full max-w-6xl">
            <div class="w-full flex items-center justify-between mb-4">
                <h1 class="text-2xl">Trending Movies </h1>

                <div class="p-3 rounded border border-black">
                    <Link href="/movies/create" class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                            </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                            <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm4 0v6h8V1zm8 8H4v6h8zM1 1v2h2V1zm2 3H1v2h2zM1 7v2h2V7zm2 3H1v2h2zm-2 3v2h2v-2zM15 1h-2v2h2zm-2 3v2h2V4zm2 3h-2v2h2zm-2 3v2h2v-2zm2 3h-2v2h2z"/>
                            </svg>
                    </Link>
                </div>
            </div>
            <hr class="w-full mb-4 border-t-2 border-gray-300">

            <Link :href="'/movies/' + mov.id + '/edit'" v-for="(mov, index) in props.movies" :key="mov.id" class=" rounded-lg shadow-xl p-4 ml-5" style="width: 290px; height: 200px;">
                <div class="card">
                    <h2 class="number">{{ index + 1 }}</h2>
                    <h2 class="title text-lg font-bold">{{ mov.title }}</h2>
                    <p> {{ getCategoryName(mov.genre_id) }}</p>
                </div>
            </Link>
        </div>
    </div>
</template>
<style scoped>

.card {
    padding: 20px;
    border-radius: 8px;
    background: linear-gradient(100deg, #cbf6ce 4%, #07dc51 100%);
    color: rgb(8, 36, 18);
}

.title {
    font-size: 16px;
    text-align: center;
    font-weight: bold;
}

p {
    text-align: center;
    margin-top: 40px;
    font-weight: bold;
    color: rgb(198, 7, 7);
}
.number {
    font-size: 16px;
    font-weight: bold;
    color: black;
}
</style>
