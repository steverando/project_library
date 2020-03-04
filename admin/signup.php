<?php
    require_once 'header.php';
?>
<!-- <div class="container-fluid" style="background-color:#d3d3d3"> -->
    <div class="row">
        <div class="col col-3"></div>
        <div  class="col col-6">
            <div class="modal fade"id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-body" style="background-color:white;color:black;">
                                <form action="insert.php" method="post">
                                    <p class="h4 text-center py-1">Sign Up</p>
                                        <!-- Default input name -->
                                    <label for="defaultFormCardNameEx" class="black-text font-weight-light">Full Names</label>
                                    <input type="text" name="name" id="defaultFormCardNameEx" class="form-control">

                                    <br>
                                    <label for="defaultFormCardNameEx" class="black-text font-weight-light">User Name</label>
                                    <input type="text" name="uName" id="defaultFormCardNameEx" class="form-control">

                                    <br>
                                    <label for="defaultFormCardNameEx" class="black-text font-weight-light">Email</label>
                                    <input type="email" name="email" id="defaultFormCardNameEx" class="form-control">

                                    <br>
                                    <label for="defaultFormCardNameEx" class="black-text font-weight-light">Password</label>
                                    <input type="password" name="password" id="defaultFormCardNameEx" class="form-control">

                                    <br>
                                    <label for="defaultFormCardNameEx" class="black-text font-weight-light">Confirm Password</label>
                                    <input type="password" name="retype" id="defaultFormCardNameEx" class="form-control">

                                    <br>
                                    <label for="defaultFormCardNameEx" class="black-text font-weight-light">Gender:</label>
                                    <input type="radio" name="gender" id="defaultFormCardNameEx" value="M" style="margin-left:25px;">Male
                                    <input type="radio" name="gender" id="defaultFormCardNameEx" value="F"  style="margin-left:25px;">Female

                                    <br>
                                    <label for="defaultFormCardNameEx" class="black-text font-weight-light">Phone Number</label>
                                    <input type="number" name="phone" id="defaultFormCardNameEx" class="form-control">

                                    <br>
                                    <!-- Default input email -->
                                    <label for="defaultFormCardEmailEx" class="black-text font-weight-light">Id Number</label>
                                    <input type="number" name="idNumber" id="defaultFormCardEmailEx" class="form-control">

                                    <div class="text-center py-4 mt-3">
                                        <button class="btn btn-primary " name="admin" style="border-radius:30px;" type="submit">Sign Up</button>
                                    </div>
                                    <p style="text-align:center;">Already Member?<a href="index.php">Log In</a></p>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div  class="col col-3"></div>
    </div>
<!-- </div> -->

<?php
    require_once 'footer.php';
?>