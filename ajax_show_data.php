<?php include 'ajax_load_data.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script>
        $(document).ready( function() {
            $("button").click();

        });

    
    </script>
</head>
<body>
    <div id="comments">
        <?php
            $sql = "select * from comments";
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows() > 0){
                while($row = mysqli_fetch_assoc($result)){

                    echo "<p>";
                    echo $row['field1'];
                    echo $row['field2'];
                    echo "</p>";
                }
            } else {

                echo "Empty";
            }
        ?>
    </div>    
    <button>Show</button>

</body>
</html>
