<template>
  <div class="container">
    <todoItem
      v-for="todoitem in data"
      v-on:deleteIt="deleteThis"
      :key="todoitem.id"
      :id="todoitem.id"
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
    deleteThis: function(id) {
      axios({
        method: "delete",
        url: "/todoitems/" + id
      })
        .then(response => {
          this.data = this.data.filter(item => item.id != id);
        })
        .catch(function(error) {
          console.log("something went wrong with initial fetch", error);
        });
    }
  },

  mounted() {
    axios
      .get("/todoitems")
      .then(response => {
        this.data = response.data;
      })
      .catch(function(error) {
        console.log("something went wrong with initial fetch", error);
      });
  },
  created() {
    EventBus.$on("todoItemAdded", payload => {
      this.data.unshift(payload);
    });
    this.$on("deleteIt", function() {
      console.log("delete received");
    });
  }
};
</script>
