<template>
    <v-container class="bg-light" style="height: calc(100vh - 52px)">
        <v-list>
            <v-list-item v-for="task in tasks" :key="task.id">
                <task-component :task="task"/>
            </v-list-item>
        </v-list>
        <!-- {{menu}} -->
    </v-container>
</template>

<script>
import TaskComponent from '../TaskComponent.vue';

export default {
  components: { TaskComponent },
    props:[
        'menu'
    ],
    computed: {
        tasks: {
            get() {
                return this.$store.getters["task/getTasks"];
            },
            set(tasks) {
                return tasks
            }
        } 
        
    },
    watch:{
        menu: function(newMenu, oldVal){
            this.fetchTasks(newMenu);
        }
    },
    methods:{
        fetchTasks(menu){
            this.$store.dispatch("task/allTasksFromAPI", menu);
        }
    },
    mounted() {
        this.fetchTasks(this.menu)
    },
};
</script>

<style></style>
