@extends('layouts.app')
<style>
input {
    border: none;
    background: transparent;
}
</style>
@section('content')
<section id="particles"></section>
    <div id="container">  
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%">
            <h6> 25%</h6>
            </div>
        </div>
    </div>
    <div class="container bg-white mt-5">
        <div aria-label="breadcrumb arr-right">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="/opening-balance">Opening Balance</a></li>
                <li class="breadcrumb-item active" aria-current="page">Existing Assets</li>                
            </ol>
        </div>

        <div class="bg-white mt">
                
            <div class="table-responsive table-responsive-sm p-4 ">
                <table  width="200" class="table table-striped table-hover table-style"  id="dataTable">
                    <thead class="p-3">
                      <tr class="tab">
                        <th scope="col">Asset Name</th>
                        <th scope="col">Cost Price (&#8358;)</th>
                        <th scope="col">Purchase Date</th>
                        <th scope="col"><i class="fa fa-plus-square" style="font-size:24px" value="Add Row" onclick="addRow('dataTable')"></i></th>
            
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td > Housing Estate</td>
                        <td> 43,000 </td>
                        <td>21/09/2009</td>
                        <td>IG</td>
                      </tr>
            
                      <tr>
                        <td > Housing Estate</td>
                      <td> 43,000 </td>
                      <td>21/09/2009</td>
                      <td>IG</td>
                    </tr>
            
                    <tr>
                        <td > Housing Estate</td>
                      <td> 43,000 </td>
                      <td>21/09/2009</td>
                      <td>IG</td>
                    </tr>
            
                    <tr>
                            <td ><input type="text" placeholder=""> </td>
                          <td> <input type="number" placeholder=""></td>
                          <td> <input type="" placeholder=""> </td>
                          <td>IG</td>
                        </tr>
                
                       
                    </tbody>
                </table>
                <div class="pull-right">
                    <a class="btn btn-started" href="/debtors">Next</a>
                </div>
            </div> 
                       
        </div>
        
    </div>


@endsection