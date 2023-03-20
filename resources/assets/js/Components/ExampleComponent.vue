<template>
  <div>MIJN TEST Example Component, {{ greeting }}</div>
  <div>Foo: {{ foo }}</div>
</template>

<script>
import { ref } from 'vue'

export default {
    props: ['foo'],
    setup() {
        const greeting = ref('hello there vuejs 3 feature')

        return {
            greeting
        }
    }
}
</script>

<style>

</style>
