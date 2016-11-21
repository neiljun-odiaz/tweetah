<script>
    export default {
        props: ['tweets'],

        data() {
            return {
                tempTweet: { message: '' }
            }
        },

        methods: {
            addTweet: function() {
                var allTweets = this.tweets;
                var postData = {
                    message: this.tempTweet.message
                }
                this.$http.post('/tweet', postData).then((response) => {
                    if ( response.status == 201 ) {
                        allTweets.push(response.data)
                        this.tempTweet = { message: '' }
                    }
                }, (response) => {
                    console.log(response)
                });
            }
        }
    }
</script>

<template id="">
    <div>
        <form class="form" v-on:submit.prevent="addTweet()">
            <div class="form-group">
                <textarea name="message" rows="2" cols="40" class="form-control" v-model="tempTweet.message" placeholder="What's happening?"></textarea>
            </div>
            <div class="form-group text-right">
                <button type="submit" name="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Tweet</button>
            </div>
        </form>
        {{newTweet}}
    </div>
</template>
