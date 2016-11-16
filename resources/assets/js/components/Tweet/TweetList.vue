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

        }

    }
</script>

<template>
    <div class="tweet-list">
        <ul class="list-group">
            <li v-for="tweet in descTweets" class="list-group-item">{{ tweet.message }} - {{ tweet.user.name }} @ {{ tweet.created_at }}</li>
        </ul>
    </div>
</template>
