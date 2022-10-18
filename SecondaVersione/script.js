console.log("js ok, ver2");

const app = new Vue({
    el: '#app',
    data() {
        return {
            cdarray: [],
            valuegenre: '',
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
        filterGenre(e) {
            this.valuegenre = e.target.value
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
