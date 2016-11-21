<script>
    export default {

        props: ['tweets'],

        computed: {
            descTweets: function() {
                var tweets = this.tweets.sort(function(a, b){
                    return b.id - a.id
                })
                return tweets
            },
            randomGravatar: function() {
                var random_string = Math.random().toString(36).substring(7);
                // var gravatar = 'http://www.gravatar.com/avatar/'+random_string+'?s=50&d=identicon&r=PG';
                var gravatar = './images/profile-pic-placeholder.jpg';
                return gravatar;
            }
        },

        methods: {
            deleteTweet: function(tweet) {
                var index = this.tweets.indexOf(tweet);
                this.$http.delete('/tweet/'+tweet.id).then((response) => {
                    if ( response.status == 200 ) {
                        this.tweets.splice(index, 1);
                    } else {
                        alert(response.statusText);
                    }
                }, (response) => {
                    alert(response.statusText);
                });
            }
        }

    }
</script>

<template>
    <div class="tweet-list">
        <ul class="list-group">
            <transition-group name="list" tag="p">
            <li v-for="tweet in descTweets" :key="tweet" class="list-group-item Tweet">
                <div class="Tweet__details">
                    <div class="Tweet__userphoto">
                        <img :src="randomGravatar" alt="" />
                    </div>
                    <div class="Tweet__info">
                        <div class="Tweet__info--credits">
                            <strong>{{ tweet.user.name }}</strong><span class="timestamp"> - {{ tweet.created_at }}</span>
                        </div>
                        <div class="Tweet__info--tweet">
                            {{ tweet.message }}
                        </div>
                    </div>
                </div>
                <button class="close Tweet--delete" title="Delete Tweet" @click="deleteTweet(tweet)">&times;</button>
            </li>
            </transition-group>
        </ul>
    </div>
</template>
