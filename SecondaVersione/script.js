console.log("js ok, ver2");

const app = new Vue({
    el: '#app',
    data() {
        return {
            cdarray: [],
        };
    },
    mounted() {
        console.log('vue');
        axios
            .get('dischifile.php')
            .then((result) => {
                console.log(result.data);
                this.cdarray = result.data;
            })
            .catch((e) => console.log(e));
    },
});
