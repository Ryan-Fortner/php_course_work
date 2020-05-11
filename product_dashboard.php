<!DOCTYPE html>

<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Product Demo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Product Demo</h1>
        
        <form action='checkout.php' method='post'>
            Your Name: <input type='text' name='name' /><br />
            Email: <input type='text' name='email' /><br />
            Purchasing:
                <select name='item'>
                    <option value ='CodingDojo_Shirt'>CodingDojo T-Shirt </option>
                    <option value ='CodingDojo_Cup'>CodingDojo Cup</option>
                </select><br />
            Quantity: <input type='text' name='quantity' />
            <input type='submit' value='purchase' />
        </form>

        <script src="" async defer></script>
    </body>
</html>