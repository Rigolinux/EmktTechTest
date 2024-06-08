<script setup>
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination, Scrollbar, A11y } from 'swiper/modules';
import demodata from '@/utils/data.js'
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';



const slides = ref(demodata);

const modules = [Navigation, Pagination, Scrollbar, A11y];
</script>

<template>
  <div class="swiper-container">
    <swiper
      :modules="modules"
      :slides-per-view="1"
      :space-between="50"
      navigation
      :pagination="{ clickable: true }"
      :scrollbar="{ draggable: true }"
    >
      <swiper-slide v-for="(slide, index) in slides" :key="index">
        <div class="slide-content">
          <img :src="slide.image" class="slide-image" />
          <h1>{{ slide.name }}</h1>
          <p class="mb-5">{{ slide.descripcion }}</p>
        </div>
      </swiper-slide>
    </swiper>
  </div>
</template>

<style scoped>


.slide-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
}


</style>
