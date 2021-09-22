<template>
    <v-app-bar heigth="50">
        {{title}}
    </v-app-bar>
</template>

<script>
export default {
    props:{
        title: {
            default: "Todo Tasks",
            type: String,
        }
    }
}
</script>

<style>

</style>
