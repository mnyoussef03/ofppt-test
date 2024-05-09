<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <style>
        :root{
            --color:gold;
            --color2:purple;
        }
        body{
            font-size: 20px;
        }
        *{
            margin: 0%;
            padding: 0%;

        }
        .home{
            text-align: center;
            background-color: black;
            color: beige;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        h1{
            color: var(--color);
            font-size: 3em;
            margin: 10px 0;
        }
        h2{
            font-size: 2.5em;
            margin: 10px 0;

        }
        h3{
            font-size: 2em;
            color: var(--color);
            margin: 10px 0;

        }
        p{
            letter-spacing: 1px;
            margin: 10px 0;

        }
        a{
            display: inline-block;
            margin: 15px 0;
            text-decoration: none;
            color: var(--color);
            border: 2px solid var(--color);
            padding: 10px 20px;
            border-radius: 20px;
            font-size: 1.2rem;
            transition: 0.6s;
        }
        a:hover{
            color: black;
            background: var(--color)
        }
    </style>
</head>
<body>
<div class="home">
    <div class="content">
        <h1>EL MOSTAIN YOUSSEF</h1>
        <h2>DEVWFS 202</h2>
        <h3>Voiture</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        <a href="/marque">Get Started</a>
    </div>
    <div class="img"></div>
</div>
</body>
</html>
