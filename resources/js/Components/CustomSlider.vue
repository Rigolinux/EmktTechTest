<script setup>
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination, Scrollbar, A11y } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

import img1 from '@/assets/imgs/1.jpg';
import img2 from '@/assets/imgs/2.jpg';
import img3 from '@/assets/imgs/3.jpg';

const slides = ref([
  {
    name: 'Bosque',
    image: img1,
    descripcion: 'Descripcion del bosque'
  },
  {
    name: 'Montaña',
    image: img2,
    descripcion: 'Descripcion de la montaña'
  },
  {
    name: 'Playa',
    image: img3,
    descripcion: 'Descripcion de la playa'
  }
]);

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
.swiper-container {
  width: 500px;
  height: 500px;
}

.slide-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
}

.slide-image {
  max-width: 100%;
  max-height: 100%;
  object-fit: cover;
}

.slide-title {
  color: white;
  margin-top: 10px;
}
</style>
