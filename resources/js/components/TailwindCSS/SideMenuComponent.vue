<template>
    <div class="z-100">
      <button class="btn" @click="tog()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    
      <nav class="h-screen w-80 bg-dark position-absolute right-0 top-0 text-white z-90" :class="open ? 'navbar-open' : 'navbar-close'">
        <div>
            <h1>Home</h1>
        </div>
        <div>
            <h1>Home</h1>
        </div>
        <div>
            <h1>Home</h1>
        </div>
        <div>
            <h1>Home</h1>
        </div>
        
      </nav>
    </div>
</template>

<script>
export default {
    data() {
    return {
      open: false
    };
  },
  methods: {
    tog() {
      this.open = !this.open;
    }
  }
}
</script>

<style>
    .navbar {
        transition: all 330ms ease-out;
    }

    .navbar-open {
    transform: translateX(0%);
    }
    .navbar-close {
    transform: translateX(-100%);
    display: none;
    }
</style>