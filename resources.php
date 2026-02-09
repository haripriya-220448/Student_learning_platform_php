<!DOCTYPE html>
<html>
<head>
    <title>Study Resources</title>
    <style>
        body { font-family: Arial; padding: 30px; }
        table {
            border-collapse: collapse;
            width: 70%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
        }
        th {
            background: #1f7a8c;
            color: white;
        }
        a {
            color: #1f7a8c;
            text-decoration: none;
        }
    </style>
</head>
<body>

       <header>
        <div> Reflect Learn</div>
        <nav>
            <a href="index.html"> Home </a> &nbsp;&nbsp;
            <a href="services.html"> Services </a> &nbsp; &nbsp;
            <a href="about.html"> About </a> &nbsp; &nbsp;
            <a href="features.html"> Features </a> &nbsp; &nbsp;
            <a href="help.html"> Help </a> &nbsp; &nbsp;
            <a href="contact.html"> Contact </a> &nbsp; &nbsp;
            <a href="login.html"> Login </a> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
            <a href="upload.php">Upload</a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
            <a href="resources.php">Resources</a> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            <button id="profile">Profile</button>
        </nav>
    </header>

<h2>Available Study Materials</h2>

<table>
    <tr>
        <th>File Name</th>
        <th>Download</th>
    </tr>

<?php
$files = scandir("uploads/");

foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        echo "<tr>
                <td>$file</td>
                <td>
                    <a href='down.php?file=$file'>Download</a>
                </td>
              </tr>";
    }
}
?>

</table>

</body>
</html>
