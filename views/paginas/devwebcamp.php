<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia mas importante de Latinoamérica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebCamp">
            </picture>
        </div>

        <div class="devwebcamp__contenido">
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores optio perspiciatis eaque modi 
            explicabo quae illum debitis soluta, ut ipsum nihil! Commodi quaerat doloremque quis molestiae modi animi minima fugit ipsum 
            temporibus blanditiis tempora, est expedita, dolore, perspiciatis fuga enim natus. Distinctio quia labore iste quam officiis 
            eaque quaerat amet? Corrupti deleniti eveniet architecto atque reprehenderit doloribus itaque? In</p>
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores optio perspiciatis eaque modi 
            explicabo quae illum debitis soluta, ut ipsum nihil! Commodi quaerat doloremque quis molestiae modi animi minima fugit ipsum 
            temporibus blanditiis tempora, est expedita, dolore, perspiciatis fuga enim natus. Distinctio quia labore iste quam officiis 
            eaque quaerat amet? Corrupti deleniti eveniet architecto atque reprehenderit doloribus itaque? In</p>
        </div>
    </div>
</main>