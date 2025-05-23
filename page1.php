<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MZG Chess Game Simulator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin :50px;
            text-align: center;
        }
        input[type="text"]{
            padding: 10px;
            font-size: 16px;
            width: 250px;
        }
        input[type="submit"]{
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 10px;
        }
        .error{
            color: red;
            margin-top: 10px;
        }
        </style>
        <script>
            function validateForm(){
                var input =document.getElementById("playerCount").value;
                var errorMsg= document.getElementById("error");
                var number= parseInt(input);
                 if (!input || isNaN(number) || number<=0){
                    errorMsg.textContent="Lütfen geçerli bir sayı giriniz"
                    return false;
                 }
            return true;
                }
                </script>
                </head>
                <body>
                    <h2> MZG Chess Game Simulator</h2>
                    <form action = "page2.php" method="GET" onsubmit= "return validateForm()">
                        <label> Enter number of chess players: </label><br><cr>
                            <input type="text" id="playerCount" name="count">
                         <br>
                         <input type="submit" value="START">
                         <div class="error" id="error"></div>
            </form>
            </body>
            </html>