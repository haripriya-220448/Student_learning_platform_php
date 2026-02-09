<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload - Student Learning</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f8;
            padding: 40px;
        }
        .box {
            background: white;
            padding: 25px;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }
        button {
            padding: 8px 15px;
            background: #1f7a8c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        a {
            display: inline-block;
            margin-top: 10px;
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

<div class="box">
    <h2>Upload Learning File</h2>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="myfile" required>
        <br><br>
        <button type="submit" name="upload">Upload</button>
    </form>

<?php
if (isset($_POST['upload'])) {

    $file_name = $_FILES['myfile']['name'];
    $file_tmp = $_FILES['myfile']['tmp_name'];
    $upload_path = "uploads/" . $file_name;

    if (move_uploaded_file($file_tmp, $upload_path)) {
        echo "<p style='color:green;'>File uploaded successfully!</p>";
        echo "<a href='down.php?file=$file_name'>
                <button>Download File</button>
              </a>";
    } else {
        echo "<p style='color:red;'>File upload failed.</p>";
    }
}
?>

</div>

</body>
</html>
