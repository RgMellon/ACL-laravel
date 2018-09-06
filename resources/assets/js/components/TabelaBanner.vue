<template>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">img</th>
                    <th scope="col">titulo</th>
                    <th scope="col">link</th>
                    <th scope="col">ações</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="i of banners">
                    <th scope="row"> {{ i.id }}</th>
                    <td>  <img :src="`http://localhost:8000/img/banners/${i.image}`"> </td>
                    <td> {{ i.titulo }} </td>
                    <td> {{ i.url }} </td>
                    <td>  <button @click="excluir(i.id)"> Excluir </button> </td>
                </tr>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {

       data() {
           return {
               banners:{},
           }
       },
       mounted() {
           axios.get('/banners')
            .then(res => this.banners = res.data)
        },

        methods: {
            excluir(id) {
                axios.delete('/banner', {params: {'id': id}} )
                    .then(res => this.banners = res.data);
            }
        }
    }   
</script>
<style scoped>
    img {
        width: 100px;
    }
</style>