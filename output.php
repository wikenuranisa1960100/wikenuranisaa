<!doctype html>
<html lang="en">
    <head>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">

        <!--Bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <title>Hasil</title>
    </head>
    <body>
        <?php
        include("connection.php");
        $nama="";
        $ttl="";
        $jeniskelamin="";
        $usia="";
        $alamatemail="";

        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $nama = $_POST['nama'];
            $ttl = $_POST['ttl'];
            $jeniskelamin = $_POST['jeniskelamin'];
            $usia = $_POST['usia'];
            $alamatemail = $_POST['alamatemail'];
        }
        if ($nama!="" || $ttl!="" || $jeniskelamin!="" || $usia!="" || $alamatemail!=""){
            $sql = "INSERT INTO user (nama,ttl,jeniskelamin,usia,alamatemail,tanggal)
            values ('$nama','$ttl', '$jeniskelamin','$usia','$alamatemail','".date('Y-m-d')."')";
            if($conn->query($sql)===TRUE){
                echo "success";
            }else{
                echo "Error:".$sql."<br>".$conn->error;
            }
        }
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead class="text-center">
                            <tr>
                                <th>Nama</th>
                                <th>Tempat,Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Usia</th>
                                <th>Alamat Email</th>
                            
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                            <?php
                                $sql="SELECT * FROM user ORDER BY tanggal DESC";
                                $result = $conn->query($sql);
                                if ($result->num_rows >0){
                                    //output data dari setiap baris
                                    while($row = $result -> fetch_assoc()){
                                        echo "<tr><td>".$row["nama"]."</td><td>".$row["ttl"]."</td><td>".$row["jeniskelamin"]."</td><td>".$row["usia"]."</td><td>".$row["alamatemail"]."</td><td>".$row["tanggal"]."</td></tr>";
                                    }
                                }
                            ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        
    </body>
</html>