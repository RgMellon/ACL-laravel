<template>
    <modal name="adicionar-evento" height="400px">
        <form v-on:submit.prevent>
            
            <div class="form-group">
                <label for="titulo">Titulo do evento </label>
                <input type="text" class="form-control" id="titulo" placeholder="Adicionar titulo" v-model="tarefa.title">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição do Evento</label>
                <input type="text" class="form-control" id="descricao" placeholder="Descrição evento" v-model="tarefa.descricao">
            </div>
            
            <div class="form-group">
                <label for="data">Data Evento </label>
                <input type="date" class="form-control" id="data" v-model="tarefa.start">
            </div>
            
            <button @click="adicionaDados()" class="btn btn-primary">TESTE</button>
            
        </form>
    </modal>
</template>
<script>
    export default {
        data() {
            return {
                tarefa: {
                    title: '',
                    descricao: '',
                    data_evento: '',
                }
            }
        },

        methods: {
            adicionaDados() {
                axios.post('/adiciona-tarefa', this.tarefa)
                    .then(res => {
                        this.$notify({
                            group: 'foo',
                            title: 'Tarefa adicionada com sucesso !',
                            text:  `${res.data.title} foi agendada para o dia ${res.data.start}` ,
                            type: 'success',
                        })
                    }).then(close => {
                        this.$modal.hide('adicionar-evento');
                    })
            }
        }
    }    
</script>
<style scoped>
    form {
        padding: 1rem;
    }
</style>