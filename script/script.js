// console.log("VUE OK", Vue);

//! VUE_JS!//
const { createApp } = Vue;
const apiUri = 'http://localhost/php-dischi-json/api/index.php';
const app = Vue.createApp({
    name: "Vue",
    data() {
        return {
            discs: [],
            genres: [],
        }
    },
    computed: {

    },
    methods: {

    },
    created() {
        axios.get(apiUri).then(res => {
            this.discs = res.data;


            for (let i = 0; i < this.discs.length; i++) {
                if (this.genres.indexOf(this.discs[i].genre) === -1) {
                    this.genres.push(this.discs[i].genre)
                }
            }
            return this.genres;
        });
    }

});

app.mount("#root");
