<template>
    <div class="footer-agenda d-flex">
        
        <notifications group="foo" width="100%"/>
        
        <div class="gerar-pdf">
            <button @click="teste"> gerar PDF </button>
        </div>
    
    </div>
</template>
<script>
    export default {
        
        props: ['admin'],

        data() {
            return {

            }
        },
        methods: {
            show () {
                this.$modal.show('adicionar-evento');
            },
            hide () {
                this.$modal.hide('adicionar-evento');
            },
            teste() {
                this.$notify({
                    group: 'foo',
                    title: 'Important message',
                    text: 'Hello user! This is a notification!'
                })
            }
        }
    }    
</script>
<style scoped>
    
    .footer-agenda {
        height: 70px;
        border-top:0px;
        border: 1px solid #b9242a;
        border-bottom-left-radius: 7px;
        padding-right: 1rem;
        justify-content: flex-end;
        align-items: center;
    }


</style>