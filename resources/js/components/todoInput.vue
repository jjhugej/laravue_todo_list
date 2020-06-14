<template>
  <form v-on:submit.prevent class="container pb-4 box">
    <h1 class="title has-text-centered">Add new todo item</h1>
    <div class="field">
      <label for="title" class="label">What do you need to do?</label>
      <div class="control">
        <input name="title" class="input" type="text" v-model="title" />
      </div>
    </div>

    <div class="field">
      <label for="description" class="label">Notes</label>
      <div class="control">
        <input name="description" class="textarea" type="textarea" v-model="description" />
      </div>
    </div>
    <div class="control">
      <button v-on:click="addNewTodoItem" class="button is-primary">Submit</button>
    </div>
  </form>
</template>

<script>
export default {
  data() {
    return {
      title: "",
      description: "",
      storedItem: {
        id: null,
        title: null,
        description: null
      },
      errors: "",
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content")
    };
  },
  methods: {
    addNewTodoItem() {
      axios
        .post("/todoitem", { title: this.title, description: this.description })
        .then(response => {
          (this.title = ""),
            (this.description = ""),
            EventBus.$emit("todoItemAdded", response.data.storedItem);
        })
        .catch(function(error) {
          console.log("something went wrong with todo input");
          this.errors = error;
        });
    }
  },

  mounted() {
    //console.log("todo-input component mounted.");
  }
};
</script>
