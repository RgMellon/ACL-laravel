<template>
    <section class="colapse">
        <div  @click="showContent()">
            <div class="colapse-header" style="padding: 1rem;">
                <div class="d-flex justify-content-between">
                    <div class="">
                       <v-icon :name="icon" scale="2.5"></v-icon>
                    </div>
                    <div class="">
                        <h1> {{ titulo }} </h1>
                    </div>
                     <div class="">
                        
                    </div>
                </div>
            </div>
        </div>
        
        <transition name="component-fade">
            <div class="container-colapse" v-if="this.show">
                <slot name="content-colapse"></slot>
            </div>
        </transition>
    
    </section>
</template>
<script>
    export default {
        props: ['icon', 'titulo'],
        data() {
            return {
                show: false,
            }
        },
        methods: {
            showContent() {
                this.show = !this.show;
            }
        }
    }
</script>
<style scoped>

    .colapse {
       width: 100%;
    }
    .colapse-header {
        cursor: pointer;
        height: 70px;
        box-shadow: 10px 7px 5px -8px rgba(212, 138, 138, 0.55);
        border-left: 2px solid #b9242a;
    }

    .container-colapse {
        width: 100%;
        border-left: 2px solid #b9242a;
        padding: 1rem;
    }

    h1 {
        font-size: 1.2rem;
    }

    .component-fade-enter-active, .component-fade-leave-active {
        transition: opacity .4s ease;
    }
    .component-fade-enter, .component-fade-leave-to
    /* .component-fade-leave-active em versões anteriores a 2.1.8 */ {
        opacity: 0;
    }
</style>