require('./bootstrap');

Vue.component("chat-messages", require("./components/ChatMessages.vue"));
Vue.component("chat-form", require("./components/ChatForm.vue"));

const app = new Vue({
    el: "#app",

    data: {
        messages: [],
    },

    created() {
        this.fetchMessages();
          Echo.private("chat").listen("MessageSent", (e) => {
              this.messages.push({
                  message: e.message.message,
                  user: e.user,
              });
          });
    },

    methods: {
        fetchMessages() {
            axios.get("/chats").then((response) => {
                this.messages = response.data;
            });
        },

        addMessage(message) {
            this.messages.push(message);

            axios.post("/chats", message).then((response) => {
                console.log(response.data);
            });
        },
    },
});