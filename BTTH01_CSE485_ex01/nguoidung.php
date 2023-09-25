<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   

<style>
    .left-align-image {
        float: left;
    }

    .right-align-text {
        text-align: right;
        font-size: 20px;
    }
    .right-align {

        float: right;
        border: 1px solid #00FF00;
        padding: 10px;
        border-radius: 5px;
        background-color: orange;
    }
    .User{
        font-size:20px;
        font-weight: bold;
    }
    .row{
        padding: 10px;
    }
    .vertical-menu {
  list-style-type: none;
  padding: 0;
  margin: 0;
  width: 200px;
}

.vertical-menu li {
  padding-top:15px;
  
}

.vertical-menu li a {
  display: block;
  color: #333;
  padding: 8px 16px;
  text-decoration: none;
}

.vertical-menu li a:hover {
  background-color: #ddd;
}
    </style>

</head>
<body>
<div class="container-fluid">
<div class="left-align-image">
<img src="hiiii.png" float:height="150px">
<ul class="vertical-menu">
  <li><a href="nguoidung.php">Người dùng</a></li>
  <li><a href="cacnhom.php">Các nhóm</a></li>
  <li><a href="quyen.php">Quyền</a></li>
  <li><a href="#">Liên hệ</a></li>
</ul>


</div>
        <div class="row">
                    <div>
                        <span class="User" > Users </span>
                        <span class="right-align">Add User/Delete</span> 
                <table class="table">
                  <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">PHONE</th>
                        <th scope="col">CITY</th>
                        <th scope="col">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        for ( $i = 0; $i<=10; $i++ ):
                            $fullname = "Nguyễn Văn B";
                            $phone = "555666";
                            $email = "b111@gmail.com";
                            $city= "Tp.HCM";
                    ?>
                    <tr>
                       <th scope="row">
                       <input type="checkbox" id="myCheckbox" name="myCheckbox">
                       <label for="myCheckbox"></label>
                       </th>
                       
                       <td class="d-flex align-items-center">
                            <span class="flex-grow-1"><?=$fullname?></span>
                       </td>
                       <td>
                            <?=$email?>
                       </td>
                       <td style="background-color:white ;">
                            <?=$phone?>
                       </td>
                
                       <td>
                            <?=$city?>
                       </td>
                       <td class="d-flex align-items-center justify-content-around">
                       <span class="fa-solid fa-pen" ></span><i class="far fa-trash-alt"> 
                   
                       </td>
                    </tr>
                  </tbody>
                  <?php endfor ?>
                </table>
            </div>
        </div>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>