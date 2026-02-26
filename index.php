<?php
include("config.php");

// ---------------- RESET BUTTON LOGIC ----------------
if (isset($_POST['reset'])) {
    mysqli_query($conn, "TRUNCATE TABLE people_log");
    header("Location: index.php");
    exit();
}

// ---------------- FETCH DATA ----------------
$latest_query = mysqli_query($conn, "SELECT * FROM people_log ORDER BY id DESC LIMIT 1");
$latest = mysqli_fetch_assoc($latest_query);

$total_records = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM people_log"));

$max_query = mysqli_query($conn, "SELECT MAX(current_count) as max_people FROM people_log");
$max_data = mysqli_fetch_assoc($max_query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crowd Monitoring Dashboard</title>

    <!-- Auto Refresh Every 5 Seconds -->
    <meta http-equiv="refresh" content="5">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            text-align: center;
            margin: 0;
        }

        h1 {
            background: #2c3e50;
            color: white;
            padding: 15px;
            margin: 0;
        }

        .card {
            display: inline-block;
            background: white;
            padding: 20px;
            margin: 20px;
            width: 250px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        .reset-btn {
            padding: 10px 20px;
            background: red;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
        }

        table, th, td {
            border: 1px solid gray;
        }

        th, td {
            padding: 10px;
        }

        th {
            background: #2c3e50;
            color: white;
        }
    </style>
</head>

<body>

<h1>Live Crowd Monitoring Dashboard</h1>

<!-- Dashboard Cards -->
<div class="card">
    <h3>Current People</h3>
    <h2><?php echo $latest['current_count'] ?? 0; ?></h2>
</div>

<div class="card">
    <h3>Highest Crowd</h3>
    <h2><?php echo $max_data['max_people'] ?? 0; ?></h2>
</div>

<div class="card">
    <h3>Total Records</h3>
    <h2><?php echo $total_records; ?></h2>
</div>

<br>

<!-- RESET BUTTON -->
<form method="POST">
    <button name="reset" class="reset-btn">
        Reset All Data
    </button>
</form>

<br><br>

<h2>Recent Crowd Logs</h2>

<table>
<tr>
    <th>ID</th>
    <th>Time</th>
    <th>Current Count</th>
    <th>Total Session</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM people_log ORDER BY id DESC LIMIT 20");

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['time']."</td>
        <td>".$row['current_count']."</td>
        <td>".$row['total_detected']."</td>
    </tr>";
}
?>

</table>

</body>
</html>