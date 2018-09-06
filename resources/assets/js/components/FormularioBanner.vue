<template>
    <section class="formulario-banner">
        
        <form v-on:submit.prevent>
            <div class="form-group">
                <label for="titulo">Titulo </label>
                <input type="text" class="form-control" id="titulo" placeholder="Adicionar titulo" v-model="banner.titulo">
            </div>

            <div class="form-group">
                <label for="link"> Link </label>
                <input type="text" class="form-control" id="link" placeholder="Adicionar link" v-model="banner.url">
            </div>
            
            <div class="form-group">
               <input id="file-input" type="file" accept="image/*" @change="onImageChange"/>
            </div>

            <div class="preview-image" v-if="this.banner.image">
                <img :src="banner.image" class="img-responsive" height="70" width="90">
            </div>
           
            <button @click="adicionaBanner()" class="btn btn-primary" style="margin-top: 1rem;"> Adicionar banner </button>
            
        </form>

    </section>
</template>

<script>
    export default {
        data() {
            return {
                banner: {
                    titulo: '',
                    url: '',
                    image: ''
                }
            }
        },

        methods : {
            
            adicionaBanner() {
                axios.post('/banner/store', this.banner)
            },

            onImageChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.banner.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            // uploadImage(){
            //     axios.post('/image/store',{image: this.image}).then(response => {
            //        console.log(response);
            //     });
            // }
        }
    }
</script>
<style scoped>
    .preview-image img {
        height: 300px;
        border-radius: 12px;
    }
    .formulario-banner {
        padding: 3rem;
    }
</style>