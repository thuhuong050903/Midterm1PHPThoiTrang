<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #container {
            width: 90%;
            margin: auto;
        }
        .card-group{
            display: flex;
            gap: 20px;
            
        }
        .card-body #maSo{
            text-align: center;
        }
        #gia{
            color: red;
            text-align: center;
        }
        .card{
            width: 25%;
            height: 710px;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        } 
        #phone_img img {
            margin:auto;
            width: 100%;
            height: 500px;
        }
        #phone_img {
            margin: auto;
            
        }
        #ten {
            text-align: center;
            font-weight: bold;
        }
        .star {
            color:#F79F1F;
        }
        #container .title{
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
            color:#ffff;
            font-size: 34px;
            background-color:yellowgreen;
            border-radius: 50px;
        }
      
        #button button{
            align-items: center;
            border:0px;
            border-radius: 16px;
        
        }
    </style>
    <title>Thời Trang</title>
</head>
<body>
    <?php 
    $products = 
    array (
    'Thời trang nam' => array(
        array(
            'STT'=>1,
            'ten'=>"The Cosmos(Den) Quan short kaki",
            'maSo'=>"TC1025011BA",
            'giaCu' => '500 000',
            'gia'=>'398.000',
            'hinhAnh' => 'https://tiemchupanh.com/wp-content/uploads/2021/12/c%C3%A1c-ki%E1%BB%83u-t%E1%BA%A1o-d%C3%A1ng-ch%E1%BB%A5p-%E1%BA%A3nh-k%E1%BB%B7-y%E1%BA%BFu-cho-nam-683x1024.jpg',
            
            ),
        array(
            'STT'=>2,
            'ten'=>"The Cosmos(Den) Quan short kaki",
            'maSo'=>"TC1025011BA",
            'giaCu' => "",
            'gia'=>'398.000',
            'hinhAnh' => 'https://tiemchupanh.com/wp-content/uploads/2021/12/c%C3%A1c-ki%E1%BB%83u-t%E1%BA%A1o-d%C3%A1ng-ch%E1%BB%A5p-%E1%BA%A3nh-k%E1%BB%B7-y%E1%BA%BFu-cho-nam-683x1024.jpg',
            ),
      
      
        array(
            'STT'=>3,
            'ten'=>"The Cosmos(Den) Quan short kaki",
            'maSo'=>"TC1025011BA",
            'giaCu' => "",
            'gia'=>'398.000',
            'hinhAnh' => 'https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/07/cach-tao-dang-chup-hinh-nam-2.jpeg',
            ),
        array(
            'STT'=>4,
            'ten'=>"The Cosmos(Den) Quan short kaki",
            'maSo'=>"TC1025011BA",
            'giaCu' => "",
            'gia'=>'398.000',
            'hinhAnh' => 'https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/07/cach-tao-dang-chup-hinh-nam-2.jpeg',
            ),
        ),

    'Thời trang nữ' => array(
        array(
            'STT'=>1,
            'ten'=>"The Cosmos(Den) Quan short kaki",
            'maSo'=>"TC1025011BA",
            'giaCu' => "",
            'gia'=>'398.000',
            'hinhAnh' => 'https://tour.dulichvietnam.com.vn/uploads/file/2189-10.jpg',
           ),
        array(
            'STT'=>2,
            'ten'=>"The Cosmos(Den) Quan short kaki",
            'maSo'=>"TC1025011BA",
            'giaCu' => "445 713",
            'gia'=>'398.000',
            'hinhAnh' => 'https://tour.dulichvietnam.com.vn/uploads/file/2189-10.jpg',
        ),
        array(
            'STT'=>3,
            'ten'=>"The Cosmos(Den) Quan short kaki",
            'maSo'=>"TC1025011BA",
            'giaCu' => "",
            'gia'=>'398 000',
            'hinhAnh' => 'https://allimages.sgp1.digitaloceanspaces.com/thegioinangtoasangcom/2022/11/99-Cach-Tao-Dang-Chup-Anh-Ngau-Cho-Nam-Va.jpg',
            ),
        array(
            'STT'=>4,
            'ten'=>"The Cosmos(Den) Quan short kaki",
            'maSo'=>"TC1025011BA",
            'giaCu' => "456 210",
            'gia'=>'3938 000',
            'hinhAnh' => 'https://allimages.sgp1.digitaloceanspaces.com/thegioinangtoasangcom/2022/11/99-Cach-Tao-Dang-Chup-Anh-Ngau-Cho-Nam-Va.jpg',
            ),
    
    
    ));
?>

<div id="container">

<?php 

foreach ($products as $key => $value) { ?>
    <div class="title"> 
        <?php echo $key ?>
    </div>
    <div class="card-group">
            <?php 
            foreach ( $value as $k => $v ) {
                ?>
                <div class="card" id="card-item">
                <div id="phone_img" class="card-img-top"><img src="<?php echo $v['hinhAnh'] ?>"> </div>
                <div class="card-body">
                    <div id="ten" class="card-title"><?php echo $v['ten'] ?> </div>
                    <div id="maSo" style="text-align:center; class="card-title"><?php echo $v['maSo'] ?> </div>

                    <div id="gia" style="text-align:center;color: red;"><?php echo $v['gia'] ?> 
                    <span id="giaCu" style="text-align:center;color: gray;"><strike><?php echo $v['giaCu'] ?></strike></span>
                    </div>
                    <div id="button" style="text-align: center;" onclick ="return confirm('Thank you for order')"><button  style="text-align: center; background-color:orange; color:white" id="buy">Đặt mua</button></div>
                </div>
                </div>
        <?php }
            ?>
        
    </div>
<?php } ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>