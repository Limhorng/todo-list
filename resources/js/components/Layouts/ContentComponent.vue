<template>
    <v-app class="bg-light" style="height: auto">
        <v-container class="bg-light" style="height: auto">
            <v-list>
                <v-list-item>
                    <v-dialog v-model="dialog" persistent max-width="600px">
                        <template v-slot:activator="{ on, attrs }">
                            <v-card
                                v-bind="attrs"
                                v-on="on"
                                class="border dashed w-100 p-3 mb-3 bg-light text-center align-center d-flex"
                                style="height: 150px"
                            >
                                <v-card-text
                                    style="font-size: 48px; font-weight: bold; margin: auto"
                                    >+</v-card-text
                                >
                            </v-card>
                        </template>
                        <v-card>
                            <v-card-title>
                                <span class="text-h5">Create Task</span>
                            </v-card-title>
                            <v-card-text>
                                <v-container>
                                    <v-col>
                                        <v-col cols="12" sm="12" md="12">
                                            <v-text-field
                                                label="Title*"
                                                required
                                                hint="example of helper text only on focus"
                                                v-model="title"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col cols="12" sm="12" md="12">
                                            <v-textarea
                                                label="Description"
                                                hint="example of helper text only on focus"
                                                resize=false
                                                v-model="description"
                                            ></v-textarea>
                                        </v-col>
                                    </v-col>
                                </v-container>
                                <small>*indicates required field</small>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn
                                    color="blue darken-1"
                                    text
                                    @click="dialog = false"
                                >
                                    Close
                                </v-btn>
                                <v-btn
                                    color="blue darken-1"
                                    text
                                    @click="createTask"
                                >
                                    Save
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-dialog>
                </v-list-item>
                <v-list-item v-for="task in tasks" :key="task.id">
                    <task-component :task="task" />
                </v-list-item>
            </v-list>
            <!-- {{menu}} -->
        </v-container>
    </v-app>
</template>

<script>
import TaskComponent from "../TaskComponent.vue";

export default {
    components: { TaskComponent },
    props: ["menu"],
    data() {
        return {
            dialog: false,
            title: '',
            description: '',
        };
    },
    computed: {
        tasks: {
            get() {
                return this.$store.getters["task/getTasks"];
            },
            set(tasks) {
                return tasks;
            }
        }
    },
    watch: {
        menu: function(newMenu, oldVal) {
            this.fetchTasks(newMenu);
        }
    },
    methods: {
        fetchTasks(menu) {
            this.$store.dispatch("task/allTasksFromAPI", menu);
        },
        createTask(){
            const taskFormData = new FormData();
            taskFormData.append("title",this.title);
            taskFormData.append("description",this.description);
            taskFormData.append("status",this.menu);
            console.log(this.status);
            this.$store.dispatch("task/createTask",taskFormData);

            this.title = "";
            this.description = "";
            this.status = this.menu;

            this.dialog = false;
        }

    },
    mounted() {
        this.fetchTasks(this.menu);
    }
};
</script>

<style></style>
