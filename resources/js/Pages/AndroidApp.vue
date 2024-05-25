<script setup>
    import HomeLayout from '@/Layouts/HomeLayout.vue'
    defineOptions({
        layout: HomeLayout
    })

</script>

<template>
    <div class="container">
        <header>
            <h1>J Flix</h1>
            <h2>Download Our App</h2>
        </header>
        <section class="intro">
            <p>Experience the magic of cinema at your fingertips with the Cinephile Haven app. Watch trailers, read reviews, and discover new favorites anytime, anywhere.</p>
        </section>
        <section class="features">
            <h3>Features</h3>
            <ul>
                <li><strong>Stream On-the-Go:</strong> Watch trailers and exclusive content wherever you are.</li>
                <li><strong>Personalized Recommendations:</strong> Get suggestions based on your viewing habits.</li>
                <li><strong>Community Engagement:</strong> Join discussions and share reviews with fellow movie lovers.</li>
                <li><strong>Exclusive Content:</strong> Access interviews, behind-the-scenes footage, and more.</li>
            </ul>
        </section>
        <section class="download">
            <h3>Download Now</h3>
            <p>Available on both iOS and Android. Click the buttons below to download the app:</p>
            <div class="download-buttons">
                <a href="#" class="button ios">Download on the App Store</a>
                <a href="#" class="button android">Get it on Google Play</a>
            </div>
        </section>
        <footer>
            <p>Join the Cinephile Haven community and immerse yourself in the world of movies.</p>
        </footer>
    </div>
</template>

<style scoped>
.container {
    margin-top: 20px;
    width: 80%;
    margin: 0 auto;
    overflow: hidden;
    padding: 20px;
    background: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

header {
    text-align: center;
    padding-bottom: 20px;
}

header h1 {
    margin: 0;
    color: #333;
    font-size: 2.5em;
}

header h2 {
    margin-top: 10px;
    color: #666;
    font-size: 1.5em;
}

.intro {
    text-align: center;
    margin-bottom: 20px;
}

.intro p {
    font-size: 1.2em;
    color: #666;
}

.features {
    margin-bottom: 20px;
}

.features h3 {
    margin-bottom: 10px;
    color: #333;
    font-size: 1.8em;
}

.features ul {
    list-style: none;
    padding: 0;
}

.features ul li {
    background: linear-gradient(100deg, #ddefde 4%, #0dce51 100%);
    padding: 10px;
    margin-bottom: 10px;
    border-left: 4px solid rgb(30, 223, 78);
}

.features ul li strong {
    color: #333;
}

.download {
    text-align: center;
    margin-bottom: 20px;
}

.download h3 {
    margin-bottom: 10px;
    color: #333;
    font-size: 1.8em;
}

.download p {
    font-size: 1.2em;
    color: #666;
    margin-bottom: 20px;
}

.download-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.button {
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    color: #fff;
    transition: background 0.3s;
}

.button.ios {
    background: #007aff;
}

.button.ios:hover {
    background: #005bb5;
}

.button.android {
    background: #3ddc84;
}

.button.android:hover {
    background: #2fb767;
}

footer {
    text-align: center;
    padding: 20px 0;
    border-top: 1px solid #ddd;
}

footer p {
    margin: 0;
    color: #666;
}
</style>