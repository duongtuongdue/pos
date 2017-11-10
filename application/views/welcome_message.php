<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    
    <style type="text/css">
        .table-item{
            color: #fff;
            font-wight: bold;
            cursor: pointer;
        }
        .quantity{
            width: 50px;
        }
    
    </style>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Pos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Trang chủ<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Quản lý bán hàng </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Quản lý kho </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Thoát</a>
          </li>
        </ul>
      </div>
    </nav>
  	<div class="container-fluid">
    		<div class="row justify-content-md-center">
        		<div class="col-md-3">
        			<div class="col">
        				<h2>Danh sách bàn  </h2>
        				<div id="accordion" role="tablist">
                          <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                              <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Bàn 1  
                                </a>
                              </h5>
                            </div>
                        
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                <ul class="list-group">
                                      <li class="list-group-item">
                                      	<div class="row">
                                          		<div class="col">
                                              	<button type="button" class="btn btn-primary">
                                                  	Món 1 
                                                 </button>
                                             </div>
                                             <div class="col">
                                                 <span class="badge badge-light">1</span>
                                             </div>
                                      	</div>                                         
									 </li>
                                      <li class="list-group-item">
                                      	<div class="row">
                                          		<div class="col">
                                              	<button type="button" class="btn btn-primary">
                                                  	Món 2 
                                                 </button>
                                             </div>
                                             <div class="col">
                                                 <span class="badge badge-light">2</span>
                                             </div>
                                      	</div>                                         
									 </li>
                                      <li class="list-group-item">
                                      	<div class="row">
                                          		<div class="col">
                                              	<button type="button" class="btn btn-primary">
                                                  	Món 3 
                                                 </button>
                                             </div>
                                             <div class="col">
                                                 <span class="badge badge-light">3</span>
                                             </div>
                                      	</div>                                         
									 </li>
            			  			</ul>
                              </div>
                              <div class="row">
                        			<div class="col text-center">
                        				<button type="button" class="btn btn-warning btn-lg">Tính tiền</button>
                        			</div>
                        		</div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                              <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Bàn 2 
                                </a>
                              </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                <ul class="list-group">
                                      <li class="list-group-item active">Món 1 <span class="badge badge-light">4</span></li>
                                      <li class="list-group-item active">Món 2 <span class="badge badge-light">4</span></li>
                                      <li class="list-group-item active">Món 5 <span class="badge badge-light">4</span></li>
            			  			</ul>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                              <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Bàn 3 
                                </a>
                              </h5>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                              <div class="card-body">
                                <ul class="list-group">
                                      <li class="list-group-item active">Món 1 <span class="badge badge-light">4</span></li>
                                      <li class="list-group-item active">Món 2 <span class="badge badge-light">4</span></li>
            			  			</ul>
                              </div>
                            </div>
                          </div>
                		</div>
                		<h2>Đang xử lý </h2>
                		<div id="accordion" role="tablist">
                          <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                              <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Bàn 1  
                                </a>
                              </h5>
                            </div>
                        
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                <ul class="list-group">
                                      <li class="list-group-item">
                                      	<div class="row">
                                          		<div class="col">
                                              	<button type="button" class="btn btn-primary">
                                                  	Món 1 
                                                 </button>
                                             </div>
                                             <div class="col">                                                 
                                                 <button type="button" class="btn btn-outline-primary">+</button>
                                                 <input type="text" name="quantity" value="1" class="quantity text-center" />
                                                 <button type="button" class="btn btn-outline-danger">-</button>
                                                 <button type="button" class="btn btn-success">xong</button>
                                                 <button type="button" class="btn btn-danger">huỷ</button>
                                             </div>
                                      	</div>                                         
									 </li>
                                      <li class="list-group-item">
                                      	<div class="row">
                                          		<div class="col">
                                              	<button type="button" class="btn btn-primary">
                                                  	Món 2 
                                                 </button>
                                             </div>
                                             <div class="col">                                                 
                                                 <button type="button" class="btn btn-outline-primary">+</button>
                                                 <input type="text" name="quantity" value="1" class="quantity text-center" />
                                                 <button type="button" class="btn btn-outline-danger">-</button>
                                                 <button type="button" class="btn btn-success">xong</button>
                                                 <button type="button" class="btn btn-danger">huỷ</button>
                                             </div>
                                      	</div>                                         
									 </li>
                                      <li class="list-group-item">
                                      	<div class="row">
                                          		<div class="col">
                                              	<button type="button" class="btn btn-primary">
                                                  	Món 3 
                                                 </button>
                                             </div>
                                             <div class="col">                                                 
                                                 <button type="button" class="btn btn-outline-primary">+</button>
                                                 <input type="text" name="quantity" value="1" class="quantity text-center" />
                                                 <button type="button" class="btn btn-outline-danger">-</button>
                                                 <button type="button" class="btn btn-success">xong</button>
                                                 <button type="button" class="btn btn-danger">huỷ</button>
                                             </div>
                                      	</div>                                         
									 </li>
            			  			</ul>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                              <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Bàn 2 
                                </a>
                              </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                <ul class="list-group">
                                      <li class="list-group-item active">Món 1 <span class="badge badge-light">4</span></li>
                                      <li class="list-group-item active">Món 2 <span class="badge badge-light">4</span></li>
                                      <li class="list-group-item active">Món 5 <span class="badge badge-light">4</span></li>
            			  			</ul>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                              <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Bàn 3 
                                </a>
                              </h5>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                              <div class="card-body">
                                <ul class="list-group">
                                      <li class="list-group-item active">Món 1 <span class="badge badge-light">4</span></li>
                                      <li class="list-group-item active">Món 2 <span class="badge badge-light">4</span></li>
            			  			</ul>
                              </div>
                            </div>
                          </div>
                		</div>
        				
        			</div>
        		</div>
            <div class="col-md-6">
            		<h2>Danh sách bàn  </h2>
             	<div class="row">
                 		<div class="card text-center table-item">
                              <div class="card-header">
                                Featured
                              </div>
                              <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">........</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                              <div class="card-footer text-muted">
                                2 days ago
                              </div>
                        </div>
                 		<div class="card text-center">
                              <div class="card-header">
                                Featured
                              </div>
                              <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">........</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                              <div class="card-footer text-muted">
                                2 days ago
                              </div>
                        </div>
             	</div>
            </div>
            <div class="col">
            		<h2>Thực đơn </h2>
            		<div id="accordion" role="tablist">
                  <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                      <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Đồ chiên  
                        </a>
                      </h5>
                    </div>
                
                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <ul class="list-group">
                              <li class="list-group-item active">Xúc xích <button class="float-right btn btn-primary">+</button></li>
                              <li class="list-group-item">Gà ráng</li>
                              <li class="list-group-item">Cá viên</li>
                              <li class="list-group-item">Bò viên </li>
    			  			</ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Thức uống 
                        </a>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        <ul class="list-group">
                              <li class="list-group-item active">Trà sữa </li>
                              <li class="list-group-item">Trà chanh </li>
    			  			</ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" role="tab" id="headingThree">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Topping
                        </a>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        <ul class="list-group">
                              <li class="list-group-item active">Thạch trân châu  </li>
                              <li class="list-group-item">Thạch chocolate trắng  </li>
    			  			</ul>
                      </div>
                    </div>
                  </div>
                </div>                              		
            </div>
      	</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script>
    	$(document).ready(function(){
      	$('.table-item').click(function(){
			if($(this).attr('status') == 'bg-info'){
				var today = new Date();
				var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+(today.getFullYear());
				var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
				var dateTime = time+' '+date;
				$(this).removeClass('bg-info').addClass('bg-danger').attr('status', 'bg-danger').find('.card-text:eq(0)').text('Mở lúc: '+dateTime+'');
			}else if($(this).attr('status') == 'bg-danger'){
				$(this).css('border', '6px solid yellow');
		    }
        });
	})
    </script>
  </body>
</html>