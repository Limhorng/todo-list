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
</template>

<script>
export default {
    props:{
        task:{
            require: true
        }
    }

}
</script>

<style>

</style>