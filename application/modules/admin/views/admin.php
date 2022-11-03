<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex p-10 no-block">
                        <div class="align-slef-center">
                            <h2 class="m-b-0"><?= $all_data ?></h2>
                            <h6 class="text-muted m-b-0">Total Data</h6>
                        </div>
                        <div class="align-self-center display-6 ml-auto"><i class="text-success icon-Target-Market"></i></div>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="<?= $all_data ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?= $all_data ?>%; height:3px;"> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex p-10 no-block">
                        <div class="align-slef-center">
                            <h2 class="m-b-0"><?= $all_registered ?></h2>
                            <h6 class="text-muted m-b-0">Total Registered Students</h6>
                        </div>
                        <div class="align-self-center display-6 ml-auto"><i class="text-info icon-Dollar-Sign"></i></div>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="<?= $all_registered ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?= $all_registered ?>%; height:3px;"> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex p-10 no-block">
                        <div class="align-slef-center">
                            <h2 class="m-b-0"><?= $all_deleted ?></h2>
                            <h6 class="text-muted m-b-0">Total Students Deleted</h6>
                        </div>
                        <div class="align-self-center display-6 ml-auto"><i class="fa fa-trash" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="<?= $all_deleted ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?= $all_deleted ?>%; height:3px;"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mb-5" style="margin-top: -40px;">
    <h2>Student Data</h2>
    <table id="table_admin" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Username</th>
                <th>Status</th>
            </tr>
        </thead>
    </table>
</div>