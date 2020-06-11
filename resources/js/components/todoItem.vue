<template>
  <article class="message is-primary card">
    <div class="message-header">
      <p>{{title}}</p>
      <button class="delete" aria-label="delete"></button>
    </div>
    <div class="message-body">{{description}}</div>
  </article>
</template>

<script>
export default {
  data() {
    return {};
  },
  props: ["title", "description"],

  methods: {},

  mounted() {
    //console.log("todo-list component mounted.");
  }
};
</script>
