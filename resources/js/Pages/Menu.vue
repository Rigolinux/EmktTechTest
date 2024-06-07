<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { getMenu } from '@/api/menu';
import { ref,onMounted } from 'vue';
const menu = ref('');



const fetchData = async () => {
  menu.value = await getMenu();
};


onMounted(fetchData);

</script>

<template>
    <div>
        <h1> Obteniendo el menu </h1>
        <p>{{ menu }}</p>
    </div>
</template>
