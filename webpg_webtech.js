//var jQueryScript = document.createElement('script');  
//jQueryScript.setAttribute('src','https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.js');
//document.head.appendChild(jQueryScript);
//<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
var app= angular.module('myapp',[]);
app.controller('Resctrl', function ($scope, $http){
    $http.get("./resturant2.json").then(function (data){
        console.log(data.data);
        $scope.restu= [];
        $scope.restu= data.data;
    })
    
    
});

