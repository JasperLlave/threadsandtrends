<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- custom admin css file link  -->
    <link rel="stylesheet" href="css/admin_style.css">

</head>

<body>
    <?php @include 'admin_header.php'; ?>
    <section class="dashboard">
        <h1 class="title">dashboard</h1>
        <div class="box-container">

            <div class="box">
                <h3>PHP10,000</h3>
                <p>total pendings</p>
            </div>

            <div class="box">
                <h3>PHP67,000</h3>
                <p>completed payments</p>
            </div>

            <div class="box">
                <h3>10</h3>
                <p>orders placed</p>
            </div>

            <div class="box">
                <h3>6</h3>
                <p>products added</p>
            </div>

            <div class="box">
                <h3>5</h3>
                <p>normal users</p>
            </div>

            <div class="box">
                <h3>2</h3>
                <p>admin users</p>
            </div>

            <div class="box">
                <h3>7</h3>
                <p>total accounts</p>
            </div>

            <div class="box">
                <h3>4</h3>
                <p>new messages</p>
            </div>
        </div>
    </section>
    <script src="js/admin_script.js"></script>
</body>

</html>