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
                   <h4 class="fw-bold text-uppercase">Add Book</h4>
                </div>
                
                <div class="col-md-12">
                     <div class="card">
                      <div class="card-header">
                        Fill the form
                          </div>
                        <div class="card-body">
                          <form>
                            <div class="row">
                                 <div class="col-md-6">
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"> Book Name</label>
                                     <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                   </div>
                                 </div>
                                 <div class="col-md-6">
                                  <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">ISBN Number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>
                                 </div>
                            
                              
                              
                               <div class="col-md-6">
                               <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Author Name</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                              </div>
                              </div>
                              
                               <div class="col-md-6">
                               <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Publisher Name</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                              </div>

                              </div>

                              <div class="col-md-6">
                               <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Category / Course</label>
                               <select class="form-control">
                                 <option>Please Select </option>
                                 <option>UPSC </option>
                                 <option>GATE </option>
                                 <option>MCA Ente. </option>
                                 <option>IIT </option>
                               </select>
                              </div>
                              <button type="submit" class="btn btn-success">Publish</button>
                              <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                       </form>
                </div>
        </div>
      </div>
             </div>>
               
    </main>


     <!-- Main content end -->


<?php include_once(DIR_URL."include/footer.php") ?>



