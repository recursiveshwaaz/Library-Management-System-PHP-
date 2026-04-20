<?php

      include_once("config/config.php");
      include_once(DIR_URL ."include/header.php") ;
      include_once(DIR_URL ."include/topbar.php") ;
      include_once(DIR_URL ."include/sidebar.php") ;
?>

     <!-- Main content start -->
        
         <main class=" mt-5  pt-3">
             <div class="container-fluid"> 

              <!-- Cards -->
                <div class="row mt-3 dashboard-counts"> 
                    <div class="col-md-12 text-black m-3">
                      <h2 class="fw-bold text-uppercase">Dashboard</h2>
                      <p>Statistic of the system !</p>
                    </div>


                    <div class="col-md-3">
                      <div class="card" >
                      <div class="card-body text-center">
                        <h6 class="card-title text-uppercase text-muted">Total Books</h6>
                        <h1>130</h1>
                        <a href="#" class="card-link link-underline-light">View more</a>
                      </div>
                    </div>
                    </div>

                      <div class="col-md-3">
                      <div class="card">
                      <div class="card-body text-center">
                        <h6 class="card-title text-uppercase text-muted">Total students</h6>
                        <h1>1670</h1>
                        <a href="#" class="card-link link-underline-light">View more</a>
                      </div>
                    </div>
                    </div>

                      <div class="col-md-3">
                      <div class="card">
                      <div class="card-body text-center">
                        <h6 class="card-title text-uppercase text-muted">Total Revenue</h6>
                        <h1>1,30,000</h1>
                        <a href="#" class="card-link link-underline-light">View more</a>
                      </div>
                    </div>
                    </div>

                      <div class="col-md-3">
                      <div class="card">
                      <div class="card-body text-center">
                        <h6 class="card-title text-uppercase text-muted">Total books loan</h6>
                        <h1>156</h1>
                        <a href="#" class="card-link link-underline-light">View more</a>
                      </div>
                    </div>
                    </div>
                    
                </div>

                <!-- Tabs -->
                 <div class="row mt-5 dashboard-tabs">
                     <div class="col-md-12">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="recent-students" data-bs-toggle="tab" 
                          data-bs-target="#recent-students-pane" type="button" role="tab" aria-controls="recent-students-pane"
                           aria-selected="true">New Students</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="recent-loans-tab" data-bs-toggle="tab"
                           data-bs-target="#recent-loans-tab-pane" type="button" role="tab" 
                           aria-controls="recent-loans-tab-pane" aria-selected="false">Recent LLoans</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="recent-subs-tab" data-bs-toggle="tab" 
                          data-bs-target="#recent-subs-tab-pane" type="button" role="tab" 
                          aria-controls="recent-subs-tab-pane" aria-selected="false">Recent Subscriptions</button>
                        </li>
                       
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="recent-students-pane" role="tabpanel" 
                        aria-labelledby="recent-students" tabindex="0">
                          <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Preaparing For</th>
                                      <th scope="col">Registered On</th>
                                      <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Tony</td>
                                  <td>UPSC</td>
                                  <td>5-04-2025, 12:45 PM</td>
                                  <td><span class="badge rounded-pill text-bg-success">Active</span></td>
                          
                                </tr>

                                <tr>
                                  <th scope="row">2</th>
                                  <td>Stark</td>
                                  <td>UPSC</td>
                                  <td>5-04-2025, 12:45 PM</td>
                                  <td><span class="badge rounded-pill text-bg-danger">inactive</span></td>
                          
                                </tr>
                                </tbody>
                              </table>
                      </div>


                        <div class="tab-pane fade" id="recent-loans-tab-pane" role="tabpanel"
                         aria-labelledby="recent-loans-tab" tabindex="0">
                        
                            <table class="table">
                                <thead class="table-dark">
                                      <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Book Name</th>
                                      <th scope="col">Student Name</th>
                                      <th scope="col">Loan Date</th>
                                      <th scope="col">Due Date</th>
                                      <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Indian Arts and Culture</td>
                                  <td>Jay Sharma</td>
                                  <td>5-04-2025</td>
                                  <td>5-05-2025</td>
                                  <td><span class="badge rounded-pill text-bg-success">Active</span></td>
                          
                                </tr>

                                <tr>
                                  <th scope="row">2</th>
                                  <td>Wings of fire</td>
                                  <td>Kunal Singh</td>
                                  <td>5-04-2025</td>
                                  <td>7-05-2025</td>
                                  <td><span class="badge rounded-pill text-bg-warning">Returned</span></td>
                          
                                </tr>
                                </tbody>
                              </table>
                        </div>


                        <div class="tab-pane fade" id="recent-subs-tab-pane" role="tabpanel" 
                        aria-labelledby="recent-subs-tab" tabindex="0">
                           <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Student Name</th>
                                      <th scope="col">Amount</th>
                                      <th scope="col">Start Date</th>
                                      <th scope="col">End Date</th>
                                      <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Tony</td>
                                  <td><i class="fa-solid fa-indian-rupee-sign me-2"></i>5000</td>
                                  <td>5-04-2025</td>
                                  <td>20-04-2025</td>
                                  <td><span class="badge rounded-pill text-bg-success">Active</span></td>
                          
                                </tr>

                                <tr>
                                  <th scope="row">2</th>
                                  <td>Stark</td>
                                  <td><i class="fa-solid fa-indian-rupee-sign me-2"></i>3400</td>
                                  <td>5-04-2025</td>
                                  <td>2-07-2025</td>
                                  <td><span class="badge rounded-pill text-bg-danger">inactive</span></td>
                                </tr>
                                </tbody>
                              </table>
                      
                      </div>
                     </div>
                 </div>
             </div>
         </main>




     <!-- Main content end -->


<?php include_once(DIR_URL."include/footer.php") ?>



