<!DOCTYPE html>
<html lang = "en-US">
    <style>
        .navbar {
            overflow: hidden;
            background-color: rgb(154, 154, 237);
            padding: 10px;
            margin: -8px -20px;
            font-family: Georgia;
            font-size: 16px;
            color: black;
         }
        
        a {
            padding: 16px;
            color: black;
        }

        #noline {
            text-decoration: none;
        }

        a:hover {
            background-color: rgb(118, 118, 234);
            color: white;
        }

        .active {
            background-color: rgb(79, 79, 155);
            color: white;
        }
    </style>
    <head>
            <title> Account Page </title>
    </head>    

    <body>
        <div class = "navbar">
            <a href = "http://127.0.0.1:8000/landing" id = "noline"> Home </a>
            <a class = "active" href = "http://127.0.0.1:8000/account" id = "noline"> Account </a>
            <a id = "noline"> Button 3 </a>
        </div>
        
        <h1> Hello World! </h1>
        <p> this is the page where you can see all the posts. </p>
    </body>

</html>