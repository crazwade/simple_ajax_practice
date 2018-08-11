<html>
    <head>
        <title>test_ajax</title>
    </head>
    <style>
    #body{
        background-color: pink;
    }
    .head{
        width: 400px;
        background-color: black;
        margin: 0px auto;
        padding: 10px 0px;
    }
    h1{
        color: white;
        font-size: 36pt;
        text-align: center;
    }
    h2{
        color: white;
        text-align: right;
        font-size: 16px;
    }
    h3{
        color: black;
        text-align: center;
        font-size: 16px;
    }
    .body{
        width:400px;
        margin: 0px auto;
        background-color: yellow;
        margin-top: 50px;
    }
    .foot{
        width: 400px;
        height: 50px;
        background-color: black;
        margin: 0px auto;
        margin-top: 20px;
    }
    .footdiv{
        padding-top: 20px;
    }
    .select{
        width: 400px;
        background-color: gray;
        margin: 0px auto;
    }
    </style>

    <body id='body'>
        <div class="head">
            <h1>title HERE</h1>
        </div>
        <div class="select">

        </div>
        <div class="body" id="show_body">
            <?php
            $check = $_POST['check'];
            if($check=='test1'){
                echo 'test1:'.$_POST['test1'];
            }else if($check=='test2'){
                echo 'test2:'.$_POST['test2'];
            }else if($check=='test3'){
                echo 'test3:'.$_POST['test3'];
            }else{
                echo "nothing";
            }
            ?>
        </div>
        <div class="foot">
            <div class="footdiv">
                <h2>im footer.</h2>
            </div>
        </div>
    </body>
</html>