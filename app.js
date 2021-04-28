var app = new Vue({
  el: "#app",

  mounted() {
    axios.get("http://localhost/php-ajax-dischi/server.php").then((result) => {
      this.library = result.data;
      for (let i = 0; i < this.library.length; i++) {
        if (!this.authorLibrary.includes(this.library[i].author)) {
          this.authorLibrary.push(this.library[i].author);
        }
      }
      this.authorLibrary.sort((a, b) => (a > b ? 1 : -1));
    });
  },

  data: {
    library: "",
    authorLibrary: ["All"],
    selectedAuthor: "All",
  },

  methods: {
    filterAuthor(singleAlbum) {
      if (
        this.selectedAuthor == singleAlbum.author || this.selectedAuthor == "All"
      ) {
        return true;
      } else {
        return false;
      }
    },
  },
});
Vue.config.devtools = true;



