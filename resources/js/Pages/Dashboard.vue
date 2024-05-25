<script setup>
import HomeLayout from '@/Layouts/HomeLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Dashboard" />

    <HomeLayout>

        <div class="p-10 flex justify-between">
            <div>
                <div class="main mt-20">
                    <p>Latest movies in the</p>
                    <p> year 2024</p>
                </div>

                <div class=" mt-10">
                    <Link href="/movies" class="starded">Get Starded</Link>
                </div>
            </div>

            <div>
                <img src="https://media.istockphoto.com/id/649222438/photo/popcorn-toon.jpg?s=612x612&w=0&k=20&c=9Fzrn-x_gQfj4yT3giiA94QGrhGMqyDpXG17HL90m_w=" alt="image">
            </div>
            
       
        </div>
        
    </HomeLayout>
</template>

<style scoped>
.starded {
    width: 200px;
    padding: 10px 30px;
    font-size: 20px;
    font-weight: bold;
    color: rgb(244, 243, 239);
    border-radius: 9px;
    background: linear-gradient(100deg, #4be956 4%, #04521f 100%);
}

.main {
    font-size: 33px;
    font-weight: bold;
}
img {
    height: 400px;
}

</style>


