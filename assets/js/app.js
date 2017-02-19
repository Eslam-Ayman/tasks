(function(){
   var app = angular.module('tasks',['ngRoute']);
   
   app.config(function($routeProvider)
   {
      $routeProvider.when("/home",{templateUrl: "assets/home.php"})
                    .when("/signin",{
                      resolve:
                      {
                        "check" : function($location,$rootScope){ 
                          if($rootScope.session) $location.path('/profile'); 
                        }
                      },
                      templateUrl: "assets/signin.php"})
                    .when("/signup",{
                      resolve:
                      {
                        "check" : function($location,$rootScope){ 
                          if($rootScope.session) $location.path('/profile'); 
                        }
                      },
                      templateUrl: "assets/signup.php"})
                    .when("/profile",{
                      resolve:
                      {
                        "check" : function($location,$rootScope){ 
                          if(!$rootScope.session) $location.path('/signin'); 
                        }
                      },
                      templateUrl: "assets/profile.php"})
                    .when("/mustDo",{templateUrl: "contents/must.html"})
                    .when("/done",{templateUrl: "contents/done.html"})
                    .when("/trash",{templateUrl: "contents/trash.html"})
                    .when("/members",{templateUrl: "contents/members.html"})
                    .when("/comments",{templateUrl: "contents/comments.html"})
                    .when("/chat",{templateUrl: "contents/chat.html"})
                    .otherwise({templateUrl: "assets/home.php"});
    //$locationProvider.html5mode(true);
   });

  app.controller("pathCtrl",function($rootScope) {
    $rootScope.session = true;
    });
   /*app.controller("pathCtrl",function($scope,$location) {
    switch($location.path())
    {
      case "/profile": $location.path('/signin'); break;
      case "/signin": $location.path('/profile'); break;
      case "/signup": $location.path('/profile'); break;
      default: $location.path('/home');
    }
    
   });*/
   
   app.controller("sign",function($scope,$http,$window) {
      $scope.signup = function(name,email,password,confirmPassword)
      {
          $http({
             method:"POST",
             url:"api/auth/register",
             data: {name: name, email: email, password: password, password_confirmation: confirmPassword}
          }).then(function mySucces(response) {
               $window.location.href = 'index.html';
                
        //   $location.path("/projects/api/public/contents/chat.html");
          });  
      }
      //$scope.nav = false;
      $scope.signin = function(email,password)
      {
          $http({
             method:"POST",
             url:"api/auth/login",
             data: {email: email, password: password}
          }).then(function mySucces(response) {
           if(!response.data.id){
               alert(":( Sorry your data is wrong");
           }else{
               
               $scope.nav = true;
               console.log($scope.nav);
               $window.location.href = 'inner.html#/mustDo';
               //$window.location.href = 'app#/home';
               
           }
         
          });  
      }
      $scope.logout = function()
      {
          $http({
             method:"POST",
             url:"api/auth/login",
             data: {email: $scope.email, password: $scope.password}
          }).then(function mySucces(response) {
           if(!response.data.id){
               alert(":( Sorry your data is wrong");
           }else{
                
               $window.location.href = 'localhost/projects/api/public/inner.html#/mustDo';
           }
         
          });  
      }
       
   });
   
   
   
   
   app.controller('side-tabs', function()
   {
       this.noTab = 1;
       this.setTab = function(no)
       {
           this.noTab = no;
       };
       this.checkTab = function(no)
       {
           return this.noTab === no;
       };
   });
   app.controller('inner-content', function()
   {
       this.doContents = 
       [
           {
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },
           {
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },
           {
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           }
       ];
       this.doneContents = 
       [
           {
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           }
       ];
       this.trashContents = 
       [
           {
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           },{
               img: "img/logo.jpg",
               title: 'Thumbnail label',
               paragraph: "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
           }
       ];
   });
})();