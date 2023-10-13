<?php echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="#" alt="">
    <img src="#" alt="">
    <img src="#" alt="">
    <img src="#" alt="">
    <img src="#" alt="">
    <img src="#" alt="">
    <img src="#" alt="">
    <img src="#" alt="">
    <img src="#" alt="">
    <img src="#" alt="">
    <script>
       let img = document.querySelectorAll("img");
    //    fetch("https://api.jikan.moe/v4/anime?q=Bleach&sfw")
    //    .then(response => response.json())
    //    .then(items => {
    //         console.log(items);
    //         items.data.forEach((el, i) => {
    //             img[i].src = el.images.jpg.image_url;
    //         });
           
    //    })
    fetch("https://deepcloud.eu/tweets-en.json")
    .then(response => response.json())
    .then(items => { 
        console.log(items);
    });
    </script>
</body>
</html>';
?>