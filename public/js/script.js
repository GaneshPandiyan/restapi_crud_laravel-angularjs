angular
      .module('myApp', [])
      .controller('myController', ($scope, $http) => {

        $scope.loaded = false;
        // get all cats
        function getAllCats () {
          $http.get('http://localhost:8000/api/cats')
           .then((response) => {
             $scope.cats = response.data;
             $scope.loaded = true;
           }).catch((err) => {
             console.log(err);
           });
        }
        getAllCats();


        // add cats
         $scope.cat = {};
         $scope.save = () => {
           $http.post('http://localhost:8000/api/cats', $scope.cat)
            .then((result) => {
              alert('Sucess');
              $scope.cats.push(result.data);
            }).catch((err) => {
              console.log(err);
            });
         }


        // get single cat for edit
        $scope.editCat = (id) => {
          $http.get('http://localhost:8000/api/cats/' + id)
          .then(function(response){
            $scope.editCat = response.data;
          });
        };


        // update cat
        $scope.update = (id) => {
          $http.put('http://localhost:8000/api/cats/' + id, $scope.editCat)
          .then(function(response){
            $scope.cats = response.data;
            alert('Successfully updated');
            getAllCats();
          })
          .catch((err) => {
            console.log(err);
          })
        }


         // delete cat
         $scope.delete = (id) => {
          $http.delete('http://localhost:8000/api/cats/' + id)
          .then((result) => {
            alert('Sucessfully Deleted');
            getAllCats();
          }).catch((err) => {
            console.log(err);
          });
         }
      });