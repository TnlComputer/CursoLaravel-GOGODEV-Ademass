<template>
        <h1>Hello world from example</h1>
        <h1>{{ counter }}</h1>
        <button @click="increment">Increment</button>

        <NavLink :href="route('login')">Login</NavLink>
</template>

<script setup>
    import {ref} from 'vue'
    import NavLink from '../Components/NavLink.vue'
    const counter = ref(0)
    const increment = () => {
        counter.value++
    }
</script>

<style scope></style>
