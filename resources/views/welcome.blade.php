<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <title>Kanye west quotes</title>

        <style>
                        
            body {
                height: 100%;
                background: linear-gradient( rgba(9, 9, 121, 100), 
                            rgba(0, 212, 255, 100) );
                background-position: center;
            }
                
            .app{
                padding-top: 20%;
                padding-bottom: 20%;
            }
                
            .button {
                background: linear-gradient(to bottom right, #8dbd34, #2f096d);
                border: 0;
                border-radius: 12px;
                color: #FFFFFF;
                cursor: pointer;
                display: inline-block;
                font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
                font-size: 16px;
                font-weight: 500;
                line-height: 2.5;
                outline: transparent;
                padding: 0 1rem;
                text-align: center;
                text-decoration: none;
                transition: box-shadow .2s ease-in-out;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                white-space: nowrap;
            }
            
        </style>

        <script>
            function getQuotes(){
                    $("#content").text("Please Wait ...");
                $.ajax({
                    url:'get_quotes',
                    method: 'get',
                     success: function(response){
                        const HTML = response.map( item => `<div>${item}
                            <br /><hr /><br /></div> ` ).join('');
                        $("#content").html(HTML);
                     }
                });
            }
            getQuotes();
        </script>

    </head>
    <body class="">
        <div id="">
        <div class="app">
                <center>
                    <h3 class="quote">
                        <!--foreachloop-->
                            <div id='content'>Loading Quotes...</div>
                    </h3>
                    <button class="button" onclick="getQuotes()">
                        Get my  qoutes
                    </button>


                </center>
            </div>
        </div>
        
        
    </body>
</html>