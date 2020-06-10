<template>
    <li>{{ todont.text }}</li>
</template>

<script>
export default {
    props: ["todont"],
    mounted() {
        console.log("Test Component mounted.");
    }
};
</script>
