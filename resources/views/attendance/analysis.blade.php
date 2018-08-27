
@extends('layouts.app')

@section('title') All Members @endsection

@section('content')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Attendance Analysis</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
            <li>
                <a href="forms-general.html#">
                    <i class="demo-pli-home"></i>
                </a>
            </li>
            <li>
                <a href="{{route('attendance')}}">Attendance</a>
            </li>
            <li class="active">Analysis</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
    <div class="row">

					        <div class="col-md-6">

					            <!-- Line Chart -->
					            <!---------------------------------->
					            <div class="panel">
					                <div class="panel-heading">
					                    <h3 class="panel-title">Attendance by Month</h3>
					                </div>
					                <div class="pad-all">
					                    <div id="demo-morris-bar-month" class="legendInline" style="height:250px"></div>
					                </div>
					            </div>
					            <!---------------------------------->
                    </div>
                    <!-- week -->
                    <div class="col-md-6">

  					            <!-- Line Chart -->
  					            <!---------------------------------->
  					            <div class="panel">
  					                <div class="panel-heading">
  					                    <h3 class="panel-title">Attendance by Last 10 Weeks</h3>
  					                </div>
  					                <div class="pad-all">
  					                    <div id="demo-morris-bar-week" class="legendInline" style="height:250px"></div>
  					                </div>
  					            </div>
  					            <!---------------------------------->
                      </div>

                      <!-- day -->
                      <div class="col-md-6">

    					            <!-- Line Chart -->
    					            <!---------------------------------->
    					            <div class="panel">
    					                <div class="panel-heading">
    					                    <h3 class="panel-title">Attendance by Day</h3>
    					                </div>
    					                <div class="pad-all">
    					                    <div id="demo-morris-bar-day" class="legendInline" style="height:250px"></div>
    					                </div>
    					            </div>
    					            <!---------------------------------->
                        </div>

                        <!-- year -->
                        <div class="col-md-6">

      					            <!-- Line Chart -->
      					            <!---------------------------------->
      					            <div class="panel">
      					                <div class="panel-heading">
      					                    <h3 class="panel-title">Attendance by Year</h3>
      					                </div>
      					                <div class="pad-all">
      					                    <div id="demo-morris-bar-year" class="legendInline" style="height:250px"></div>
      					                </div>
      					            </div>
      					            <!---------------------------------->
                          </div>
          					    </div>




        <!-- Basic Data Tables -->
        <!--===================================================-->
        <div class="panel" style="display:none">
            <div class="panel-heading">
                <h3 class="panel-title">List of Members in province004</h3>
            </div>
            <div class="panel-body">
                <table id="demo-dt-basic" class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th><span class="text-success">Last Sunday</span></th>
                            <th class="min-tablet ">2 sundays ago</th>
                            <th class="min-tablet">3 sundays ago</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>
                                <i class="text-success ion-checkmark-circled"></i>
                            </td>
                            <td>
                                <i class="text-danger ion-close-circled"></i>

                            </td>
                            <td><i class="text-success ion-checkmark-circled"></i></td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td><i class="text-success ion-checkmark-circled"></td>
                            <td><i class="text-success ion-checkmark-circled"></td>
                            <td><i class="text-danger ion-close-circled"></i></td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
        <!--===================================================-->
        <!-- End Striped Table -->


    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
@endsection