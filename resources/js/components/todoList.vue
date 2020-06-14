<template>
  <div class="container box">
    <h1 class="has-text-centered" v-if="isEmpty">What do you need to do?</h1>
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
  computed: {
    isEmpty: function() {
      if (this.data == null || this.data.length < 1) {
        return true;
      } else {
        return false;
      }
    }
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
        console.log(this.data.length);
      })
      .catch(function(error) {
        console.log("something went wrong with initial fetch", error);
      });
  },
  created() {
    EventBus.$on("todoItemAdded", payload => {
      this.data.push(payload);
    });
  }
};
</script>
