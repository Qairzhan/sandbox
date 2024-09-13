<template>
    <input type="text" v-model="first_name">
    <input type="text" v-model="last_name">

      <div v-for="(element, index) in users" :key="index"></div>
    <button @click="senddata()">Отправить</button>
</template>

<script>
export default {
    data(){
        return{
            users:[],
            first_name:'',
            last_name:'',
        }
    },

    methods:{
      senddata(){
          this.users.push({
              f_name: this.first_name,
              l_name: this.last_name
          })

        }
    }
}
</script>


