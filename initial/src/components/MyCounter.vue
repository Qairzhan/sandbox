<template>
    <button v-on:click="plus" >+</button>
    <p>{{count}}</p>
    <button  v-on:click="minus">-</button>
</template>

<script>

export default {
    data(){
        return {
            count: 0
        }
    },
    methods: {

        plus() {
            this.count ++;
        },

        minus() {
            this.count --;
        }
    }
}
</script>

<style scoped>

</style>
