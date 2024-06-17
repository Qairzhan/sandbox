<template>
    <MyCounter></MyCounter>
    <search-form></search-form>
    <LoginForm></LoginForm>

</template>

<script>
import LoginForm from './components/LoginForm'
import MyCounter from './components/MyCounter'
import SearchForm from './components/SearchForm'

export default {
  name: 'App',
  components: {

      LoginForm,
      MyCounter,
      SearchForm
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
