<template>
  <button class="delete" aria-label="delete" v-on:click="deleteFunc"></button>
</template>

<script>
export default {
  methods: {
    deleteFunc: function() {
      this.$emit("unicornFarts");
    }
  }
};
</script>