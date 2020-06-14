<template>
  <article class="message is-primary card">
    <div class="message-header">
      <p>{{title}}</p>
      <button v-on:click="deleteIt(id)" class="delete" aria-label="delete"></button>
    </div>
    <div class="message-body">{{description}}</div>
  </article>
</template>

<script>
export default {
  data() {
    return {};
  },
  props: ["id", "title", "description"],

  methods: {
    deleteIt: function(id) {
      //console.log(id);
      this.$emit("deleteIt", id);
    }
  },

  mounted() {}
};
</script>
