module.exports = {
  "devServer": {
    "proxy": {
      "^/api": {
        "target": "http://ibuypro.inshop.online"
      }
    }
  },
  "transpileDependencies": [
    "vuetify"
  ]
}