<script>
    export default {

        props: ['tweets'],

        computed: {
            descTweets: function() {
                var tweets = this.tweets.sort(function(a, b){
                    return b.id - a.id
                })
                return tweets
            }
        },

        methods: {
            deleteTweet: function(tweet) {
                var index = this.tweets.indexOf(tweet);
                this.$http.delete('/api/tweet/'+tweet.id).then((response) => {
                    if ( response.status == 200 ) {
                        this.tweets.splice(index, 1);
                    }
                }, (response) => {
                    console.log(response)
                });
            }
        }

    }
</script>

<template>
    <div class="tweet-list">
        <ul class="list-group">
            <li v-for="tweet in descTweets" class="list-group-item">
                {{ tweet.message }} - {{ tweet.user.name }} @ {{ tweet.created_at }}
                <button class="close" title="Delete Tweet" @click="deleteTweet(tweet)">&times;</button>
            </li>
        </ul>
    </div>
</template>
