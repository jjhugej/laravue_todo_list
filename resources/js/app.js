require("./bootstrap");

window.Vue = require("vue");

const files = require.context("./", true, /\.vue$/i);
files.keys().map(key =>
    Vue.component(
        key
            .split("/")
            .pop()
            .split(".")[0],
        files(key).default
    )
);

const app = new Vue({
    el: "#app",
    data: {
        groceryList: [
            { id: 0, text: "Vegetables" },
            { id: 1, text: "Cheese" },
            { id: 2, text: "Whatever else humans are supposed to eat" }
        ]
    }
});
