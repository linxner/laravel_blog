<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                text-align: center;
                position:relative;

            }
            .title {
                width:100%;
                font-size: 84px;
                position:absolute;
                top:50%;
                transform:translateY(-50%);
                /* margin-top:40%; */

            }

            </style>

<body>
    <!-- <form action="" method="post" enctype="multipart/form-data">
        <p>name:<input type="text" name="name" value="" placeholder="please input your name"></p>
        <p>age:<input type="text" name="age" value="" placeholder="please input your age"></p>
        <p>email:<input type="text" name="email" value="" placeholder="please input your email"></p>
        <p>avatar:<input type="file" name="avatar"></p>
        {{csrf_field()}}
        <input type="submit">
    </form> -->
    <div class="title m-b-md">Welcome to Fakerface</div>
</body>

</html>
