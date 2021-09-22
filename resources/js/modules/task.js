const task = {
    namespaced:true,
    state: {
        tasks: [],
    },
    getters: {

        getTasks(state) { //take parameter state

            return state.tasks
        }
    },

    actions: {
        allTasksFromAPI(context,filter) {
            axios.get("api/todos.json")
                .then((response) => {
                    const data = response.data
                    context.commit("filterTasks",{data,filter})
                })
                .catch(() => {
                    console.log("Error........")
                })
        }
    },

    mutations: {
        filterTasks(state,{data,filter}){
            let tasks = data
            if (filter){
                tasks = tasks.filter((task) => task.status === filter)
            }
            console.log(filter);
            return state.tasks = tasks
        }
    }
}
export default task;
