<template>
    
    
        <Carousel />
        <!-- <div><h1>Index...</h1></div> -->
        <About />
        
        <Listings />

        <Services />

        <Team />

        <Blog />
        <Contact />

        <!-- <ListingDetail /> -->
        
</template>


<script setup>
    import Carousel from './Carousel.vue';
    import About from './About.vue';
    import Listings from '../Listing/Listings.vue';
    import ListingDetail from '../Listing/ListingDetail.vue';
    import Services from './Services.vue';
    import Team from './Team.vue';
    import Blog from './Blog.vue';
    import Contact from './Contact.vue';
    

//     import { onMounted } from 'vue';

//     onMounted(()=>{
//         const script = document.createElement("script");
//         script.src ="../assets/js/main.js";
//         script.src = "../assets/vendor/glightbox/js/glightbox.min.js"
//         document.body.appendChild(script);
//     })
    
</script>