<script>
    export default {
        props: ['newTweet'],

        data() {
            return {
                tempTweet: {
                    id: null,
                    message: '',
                    user_id: null,
                    create_at: Date.now(),
                    updated_at: Date.now()
                }
            }
        },

        methods: {
            addTweet: function() {
                this.tempTweet = {
                    id: null,
                    message: '',
                    user_id: null,
                    create_at: Date.now(),
                    updated_at: Date.now()
                };
            }
        }
    }
</script>

<template id="">
    <div class="">
        <form class="" action="/api/tweet" method="post" @submit.prevent="addTweet()">
            <h2>New Tweet</h2>
            <textarea name="message" rows="2" cols="40" v-model="tempTweet.message"></textarea>
            <p>
                <input type="submit" name="name" value="Tweet">
            </p>
        </form>
    </div>
</template>
