<template>
    <div class="message"><button class="btn btn-primary" @click="test">{{ msg }}</button></div>
</template>

<script>
    export default {
        data () {
            return {
                msg: 'Hallo'
            }
        },
        methods: {
            test: function () {
                let that = this;
                let testPromise = $.post({
                    url: window.vueTypo3App.action.test,
                    dataType: 'json'
                });
                $.when(testPromise).then(function (testPromise) {
                    console.log(testPromise);
                    that.msg = testPromise.test;
                }, function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR, textStatus, errorThrown);
                });
            }
        }
    }
</script>

<style>
    .message {
        color: blue;
    }
</style>