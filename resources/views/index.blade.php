<html ng-app='myApp'>
  <head>
    <title>CRUD-APP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

  </head>
  <body ng-controller='myController'>
    <br>
    <!-- Trigger the modal with a button -->
    <button type="button" class="pull-right" data-toggle="modal" data-target="#myModal">+ Add Cats</button>

    <!-- Add Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Cat</h4>
          </div>
          <div class="modal-body">
            <form action="" >
              <input type="text" class="form-control" placeholder="Name" ng-model="cat.name">
              <br>
              <input type="text" class="form-control" placeholder="Email" ng-model="cat.email">
              <br>
              <input type="password" class="form-control" placeholder="Password" ng-model="cat.password">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-default" data-dismiss="modal" ng-click='save()'>Save</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Cat</h4>
          </div>
          <div class="modal-body">
            <form action="" >
              <input type="text" class="form-control" placeholder="Name" ng-model="editCat.name">
              <br>
              <input type="text" class="form-control" placeholder="Email" ng-model="editCat.email">

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-default" data-dismiss="modal" ng-click='update(editCat.id)'>Save</button>
          </div>
        </div>
      </div>
    </div>



    <br>
    <br>
    <div ng-if="loaded == false">
      <h1>
        Loading..........
      </h1>
    </div>

    <table class='table' ng-cloak ng-if="loaded == true">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Operations</th>
      </tr>
      <tr ng-repeat='cat in cats'>
        <td> @{{ cat.id }} </td>
        <td> @{{ cat.name }} </td>
        <td> @{{ cat.email }} </td>
        <td>
          <a href="" data-toggle="modal" data-target="#editModal" ng-click='editCat(cat.id)'>Edit</a>
          <a href="" ng-click='delete(cat.id)'>Delete</a>
        </td>
      </tr>
    </table>

  </body>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.2/angular.min.js'></script>
 <script src='/js/script.js'></script>

</html>