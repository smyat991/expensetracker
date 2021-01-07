@extends('frontend_master')

@section('content')

<!-- data-active-color="danger" -->


      <!-- Content Start Here -->
        <!--
        <div class = "col-lg-5" wfd-id = "398">
            <div class = "mb-5 mt-11" wfd-id = "399">
                <h1 class = "display-4 mb-3">
                    "
                        Turn your ideas into a
                    "
                    <span class = "text-primary text-highlight-warning" wfd-id = "400">
                        <span class = "js-text-animation" data-hs-typed-options = "{
                            'strings': ['startup.','future.','success.'],

                            'typeSpeed': 90,
                            'loop' : true,
                            'backSpeed': 30,
                            'backDelay' : 2500
                        }" wfd-id = "402"></span>
                        <span class = "typed-cursor typed-cursor--blink" wfd-id = "401">|</span>
                    </span>
                </h1>
            </div>

        </div>
        -->
        <div class="row">

          <!-- Cards -->
          <div class="col-lg-6 col-md-6 col-sm-6 my-4">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                      <i class="nc-icon nc-minimal-up text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8 ">
                    <div class="numbers">
                      <p class="card-category">Income</p>
                      <p class="card-title">
                        

                      <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="nc-icon nc-alert-circle-i text-warning"></i>
                  More Detail(SQL)
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-6 col-md-6 col-sm-6 my-4">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-danger"></i>
                      <i class="nc-icon nc-minimal-down text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Expense</p>
                      <p class="card-title">
                       {{-- {{$total}} --}}
                      </p><!--total expense-->
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="nc-icon nc-alert-circle-i text-warning"></i>
                  More Detail(SQL)
                </div>
              </div>
            </div>
          </div>

          <!-- Card Assets -->
          <!-- <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Errors</p>
                      <p class="card-title">23<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i>
                  In the last hour
                </div>
              </div>
            </div>
          </div> -->

<!-- Card Assets -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-stats">
                <div class="card-header">

                <p style="display: inline;">Start Date</p>
                <input type="date" id="startdate"class="btn btn-primary"><br>

                <p style="display: inline;">End Date </p>
                <input type="date" id="enddate" class="btn btn-primary"><br>

              </div>
              <div class="card-body ">
                <div class="row col-md-12">
                  <button name="button" id="difference" class="btn btn-primary mx-5 d-inline-flex justify-content-end">Calculate Difference</button>
                  <div class="col-lg-12 col-md-12 col-sm-12">

                    
                    <div class="table-responsive">

                  <table class="table" id="searchlisttable">
                    
                  </table>
                  <table class="table" id="listtable">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th> 
                      <th>
                        Expense_Date
                      </th>
                      <th>
                        Expense_Note
                      </th>
                      <th>
                        Expense_Amount
                      </th>
                    </thead>
                    <tbody>
                      @php $i=1; @endphp
                  @foreach($expense_Records as $expense_Record)
                  <tr>
                      <th>
                        {{$i++}}
                      </th>
                      <th>
                        {{$expense_Record->date}}
                      </th>
                      <th>
                        {{$expense_Record->note}}
                      </th>
                      <th>
                        {{$expense_Record->amount}}
                      </th>
                    </tr>
                      @endforeach
                      <tr>
                        <th colspan="3">Income</th>
                        <td>{{$income_Records}}</td>
                      </tr>
                      </tbody>
<!--                     <tbody>
                  <tr>
                    <th>Total Amount</th>
                    <th> </th>
                  </tr>
                    </tbody>
 -->
                </div>
                  </div>

            </div>
          </div>
              
                </div>
              </div>
            </div>


<!-- Activity Chart -->
        <!-- <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Activity Chart</h5>
                <p class="card-category">Monthly View</p>
              </div>
              <div class="card-body ">
                <canvas id=chartHours width="400" height="100"></canvas>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="nc-icon nc-alert-circle-i"></i> Last Updated SQL
                </div>
              </div>
            </div>
          </div>
        </div> -->


<!-- Pie Chart -->
        <!-- <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Activity Statistics</h5>
                <p class="card-category">Monthly Activity Comparison</p>
              </div>
              <div class="card-body ">

                <canvas id="chartEmail"></canvas>

              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle text-primary"></i> Opened
                  <i class="fa fa-circle text-warning"></i> Read
                  <i class="fa fa-circle text-danger"></i> Deleted
                  <i class="fa fa-circle text-gray"></i> Unopened
                </div>
                <hr>
                <div class="stats">
                  <i class="nc-icon nc-alert-circle-i text-warning"></i> More Detail
                </div>
              </div>
            </div>
          </div> -->



          <!-- <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Activity Chart</h5>
                <p class="card-category">Expense and Income Comparison</p>
              </div>
              <div class="card-body">
                <canvas id="speedChart" width="400" height="100"></canvas>
              </div>
              <div class="card-footer">
                <div class="chart-legend">
                  <i class="fa fa-circle text-info"></i> Expense
                  <i class="fa fa-circle text-warning"></i> Income
                </div>
                <hr />
                <div class="card-stats">
                  <i class="nc-icon nc-alert-circle-i text-warning"></i> More Detail
                </div>
              </div>
            </div>
          </div> -->

          <!-- JS -->

@endsection

@section('script')

<script type="text/javascript">
            $(document).ready(function(){

                $('#searchlisttable').hide();


              $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

              $('#difference').click(function(){

                var startdate = $('#startdate').val();
                var enddate = $('#enddate').val();

                console.log(startdate);
                console.log(enddate);

                $.post('differentsearch',{startdate:startdate, enddate:enddate},function(response){

                  console.log(response);

                  var html="";
                  var j=1;

                    var expense = response.expense;
                    var income = response.income;

                    html+=`<thead class=" text-primary">
                      <th>
                        ID
                      </th> 
                      <th>
                        Expense_Date
                      </th>
                      <th>
                        Expense_Note
                      </th>
                      <th>
                        Expense_Amount
                      </th>
                    </thead><tbody>`,

                   $.each(response.expenses,function(i,v){

                    html+=`<tr>
                    <td>${j++}</td>
                    <td>${v.date}</td>
                    <td>${v.note}</td>
                    <td>${v.amount}</td>
                    </tr>`;


                   })
                   html+=`<tr>
                        <th colspan="3">Expense</th>
                        <td>${response.expense}</td>
                        </tr>

                        <tr>
                        <th colspan="3">Income</th>
                        <td>${response.income}</td>
                        </tr>

                        <tr>
                        <th colspan="3">Remain Price</th>
                        <td>${income-expense}</td>
                      </tr></tbody>`;
                   $('#searchlisttable').html(html);
                   $('#listtable').hide();
                   $('#searchlisttable').show();

                })

              })
            })
          </script>

@endsection