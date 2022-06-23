<!-- <!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Luckiest Guy', cursive;
        }

        section {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            background: #2ed573
        }

        section h1 {
            text-shadow: 2px 5px 5px #2f3542;
            word-spacing: 10px;
            margin-bottom: 15px;
            font-size: 2.5rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: white;
        }

        .centerDiv {
            width: 60%;
            height: 450px;
            box-shadow: 2px 2px 2px 5px white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: #57606f;
            color: white;
        }



        .details {
            text-align: center;
            text-transform: uppercase;
        }

        .details label {
            font-size: 1.4rem;
        }

        .details input {
            padding: 10px;
            background-color: #ff6b81;
            color: white;
            text-align: center;
        }

        .details input[type=text]:focus {
            border: 3px solid #555;
        }

        .imgdiv {
            margin: 30px 0;
        }

        button {
            background: #3498db;
            width: 180px;
            padding: 4px 0;
            border-radius: 3px;
            color: white;
            font-size: 1.2rem;
            letter-spacing: 2px;
            background-color: darken(#f1c40f, 20%);
        }


        button:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <section>
        <h1>WHAT DOES YOUR NAME SAY ABOUT YOUR PERSONALITY?</h1>
        <div class="centerDiv">
            <div class="details">
                <label>ENTER YOUR NAME</label><br>
                <input type="text" name="" id="nameid">
            </div>

            <div class="imgdiv">
                <img src="cat.jpg" width="200" height="200" class="imgchange">
            </div>

            <button> Click Me</button>

        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('button').click(function() {
                const name = $('#nameid').val();
                alert(name);
                $('.imgchange').attr('src', `https://joeschmoe.io/api/v1/${name}`);
                const b = $('.imgchange');
                console.log(b);

            });
        });
    </script>

</body>

</html> -->

<!-- My html code in image API using -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Api</title>
    <style>
        h2 {
            text-align: center;
            color: red;
            text-transform: uppercase
        }

        #label {
            text-transform: uppercase;
            text-align: center;
            color: greenyellow
        }

        #Image_api {

            text-align: center;
            margin-top: 20px;


        }

        img {
            border-radius: 10%;
        }

        button {
            margin-left: 710px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <section>
        <h2>What Does Your Name Say Your Personality?</h2>
        <div>
            <div id="label">
                <label>enter your name :</label>
                <input type="text" name="" id="nameID">
            </div>
            <div id="Image_api">
                <img src="cat.jpg" height="200" width="200" id="imageChange" alt="image">
            </div>
            <button>Click Me</button>
        </div>

    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $('button').click(function() {
                const name = $('#nameID').val();
                alert(name);

                $('#imageChange').attr('src', `https://joeschmoe.io/api/v1/${name}`);
                const b = $('#imageChange');
                console.log(b);

            });
        });
    </script>
</body>

</html>