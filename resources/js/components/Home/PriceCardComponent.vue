<template>
    <div
        class="p-3 flex flex-col justify-center align-center text-center rounded border border-black"
    >
        <slot name="icon"></slot>
        <h3 class="text-xl font-extrabold mb-5">{{ title }}</h3>
        <div class="w-full flex">
            <div class="w-2/6 text-right font-bold p-2">
                20
            </div>
            <div class="w-4/6 text-left p-2">
                Photoshoots
            </div>
        </div>
        <div class="w-full flex">
            <div class="w-2/6 text-right font-bold p-2">
                1
            </div>
            <div class="w-4/6 text-left p-2">
                Video
            </div>
        </div>
        <div class="w-full flex">
            <div class="w-2/6 text-right font-bold p-2">
                1
            </div>
            <div class="w-4/6 text-left p-2">
                Hour
            </div>
        </div>
        <h1 class="text-4xl my-4">$ {{ price }}</h1>
        <button class="btn bg-dark text-white py-2 px-4">ORDER NOW</button>
    </div>
</template>

<script>
export default {
    props:{
        price:{
            required: true
        },
        title:{
            required: true
        },
        descirption:[]
    }
};
</script>

<style></style>
