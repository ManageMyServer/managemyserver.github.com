<?php
<html>
   <head>
      <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <title>Home - ManageMyServer</title>
      <meta charset="utf-8">
      <style>
         p{font-size:13;};
      </style>
   </head>
   <body>   
      <!-- Navigation is included -->
      include 'nav.php';
      <!-- Navigation End -->
      <div class="container">
        <div class="jumbotron">
            <h1>ManageMyServer</h1>
            <p>Slick, Modern, Open-Source</p>
            <p><a href="/get.html" class="btn btn-primary btn-large">Get it!</a>
            </p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>Features</h3>
            </div>
        </div>
        <!-- /.row -->
        <div class="row text-center">
           <div class="col-md-3 col-sm-6">
              <div class="thumbnail">
                 <img src="assets/ServerNetwork_View.PNG" height="800" width="500" alt="">
                    <div class="caption">
                       <h3>Server Overview</h3>
                        <p>See all your Servers at the same moment.</p>
                        <p>
                           <a href="#" class="btn btn-primary">More...</a>
                        </p>
                    </div>
                </div>
            </div>
           <div class="col-md-3 col-sm-6">
              <div class="thumbnail">
                 <img src="assets/Server_Console.PNG" height="800" width="500" alt="">
                    <div class="caption">
                       <h3>Web Console</h3>
                        <p>Manage your Server through the console even at a web browser.</p>
                        <p>
                           <a href="#" class="btn btn-primary">More...</a>
                        </p>
                    </div>
                </div>
            </div>
           <div class="col-md-3 col-sm-6">
              <div class="thumbnail">
                 <img src="assets/Server_View.PNG" height="800" width="500" alt="">
                    <div class="caption">
                       <h3>Server Manager</h3>
                        <p>Manage and configure your server from the panel out.</p>
                        <p>
                           <a href="#" class="btn btn-primary">More...</a>
                        </p>
                    </div>
                </div>
            </div>
           <div class="col-md-3 col-sm-6">
              <div class="thumbnail">
                 <img src="assets/Edit_server.PNG" height="800" width="500" alt="">
                    <div class="caption">
                       <h3>Server Creator</h3>
                        <p>Adding your Server is easier then eating cookies Mhhhmmm.....</p>
                        <p>
                           <a href="#" class="btn btn-primary">More...</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
      </div>   
   <!-- Please leave these credits. -->
<footer class="container"><hr>&copy; ManageMyServer<span class="pull-right"><a href="https://github.com/ManageMyServer">This site was made by ManageMyServer.</a></span></footer>
   </body>
</html>
?>