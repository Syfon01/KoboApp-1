@extends('layouts.app')
<style>
label {display: block; padding: 5px; position: relative; padding-left: 10px;}
label input {display: none;}
label span {border: 1px solid #ccc; width: 17px; height: 17px; position: absolute; overflow: hidden; line-height: 1; text-align: center; border-radius: 100%; font-size: 10pt; left: 0; top: 50%; margin-top: -7.5px;}
input:checked + span {background: #ccf; border-color: #ccf;}

input {
    border: none;
    background: transparent;
}

.modal.left .modal-dialog {
	position: fixed;
	margin: auto;
	width: 500px;
	height: 100%;
	-webkit-transform: translate3d(0%, 0, 0);
	-ms-transform: translate3d(0%, 0, 0);
	-o-transform: translate3d(0%, 0, 0);
	transform: translate3d(0%, 0, 0);
}

.modal.left .modal-content {
	height: 100%;
	overflow-y: auto;
}

.modal.left .modal-body {
	padding: 15px 15px 80px;
}

.modal.left.fade .modal-dialog {
	left: -320px;
	-webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
	-moz-transition: opacity 0.3s linear, left 0.3s ease-out;
	-o-transition: opacity 0.3s linear, left 0.3s ease-out;
	transition: opacity 0.3s linear, left 0.3s ease-out;
}

.modal.left.fade.show .modal-dialog {
	left: 0;
}



</style>
@section('content')

{{-- heading section --}}
    <section id="history">
        <div class="container mt-5">
            <div class="row p-3">
                <h2>Sales</h2>
                <span class="accountant ml-auto btn btn-accountant">
                <a href="" class="btn-accountant">
                    <img src="https://res.cloudinary.com/samuelweke/image/upload/v1527079189/profile.png"> Accountant
                </a>                
                </span>
            </div>
{{-- end of heading section --}}

{{-- sales chart --}}
            <div class="row mt-4">
                <div class="col-md-8">
                    <div class="bg-white p-3"> 
                        <div class="row">
                            <div class="col-md-5">
                                <h4 class="sale-h3">Monthly sales</h4>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-check form-check-inline">
                                        <label><input type="radio" name="select" /><span>D</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label><input type="radio" name="select" /><span>W</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label><input type="radio" name="select" /><span>M</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label><input type="radio" name="select" /><span>Y</span></label>
                                    </div>
                                          
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                            <canvas id="canvasSale"></canvas>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white p-3">
                        <h4 class="sale-h4">Top Sales</h4>
                        <table class="table table-striped table-hover">
                            <thead class="sale-head">
                              <tr>
                                <th scope="col">Products</th>
                                <th scope="col">Number sold</th>
                                <th scope="col">Amount</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class='clickable-row' data-href='url://'>
                                <td><a href="">Cars</a></td>
                                <td><a href="">33</a></td>
                                <td><a href="">12,000</a></td>
                              </tr>
                              <tr class='clickable-row' data-href='url://'>
                                <td>Furnitures</td>
                                <td>55</td>
                                <td>68,000</td>
                              </tr>
                              <tr class='clickable-row' data-href='url://'>
                                <td>Phone</td>
                                <td>45</td>
                                <td>23123</td>
                              </tr>
                              <tr class='clickable-row' data-href='url://'>
                                    <td>Car</td>
                                    <td>33</td>
                                    <td>12,000</td>
                                  </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
{{-- end of sales chart --}}
        </div>
    </section>

    <section id="sale-table">
        <div class="container mt-4">
            <div class="bg-white">
                <div class="table-responsive table-responsive-sm">
                <table class="table table-striped table-hover" id="mainTable" width="50%" cellpadding="0" cellspacing="0">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product</th>
                            <th scope="col">Number Sold</th>
                            <th scope="col">Sales Price ()</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Date</th>
                
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td >
                            <input type="number" placeholder="S/NO" id="" data-toggle="modal" data-target="#exampleModal">
                              </td>
                            <td>
                                <input type="text" placeholder="Product" name="">
                            </td>
                            <td>
                                <input type="text" placeholder="Number Sold" name="">
                            </td>
                            <td>
                                <input type="number" placeholder="Sales Price" name="">
                            </td>
                            <td>
                                <input type="text" placeholder="Customer" name="">
                            </td>
                            <td>
                                <input type="date" placeholder="Date" name="">
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
            </div> 
            <div class="row p-3">
                <div id="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">View More</div>            
                <div id="addNew" class="btn btn-success ml-auto">Add Sales</div>
            </div>
        </div>
    </section>
    <div class="modal left fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="nav flex-sm-column flex-row">
                        <a class="nav-item nav-link active" href="#">Home</a>
                        <a href="#" class="nav-item nav-link">Link</a>
                        <a href="#" class="nav-item nav-link">Link</a>
                        <a href="#" class="nav-item nav-link">Link</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection