<?php
    require_once 'header.php';
?>
<body><!-- <div class="container-fluid" style="background-color:#d3d3d3"> -->
    <div class="row">
        <div class="col col-3"></div>
        <div  class="col col-6">
            <div style="background-color:#d3d3d3;"  class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            <div class="modal-body" style="background-color:#333333">  
                                <form action="" method="post">
                                    <p class="h4 text-center py-4">Sign Up</p>
                                                                        <!-- Default input name -->
                                    <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Full Names</label>
                                    <input type="text" id="defaultFormCardNameEx" class="form-control">

                                    <br>
                                    <label for="defaultFormCardNameEx" class="grey-text font-weight-light">User Name</label>
                                    <input type="text" id="defaultFormCardNameEx" class="form-control">

                                    <br>
                                    <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Email</label>
                                    <input type="email" id="defaultFormCardNameEx" class="form-control">

                                    <br>
                                    <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Password</label>
                                    <input type="password" id="defaultFormCardNameEx" class="form-control">

                                    <br>
                                    <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Confirm Password</label>
                                    <input type="password" id="defaultFormCardNameEx" class="form-control">

                                    <br>
                                    <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Gender:</label>
                                    <input type="radio" id="defaultFormCardNameEx" value="M" style="margin-left:25px;">Male
                                    <input type="radio" id="defaultFormCardNameEx" value="F"  style="margin-left:25px;">Female

                                    <br>
                                    <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Phone Number</label>
                                    <input type="number" id="defaultFormCardNameEx" class="form-control">

                                    <br>
                                    <!-- Default input email -->
                                    <label for="defaultFormCardEmailEx" class="grey-text font-weight-light">Id Number</label>
                                    <input type="number" id="defaultFormCardEmailEx" class="form-control">

                                    <div class="text-center py-4 mt-3">
                                    <button class="btn btn-primary" type="submit">Sign Up</button>
                                    </div>
                                </form>

                            </div>
                                <p style="text-align:center;">Already Member? <a href="index.php">Log In</a></p>
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