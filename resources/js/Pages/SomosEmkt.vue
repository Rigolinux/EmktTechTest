<script setup>
import { Head, Link } from '@inertiajs/vue3';
import IndexLayout from '../Layouts/IndexLayout.vue';
import CustomSlider from '../Components/CustomSlider.vue';



</script>

<template>
     <Head title="Welcome" />
    <IndexLayout>

        <section id="Home">
            <h1> Bienvenido </h1>

            <div>
                <CustomSlider ></CustomSlider>
            </div>
            </section>
    </IndexLayout>
</template>../Components/Slider.vue
