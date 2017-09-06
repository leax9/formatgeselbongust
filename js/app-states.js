$stateProvider
  .state('index', {
      url: '/index',
      views: {
          layout: {
              templateUrl: "templates/index-template.php"
          }
      },
      controller: 'bonGustMainController'
  })

  .state('login', {
      url: '/login',
      views: {
          layout: {
              templateUrl: "html/login.html"
          }
      },
      controller: 'sessionMainController'
})