<div class="container-fluid mb-5">
    <h2>List of registered students</h2> 
    
    <table id="table_manage" class="table table-striped table-bordered mt-4">
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
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

<div class="modal fade" id="editManageModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="editManageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-bold" id="editManageModalLabel">Edit Student Data</h5>
            </div>
            <form method="POST" id="editManageModalForm" data-parsley-validate>
                <div class="modal-body mb-3" style="padding: 0px 50px 0px 50px;">
                    <div class="mt-3">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" name="firstname" required="required">
                    </div>
                    <div>
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" name="lastname" required="required">
                    </div>
                    <div>
                        <label for="age">Age</label>
                        <input type="number" class="form-control" name="age" required="required">
                    </div>
                    <div>
                        <label for="contact">Contact Number</label>
                        <input type="number" class="form-control" name="contact" data-parsley-minlength="11" data-parsley-maxlength="12" required="required">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text" class="form-control" data-parsley-type="email" name="email" required="required">
                    </div>
                    <div>
                        <label for="username">Username</label>
                        <input type="text" class="form-control" data-parsley-pattern="^[a-zA-Z0-9]+$" name="username" required="required">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <div class="d-flex">
                            <input type="password" class="form-control" data-parsley-minlength="6" data-parsley-maxlength="22" name="password" placeholder="Enter the password" required="required">
                            <button class="btn" type="button" id="passwordShowToggle"><i class="fa-solid fa-eye"></i></button>
                        </div>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
