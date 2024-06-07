<script setup>

import { defineProps } from 'vue';
import SvgIcon from '@jamescoyle/vue-icon'
defineProps({
    path: {
        type: String,
        required: true,
    },
});


</script>

<template>
    <svg-icon type="mdi" :path="path"></svg-icon>
  </template>
