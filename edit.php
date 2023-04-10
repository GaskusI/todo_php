<?php
$db = new mysqli("localhost", "root", "", "todo");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $activity = $_POST['activity'];
    
    $stmt = $db->prepare("UPDATE activities SET activity=? WHERE `index`=?");
    $stmt->bind_param("si", $activity, $id);
    $stmt->execute();
    
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];

$stmt = $db->prepare('SELECT * FROM activities WHERE `index`=?');
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

    <html>
    <head>
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
    <div class="container">
        <h1>Edit Activity</h1>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $row['index']; ?>">
            <div class="form-group">
                <label for="activity">Activity</label>
                <input type="text" class="form-control" id="activity" name="activity" value="<?php echo $row['activity']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
    </body>
    </html>

<?php mysqli_close($db); ?>