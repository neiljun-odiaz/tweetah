<script>
    export default {
        props: ['tweets'],

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
                this.tweets.push(this.tempTweet)
                this.tempTweet = {
                    id: null,
                    message: '',
                    user_id: null,
                    create_at: Date.now(),
                    updated_at: Date.now()
                }
            }
        }
    }
</script>

<template id="">
    <div>
        <form class="form" v-on:submit.prevent="addTweet()">
            <div class="form-group">
                <textarea name="message" rows="2" cols="40" class="form-control" v-model="tempTweet.message"></textarea>
            </div>
            <div class="form-group text-right">
                <button type="submit" name="button" class="btn btn-primary">Tweet</button>
            </div>
        </form>
    </div>
</template>
