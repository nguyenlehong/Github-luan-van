<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="dangnhap">
        <div class="container">
            <h2>Đăng nhập</h2>
            <!-- style="width:323px;" -->



            <form action="Login.php" method="POST">
                <div class="inputBox">
                    <input type="text" required="required" name="ID">
                    <span>Tài khoản</span>
                </div>

                <div class="inputBox">

                    <input type="password" required="required" name="Matkhau">
                    <span>Mật khẩu</span>
                </div>

                <?php         
            if(isset($thongbaoo)&&($thongbaoo!="" ))
            { echo '
                <span style="color: red; ">'.$thongbaoo.'</span>
                ';} 
                ?>

                <div class="inputBox">
                    <input type="submit" value="Đăng nhập" name="dangnhap">

                </div>
            </form>
        </div>
    </div>
</body>

</html>
<style>
* {
    margin: 0;
    padding: 0;
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    /* background: linear-gradient (45deg, #fead06, #c00def); */
    background: linear-gradient(45deg, #80cbc4, #e1bee7);

}

.thongbao {
    text-align: center;
    color: #e91e63;

}

.dangnhap {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    /* background: linear-gradient(45deg, #fead06, #c00def); */
    /* background: linear-gradient(45deg, #80cbc4, #e1bee7); */
}

.container {
    position: relative;
    padding: 70px 40px;
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);


}

.container h2 {
    font-size: 35px;
    color: #111;
    margin-bottom: 45px;
    line-height: 1em;
    font-weight: 500;
    padding-left: 10px;
    border-left: 5px solid #e91e63;
}

.container .inputBox {
    position: relative;
    width: 300px;
    height: 46px;
    margin-bottom: 30px;
}

.container .inputBox:last-child {
    margin-bottom: 0;
}

.container .inputBox input {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    border: 1px solid #111;
    background: transparent;
    padding: 10px;
    border-radius: 4px;
    box-sizing: border-box;
    outline: none;
    font-size: 16px;
    color: #111;
    font-weight: 300;
}

.container .inputBox span {
    position: absolute;
    top: 1px;
    left: 1px;
    padding: 10px;
    display: inline-block;
    font-size: 16px;
    color: #111;
    font-weight: 300;
    transition: 0.5s;
    pointer-events: none;
}

.container .inputBox input:focus~span,
.container .inputBox input:valid~span {
    transform: translateX(-10px) translateY(-32px);
    font-size: 16px;
}

.container .inputBox input[type="submit"] {
    background: #2196f3;
    color: #fff;
    border: none;
    max-width: 120px;
    cursor: pointer;
    font-weight: 500;
}
</style>