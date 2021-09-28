<template>
  <div class="h-32 w-screen flex justify-center align-center">
            <div class="m-auto position-relative  flex justify-center align-center">
                <img src="images/title-bg.png" alt="" class="h-16 position-absolute filter grayscale z-0 mt-n3">
                <h1 class="text-3xl font-bold align-center z-10"><slot></slot></h1>
            </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style>

</style>