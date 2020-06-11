<template>
  <form v-on:submit.prevent class="container pb-4">
    <div class="field">
      <label for="title" class="label">Title</label>
      <div class="control">
        <input name="title" class="input" type="text" v-model="title" />
      </div>
    </div>

    <div class="field">
      <label for="description" class="label">Description</label>
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
      info: "",
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
        .then(
          response => (this.info = response),

          this.$emit("todoItemAdded"),
          (this.title = ""),
          (this.description = "")
        )
        .catch(function(error) {
          alert("something went wrong");
          this.errors = error;
        });

      console.log("todo item submitted");
    }
  },

  mounted() {
    //console.log("todo-input component mounted.");
  }
};
</script>
