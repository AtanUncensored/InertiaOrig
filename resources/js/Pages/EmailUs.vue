<script setup>
    import HomeLayout from '@/Layouts/HomeLayout.vue'
    defineOptions({
        layout: HomeLayout
    })

</script>

<template>
    <div class="container ">
        <header>
            <h2>About Us</h2>
        </header>
        <section>
            <h3>Our Story</h3>
            <p>J Flix was born from a shared love of movies that spans genres, eras, and continents. What started as a small blog by a group of friends has grown into a comprehensive platform that attracts film lovers from around the world. We believe in the power of stories to inspire, provoke thought, and connect people across diverse backgrounds.</p>
        </section>
        <section>
            <h3>Our Mission</h3>
            <ul>
                <li><strong>Explore:</strong> Dive into the depths of classic films, uncover hidden gems, and highlight contemporary masterpieces.</li>
                <li><strong>Educate:</strong> Provide insightful reviews, in-depth analyses, and educational content that enhances your understanding and appreciation of cinema.</li>
                <li><strong>Engage:</strong> Foster a vibrant community where movie enthusiasts can share their thoughts, debates, and recommendations.</li>
            </ul>
        </section>
        <section>
            <h3>What We Offer</h3>
            <p>Our team of seasoned critics offers detailed reviews and thoughtful analyses of the latest releases as well as timeless classics. We go beyond the surface to explore themes, directorial styles, and the cultural impact of each film.</p>
            <p>Get behind-the-scenes access with our exclusive features and interviews with filmmakers, actors, and industry experts. We bring you closer to the creative minds shaping the world of cinema.</p>
            <p>Whether you're in the mood for a heartwarming drama, a mind-bending thriller, or an avant-garde indie film, our curated lists and recommendations will guide you to your next great watch.</p>
            <p>Join our lively community forums and social media channels to discuss your favorite films, debate controversial endings, and share your cinematic discoveries with fellow movie lovers.</p>
        </section>
        <section>
            <h3>Our Team</h3>
            <p>Our team is comprised of passionate individuals with diverse backgrounds in film studies, journalism, and production. Each member brings a unique perspective, united by a love for cinema and a commitment to quality content.</p>
            <ul>
                <li><strong>Emma Thompson:</strong> Founder & Editor-in-Chief</li>
                <li><strong>Michael Lee:</strong> Senior Film Critic</li>
                <li><strong>Sophia Martinez:</strong> Features Editor</li>
                <li><strong>James O'Connor:</strong> Community Manager</li>
                <li><strong>Aisha Rahman:</strong> Staff Writer</li>
            </ul>
        </section>
        <section>
            <h3>Join Us on Our Cinematic Journey</h3>
            <p>Thank you for visiting J Flix. We invite you to explore our site, join our community, and embark on a journey through the fascinating world of movies. Whether you are a casual viewer or a hardcore cinephile, there's something here for everyone.</p>
        </section>
        <section>
            <h3>Connect with Us</h3>
            <ul class="social-media">
                <li><a href="https://twitter.com/CinephileHaven">Twitter</a></li>
                <li><a href="https://instagram.com/CinephileHaven">Instagram</a></li>
                <li><a href="https://facebook.com/CinephileHaven">Facebook</a></li>
            </ul>
        </section>
        <footer>
            <p>Lights, camera, action—welcome to J Flix, where every frame is a story waiting to be told.</p>
        </footer>
    </div>
</template>

<style scoped>
.container {
    width: 80%;
    margin: 0 auto;
    margin-top: 20px;
    overflow: hidden;
    padding: 20px;
    background: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

header {
    text-align: center;
    padding-bottom: 20px;
}


header h2 {
    margin-top: 10px;
    color: #666;
    font-size: 1.5em;
}

section {
    margin-bottom: 20px;
}

section h3 {
    margin-bottom: 10px;
    color: #333;
    font-size: 1.8em;
}

section p {
    margin-bottom: 10px;
    font-size: 1.1em;
    color: #666;
}

section ul {
    list-style: none;
    padding: 0;
}

section ul li {
    background: linear-gradient(100deg, #ddefde 4%, #0dce51 100%);
    padding: 10px;
    margin-bottom: 10px;
    border-left: 4px solid rgb(30, 223, 78);
}

section ul li strong {
    color: #333;
}

.social-media {
    display: flex;
    justify-content: space-around;
    padding: 0;
    list-style: none;
}

.social-media li {
    margin: 0;
}

.social-media a {
    text-decoration: none;
    color: #333;
    background: #f4f4f4;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background 0.3s;
}

.social-media a:hover {
    background: #333;
    color: #fff;
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