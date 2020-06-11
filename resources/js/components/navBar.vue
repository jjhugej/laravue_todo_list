<template>
  <nav class="navbar pb-4" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="/home">LaraVue-Todo</a>

      <a
        v-on:click="hamburgerActive"
        class="navbar-burger burger"
        :class="{ 'is-active': isActive}"
        aria-label="menu"
        aria-expanded="false"
        data-target="navbarMenu"
        role="button"
      >
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarMenu" class="navbar-menu" :class="{ 'is-active': isActive}">
      <div class="navbar-start"></div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a href="/register" class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a href="/login" class="button is-light">Log in</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      isActive: false
    };
  },
  methods: {
    hamburgerActive() {
      this.isActive = !this.isActive;
    }
  },

  mounted() {
    //console.log("navbar component mounted.");
  }
};
</script>
