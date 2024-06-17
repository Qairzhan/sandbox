<template>
    <div>
        <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" v-model="name"  class="form-control" id="usr">
        </div>
        <div class="form-group">
            <label for="pwd1">Age:</label>
            <input type="number" v-model="age" class="form-control" id="pwd1">
        </div>
        <div class="form-group">
            <label for="pwd2">Job:</label>
            <input type="text" v-model="job" class="form-control" id="pwd2">
        </div>

        <button @click.prevent = "addPerson" type = "submit" class="btn btn-primary">Send</button>
    </div>
</template>

<script>
export default {
    name: "CreateComponent",

    data(){
        return{
            name:null,
            age:null,
            job:null
        }
    },

    methods:{
        addPerson(){
            axios.post('/api/person',{name:this.name, age:this.age, job:this.job})
            .then(res => {
                console.log(res)
            })
        },

    }
}
</script>

<style scoped>

</style>
