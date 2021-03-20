<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>    
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class="navbar-brand text-center" href="#">Welcome To Banking System</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link adv" href="index.php">Home</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="text-center"><h1>Sparks Foundation Internship Project</h1></div><br><br>
    <div class="cont">
        <form action="">
            <br>
            <button class="btn btn-primary btn-lg btn-block " name="View Customer" value="View Customer" formaction="customer.php">View Customers</button><br>
            <button class="btn btn-primary btn-lg btn-block " name="Transaction History" value="Transaction History" formaction="history.php">Transaction History</button>
        </form>
    </div>
</body>
</html>