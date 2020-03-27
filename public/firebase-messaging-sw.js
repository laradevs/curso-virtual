importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-messaging.js');


// Initialize Firebase
var config = {
    apiKey: "AIzaSyBw6NWrQEbuBczTENslFlzWLPHRUhBcjLs",
    authDomain: "laradevs-24889.firebaseapp.com",
    databaseURL: "https://laradevs-24889.firebaseio.com",
    projectId: "laradevs-24889",
    storageBucket: "laradevs-24889.appspot.com",
    messagingSenderId: "208071546977",
    appId: "1:208071546977:web:e633220f35bac63b7a7220"
};

firebase.initializeApp(config);
const messaging = firebase.messaging();
