import Vue from "vue"
import RootComponent from "./components/RootComponent";

require('./bootstrap');

const app = new Vue(
    {el:'#app',
     components:{
        RootComponent:RootComponent
     }
    }
)




