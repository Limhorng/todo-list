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
    data(){
        return{
            tasks: []
        }
    },
    watch:{
        menu: function(newMenu, oldVal){
            // console.log(newMenu)
            this.fetchTasks(newMenu);
        }
    },
    methods:{
        fetchTasks(menu){
            this.$store.dispatch("task/allTasksFromAPI", menu);
            setTimeout(() => {
                this.tasks = this.$store.getters['task/getTasks']
            }, 500);
        }
    },
    mounted() {
        console.log("Content Component is rendered");
        this.fetchTasks(this.menu)
    },
};
</script>

<style></style>
