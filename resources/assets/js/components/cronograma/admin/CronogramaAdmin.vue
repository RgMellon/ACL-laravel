<template>
    <div class="cronograma-component">
        <div class="row">
            <div class="col-12">
                <calendario></calendario>
                <footer-cronograma :admin="true"> </footer-cronograma>
            </div>
        </div>
    </div>
</template>

<scripts>

</scripts>

<style scoped>
    .cronograma-component {
        height: 644px;
        border-top-left-radius: 7px;
    }
</style>