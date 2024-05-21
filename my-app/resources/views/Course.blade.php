<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md mt-4 m-2">
                    <button type="button" class="btn btn-warning btn-sm"><b>LOGOUT</b></button>
                </div>
            </div>

            <div class="row px-2 d-flex flex-row-reverse">
                <div class="col-md-3">
                    <div class="input-group float-end">
                        <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-addon">
                        <button class="btn btn-outline-success" type="submit" id="search-addon"><b>SEARCH</b></button>
                    </div>
                    <div class="col-md mt-3 float-end">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#courseModal"><b>ADD COURSE</b></button>
                    </div>
                </div>
            </div>


            <!-- ADD COURSE MODAL -->
            <div class="modal fade" id="courseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"><b>ADD COURSE</b></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form action="course" method='POST' id='form'>
                                @csrf
                                <div class="form-floating mb-3">

                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                    <label for="floatingInput">Title</label>

                                </div>

                                <div class="form-floating mb-3">

                                    <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                                    <label for="floatingInput">Description</label>

                                </div>

                                <div class="form-floating mb-3">

                                    <input type="text" class="form-control" id="department" name="department" placeholder="Department">
                                    <label for="floatingInput">Department</label>

                                </div>


                                <button type="submit" class="form-control btn btn-success" id="submit"><b>ADD COURSE</b></button>






                            </form>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row pt-3 px-2 justify-content-center">
                <div class="col">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Students</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row pt-3 px-2 justify-content-center">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TITLE</th>
                                <th>DESCRIPTION</th>
                                <th>DEPARTMENT</th>
                                <th class="text-white">EDIT</th>
                                <th class="text-white">DELETE</th>

                            </tr>
                        </thead>
                        


                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- <script>
        $('.showEditModal').click(function(e) {
            // Prevent the default behavior of the anchor tag
            e.preventDefault();

            // Find the corresponding row of the clicked "EDIT" button
            var row = $(this).closest('tr');

            // Get the values of the course from the row
            var id = row.find('td:eq(0)').text();
            var title = row.find('td:eq(1)').text();
            var description = row.find('td:eq(2)').text();
            var department = row.find('td:eq(3)').text();

            // Set the values of modal inputs
            $('#id').val(id);
            $('#title').val(title);
            $('#description').val(description);
            $('#department').val(department);
            $('#submit').text("Edit Course");
            $('.modal-title').text("Edit Course");
            $('form').attr('action', 'course/' + id);
            $('form').append('<input type="hidden" name="_method" value="PUT">')

            // Show the modal
            $('#courseModal').modal('show');
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->



</body>
</html>


















</html>