 <?php
 header("Access-Control-Allow-Origin: *");?>


<!DOCTYPE html>

<html>

<head>


	<title>Top-Git</title>

    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="dist/css/bootstrap.min.css" crossorigin="anonymous"/>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.css"/>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.2.0/css/bootstrap-slider.min.css">

    <link rel="shortcut icon" href="dist/ico/favicon-gitlab.ico">

	<link rel="stylesheet" type="text/css" href="dist/css/index.css">


	<script src="dist/js/jquery.min.js"></script>

	<script src="dist/js/angular.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.2.0/bootstrap-slider.min.js"></script>

	<script src="dist/js/type.js"></script>
    <script src="dist/js/typed.js"></script>

    <script type="text/javascript" src="dist/js/Script.js"></script>

    




</head>

<body ng-app="app">



<nav class="navbar navbar-fixed-top material_navbar bg-faded">
		  <div class="container-fluid">

		  <div class="navbar-header">
		    
		    <h4 style="position:relative;float:right;top:40px;left:5px">

                        <div>
                    
                            <span style="color:white"> - </span><span class="typewriter"></span>

                        </div>
                        
                    </h4> 
              

		    <a class="navbar-brand material_navbar_brand" href="#"> 
		    	<i  style="color:#f5f5f5;font-size:40px;" class="fa fa-gitlab">
		    	</i>

		    		<b class="material_navbar_brand" style="font-size:40px;color:white;"> 
                        Top
                        <b style="color:#ffcc80;">
                            <code>Git</code>
                        </b> 
                    
                    </b>


                
		    	</a>
		  </div>

		  </div>
	</nav>

    <div id="wrapper" ng-controller="Ctrl1">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    
                </li>
                
                <li> <center style="background:white;border:1px solid white;color:black;border-radius:3px;"> <label> <i class="fa fa-star-half-o"  style="font-size:18px;padding:3px;" aria-hidden="true"> </i> RateLimit </label> </center> </li>

                <li style="margin-top:20px;" ng-model="QueryLimit">	
		                <center>

		                	<label> {{QueryLRemain}} Out of {{QueryLimit}}</label>
		                
		                </center>	
                
                </li>

                <li style="margin-top:20px;"> <center style="background:white;border:1px solid white;color:black;border-radius:3px;"> <label> <i class="fa fa-star-o"  style="font-size:18px;padding:3px;" aria-hidden="true"> </i> Stars </label> </center>
                </li>

                <li style="margin-top:20px">
                	
                	<center>
                		
                		<div>
                			
                			<input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="1" data-slider-value="14"/>


                		</div>

                	</center>

                </li>


                 <li style="margin-top:20px;"> <center style="background:white;border:1px solid white;color:black;border-radius:3px;"> <label> <i class="fa fa-code-fork" style="font-size:18px;padding:3px;" aria-hidden="true"> </i> Fork Limit </label> </center>
                </li>

                <li style="margin-top:20px">
                    
                    <center>
                        
                        <div>
                            
                            <input id="ex2" data-slider-id='ex2Slider' type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="1" data-slider-value="14"/>


                        </div>

                    </center>

                </li>

            
            </ul>
        

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">


            <div class="container-fluid">


            <!--Data Populated when loading is complete-->

            <div class="row" style="margin-bottom:20px;">

            	<div id="custom-search-input">
                            
                        <div class="input-group ">

                                
                                <input type="text" class=" form-control Sinput" id="LInput" ng-keypress="LsearchBar($event)" placeholder="Search" />
                                
                                <div class="input-group-addon btn btn-default" id="clearLanguage" ng-click="SearchB()">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </div>
                                

                         
                         </div>

                         

                 </div>


            </div>

            <div class="row" style="margin-bottom:20px;">
                

                <div class="col-md-12 col-xs-12 col-sm-12 " id="RepoCount" hidden>
                    
                    <center>

                        <small> Found {{ PCount }} Project's For <kbd>{{ myData[0]['language'] }}</kbd> </small> 
                    </center>
                
                </div>

            </div>

            
            <div class="row vertical-center"  ng-model="Ploader" ng-show="Ploader">
                    
                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center">
                        
                        <!--Start of Page oader-->
                        
                        <center>
                        
                                <p class="loader" >


                                       

                                    
                                </p>

                        </center>
                        

                        <!--End Of Page Loader-->


                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-5"></div>


            </div>

            
                
                <div class="row" style="margin-bottom:10px;" ng-model="onList" id="item" ng-repeat="x in myData">

                 
                    <div class="col-md-12"  ng-show="onList" style="border-radius:10px;background:#f5f5f5;">

                    	<div class="row" style="padding:10px;">
                    		
                    		<span>
                                <i class="fa fa-angle-double-right" style="float:left;font-size:50px;" aria-hidden="true"></i>
                            </span>
                            <span id="RepoItem"> 
                                <a href="{{x.clone_url}}" class="text-capitalize" target="_blank"> {{ x.name }} </a>
                            </span>

                    	</div>

                    	
                        <div class="row" style="padding-bottom:10px;">
                    		
                    		
                    		<div class="col-md-11" style="margin-left:40px;">
                    			
                    			<span style="border-right:1px solid black">Language {{x.language}} </span>

                    			<span style="margin-left:5px;"> 
                                
                                {{x.description}}

                                </span>
                    		
                    		</div>

                    	</div>

                        
                    </div>

                </div>

                 <!--Data Populated when loading is complete-->

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


</body>


</html>