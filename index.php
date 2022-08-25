<?php 
include "basic.php";
if(isset($_POST["username"])){
    $user=get_user($_POST["username"]);
    if(isset($user["username"])){
        if(password_verify($_POST["password"], $user["password"])){
            $_SESSION["username"] = $user["username"];
            header("Location:main/products-list.php");
        }        
    }    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo "$project_name"; ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- --------------------------------------------------------------------------------------------Header---------------- -->
    <div class="header">
        <div class="container">
            <img class="logo" src="<?php echo "$project_logo";?>" alt="">
            <div>
                <a href="#sign"><button class="sign-btn">Sign in</button></a>
                <a href="main/sign-up.php"><button class="sign-btn">Sign up</button></a>
            </div>
            <div class ="links">
                <span class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#footer">About</a></li>
                </ul>
            </div>
            

            </div>
        </div>

    </div>
    <!-- --------------------------------------------------------------------------------------------Landing---------------- -->

    <div class="landing">
        <div class="intro-text">
            <h1>Hi There,</h1>
            <br>
            <br>
            <p>Welcome to <?php echo "$project_name" ?> <br>The first known furniture is said to have existed in the Egyptian civilization about 4000 years ago, though it might have existed in some crude form prior to that. The Egyptians used chairs, tables, stools, chests, beds, etc. The Assyrians and Babylonians are also said to have had elaborate furniture including high-backed chairs and footstools. In comparison, the Greeks used much simpler furniture comprising beds, small tables, and chairs. The Romans were also like the Greeks except their furniture was more decorated with Ivory, metal, and precious stones</p>
        </div>
    </div>
    <!-- --------------------------------------------------------------------------------------------Features---------------- -->

    <div class="features" id="features">
        <div class="container">
            <div class="feat">
             <i class="fa-solid fa-chair"></i>
                <h3>Chairs</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor, quasi fugit quam vitae dolorum nesciunt laudantium cupiditate enim nam incidunt ullam ex at. Praesentium quia aliquid fugit ut amet? A.</p>

            </div>
            <div class="feat">
                <i class="fa-solid fa-couch"></i>
                <h3>Couch</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor, quasi fugit quam vitae dolorum nesciunt laudantium cupiditate enim nam incidunt ullam ex at. Praesentium quia aliquid fugit ut amet? A.</p>
                
            </div>
            <div class="feat">
                <i class="fas fa-globe-asia fa-3x"></i>
                <h3>From All The World</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor, quasi fugit quam vitae dolorum nesciunt laudantium cupiditate enim nam incidunt ullam ex at. Praesentium quia aliquid fugit ut amet? A.</p>
            </div>
        </div>
    </div>
    <!-- --------------------------------------------------------------------------------------------Services---------------- -->

    <div class="services" id="services">
        <div class="container">
            <h2 class="special-heading">services</h2>
            <p>don't be busy</p>
            <div class="services-content">
                <div class="col">
                    <div class="srv">
                        <i class="fas fa-palette fa-2x"></i>
                        <div class="text">
                         <h3>web design</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem pariatur accusantium minus eveniet ut voluptatum fugiat doloremque eaque quas vitae. Facere, placeat expedita nisi autem labore corporis beatae maxime? Neque.</p>
                        </div>
                    </div>
                    <div class="srv">
                        <i class="fas fa-palette fa-2x"></i>
                        <div class="text">
                         <h3>web design</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem pariatur accusantium minus eveniet ut voluptatum fugiat doloremque eaque quas vitae. Facere, placeat expedita nisi autem labore corporis beatae maxime? Neque.</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col">
                    <div class="srv">
                        <i class="fas fa-palette fa-2x"></i>
                        <div class="text">
                         <h3>web design</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem pariatur accusantium minus eveniet ut voluptatum fugiat doloremque eaque quas vitae. Facere, placeat expedita nisi autem labore corporis beatae maxime? Neque.</p>
                        </div>
                    </div>
                    <div class="srv">
                        <i class="fas fa-palette fa-2x"></i>
                        <div class="text">
                         <h3>web design</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem pariatur accusantium minus eveniet ut voluptatum fugiat doloremque eaque quas vitae. Facere, placeat expedita nisi autem labore corporis beatae maxime? Neque.</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col">
                    <div class="srv">
                    <div class="image">
                            <img src="img/intro.jpg" alt="">
                        </div>

                    </div>
                        
                </div>
            </div>
        </div>

    </div>
    <!-- --------------------------------------------------------------------------------------------portfolio---------------- -->

    <div class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="special-heading">Portfolio</h2>
            <div class="portfolio-content">
                <div class="card">
                    <img src="img/a.jpg" alt="">
                </div>
                <div class="card">
                    <img src="img/b.png" alt="">
                </div>                
                <div class="card">
                    <img src="img/intro2" alt="">
                </div>
                <div class="card">
                    <img src="img/d.jpg" alt="">
                </div>         
                <div class="card">
                    <img src="img/e.jpg" alt="">
                </div>         
                <div class="card">
                    <img src="img/f.jpg" alt="">
                </div>         
            </div>
        </div>

    </div>
    <!-- --------------------------------------------------------------------------------------------sign---------------- -->

    <div class="sign" id="sign">
        <div class="container">
        <h2 class="special-heading">Sign in</h2>
            <div class="sign-content">
                <form method="post" action="index.php">
                    <input type="text" placeholder="Username" name="username" >
                    <input type="password" placeholder="Password" name="password" >
                    <button type="submit" name="save_bt">Login</button>
                    <p><a href="main/sign-up.php">Don't have an account</a></p>
                </form>  
            </div>
        </div>

    </div>
    <!-- --------------------------------------------------------------------------------------------Footer---------------- -->

    <div class="footer" id="footer">
        BY Mohammed Saeed.
    </div>
</body>
</html>