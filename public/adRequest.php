<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            background-color: grey;
            height: 100vh;
            width: 250px;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
        }

        .sidebar h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar li {
            margin-bottom: 15px;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
            background-color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #ddd;
        }
        .container{
            margin-left: 17%;
        }
    </style>
</head>
<body>
    <div class="sidebar">
    <center><a href="adDashboard.php"><img src="../img/phoenix.jpg" alt="" style="width: 180px; height: 80px; border-radius: 5px;"></a></center>
        <h3>CPC CHECK</h3>
        <h5>Nurse Panel</h5>
        <br>
        <ul>
            <li><a href="adInventory.php" class="text-decoration-none">Inventory</a></li>
            <li><a href="adRequest.php" class="text-decoration-none">Student Request</a></li>
            <li><a href="adHistory.php" class="text-decoration-none">Student History</a></li>
            <li><a href="adRecord.php" class="text-decoration-none">Student Record</a></li>
            <li><a href="adMonitoring.php" class="text-decoration-none">Monitored Student</a></li>
        </ul>
    </div>
    <br>
    <br>
    <br><br><br>

    <div class="container mt-5">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Medicine</th>
                    <th>Description</th>
                    <th>Reason</th>
                    <th>Expiration Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <button class="btn btn-primary w-25">Accept</button>
                    <button class="btn btn-danger w-25">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>