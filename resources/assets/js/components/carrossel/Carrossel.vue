<template>
  <div class="carrosel">
      <div class="row">
          <div class="col-12">
           
          
          </div>
      </div>
  </div>
</template>

<script>

import { Carousel, Slide } from 'vue-carousel';

export default {
  
  props: ['banners'],

  components: {
    Carousel,
    Slide
  },

};

<style scoped>
    .carrosel {
      width : 100%;
      border: 1px solid #b9242a;
      height: 300px;
      border-top-left-radius: 7px;
    }
</style>