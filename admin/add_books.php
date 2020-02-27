

<?php require_once "header.php";
?>
    <div class="container-fluid"  style="height:896px;background-size:cover;background-image:url(https://images.unsplash.com/photo-1476469476875-7407909cd861?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=752&q=80)">
        <div class="row">
            <div class="col col-4"></div>
            <div class="col col-4">
                 <!-- Card -->
                <div class="card wow zoomIn"style="height:100%;margin-top:20px;">
                    <!-- Card body -->
                    <div class="card-body"style="background-color:#c7c9c8;">
                        <form action="insert.php" method="post">
                            <p class="h4 text-center py-4">ADD NEW <span style="color:#536349">BOOK</span></p>
                            <label>Your Name</label>
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                            <label>Book Name</label>
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" name="bookName" class="form-control" placeholder="Add Book Name">
                            <label>Author Name</label>
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" name="author" class="form-control" placeholder="Author Name">
                                <label>Add ISBN/Serial</label>
                                <input type="text" name="isbn" class="form-control" placeholder="Add ISBN/Serial">
                            <label>Add book profile</label><br>
                                <input type="file" class="fileToUpload" id="fileToUpload" name="file" placeholder="Add book profile"><br>
                            <label>Add Book Details</label><br>
                                <textarea name="details" placeholder="Add book details"></textarea>
                            <div class="text-center py-4 ">
                                <button class="btn btn-success btn-block btn-rounded z-depth-1" type="submit" name="insertBook">ADD</button>
                            </div>
                        </form>
                    </div>
                </div>
                <a href="dashbord.php"><i class="fas fa-arrow-left fa-2x " style="color:green;"></i></a>
                <div class="col col-4"></div>
            </div>
        </div>
    </div>



<?php require_once "footer.php"?>