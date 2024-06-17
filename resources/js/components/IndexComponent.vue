<template>
<div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in people">
                <tr>
                    <th scope="row">{{person.id}}</th>
                    <td>{{person.name}}</td>
                    <td>{{person.age}}</td>
                    <td>{{person.job}}</td>
                    <td><a href="" @click="change_person_id(person.id)" class="btn btn-primary">Edit</a> </td>
                </tr>

                <tr class="d-none">
                    <th scope="row">{{person.id}}</th>
                    <td><input type="text"></td>
                    <td><input type="number"></td>
                    <td><input type="text"></td>
                    <td><a href="" class="btn btn-primary">update</a> </td>
                </tr>
            </template>
            </tbody>
        </table>
</div>
</template>

<script>
export default {
    name: "IndexComponent",
    data(){
        return{
            people:null,
            person_id:null
        }
    },
    mounted(){
        this.getPeople();
    },
    methods:{
        getPeople(){
            axios.get('/api/person/list')
            .then(result => {
                this.people = result.data
            })
        },

        change_person_id(id){
              console.log(id)
            // this.person_id = id
        }
    }
}
</script>

<style scoped>

</style>
