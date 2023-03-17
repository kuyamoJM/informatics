<?php
include('config/dbcon.php');
include('includes/header.php');

?> 

<div class="container-fluid px-4">
    <h1 class="mt-4">Admin View</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Administrator</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-black mb-4">
                <div class="card-body">School Year</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="#">View Details</a>
                    <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-black mb-4">
                <div class="card-body">Branch</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="#">View Details</a>
                    <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-black mb-4">
                <div class="card-body">Instructor</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="#">View Details</a>
                    <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-black mb-4">
                <div class="card-body">Questionnaire</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="#">View Details</a>
                    <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');

?>