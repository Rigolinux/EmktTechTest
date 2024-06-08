<script setup>
import { Head, Link } from '@inertiajs/vue3';
import IndexLayout from '../Layouts/IndexLayout.vue';
import CustomSlider from '../Components/CustomSlider.vue';
import CustomGrid from '../Components/CustomGrid.vue';
import CustomForm from '../Components/CustomForm.vue';



</script>

<template>
     <Head title="Welcome" />
    <IndexLayout>

        <section id="Home">


            <div class="container">
                <div class="mt-5">
                    <CustomSlider />
                </div>
                <div class="mt-5">
                    <CustomGrid />
                </div>
                <div class="mt-5">
                    <CustomForm />
                </div>
            </div>
        </section>
    </IndexLayout>
</template>
