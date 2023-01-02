
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
    <h1>Enetr  Place</h1>
    <input type="text" id="book" placeholder="Enetr Book Name"></input>
    <input type="submit" id="load-button"></input>

    <br>
    <div id='load'>

    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
                <script type="text/javascript">
                 $(document).ready(function(){
                    $("#load-button").on("click",function(e){
                        e.preventDefault();
                        var bookname = $("#book").val();
                        $.ajax({
                            url: "books.php",
                            type: "POST",
                            data: {bookname :bookname },
                            success: function(data){
                                if(data){
                                    $("#load").html(data);
                                }
                                else{
                                    $("#load").html("<p><b>no record found</p>");
                                }  
                            }
                    });
                });
            });
            </script>
</body>
</html>


