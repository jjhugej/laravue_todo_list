<template>
  <div class="container">
    <todoItem
      v-on:todoItemAdded="refreshTodoList"
      v-for="todoitem in data"
      :key="todoitem.id"
      :title="todoitem.title"
      :description="todoitem.description"
    ></todoItem>
  </div>
</template>

<script>
export default {
  data() {
    return {
      data: null
    };
  },
  methods: {
    refreshTodoList() {
      console.log("refreshtodo called");
      axios
        .get("/todoitems")
        .then(
          response => (this.data = response.data),
          console.log("refreshtodolist called")
        )
        .catch(console.log("something went wrong while refreshing todo items"));
    }
  },

  mounted() {
    //console.log("todo-list component mounted.");
    axios
      .get("/todoitems")
      .then(
        response => (this.data = response.data),
        console.log("successfully fetched todo item datas")
      )
      .catch(console.log("something went wrong while fetching todo items"));
  }
};
</script>
