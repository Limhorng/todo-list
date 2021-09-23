<template>
  <nav>
    <v-navigation-drawer
      v-model="drawer"
      dark
      app
      mini-variant
      mini-variant-width="200"
    >
      <v-list>
        <router-link
          v-for="menuList in menuLists"
          :key="menuList.id"
          :to="menuList.path"
        >
          <v-list-item
            :class="
              selected === menuList.id ? 'p-2 bg-danger cursor' : 'p-2 cursor'
            "
            @click="setSelected(menuList.id)"
          >
            <v-list-item-content>
              {{ menuList.name }}
            </v-list-item-content>
          </v-list-item>
        </router-link>
      </v-list>
    </v-navigation-drawer>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      selected: null,
      menuLists: [
        {
          id: 1,
          name: "Todo Tasks",
          path: "todo",
        },
        {
          id: 2,
          name: "In Progress Tasks",
          path: "in-progress",
        },
        {
          id: 3,
          name: "Done Tasks",
          path: "done",
        },
      ],
      drawer: true,
    };
  },
  methods: {
    setSelected(id) {
      this.selected = id;
      const selectedPath = this.menuLists.find((menu) => menu.id === id).path;
      this.$store.dispatch("task/allTasksFromAPI", selectedPath );
    },
  },
  computed:{
    path() {
      return this.$route.params.menu; 
    }
  },
  watch:{
    path() {
      if (this.path == "todo") {
        this.setSelected(1);
      } else if (this.path == "in-progress") {
        this.setSelected(2);
      } else if (this.path == "done") {
        this.setSelected(3);
      } else {
        this.setSelected(1);
      }
    }
  },
};
</script>

<style>
</style>
