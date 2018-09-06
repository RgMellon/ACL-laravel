<template>
    <div>
        <carousel :perPage="1" :navigationEnabled="true" paginationActiveColor="#b9242a" >
              <slide v-for="i of this.dados">
                    <a :href="i.url"> <img style="height:300px" :src="`http://localhost:8000/img/banners/${i.image}`" :alt="i.titulo"> </a>
              </slide>
        </carousel>

    </div>
</template>

<script>
    import { Carousel, Slide } from 'vue-carousel';

    export default {
        
        components: {
            Carousel,
            Slide
        },

        data() {
            return {
                dados: {}
            }
        },
        
        mounted() {
            axios.get('/banners')
                .then(res => this.dados = res.data)
        },
    }    
</script>

<style>

</style>