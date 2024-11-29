<?php

if(isset($_POST['submit'])){
    $imageName =$_FILES['fileUpload']['name'];
    $temp = $_FILES['fileUpload']['tmp_name'];
    $folder = 'folderImage/';
    $fileSize = $_FILES['fileUpload']['size'];
    $kb = $fileSize/1024;
    $fileType = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

    // check image size 
    if (!in_array($fileType, ["jpg", "png", "jpeg", "gif"])) {
        $msg2 = "Also Sorry, only jpg, png, jpeg, or gif formats are allowed!";
    }
    elseif($kb<100){
        // upload file 
        move_uploaded_file($temp,$folder.$imageName);
        echo "Successfully Uploaded!";
    }else{
        $msg ="Image is too large. Your image must be a maximum of 100 KB.";
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Body Styling */
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
            background: linear-gradient(135deg, #2471a3 , #2e86c1 );
        }

        /* Section Container */
        section {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Form Styles */
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-weight: bold;
            font-size: 16px;
            color: #333;
        }

        input[type="file"] {
            padding: 10px;
            border: 2px dashed #6b73ff;
            border-radius: 8px;
            background-color: #f9f9f9;
            cursor: pointer;
        }

        button {
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #6b73ff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #000dff;
        }
    </style>
</head>
<body>
    <section>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="file">File Upload</label>
            <input type="file" name="fileUpload" id="file">
            <button type="submit" name="submit">Upload File</button>
        </form>
    </section>
    <?php
    echo isset($msg) ? $msg : '';
    echo isset($msg2) ? $msg2 : '';
    ?>
</body>
</html>
<!-- display images  -->
<?php
$imageFolder = "folderImage/"; // Folder containing images
$images = glob($imageFolder . "/*.{jpg,png,gif,jpeg}", GLOB_BRACE);

if (count($images) > 0) {
    foreach ($images as $image) {
        echo '<img src="' . $image . '" alt="image">';
    }
} else {
    echo "No images have been uploaded yet.";
}
?>



