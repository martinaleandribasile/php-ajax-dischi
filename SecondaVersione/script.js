console.log("js ok, ver2");

const app = new Vue({
    el: '#app',
    data() {
        return {
            cdarray: [],
            valuegenre: '',
            genreselected: 'all'
        };
    },
    mounted() {
        console.log('vue');
        axios
            .get('dischifile.php')
            .then((result) => {
                this.cdarray = result.data;
            })
            .catch((e) => console.log(e));
    },
    methods: {
        filterGenre() {
            this.valuegenre = this.genreselected
            console.log(this.valuegenre)
            axios
                .get('dischifile.php?genre=' + this.valuegenre)
                .then((result) => {
                    console.log(result.data);
                    this.cdarray = result.data;
                })
                .catch((e) => console.log(e));
        }
    }
});
