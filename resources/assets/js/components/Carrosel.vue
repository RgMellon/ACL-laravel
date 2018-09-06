<template>
  <div class="carrosel">
      <div class="row">
          <div class="col-12">
              <carousel :perPage="1" :navigationEnabled="true" paginationActiveColor="#b9242a" >
                <slide v-for="i of 5">
                  <a href=""> <img style="height:300px" src="https://png.pngtree.com/thumb_back/fw800/back_pic/03/62/22/9357a9eb22e2838.jpg" alt=""> </a>
                </slide>
              </carousel>
          </div>
      </div>
  </div>
</template>

<script>
import { Carousel, Slide } from 'vue-carousel';
export default {
  components: {
    Carousel,
    Slide
  }
};

<style scoped>
    .carrosel {
        width : 100%;
        border: 1px solid #b9242a;
        height: 300px;
        border-top-left-radius: 7px;
    }
</style>