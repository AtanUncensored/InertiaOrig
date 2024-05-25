<script setup>
import HomeLayout from '@/Layouts/HomeLayout.vue'
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    movie: Object,
    genres: Array
});

const form = useForm({
    title: props.movie.title,
    director: props.movie.director,
    genre_id: props.movie.genre_id,
    description: props.movie.description,
    release_date: props.movie.release_date,
});

const submit = () => {
    form.submit('put', '/movies/' + props.movie.id);
};

const deleteMovie = () => {
    if (confirm('Are you sure you want to delete this movie?')) {
        form.delete('/movies/' + props.movie.id);
    }
};

defineOptions({
    layout: HomeLayout
});
</script>

<template>
    <div class="form-container">
        <form @submit.prevent="submit" class="form-content">
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" id="title" class="w-full rounded border p-2" v-model="form.title">
            </div>
            <div class="mb-3">
                <label for="director">Director</label>
                <input type="text" id="director" class="w-full rounded border p-2" v-model="form.director">
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea id="description" class="w-full rounded border p-2" v-model="form.description"></textarea>
            </div>
            <div class="mb-3">
                <label for="genre_id">Genre</label>
                <select id="genre_id" class="w-full rounded border p-2" v-model="form.genre_id">
                    <option value="0" disabled>Select Genre</option>
                    <option v-for="genre in genres" :key="genre.id" :value="genre.id">
                        {{ genre.name }}
                    </option>
                </select>
            </div>
            <div class="mb-3">
                <label for="release_date">Release Date</label>
                <input type="date" id="release_date" class="w-full rounded border p-2" v-model="form.release_date">
            </div>
            <div class="flex space-x-2">
                <button type="submit" class="bg-blue-600 text-white rounded px-4 py-2">Save Changes</button>
                <button type="button" @click="deleteMovie" class="bg-red-600 text-white rounded px-4 py-2">Delete Movie</button>
            </div>
        </form>
    </div>
</template>

<style scoped>
.form-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f4f4f4;
}

.form-content {
    margin-top: 30px;
    border: 1px solid rgb(99, 213, 99);
    width: 400px;
    padding: 20px;
    background: white;
    box-shadow: 0 5px 50px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
textarea,
select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
</style>
