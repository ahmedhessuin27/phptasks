<?php
echo '<pre>';
print_r($_FILES);
echo '</pre>';
$all_errors=[];
$allowed_img=['jpg','png','jpeg','jfif'];
if($_SERVER['REQUEST_METHOD']=='POST'){

    if(isset($_FILES['my_picture'])){

        $cont=count($_FILES['my_picture']['size']);
        if($_FILES['my_picture']['error'][0]!=4){
            
           $my_pic = $_FILES['my_picture'];
            
            for($i=0; $i<$cont ; $i++){

                
                $pic_size= $my_pic['size'][$i];
                $pic_name=uniqid() .$my_pic['name'][$i];
                $pic_tmp=$my_pic['tmp_name'][$i];
                $pic_path=$my_pic['full_path'][$i];

                $img_ext=explode('.',$pic_name);
                $img_f_ext=end($img_ext);
                $ext=strtolower($img_f_ext);
                if($pic_size<2097152){
                if(in_array($ext,$allowed_img)){

               move_uploaded_file($pic_tmp,'uploadsfolder/'. $pic_name);

                }else{

                    $all_errors['img_type']=' plz select a file jpg png jpeg';
                }
                


            }else{

                $all_errors['size_file']='plz select a file its size smaller than 2m '. $pic_path;
            }
            }
            

        }else{

              $all_errors['select_file']='plz select a file';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php if(!empty($all_errors)) :?>
        <?php foreach($all_errors as $error):?>
            <div class="alert alert-info">
                 <?= $error ?>
            </div>
        <?php endforeach ?>
    <?php endif ?> 
    <form action="" method="POST" enctype="multipart/form-data">

    <input multiple type="file" name="my_picture[]">
    <button>sub</button>
    </form>
</body>
</html>