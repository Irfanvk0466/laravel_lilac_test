<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico')}}" />
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet" />
    <style>
        .card {
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        @media (min-width: 576px) {
            .search-container {
                justify-content: flex-end;
            }
        }

        .input-group {
            width: 35%;
        }

        @media (max-width: 768px) {
            .input-group {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .input-group {
                width: 100%;
            }
            .banner-text {
                font-size: 24px;
            }
            header {
                padding: 3rem 0;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Employees</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="py-5 bg-light border-bottom mb-4" style="background-image: url('{{ asset('images/Employees.jpg') }}'); background-size: cover; background-position: center;margin-top:5px;">
        <div class="container">
            <div class="text-center my-5 banner-text">
                <h1 class="fw-bolder" style="color:whitesmoke;">Employee Details</h1>
            </div>
        </div>
    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-4 d-flex justify-content-center justify-content-md-end search-container">
                    <div class="input-group">
                        <input type="text" class="form-control" id="search_input" placeholder="Search for...">
                        <button class="btn btn-primary" id="search_button" type="button">Go!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($users as $user)
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center;">{{ $user->name }}</h5>
                        <hr>
                        <p class="card-text" style="line-height: 40px;">
                            <strong>Designation  :  </strong> {{ $user->designation_name }} <br>
                            <strong>Department   :  </strong> {{ $user->department_name }} <br>
                            <strong>Phone        :  </strong> {{ $user->phone_number }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2024</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#search_button").click(function(){
                filterCards();
            });

            $("#search_input").on("input", function() {
                filterCards();
            });

            function filterCards() {
                var searchText = $("#search_input").val().toLowerCase();
                
                $(".card").each(function(){
                    var name = $(this).find(".card-title").text().toLowerCase();
                    var designation = $(this).find(".card-text").text().toLowerCase();
                    var department = $(this).find(".card-text").text().toLowerCase();
                    if(name.includes(searchText) || designation.includes(searchText) || department.includes(searchText)){
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });

                $("#search_div").show();
            }
        });
    </script>
</body>
</html>
