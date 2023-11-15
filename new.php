<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.html">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./user.html">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./table.html">
                            <i class="nc-icon nc-notes"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./typography.html">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./icons.html">
                            <i class="nc-icon nc-atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./maps.html">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./notifications.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="upgrade.html">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Shippers Statistics</h4>
                                    <p class="card-category">Orders shipped by every Shipper</p>
                                </div>
                                <div class="card-body">
                                    <canvas id="chartShippers"></canvas>
                        
                                    <?php
                                    require('config/config.php');
                                    require('config/db.php');
                                    $query01 = "SELECT shippers.CompanyName, (Count(*)/(SELECT COUNT(*) FROM
                                    northwind.orders) * 100) as Count_Orders FROM northwind.orders,
                                    northwind.shippers WHERE shippers.ShipperID=orders.ShipVia GROUP BY ShipVia;";
                                    $result01 = mysqli_query($conn, $query01);
                                    if(mysqli_num_rows($result01) > 0){
                                        $Count_Orders = array();
                                        $label_piechart = array();
                                        while ($row = mysqli_fetch_array($result01)){
                                            $Count_Orders[] = $row['Count_Orders'];
                                            $label_piechart[] = $row['CompanyName'];
                                        }
                                        mysqli_free_result($result01);
                                        mysqli_close($conn);
                                    }else{
                                    echo "No records matching your query were found.";
                                    }
                                    ?>
                                    <script>
                                    // <!-- setup block -->
                                    const Count_Orders = <?php echo json_encode($Count_Orders); ?>;
                                    const label_piechart = <?php echo json_encode($label_piechart); ?>;
                                    const data1 = {
                                        labels: label_piechart,
                                        datasets: [{
                                            label: 'My First Dataset',
                                            data: Count_Orders,
                                            backgroundColor: [
                                                'rgb(255, 99, 132)',
                                                'rgb(54, 162, 235)',
                                                'rgb(255,165,0)'
                                            ],
                                            hoverOffset: 4
                                        }]
                                        };
                                    // <!-- config block -->
                                    const config = {
                                        type: 'pie',
                                        data: data1,
                                    };
                                    // <!-- render block -->
                                    const chartShippers = new Chart(
                                        document.getElementById('chartShippers'),
                                        config
                                    );
                                    </script>
                                                <hr>
                                                <div class="stats">
                                                    <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Top 3 Products</h4>
                                                <p class="card-category">Number of Orders Monthly</p>
                                            </div>
                                            <div class="card-content">
                                                <canvas id="chartTop3"></canvas>

                                    <?php
                                        require('config/config.php');
                                        require('config/db.php');
                                        $query_top3 = "SELECT ProductName FROM northwind.order_details, northwind.products
                                        WHERE products.ProductID=order_details.ProductID
                                        GROUP BY products.ProductID order by count(*) desc, products.ProductName
                                        limit 3";
                                        $result_top3 = mysqli_query($conn, $query_top3);
                                        $products_top3 = array();
                                        while ($row = mysqli_fetch_array($result_top3))
                                        {
                                            $products_top3[] = $row['ProductName'];
                                        }
                                        mysqli_free_result($result_top3);
                                        $Top1_Count = array_fill(0,12,0);
                                        $Top2_Count = array_fill(0,12,0);
                                        $Top3_Count = array_fill(0,12,0);
                                        for ($counter=0; $counter<3; $counter++)
                                        {
                                            $query02 = "SELECT EXTRACT(MONTH FROM o.orderdate) as Month_1997, p.ProductName, COUNT(*) as num_order
                                            FROM northwind.order_details od, northwind.orders o, northwind.products p
                                            WHERE o.orderid = od.orderid and p.productid = od.ProductID and o.orderdate LIKE '1997%' and p.ProductName = '" . $products_top3[$counter] . "' GROUP BY p.ProductName, Month_1997 ORDER BY Month_1997, p.ProductName;";
                                            $result02 = mysqli_query($conn, $query02);
                                            if(mysqli_num_rows($result02) > 0){
                                                while ($row = mysqli_fetch_array($result02)){
                                                    if ($counter==0){
                                                        $Top1_Count[$row['Month_1997']] = $row['num_order'];
                                                    } elseif ($counter==1){
                                                        $Top2_Count[$row['Month_1997']] = $row['num_order'];
                                                    } else {
                                                        $Top3_Count[$row['Month_1997']] = $row['num_order'];
                                                    }
                                                }
                                            }
                                        }
                                    ?>
                                    <script>
                                        const Top1_Count = <?php echo json_encode($Top1_Count); ?>;
                                        const Top2_Count = <?php echo json_encode($Top2_Count); ?>;
                                        const Top3_Count = <?php echo json_encode($Top3_Count); ?>;
                                        const label_1 = <?php echo json_encode($products_top3[0]); ?>;
                                        const label_2 = <?php echo json_encode($products_top3[1]); ?>;
                                        const label_3 = <?php echo json_encode($products_top3[2]); ?>;
                                        const data2 = {
                                            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                                            datasets: [{
                                                label: label_1,
                                                data: Top1_Count,
                                                fill: false,
                                                backgroundColor: 'rgb(255, 99, 132)',
                                                borderColor: 'rgb(255, 99, 132)',
                                                tension: 0.1
                                            },
                                            {
                                                label: label_2,
                                                data: Top2_Count,
                                                fill: false,
                                                backgroundColor: 'rgb(54, 162, 235)',
                                                borderColor: 'rgb(54, 162, 235)',
                                                tension: 0.1
                                            },
                                            {
                                                label: label_3,
                                                data: Top3_Count,
                                                fill: false,
                                                backgroundColor: 'rgb(255,165,0)',
                                                borderColor: 'rgb(255,165,0)',
                                                tension: 0.1
                                            }]
                                        };
                                    // <!-- config block -->
                                        const config2 = {
                                        type: 'line',
                                        data: data2,
                                        };
                                        // <!-- render block -->
                                        const chartTop3 = new Chart(
                                        document.getElementById('chartTop3'),
                                        config2
                                    );
                                    </script>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                                      
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header">
                                    <h4 class="card-title">2017 Sales</h4>
                                    <p class="card-category">All Meat/Poultry and Seafood Products</p>
                                </div>
                                <div class="card-content">
                                <canvas id="chartMeatvsSeafood"></canvas>
                                <?php
                                    require('config/config.php');
                                    require('config/db.php');
                                    $query03 = "SELECT EXTRACT(MONTH FROM o.orderdate) as Month_1997,
                                    cat.CategoryName as CategoryName, SUM(od.UnitPrice*od.Quantity*(1-od.Discount))
                                    as sales
                                    FROM northwind.order_details od, northwind.orders o, northwind.products
                                    p, northwind.categories cat
                                    WHERE o.orderid = od.orderid and p.productid = od.ProductID AND
                                    p.CategoryID=cat.CategoryID and
                                    cat.CategoryName in('Meat/Poultry','Seafood') and o.orderdate LIKE
                                    '1997%'
                                    GROUP BY cat.CategoryName, Month_1997
                                    ORDER BY Month_1997, cat.CategoryName;";
                                    $result03 = mysqli_query($conn, $query03);
                                    if(mysqli_num_rows($result03) > 0){
                                    $Sales_Meat = array();
                                    $Sales_Seafood = array();
                                    while ($row = mysqli_fetch_array($result03)){
                                    if($row['CategoryName']=='Seafood'){
                                    $Sales_Seafood[] = $row['sales'];
                                    }else{
                                    $Sales_Meat[] = $row['sales'];
                                    }
                                    }
                                    mysqli_free_result($result03);
                                    mysqli_close($conn);
                                    }else{
                                    echo "No records matching your query were found.";
                                    }
                                ?>
                                <script>
                                    // <!-- setup block -->
                                    const Sales_Meat = <?php echo json_encode($Sales_Meat); ?>;
                                    const Sales_Seafood = <?php echo json_encode($Sales_Seafood); ?>;
                                    const data3 ={
                                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                                    'Oct', 'Nov', 'Dec'],
                                    datasets: [{
                                    label: 'Meat/Poultry',
                                    data: Sales_Meat,
                                    backgroundColor: [
                                    'rgb(255, 99, 132)'
                                    ],
                                    borderColor: [
                                    'rgb(255, 99, 132)'
                                    ],
                                    borderWidth: 1
                                    },
                                    {
                                    label: 'SeaFood',
                                    data: Sales_Seafood,
                                    backgroundColor: [
                                    'rgb(54, 162, 235)'
                                    ],
                                    borderColor: [
                                    'rgb(54, 162, 235)'
                                    ],
                                    borderWidth: 1
                                    }]
                                    };
                                    // <!-- config block -->
                                    const config3 = {
                                    type: 'bar',
                                    data: data3,
                                    options: {
                                    scales: {
                                    y: {
                                    beginAtZero: true
                                    }
                                    }
                                    }
                                    };
                                    // <!-- render block -->
                                    const chartMeatvsSeafood = new Chart(
                                    document.getElementById('chartMeatvsSeafood'),
                                    config3
                                    );
                                </script>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header">
                                    <h4 class="card-title">Top 5 Ordered Products</h4>
                                    <p class="card-category">Products</p>
                                </div>
                                <div class="content">
                                    <canvas id="myChartTopFive"></canvas>
                                    <?php
                                    require('config/config.php');
                                    require('config/db.php');
                                    $query04 = "SELECT ProductName, UnitPrice as order_count FROM northwind.products order by UnitPrice desc limit 5;";
                                    $result04 = mysqli_query($conn, $query04);
                                    if(mysqli_num_rows($result04) > 0){
                                        $order_count = array();
                                        $label_barchart = array();
                                        while ($row = mysqli_fetch_array($result04)){
                                            $order_count[] = $row['order_count'];
                                            $label_barchart[] = $row['ProductName'];
                                        }
                                        mysqli_free_result($result04);
                                        mysqli_close($conn);
                                    }else{
                                        echo "No records matching your query were found.";
                                    }
                                    ?>
                                    <script>
                                        const label_barchart = <?php echo json_encode($label_barchart); ?>;
                                        const order_count = <?php echo json_encode($order_count); ?>;

                                        console.log('Labels:', label_barchart);
                                        console.log('Data:', order_count);

                                        const data4 = {
                                            labels: label_barchart,
                                            datasets: [{
                                                label: 'Number of Orders',
                                                data: order_count,
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255, 99, 132, 1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        };

                                        // <!-- config block -->
                                        const config4 = {
                                            type: 'bar',
                                            data: data4,
                                            options: {
                                                scales: {
                                                    x: {
                                                        beginAtZero: true
                                                    }
                                                }
                                            }
                                        };

                                        // <!-- render block -->
                                        const myChartTopFive = new Chart(
                                            document.getElementById('myChartTopFive'),
                                            config4
                                        );
                                    </script>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>


                            <div class="col-md-6">
                                <div class="card  card-tasks">
                                    <div class="card-header ">
                                        <h4 class="card-title">Tasks</h4>
                                        <p class="card-category">Backend development</p>
                                    </div>
                                    <div class="card-body ">
                                        <div class="table-full-width">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="">
                                                                    <span class="form-check-sign"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                                    <span class="form-check-sign"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                                    <span class="form-check-sign"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" checked>
                                                                    <span class="form-check-sign"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="">
                                                                    <span class="form-check-sign"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Read "Following makes Medium better"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" disabled>
                                                                    <span class="form-check-sign"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Unfollow 5 enemies from twitter</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer ">
                                        <hr>
                                        <div class="stats">
                                            <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

</html>
