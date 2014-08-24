<html>
<head>
    <!--Created By Kris Occhipinti - http://filmsbykris.com-->
    <link rel="stylesheet" media="screen" href="http://openfontlibrary.org/face/free-grotesque-web-font" rel="stylesheet" type="text/css"/>
    <style>
        video#bgvid {
            position: fixed; right: 0; bottom: 0;
            min-width: 100%; min-height: 100%;
            width: auto; height: auto; z-index: -100;
            background: no-repeat;
            background-size: cover;
        }

        .center{ 
            font-size: 300%;
            text-align: center; 
            left:50%; 
            top:50%;
            transform:translate(-50%,-50%); 
            -webkit-transform:translate(-50%,-50%);
            position:absolute; 

            -webkit-text-stroke: 2px black;
            color: white;

            font-family: 'GetVoIP Grotesque'; 
            font-weight: normal; 
            font-style: italic;  
        }

    </style>
</head>
<body>
    <video autoplay loop poster="images/world.png" id="bgvid">
        <source src="videos/world.webm" type="video/webm">
    </video>
    <h1 class="center">
        THIS IS AN EXAMPLE OF TEXT FOR A PRESENTATION
    </h1>
</body>
</html>
