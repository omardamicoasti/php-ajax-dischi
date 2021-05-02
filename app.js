var app = new Vue({
  el: "#app",

  data: {
    library: "",
    authorLibrary: ["All"],
    selectedAuthor: "All",
  },

  mounted() {
    axios.get("http://localhost/php-ajax-dischi/server.php").then((result) => {
      this.library = result.data;
      this.getAuthorsList();
    });
    
  },

  methods: {
    getAuthorsList() {
      axios.get("http://localhost/php-ajax-dischi/server.php?listAuthor=true").then((result) => {
        this.authorLibrary = result.data;
      });
    },
    filterByAuthor() {
      if (this.selectedAuthor == "All") {
        axios.get("http://localhost/php-ajax-dischi/server.php").then((result) => {
          this.library = result.data;
    });
      };
      axios.get("http://localhost/php-ajax-dischi/server.php?author=" + this.selectedAuthor).then((result) => {
        this.library = result.data;
      });
    },
    
  },
});
Vue.config.devtools = true;



