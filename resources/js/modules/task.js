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
        async allTasksFromAPI(context,filter) {
            await axios.get("/api/get-tasks")
                .then((response) => {
                    const data = response.data
                    context.commit("filterTasks",{data,filter})
                    console.log(context.state.tasks)

                })
                // .catch(() => {
                //     console.log("Error........")
                // })
        }
    },

    mutations: {
        filterTasks(state,{data,filter}){
            let tasks = data.tasks
            if (filter){
                tasks = tasks.filter((task) => task.status === filter)
            }
            return state.tasks = tasks
        }
    }
}
export default task;
