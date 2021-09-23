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
                .catch(() => {
                    console.log("Error........")
                })
        },
        async updateTaskStatusToTodo(context,taskId) {
            await axios.get(`/api/update-task-status-to-todo?taskId=${taskId}`)
                .then((response) => {
                    const data = response.data
                    if(data.status === 200){
                        const tasks = context.state.tasks.filter((task) => { if(task.id !== taskId) return true});
                        context.commit("filterTasks",{data:{tasks},filter:null});
                    }
                })
                .catch(() => {
                    console.log("Error........")
                })
        },

        async updateTaskStatusToInProgress(context,taskId) {
            await axios.get(`/api/update-task-status-to-in-progress?taskId=${taskId}`)
                .then((response) => {
                    const data = response.data
                    if(data.status === 200){
                        const tasks = context.state.tasks.filter((task) => { if(task.id !== taskId) return true});
                        context.commit("filterTasks",{data:{tasks},filter:null})
                    }
                    
                })
                // .catch(() => {
                //     console.log("Error........")
                // })
        },

        async updateTaskStatusToDone(context,taskId) {
            await axios.get(`/api/update-task-status-to-done?taskId=${taskId}`)
                .then((response) => {
                    const data = response.data
                    if(data.status === 200){
                        const tasks = context.state.tasks.filter((task) => { if(task.id !== taskId) return true});
                        context.commit("filterTasks",{data:{tasks},filter:null})
                    }
                })
                // .catch(() => {
                //     console.log("Error........")
                // })
        },
        async allTasksFromAPI(context,filter) {
            await axios.get("/api/get-tasks")
                .then((response) => {
                    const data = response.data
                    context.commit("filterTasks",{data,filter})
                    // console.log(context.state.tasks)

                })
                .catch(() => {
                    console.log("Error........")
                })
        }
    },

    mutations: {
        filterTasks(state,{data,filter}){
            let tasks = data.tasks
            if (filter !== null && ['todo','done','in-progress'].includes(filter)){
                tasks = tasks.filter((task) => task.status === filter)
            }
            return state.tasks = tasks
        }
    }
}
export default task;
