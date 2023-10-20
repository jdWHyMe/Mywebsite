<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <link rel="stylesheet" href="style.css">
    <script src="func.js"></script>
    
</head>
<body>

    <nav class="navbar">
        <div class="navbar__container">
            <a id="navbar__logo">Graphics Cards</a>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a class="navbar__links">Home</a>
                </li>
                <li class="navbar__item">
                    <a class="navbar__links">All Cards</a>
                </li>
                <li class="navbar__item">
                    <a class="navbar__links">INTEL</a>
                </li>
                <li class="navbar__item">
                    <a class="navbar__links">AMD</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="main_div">
        <div class="introBar">
            <div class="introBar_text">
            A graphics card, often referred to as a GPU, is a vital component in a computer responsible for rendering and displaying images, videos, and 3D graphics on a monitor. It contains specialized hardware components, including the GPU and VRAM, designed to process complex graphical data quickly. Graphics cards significantly improve a computer's visual performance, making them essential for tasks like gaming, video editing, and 3D modeling. They can also handle multiple monitors, support general-purpose computing tasks, and require driver software for optimal operation, playing a crucial role in enhancing a computer's visual capabilities.
            </div>
        </div>
        <hr>

        
        <nav class="navbar">
        <div class="navbar__container">
            
            <ul class="navbar__menu">
                <li class="sortbar__item">
                    <a class="navbar__links">Sort By: </a>
                </li>
                <li class="navbar__item">
                    <a class="navbar__links" id="sortHigh" onclick="sortPriceHighToLow()">Price: High to Low</a>
                </li>
                <li class="navbar__item">
                    <a class="navbar__links">Price: Low to High</a>
                </li>
                <li class="navbar__item">
                    <a class="navbar__links">Brand</a>
                </li>
            </ul>
        </div>
        </nav>

        <hr>
        <div class="products">
            <?php

                if(file_exists('catalog.xml'))
                {
                    $records = simplexml_load_file('catalog.xml');
                }
                else{
                    echo "No file";
                }
                  
                foreach($records as $record)
                {
                    echo "<div class='card' data-price='$record->price'>
                    <div class='pic'>
                        <img src='images/$record->image' alt='GPU Image'>
                    </div>
                    <div class='model'>
                        $record->model
                    </div>
                    <div class='manufacturer'>
                        $record->manufacturer
                    </div>
                    <div class='memory'>
                        $record->memory
                    </div>
                    <div class='price'>
                        $record->price
                    </div>
                    </div>\n";

                }
            ?>
 
        </div>
        <hr>
        <div class="outroBar">
            <div class="outroBar_text">
                
GPUs (Graphics Processing Units) are important because they excel at handling complex mathematical calculations and rendering graphics with exceptional speed and efficiency. They significantly enhance a computer's ability to display high-quality images, videos, and 3D graphics, making them crucial for tasks such as gaming, video editing, and 3D modeling. GPUs also enable scientific simulations, machine learning, and other data-intensive computations, extending their utility to various fields. Their parallel processing power and dedicated VRAM provide seamless and high-performance graphics, contributing to a smoother and more immersive user experience, which is particularly vital in today's digital world.
            </div>
        </div>    
    </div>

    <div class="footer">
        <ul class="footer__menu">
            <li class="footer__item">
                <a href="/" class="footer__links">About</a>
            </li>
            <li class="footer__item">
                <a href="/" class="footer__links">Contacts</a>
            </li>
            <li class="footer__item">
                <a href="/" class="footer__links">Help</a>
            </li>
        </ul>       
    </div>
</body>
</html>