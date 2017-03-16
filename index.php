<html>
    <head>
        <script type="text/javascript" src="myjs.js"> 
        </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <body>
        <div id = "header">
            <h1> First PHP example </h1>
            
        </div>
        <div id ="menu">
            <button class="btn btn-primary" type="button" onclick="loadPage('index.php')"> Info </button>
            <button class="btn btn-danger" type="button" onclick="loadPage('client.html')"> Client Side </button>
            <button class="btn btn-info" type="button" onclick="loadPage('server.php')"> Server Side </button>
            <button class="btn btn-warning" type="button" onclick="loadPage('array.php')"> Array Side </button>
            <button class="btn btn-primary" type="button" onclick="loadPage('postExample.php')"> Post </button>
            <button class="btn btn-primary" type="button" onclick="loadPage('getExample.php')"> Get </button>
            <button class="btn btn-primary" type="button" onclick="loadPage('objExample.php')"> Object </button>
            <button class="btn btn-primary" type="button" onclick="loadPage('form_example.php')"> Forms </button>

            <hr>
        </div>

        <div id = "content" class="container">
            Start
        </div>
        
        <div id = "footer">
            <hr> OAMK 2017
        </div>
    </body>
</html>