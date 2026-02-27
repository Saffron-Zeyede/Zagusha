<template>
    <section id="hero" class="hero section dark-background" style="margin-top: 90px;">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active">
                <img src="/public/assets/img/hero-carousel/carousel1.jpg" alt="">
                <div class="carousel-container">
                <h2>Welcome to Zagusha Property<br></h2>
                <p>Welcome to Zagusha Property where you can buy, sell, rent and find a comprhensive marketing/sales information about real estate, house, stocks and others.</p>
                <a href="#featured-services" class="btn-get-started">Send us your Request</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="/public/assets/img/hero-carousel/carousel3.jpg" alt="">
                <div class="carousel-container">
                <h2>Facilitate Sales</h2>
                <p>Zagusha property carries out various stock and other assets marketing/sales and renting activities based on our clients' needs including construction materials and machineries, cars, stocks, houses, market centers, warehouses and others.</p>
                <a href="#featured-services" class="btn-get-started">Send us your Request</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="/public/assets/img/hero-carousel/carousel4.jpg" alt="">
                <div class="carousel-container">
                <h2>Property Management</h2>
                <p>Based on the needs of our clinets, we provide property management and consulting services to institutions whose primary source of income is rental. Such services includes Hotel management, Malls & markte centers management, Real estate and apartments management, warehouse management and others. </p>
                <a href="#featured-services" class="btn-get-started">Send us your Request</a>
                </div>
            </div><!-- End Carousel Item -->

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>

        </div>

    </section>
</template>

<script>
    export default {
        mounted() {
            const script = document.createElement("script");
            script.src ="../assets/js/sailor.js";
            document.body.appendChild(script);
        },
    };
</script>