<!-- Connect PHP  -->
<?php
    session_start();
    $conn = new mysqli("172.18.0.2", "root", "andra1", "trucorp");
    if($conn->connect_error){
        die('Connect Error');
    }
    # Untuk Fetch
    $data = [];  // Untuk ngambil semua data dari db
    $res = $conn->query("SELECT * FROM users"); // $res = Result
    $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;"> Andra Rama Aditya <p> 2301924113 <p> UAS ServerAdmin </h2>
        
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jabatan</th>
            </tr>
            <?php
                while($rows=$res->fetch_assoc())
                {
             ?> 
            <tr>
                <td><?php echo $rows['ID'];?></td>
                <td><?php echo $rows['Nama'];?></td>
                <td><?php echo $rows['Alamat'];?></td>
                <td><?php echo $rows['Jabatan'];?></td>
            </tr>
            <?php
                }
                ?>
        </table>
        </div>
        </br>
</body>
</html>
