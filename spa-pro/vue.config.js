module.exports = {
  "devServer": {
    "proxy": {
      "/auth/sign-in": {
        "target": "http://ibuypro.inshop.online",
          ws: true,
          changeOrigin: true
      }
    }
  },
  "transpileDependencies": [
    "vuetify"
  ]
}