<template>
    <v-container class="bg-light" style="height: calc(100vh - 52px)">
        <v-list>
            <v-list-item v-for="task in tasks" :key="task.id">
                <v-card class="p-3 w-100 mb-3">
                    <div class="d-flex flex-no-wrap justify-space-between">
                        <div class="w-100">
                            <v-card-title>
                                {{ task.title }}
                            </v-card-title>
                            <v-card-text>
                                {{ task.description }}
                            </v-card-text>
                        </div>
                        <div>
                            <div
                                class="d-flex flex-column justify-space-between"
                            >
                                <v-btn class="mt-1" outlined rounded small>
                                    Move to Todo
                                </v-btn>
                                <v-btn class="mt-1" outlined rounded small>
                                    Move to In-Progress
                                </v-btn>
                                <v-btn class="mt-1" outlined rounded small>
                                    Move to Done
                                </v-btn>
                            </div>
                        </div>
                    </div>
                </v-card>
            </v-list-item>
        </v-list>
    </v-container>
</template>

<script>
export default {
    data() {
        return {
            tasks: []
        };
    },
    mounted() {
        this.$store.dispatch("task/allTasksFromAPI");
        //   console.log(this.$route.params.menu)
        setTimeout(() => {
          this.tasks = this.$store.getters['task/getTasks']
        }, 1000);
        // this.tasks = this.$store.getters('task/getTasks')
    },
};
</script>

<style></style>
