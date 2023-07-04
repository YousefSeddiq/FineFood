<?php
session_start();
if(!isset($_SESSION["username"])) //This will not allow anyone to enter this page without logging in
{
    header("location:adminLogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--To make the page responsive-->

    <title>admin dashboard</title>

    <link rel="stylesheet" href="css/adminStyle.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--the links from index-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/adminScript.js"></script>

</head>

<body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
    echo $_SESSION["username"];
?>
<!-- The sidebar -->
<section>
    <div class="adminsidebar">
    <a href="adminDashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>

<a href="#analytics"><i class="fa fa-fw fa-analytic"></i> Analytics</a>

<a href="#managecustomers"><i class="fa fa-fw fa-customer"></i> Manage Customers</a>

<a href="mngproducts.php"><i class="fa fa-fw fa-products"></i> Manage Products</a>
<a href="adminContact.php"><i class="fa fa-fw fa-settings"></i> reviews</a>
<a href="adminprofiles.php"><i class="fa fa-fw fa-settings"></i> admin profiles</a>
<a href="adminLogout.php">Logout</a>

    </div>
</section>

<!--content of the page-->
<section>
<div class="Admin-content-wrap">
    
    <h1 id="helloadmin">Hello, admin!</h1>
        <br>

            <div class="dashboards">
                <h1>Orders</h1>
                <h2>Total Order Today</h2>
                <h3>80</h3>
            </div>

            <div class="dashboards">
                <h1>Sales</h1>
                <h2>Total Sale</h2>
                <h3>$250,000</h3>
            </div>

            <div class="dashboards">
                <h1>Profit</h1>
                <h2>Per day ratio</h2>
                <h3>$1000</h3>
            </div>

            <div class="dashboards">
                <h1>Visits</h1>
                <h2>Total visits today</h2>
                <h3>300</h3>
            </div>
        

            <div class="chart-container">
                <canvas id="myChart"></canvas>
                <script>
                    const myChart = new Chart(
                    document.getElementById('myChart'),
                    config
                    );
                </script>
            </div>
        <br>
        <br>

        <h1 id="table-header">Recent Orders</h1>

        <div class="orders-table">
    <table>
        <tr>
            <th>Order No</th>
            <th>Customer Name</th>
            <th>Date</th>
            <th>Status</th>
            <th>Total payment</th>
        </tr>
        <tr>
            <td>#80</td>
            <td>Mark</td>
            <td>1/1/2022</td>
            <td>Delivered</td>
            <td id="lastcol">$100</td>
        </tr>
        <tr>
            <td>#79</td>
            <td>Cherie</td>
            <td>1/1/2022</td>
            <td>Pending</td>
            <td id="lastcol">$50</td>
        </tr>
        <tr>
            <td>#78</td>
            <td>Ahmed</td>
            <td>1/1/2022</td>
            <td>Pending</td>
            <td id="lastcol">$35</td>
        </tr>
        <tr>
            <td>#77</td>
            <td>Sarah</td>
            <td>1/1/2022</td>
            <td>Delivered</td>
            <td id="lastcol">$35</td>
        </tr>
        <tr>
            <td>#76</td>
            <td>Salma</td>
            <td>1/1/2022</td>
            <td>Delivered</td>
            <td id="lastcol">$35</td>
        </tr>
        <tr>
            <td>#75</td>
            <td>Youssef</td>
            <td>1/1/2022</td>
            <td>Confirmed</td>
            <td id="lastcol">$35</td>
        </tr>
    </table>
    </div>

</div> <!--div content wrap-->
</section>

</body>
</html>