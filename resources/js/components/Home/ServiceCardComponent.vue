<template>
    <div
        class="p-3 flex flex-col justify-center align-center text-center rounded border border-black"
    >   
        <slot name="icon"></slot>
        <h3 class="text-3xl font-extrabold mb-3"><slot name="plain-title"></slot></h3>
        <slot name="description"></slot>
    </div>
</template>

<script>
export default {};
</script>

<style></style>
