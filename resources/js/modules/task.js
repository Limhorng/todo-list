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
        allTasksFromAPI(context) {
            axios.get("api/todos.json")
                .then((response) => {
                    // console.log(response.data)
                    context.commit("setTasks", response.data)
                })
                .catch(() => {
                    console.log("Error........")
                })
        }
    },

    mutations: {
        setTasks(state, data) {
            return state.tasks = data
        }
    }
}
export default task;
