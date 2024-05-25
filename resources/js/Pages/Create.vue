<script setup>
import HomeLayout from '@/Layouts/HomeLayout.vue'
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    title: '',
    director: '',
    genre_id: 0,
    description: '',
    release_date: ''
})

const props = defineProps({
    genres: {
        type: Array,
        required: true
    }
})

const submit = () => {
    form.post('/movies')
}

defineOptions({
    layout: HomeLayout
})
</script>

<template>
    <div class="form-container">
        <form @submit.prevent="submit">
            <div class="flex flex-col my-3">
                <label for="title">Movie Title</label>
                <input type="text" id="title" v-model="form.title" class="w-full rounded">
                <span v-if="form.errors.title" class="text-red-500">{{ form.errors.title }}</span>
            </div>
            <div class="flex flex-col my-3">
                <label for="description">Description</label>
                <textarea rows="4" id="description" v-model="form.description" class="w-full rounded"></textarea>
                <span v-if="form.errors.description" class="text-red-500">{{ form.errors.description }}</span>
            </div>
            <div class="flex flex-col my-3">
                <label for="genre_id">Genre</label>
                <select id="genre_id" v-model="form.genre_id" class="w-full rounded">
                    <option value="0" disabled>Select Genre</option>
                    <option v-for="genre in genres" :key="genre.id" :value="genre.id">
                        {{ genre.name }}
                    </option>
                </select>
                <span v-if="form.errors.genre_id" class="text-red-500">{{ form.errors.genre_id }}</span>
            </div>
            <div class="flex flex-col my-3">
                <label for="director">Director</label>
                <input type="text" id="director" v-model="form.director" class="w-full rounded">
                <span v-if="form.errors.director" class="text-red-500">{{ form.errors.director }}</span>
            </div>
            <div class="flex flex-col my-3">
                <label for="release_date">Release Date</label>
                <input type="text" id="release_date" v-model="form.release_date" class="w-full rounded">
                <span v-if="form.errors.release_date" class="text-red-500">{{ form.errors.release_date }}</span>
            </div>
            <button class="rounded bg-teal-500 text-white p-2">Save Changes</button>
        </form>
    </div>
</template>

<style scoped>
.form-container {
    margin-top: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

form {
    border: 1px solid rgb(99, 213, 99);
    width: 400px;
    padding: 20px;
    background: white;
    box-shadow: 0 5px 50px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}
</style>
