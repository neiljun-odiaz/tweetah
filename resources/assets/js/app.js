import Vue from 'vue';
// import VueResource from 'vue-resource';

import TweetList from './components/Tweet/TweetList.vue';
import TweetAddForm from './components/Tweet/TweetAdd.vue';
import Child from './components/Example.vue';

require('./bootstrap');

Vue.component('tweet-list', TweetList);
Vue.component('new-tweet-form', TweetAddForm);

new Vue({
    el: '#app',
    data: {
        tweets: [],

        newTweet: {}
    }
});
