<template>
     <vue-editor v-model="content"></vue-editor>
</template>
<script>
    import { VueEditor } from 'vue2-editor';
    
    export default {
        components: {
            VueEditor
        },

        data() {
            return {
                content: '',
            }
        }
    }
</script>
<style>

</style>
