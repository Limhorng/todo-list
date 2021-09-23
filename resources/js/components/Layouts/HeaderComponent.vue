<template>
    <v-app-bar heigth="50">
        {{ path }}
    </v-app-bar>
</template>

<script>
export default {
    props: {
        title: {
            default: "Todo Tasks",
            type: String
        }
    },
    computed: {
        path() {
            const menu = this.$route.params.menu;
            let title;
            if (menu === "in-progress") {
                title = "In-progress Tasks";
            } else if (menu === "done") {
                title = "Done Tasks";
            } else {
                title = "Todo Tasks";
            }

            return title;
        }
    }
};
</script>

<style></style>
