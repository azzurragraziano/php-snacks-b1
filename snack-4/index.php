<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus facere architecto quibusdam repellat sunt eum perspiciatis facilis eius ullam iste deleniti eligendi hic, officia blanditiis quasi? Enim mollitia temporibus harum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, minus temporibus commodi dolor beatae maiores iusto, ratione molestiae vero eius porro veritatis tempore. Repudiandae rerum voluptas natus exercitationem nesciunt ratione. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat error, dignissimos iusto fugit laborum harum aperiam exercitationem soluta, quis unde libero minus quas. Doloremque esse at laborum. Corrupti, provident fugiat?';

        //explode(separator,string)

        $editP = explode('.', $paragraph);

        // var_dump($editP);

        // ciclo editP
        for($i = 0; $i < count($editP); $i++) {
            $myString = $editP[$i];
            echo $myString . '<br>';
        }
    ?>


</body>
</html>