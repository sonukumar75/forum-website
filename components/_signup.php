<!-- Modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="signupmodal">SignUp for an Anything account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="sign">

                    <h3 class="text-center text-white ">SignUp form</h3>
                    <div class="container-fluid">
                        <div id="sign-row" class="row justify-content-center align-items-center">
                            <div id="sign-column" class="col-md-12">
                                <div id="sign-box" class="col-md-12">
                                    <form id="sign-form" class="form" action="" method="post">
                                        <h3 class="text-center text-info">SignUp</h3>
                                        <div class="form-group">
                                            <label for="username" class="text-info">Username:</label><br>
                                            <input type="text" maxlength="11" name="username" id="username" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="text-info">Password:</label><br>
                                            <input type="password" name="password" id="password" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="cpassword" class="text-info">Confirm Password:</label><br>
                                            <input type="password" name="cpassword" id="cpassword" class="form-control" required>
                                        </div>
                                        <div class="form-group d-flex justify-content-between mt-2">

                                            <input type="submit" name="submit" class="btn btn-info btn-md px-4" value="SignUp">
                                         
                                            <a href="" data-bs-toggle="modal" data-bs-target="#loginmodal">If You have Already account</a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>