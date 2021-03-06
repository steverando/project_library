<?php
    require_once 'header.php';
    require_once 'signup.php';
    require_once 'connection.php';
?>
<div class="view">
<img src="https://images.unsplash.com/photo-1552197680-0223a9065fa3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80;" style="width:100%;height:900px;">
<div class="mask flex-center">
    <div class="container" >
        <div class="row">
            <div class="col col-3"></div>
            <div  class="col col-6">
                <div class="card ml-4" style="margin-top:20px;height:60%; width:450px;">
                    <div class="card-body" style="background-color: #d9d9d9;color:black;">
                        <form action="insert.php" method="post">
                            <p class="h4 text-center py-4">Sign In</p>
                            <div class="md-form">
                                <i class="fa fa-user prefix black-text"></i>
                                <label for="materialFormCardNameEx" class="font-weight-light">User Name</label>
                                <input type="text" name="uName" id="materialFormCardNameEx" class="form-control">
                            </div>
                            <div class="md-form">
                                <i class="fa fa-lock prefix black-text"></i>
                                <label for="materialFormCardPasswordEx" class="font-weight-light">Your password</label>
                                <input type="password" name="password" id="materialFormCardPasswordEx" class="form-control">
                            </div>
                            <div class="text-center py-4 mt-3">
                                <button class="btn btn-primary" name="signIn">Sign In</button>
                            </div>
                        </form>
                        <p>New Member?<a href="/opt/lampp/htdocs/project_library/admin/signup.php" data-toggle="modal" data-target="#exampleModalLong"> Sign Up</a></p>
                    </div>
                </div>
            </div>
            <div  class="col col-3"></div>
        </div>
        </div>
    </div>
</div>
<?php
    require_once 'footer.php';
?>