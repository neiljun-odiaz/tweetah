import Vue from 'vue';
import VueResource from 'vue-resource';

import TweetList from './components/Tweet/TweetList.vue';
import TweetAddForm from './components/Tweet/TweetAdd.vue';
import Child from './components/Example.vue';

Vue.use(VueResource);

Vue.component('tweet-list', TweetList);
Vue.component('new-tweet-form', TweetAddForm);

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name=csrf-token]').getAttribute('content');

new Vue({
    el: '#app',

    data: {
        tweets: [],
        newTweet: {}
    },

    created() {
        var temp = this;
        this.$http.get('/api/tweet').then((response) => {
            if ( response.status == 200 ) {
                temp.tweets = response.data
            }
        }, (response) => {
            console.log(response)
        });
    }
});
