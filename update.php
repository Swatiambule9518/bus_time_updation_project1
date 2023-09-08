<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MSRTC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Update</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    <form action="fupdate.php" method="POST">
        <div class="mt-3 mb-3">
            <label for="busnum" class="form-label">Bus Number</label>
            <input type="" class="form-control" name="busnum" id="busnum" placeholder="Enter Bus Number">
        </div>
        <div class="mt-3 mb-3">
        <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="from" class="form-label">From</label>
                        <input type="text" class="form-control" name="from" id="from">
                    </div>
                    <div class="col-md-6">
                        <label for="to" class="form-label">To</label>
                        <input type="text" class="form-control" name="to" id="to">
                    </div>
                </div>
                    <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="artime" class="form-label">Arrival Time</label>
                        <input type="time" class="form-control" name="artime" id="artime">
                    </div>
                    <div class="col-md-6">
                        <label for="depttime" class="form-label">Departure Time</label>
                        <input type="time" class="form-control" name="depttime" id="depttime">
                    </div>
                </div> 
                        
             
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" name="date" id="date">
                    </div>
                    <div class="col-md-6">
                        <label for="status" class="form-label">Status to be lated</label>
                        <input type="time" class="form-control" name="status" id="status">
                    </div>
                </div>
                <div class="mt-3 mb-3">
            <label for="current_loc" class="form-label">Current_location</label>
            <input type=" text" class="form-control" name="current_loc" id="current_loc" placeholder="Enter current location">
        </div>
                    <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>  

</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>
