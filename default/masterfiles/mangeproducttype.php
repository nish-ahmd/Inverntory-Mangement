<?php

include_once "../../files/head.php";

?>
<!-- --------------------------------------------------------------------------------------------------- -->

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Manage Product Type</h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Widget</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add New Product Type</h5>

                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                            <!-- <li><i class="feather icon-trash-2 close-card"></i></li> -->
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-block">

                                    <form>



                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label class=" col-form-label">Type Code</label>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-sm-4">
                                                <label class=" col-form-label">Type Name</label>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-sm-4">
                                                <label class=" col-form-label">Group</label>
                                                <select name="select" class="form-control">
                                                                    <option value="opt1">Select Group</option>
                                                                    <option value="opt2">Type 2</option>
                                                                    <option value="opt3">Type 3</option>
                                                                    <option value="opt4">Type 4</option>
                                                                    <option value="opt5">Type 5</option>
                                                                    <option value="opt6">Type 6</option>
                                                                    <option value="opt7">Type 7</option>
                                                                    <option value="opt8">Type 8</option>
                                                                </select>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary">ADD</button>
                                        <button class="btn btn-inverse">CLEAR</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

                <!-- ----------------------------------------------------------------------------------------------------------------------------- -->


         
     <!-- Page-body start -->
     <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Autofill table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Product List</h5>
                                                        <span></span>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                          
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="autofill" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Type Code</th>
                                                                        <th>Type Name</th>
                                                                        <th>Type groupe</th>
                                                                        <th> </th>
                                                                      
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>At123</td>
                                                                        <td>Alfa type</td>
                                                                        <td>Alfa grp</td>
                                                                        <td>
                                                                      
                                                                        <button class="btn btn-mat btn-danger "><i class="fa fa-trash"></i>  </button>
                                                                        <button class="btn btn-mat btn-info "><i class="fa fa-edit"></i> </button>
                                                                    </td>

                                                                        
                                                                       
                                                                    </tr>
                                           
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>     





















<!-- ----------------------------------------------------------------------------------------------------------------- -->
  <?php

include_once "../../files/foot.php";

?>