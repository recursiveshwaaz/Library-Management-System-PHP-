<?php
      include_once("../config/config.php");
      include_once(DIR_URL ."include/header.php") ;
      include_once(DIR_URL ."include/topbar.php") ;
      include_once(DIR_URL ."include/sidebar.php") ;
?>
     

     <!-- Main content start -->
        
         <main class=" mt-5  pt-3">
             <div class="container-fluid"> 

              <!-- Cards -->
                <div class="row mt-3 dashboard-counts"> 
                   <h4 class="fw-bold text-uppercase">Manage Books</h4>
                </div>
                
                <div class="col-md-12">
                     <div class="card">
                      <div class="card-header">
                        All  Books
                          </div>
                        <div class="card-body">

                           <table class="table">
                                <thead class="table-dark">
                                      <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Book Name</th>
                                      <th scope="col">Publisher Name</th>
                                      <th scope="col">Author Name</th>
                                      <th scope="col">ISBN No.</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Indian Arts and Culture</td>
                                  <td>JNK Publisher</td>
                                  <td>J.K Rollin</td>
                                  <td>5786098</td>
                                  <td>
                                    <a href="#" class="btn btn-primary  btn-sm">Edit</a>
                                  <a href="#" class="btn btn-danger  btn-sm">Delete</a>
                                  </td>
                          
                                </tr>

                                <tr>
                                  <th scope="row">2</th>
                                  <td>Wings of fire</td>
                                <td>JNK Publisher</td>
                                  <td>A.P.J Abul Kalam</td>
                                  <td>5709126</td>
                                  <td>
                                    <a href="#" class="btn btn-primary  btn-sm">Edit</a>
                                  <a href="#" class="btn btn-danger  btn-sm">Delete</a>
                                  </td>

                                </tr>
                                </tbody>
                              </table>
                         </div>
                     </div>
                    </div>
               
         </main>

     <!-- Main content end -->


<?php include_once(DIR_URL."include/footer.php") ?>



