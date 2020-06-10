<template>
  <article class="message">
    <div class="message-header" v-if="seen" v-on:unicornFarts="fartyMcUnicorn">
      <p>Test Component</p>
      <btn-component></btn-component>
    </div>
    <div class="message-body">Test Component</div>
  </article>
</template>

<script>
export default {
  data() {
    return {
      seen: true
    };
  },
  methods: {
    fartyMcUnicorn: function() {
      this.seen = false;
    }
  },
  mounted() {
    console.log("Test Component mounted.");
  }
};
</script>
