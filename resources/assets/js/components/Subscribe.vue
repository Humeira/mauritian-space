<template>
    <div>
        <form>
            <input type="email" name="email" v-model="email" class="my-2 p-2 border-2 rounded">
            <button v-on:click.prevent="subscribe(email)"
                    class="bg-blue-light hover:bg-blue border-2 text-white font-bold p-2 border-blue-light hover:border-blue rounded">
                Subscribe
            </button>
        </form>
    </div>
</template>
<script>
    import axios from 'axios';
    export default{
        data () {
            return {
                email: ''
            }
        },
        methods: {
            subscribe: function (val) {
                console.log(val);
                axios.post('/subscribe', {
                    email: val
                }).then(function (response) {
                    console.log(response);
                }).catch(function (error) {
                    console.log(error);
                });
            }
        }
    }
</script>