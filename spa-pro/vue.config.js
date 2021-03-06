module.exports = {
  "devServer": {
    "proxy": {
      "/auth/sign-in": {
        "target": "http://ibuypro.inshop.online",
          ws: true,
          changeOrigin: true
      },
      "/auth/sign-up": {
        "target": "http://ibuypro.inshop.online",
          ws: true,
          changeOrigin: true
      },
      "/shops": {
        "target": "http://ibuypro.inshop.online",
          ws: true,
          changeOrigin: true
      },
      // "/shop/:id": {
      //   "target": "http://ibuypro.inshop.online",
      //     ws: true,
      //     changeOrigin: true
      // },
      "/chain": {
        "target": "http://ibuypro.inshop.online",
          ws: true,
          changeOrigin: true
      },
      "/category/:id": {
        "target": "http://ibuypro.inshop.online",
          ws: true,
          changeOrigin: true
      },
      "/racks/:id": {
        "target": "http://ibuypro.inshop.online",
          ws: true,
          changeOrigin: true
      },
      "/find-path/:id": {
        "target": "http://ibuypro.inshop.online",
          ws: true,
          changeOrigin: true
      },
      "/categories/:id": {
        "target": "http://ibuypro.inshop.online",
          ws: true,
          changeOrigin: true
      },
      "/racks*": {
        "target": "http://ibuypro.inshop.online",
          ws: true,
          changeOrigin: true
      },
      "/find-path*": {
        "target": "http://ibuypro.inshop.online",
          ws: true,
          changeOrigin: true
      },
      "/maps": {
        "target": "http://ibuypro.inshop.online/",
          ws: true,
          changeOrigin: true
      }
    }
  },
  "transpileDependencies": [
    "vuetify"
  ]
};