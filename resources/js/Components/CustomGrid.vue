<script setup>
import { ref } from 'vue';
import demodata from '@/utils/data.js'

const cols = ref(demodata);

</script>
<template>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4" v-for="(col, index) in cols" :key="index">
                            <div class="card">
                                <img :src="col.image" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title
                                    ">{{ col.name }}</h5>
                                    <p class="card-text">{{ col.descripcion }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
