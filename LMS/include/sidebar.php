
     <!-- Offcanvas Start-->
<div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  
  <div class="offcanvas-body">
      <ul class="navbar-nav">
       <li class="nav-item">
          <div class="text-secondary small text-uppercase fw-bold ">Core</div>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-gauge me-2"></i>Dashboard</a>
        </li>
       
        <li class="nav-item my-0">
          <hr/>
        </li>

         <li class="nav-item">
          <div class="text-secondary small text-uppercase fw-bold ">Inventory</div>
        </li>
        <li class="nav-item ">
         <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#booksMgmt" role="button" aria-expanded="false" aria-controls="booksMgmt">
         <i class="fas fa-book-open me-2"></i>Books Management <span class="right-icon float-end"><i class="fas fa-chevron-down "></i></span></i>
     </a>
       <div class="collapse" id="booksMgmt">
       <div>
        <ul class="navbar-nav ps-3">
            <a href="<?php echo BASE_URL ?>books/add.php" class="nav-link "><i class="fas fa-plus me-2"></i>Add new</a>
            <a href="<?php echo BASE_URL ?>books/" class="nav-link "><i class="fas fa-list me-2"></i>Manage All</a>
        </ul>
           
      </div>
      </div>
        </li>

        <li class="nav-item ">
         <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#studentMgmt" role="button" aria-expanded="false" aria-controls="studentMgmt">
         <i class="fas fa-users me-2"></i>Students Management <span class="right-icon float-end"><i class="fas fa-chevron-down "></i></span></i>
     </a>
       <div class="collapse" id="studentMgmt">
       <div>
        <ul class="navbar-nav ps-3">
            <a href="#" class="nav-link "><i class="fas fa-plus me-2"></i>Add new</a>
            <a href="#" class="nav-link "><i class="fas fa-list me-2"></i>Manage All</a>
        </ul>
           
      </div>
      </div>
        </li>

        
        <li class="nav-item my-0">
          <hr/>
        </li>

         <li class="nav-item">
          <div class="text-secondary small text-uppercase fw-bold ">Business</div>
        </li>

         <li class="nav-item ">
         <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#loanMgmt" role="button" aria-expanded="false" aria-controls="loanMgmt">
         <i class="fas fa-book me-2"></i>Books Loan <span class="right-icon float-end"><i class="fas fa-chevron-down "></i></span></i>
     </a>
       <div class="collapse" id="loanMgmt">
       <div>
        <ul class="navbar-nav ps-3">
            <a href="#" class="nav-link "><i class="fas fa-plus me-2"></i>Add new</a>
            <a href="#" class="nav-link "><i class="fas fa-list me-2"></i>Manage All</a>
        </ul>
           
      </div>
      </div>
        </li>

        <li class="nav-item ">
         <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#subsMgmt" role="button" aria-expanded="false" aria-controls="subsMgmt">
         <i class="fa-solid fa-indian-rupee-sign me-2"></i>Subscription <span class="right-icon float-end"><i class="fas fa-chevron-down "></i></span></i>
     </a>
       <div class="collapse" id="subsMgmt">
       <div>
        <ul class="navbar-nav ps-3">
            <a href="#" class="nav-link "><i class="fas fa-plus me-2"></i>Plans</a>
            <a href="#" class="nav-link "><i class="fas fa-list me-2"></i>Purchase History</a>
        </ul>
           
      </div>
      </div>
        </li>

           <li class="nav-item my-0">
          <hr/>
        </li>

         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-sign-out-alt me-2"></i></i>Logout</a>
        </li>

      </ul>
</div>

</div>
     <!-- Offcanvas End-->
    