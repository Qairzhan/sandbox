<template>
 <div>
<!--     <example-component></example-component>-->
<!--     <create-component></create-component>-->
<!--     <div>Name:{{name}}</div>-->
<!--     <div><button @click="sayHello">Hello</button></div>-->
<!--     <div><button @click="getCars">Hi</button></div>-->
<!--     <div>{{vasyaJob}}</div>-->
<!--     <table class="table">-->
<!--         <thead>-->
<!--         <tr>-->
<!--             <th scope="col">#</th>-->
<!--             <th scope="col">Name</th>-->
<!--             <th scope="col">Age</th>-->
<!--             <th scope="col">Job</th>-->
<!--         </tr>-->
<!--         </thead>-->
<!--         <tbody>-->
<!--&lt;!&ndash;         <tr v v-for="person in personAgeMoreTwenty" v-if="person.age > 20">&ndash;&gt;-->
<!--             <tr v-for="car in cars">-->
<!--             <th scope="row">1</th>-->
<!--             <td>{{ car.name }}</td>-->
<!--             <td>{{ car.engine }}</td>-->
<!--             <td>{{ car.model }}</td>-->
<!--         </tr>-->
<!--         </tbody>-->
<!--     </table>-->
     <index-component></index-component>
<!--     <create-component></create-component>-->

 </div>
</template>

<script>
import ExampleComponent from "./ExampleComponent";
import CreateComponent from "./CreateComponent";
import IndexComponent from "./IndexComponent";

export default {
    name: "RootComponent",
    components:{
        // ExampleComponent,
        // CreateComponent,
        IndexComponent,
    },
    // data(){
    //     return{
    //         name:'Vasya',
    //         age:22,
    //         boolean:false,
    //         someNull:null,
    //         arr:['Kaira',33,'Webdeveloper']
    //     }
    // },
    // data(){
    //     return{
    //        persons:[
    //            {name:'Vasya',
    //            age:20,
    //            job:'Seller'},
    //
    //            {name: 'Sandugash',
    //            age:35,
    //            job:'Seller'},
    //
    //            {name: 'Guldana',
    //            age:38,
    //            job:'Logist'}
    //
    //        ]
    //     }
    // },
    // methods:{
    //     sayHello(){
    //         console.log("Hello")
    //     },
    //     sayHi(){
    //         console.log("HI")
    //     }
    // },
    // computed:{
    //     vasyaJob(){
    //         return this.name + 'is work as developer'
    //     }
    // },
    // computed:{
    //     personAgeMoreTwenty(){
    //         return this.persons.filter(function (person){
    //             return person.age > 20
    //         })
    //     }
    // }

    data(){
        return{
            cars:null
        }
    },
    mounted() {
        this.getCars();
    },
    methods:{
        getCars() {
            axios.get('/cars')
                .then(data => {
                    this.cars = data.data;
                })
        }
    }
}
</script>

<style scoped>

</style>
