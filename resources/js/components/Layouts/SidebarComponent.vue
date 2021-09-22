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
  props: {
    path: {
      type: String,
    },
  },
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
      // this.$emit("emitSelected", this.menuLists.find((m) => m.id === id).title) //Not working since the blade file is a serverside rendering
      //Suggestion: using URIs query
      //   console.log(this.menuLists.find((m) => m.id === id).name);
      this.selected = id;
      // console.log(this.selected);
    },
  },
  mounted() {
    console.log(this.path);
    if (this.path == "todo") {
      this.setSelected(1);
    } else if (this.path == "in-progress") {
      this.setSelected(2);
    } else if (this.path == "done") {
      this.setSelected(3);
    } else {
      this.setSelected(1);
    }
  },
};
</script>

<style>
</style>
