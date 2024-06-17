<template>
    <p>Найди меня</p>
    <input type="text" v-on:input="search_input"/>
    <ul id="example-1">
        <li v-for="(user,index) in users" :key="index">
            {{ user.Имя }}
        </li>
    </ul>
</template>

<script>
export default {
    data() {
       return {
           users:[  {Имя: 'Маки Маки'},
                    {Имя: 'Санжар Керимбай'},
                    {Имя: 'Елдосита Мамасита'},
                    {Имя: 'Кука Мармон'}
           ]
       }
    },
    methods:{
        search_input(value){
            console.log(value.target.value);
        }
    }


}
</script>

<style scoped>

</style>
