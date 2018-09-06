<template>
    <div>
        <full-calendar :events="events" :header="header" :config="config"></full-calendar>
    </div>
</template>

<script>
    
    import { FullCalendar } from 'vue-full-calendar';
    import 'fullcalendar/dist/locale/pt-br';

    export default {
        components: {
            FullCalendar,
        },

        mounted() {
            axios.get('tarefas/usuario')
                .then(res => this.events = res.data)  
        },
        data() {
            return {
                events: [
                    
                ],
                
                config: {
                    weekends: false,
                    locale: 'pt-Br',
                },
                header: {
                    left:   'title',
                    center: '',
                    right:  'today prev,next'
                },
                
            }
        },

    }
</script>

<style scoped>
     @import '~fullcalendar/dist/fullcalendar.css';
</style>