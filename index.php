<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BankSo</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        *{
            margin: 0;
        }
        header{
            display: flex;
            flex-direction: row;
            padding: 20px;
            height: 10vh;
            justify-content: space-between;
            font-family: "Bebas Neue", sans-serif;
        }
        header h1{
            font-size: 50px;
        }
        nav{
            margin-top: 15px;
            width: 500px;
        }
        nav ul{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        nav ul li{
            list-style: none;
            font-family: "Bebas Neue", sans-serif;
            font-size: 20px;
            transition: transform 0.5s ease-in-out;
            
        }
        nav ul li::after {
            color: white;
            content: "";
            display: block;
            width: 100%;
            height: 1.5px;
            background: black;
            transform: scale(0);
            transition: transform 0.5s ease-in-out;
        }
        nav ul li:hover::after {
            transform: scale(1);
        }
        nav ul li:hover{
            transform: scale(1.2);
        }
        .presentation{
            display: flex;
            flex-direction: row;
            padding: 30px;
            font-size: 50px;
        }
        .presentation img{
            width: 500px;
            height: 600px;
        }
    </style>
</head>
<body>
    <header>
        <h1>BankSo</h1>
        <nav>
            <ul>
                <li>My account</li>
                <li>My wallet</li>
                <li>My settings</li>
            </ul>
        </nav>
    </header>
    <div class="presentation">
        <h2>Welcome to BankSo ! Your Bank with SO many advantage.</h2>
        <img src='./banksopp.png'>
    </div>
</body>
</html>