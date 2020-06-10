<template>
    <article class="message" v-if="seen">
        <div class="message-header">
            <p>Example Component</p>
            <button
                class="delete"
                aria-label="delete"
                v-on:click="deleteIt"
            ></button>
        </div>
        <div class="message-body">
            {{ message }}
        </div>
        <input type="text" v-model="message" />
    </article>
</template>

<script>
export default {
    data() {
        return {
            message: "",
            seen: true
        };
    },
    methods: {
        deleteIt: function() {
            this.seen = false;
        }
    },

    mounted() {
        console.log("Component mounted.");
    }
};
</script>
