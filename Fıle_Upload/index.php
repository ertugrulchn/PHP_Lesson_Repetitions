<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload İmage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        * {
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <form action="sonuc.php" method="post" enctype="multipart/form-data"><br><br>
        <div style="height: 50px;">
            <div class="row">
                <div class="col-md-8">
                    <input class="form-control form-control-lg" id="fileToUpload" name="fileToUpload" type="file">
                </div>
                <div class="col-md-4">
                    <input style="width: 100%; height: 100%;" class="btn btn-primary" type="submit" value="Upload İmage" name="submit">
                </div>
            </div>
        </div>
    </form>
    <br><br><br><br><br><b><br>

        <?php

        $dizin = opendir("uploads"); //listelenecek dizin

        while (($dosya = readdir($dizin)) !== false) {
            if (!is_dir($dosya)) {
        ?>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Image Name</th>
                        </tr>
                    </thead>
                    <?php
                    echo "
                        <tbody>
                            
                        <tr>
                            <td>
                                
                                <img style='max-width: 200px; max-height: 200px;' src='uploads/{$dosya}' alt=''>
                                
                            </td>
                            <td>$dosya</td>
                        </tr>
                        
                        </tbody>"
                    ?>
                </table>
        <?php
            }
        }

        closedir($dizin);

        ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</html>