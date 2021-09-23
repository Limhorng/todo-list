<template>
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
            <div class="d-flex flex-row justify-content-between align-center">
                <div class="d-flex flex-column justify-space-between mr-3">
                    <v-btn
                        class="mt-1"
                        outlined
                        rounded
                        small
                        @click="moveToToDo"
                    >
                        Move to Todo
                    </v-btn>
                    <v-btn
                        class="mt-1"
                        outlined
                        rounded
                        small
                        @click="moveToInProgress"
                    >
                        Move to In-Progress
                    </v-btn>
                    <v-btn
                        class="mt-1"
                        outlined
                        rounded
                        small
                        @click="moveToDone"
                    >
                        Move to Done
                    </v-btn>
                </div>
                <v-btn rounded class="bg-white" @click="dialog = true">
                    <v-icon color="red">delete</v-icon>
                </v-btn>
            </div>
        </div>

        <v-dialog v-model="dialog" persistent max-width="290">
            <v-card>
                <v-card-title class="error text-h6 text-white">
                    Remove Task?
                </v-card-title>
                <v-card-text class="pt-3"
                    >Once the task is removed, there is no way to recover it. Are you sure to remove it?</v-card-text
                >
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="green darken-1" text @click="dialog = false">
                        Cancel
                    </v-btn>
                    <v-btn color="error darken-1" text @click="removeTask">
                        Remove
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-card>
</template>

<script>
export default {
    props: {
        task: {
            require: true
        }
    },
    data(){
        return {
            dialog: false
        }
    },  
    methods: {
        moveToToDo() {
            const taskId = this.task.id;
            this.$store.dispatch("task/updateTaskStatusToTodo", taskId);
        },
        moveToInProgress() {
            const taskId = this.task.id;
            this.$store.dispatch("task/updateTaskStatusToInProgress", taskId);
        },
        moveToDone() {
            const taskId = this.task.id;
            this.$store.dispatch("task/updateTaskStatusToDone", taskId);
        },
        removeTask() {
            const taskId = this.task.id;
            this.$store.dispatch("task/deleteTask", taskId);
            this.dialog = false
        }
    }
};
</script>

<style></style>
