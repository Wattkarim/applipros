<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <header>
        <div class="logo">Watt</div>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Info</a> 
        </nav>
        <div class="icons">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
    </header>
<!-- carousel -->
<div class="carousel">
    <div class="list">
        <div class="item">
            <img src="a (1).png" >
            <div class="intro">
                <div class="title">
                    DESIGN SLIDER
                </div>
                <div class="topic">
                    Sac a dos en Cuire
                </div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad nobis maiores error, omnis in laboriosam eius at excepturi quisquam officia repellendus architecto repellat debitis mollitia recusandae nam, possimus ipsam.
                </div>
                <button class="seeMore">
                    See more &#8599
                </button>
            </div>
            <div class="detail">
                <div class="title">
                    Sac a dos en Cuire
                </div>
                <div class="des">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur ex doloribus dolorum dolores quod minus cumque dicta unde pariatur totam eum, soluta, esse quae nesciunt, saepe quis voluptates fugit quasi.
                </div>
                <div class="specifications">
                    <div>
                        <p>SAC</p>
                        <p>Sac a dos en Cuire</p>
                    </div>
                    <div>
                        <p>PRIX</p>
                        <p>15 000cfa</p>
                    </div>
                    <div>
                        <p>LIEU</p>
                        <p>Keur Massar</p>
                    </div>
                </div>
                <div class="checkout">
                    <button>ADD TO CART</button>
                    <button>CHECKOUT</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="a (2).png" >
            <div class="intro">
                <div class="title">
                    DESIGN SLIDER
                </div>
                <div class="topic">
                    Sac a dos 
                </div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad nobis maiores error, omnis in laboriosam eius at excepturi quisquam officia repellendus architecto repellat debitis mollitia recusandae nam, possimus ipsam.
                </div>
                <button class="seeMore">
                    See more &#8599
                </button>
            </div>
            <div class="detail">
                <div class="title">
                    Sac a dos
                </div>
                <div class="des">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur ex doloribus dolorum dolores quod minus cumque dicta unde pariatur totam eum, soluta, esse quae nesciunt, saepe quis voluptates fugit quasi.
                </div>
                <div class="specifications">
                    <div>
                        <p>SAC</p>
                        <p>Sac a dos</p>
                    </div>
                    <div>
                        <p>PRIX</p>
                        <p>18 000cfa</p>
                    </div>
                    <div>
                        <p>LIEU</p>
                        <p>Keur Massar</p>
                    </div>
                </div>
                        
                <div class="checkout">
                    <button>ADD TO CART</button>
                    <button>CHECKOUT</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="a (3).png" >
            <div class="intro">
                <div class="title">
                    DESIGN SLIDER
                </div>
                <div class="topic">
                    Sac a dos en Cuire
                </div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad nobis maiores error, omnis in laboriosam eius at excepturi quisquam officia repellendus architecto repellat debitis mollitia recusandae nam, possimus ipsam.
                </div>
                <button class="seeMore">
                    See more &#8599
                </button>
            </div>
            <div class="detail">
                <div class="title">
                    Sac a dos en Cuire
                </div>
                <div class="des">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur ex doloribus dolorum dolores quod minus cumque dicta unde pariatur totam eum, soluta, esse quae nesciunt, saepe quis voluptates fugit quasi.
                </div>
                <div class="specifications">
                    <div>
                        <p>SAC</p>
                        <p>Sac a dos en Cuire</p>
                    </div>
                    <div>
                        <p>PRIX</p>
                        <p>17 000cfa</p>
                    </div>
                    <div>
                        <p>LIEU</p>
                        <p>Keur Massar</p>
                    </div>
                </div>
                       
                <div class="checkout">
                    <button>ADD TO CART</button>
                    <button>CHECKOUT</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="a (4).png" >
            <div class="intro">
                <div class="title">
                    DESIGN SLIDER
                </div>
                <div class="topic">
                    Sac a dos en Cuire
                </div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad nobis maiores error, omnis in laboriosam eius at excepturi quisquam officia repellendus architecto repellat debitis mollitia recusandae nam, possimus ipsam.
                </div>
                <button class="seeMore">
                    See more &#8599
                </button>
            </div>
            <div class="detail">
                <div class="title">
                    Sac a dos en Cuire
                </div>
                <div class="des">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur ex doloribus dolorum dolores quod minus cumque dicta unde pariatur totam eum, soluta, esse quae nesciunt, saepe quis voluptates fugit quasi.
                </div>
                <div class="specifications">
                    <div>
                        <p>SAC</p>
                        <p>Sac a dos en Cuire</p>
                    </div>
                    <div>
                        <p>PRIX</p>
                        <p>19 000cfa</p>
                    </div>
                    <div>
                        <p>LIEU</p>
                        <p>Keur Massar</p>
                    </div>
                </div>
                        
                <div class="checkout">
                    <button>ADD TO CART</button>
                    <button>CHECKOUT</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="14-removebg-preview.png" >
            <div class="intro">
                <div class="title">
                    DESIGN SLIDER
                </div>
                <div class="topic">
                    Sac a dos en Cuire
                </div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad nobis maiores error, omnis in laboriosam eius at excepturi quisquam officia repellendus architecto repellat debitis mollitia recusandae nam, possimus ipsam.
                </div>
                <button class="seeMore">
                    See more &#8599
                </button>
            </div>
            <div class="detail">
                <div class="title">
                    Sac a dos en Cuire
                </div>
                <div class="des">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur ex doloribus dolorum dolores quod minus cumque dicta unde pariatur totam eum, soluta, esse quae nesciunt, saepe quis voluptates fugit quasi.
                </div>
                <div class="specifications">
                    <div>
                        <p>SAC</p>
                        <p>Sac a dos en Cuire</p>
                    </div>
                    <div>
                        <p>PRIX</p>
                        <p>12 000cfa</p>
                    </div>
                    <div>
                        <p>LIEU</p>
                        <p>Keur Massar</p>
                    </div>
                </div>
                        
                <div class="checkout">
                    <button>ADD TO CART</button>
                    <button>CHECKOUT</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="a (5).png" >
            <div class="intro">
                <div class="title">
                    DESIGN SLIDER
                </div>
                <div class="topic">
                    Sac a dos
                </div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad nobis maiores error, omnis in laboriosam eius at excepturi quisquam officia repellendus architecto repellat debitis mollitia recusandae nam, possimus ipsam.
                </div>
                <button class="seeMore">
                    See more &#8599
                </button>
            </div>
            <div class="detail">
                <div class="title">
                    Sac a dos 
                </div>
                <div class="des">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur ex doloribus dolorum dolores quod minus cumque dicta unde pariatur totam eum, soluta, esse quae nesciunt, saepe quis voluptates fugit quasi.
                </div>
                <div class="specifications">
                    <div>
                        <p>SAC</p>
                        <p>Sac a dos </p>
                    </div>
                    <div>
                        <p>PRIX</p>
                        <p>10 000cfa</p>
                    </div>
                    <div>
                        <p>LIEU</p>
                        <p>Keur Massar</p>
                    </div>
                   
                </div>
                <div class="checkout">
                    <button>ADD TO CART</button>
                    <button>CHECKOUT</button>
                </div>
            </div>
        </div>
    </div>
    <div class="arrows">
        <button id="prev"><</button>
        <button id="back">Go Back &#8599</button>
        <button id="next">></button>

    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;0,800;1,700&family=Roboto&display=swap');

body{
    font-family: 'poppins';
    margin: 0;
}
:root{
    --item1-transform:translate(-100%, -5%) scale(1.5);
    --item1-filter:blur(30px);
    --item1-zIndex:11;
    --item1-opacity:0;

    --item2-transform:translate(0, 0) ;
    --item2-filter:blur(0);
    --item2-zIndex:10;
    --item2-opacity:1;

    --item3-transform:translate(50%, 10%) scale(0.8);
    --item3-filter:blur(10px);
    --item3-zIndex:9;
    --item3-opacity:1;

    --item4-transform:translate(90%, 20%) scale(0.5);
    --item4-filter:blur(30px);
    --item4-zIndex:8;
    --item4-opacity:1;

    --item5-transform:translate(120%, 30%) scale(0.3);
    --item5-filter:blur(40px);
    --item5-zIndex:7;
    --item5-opacity:0;
}

a{
    text-decoration: none;
    color: black;

}
header{
    width: 1148px;
    max-width: 90%;
    margin: auto;
    height: 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    z-index:100;
}
header .logo{
    font-weight: bold;
    font-size: 2rem;
}

header nav a{
    margin-left: 30px;
    font-weight: bold;
    font-size: 20px;
}


/* caresoul */
.carousel{
    margin-top: -50px;
    height: 800px;
    overflow: hidden;
    position: relative;
}

.carousel .list{
    position: absolute;
    top: 0;
    left: 50%;
    width: 1140px;
    max-width: 90%;
    transform: translateX(-50%);
    height: 80%;

}


.carousel .list .item{
    position: absolute;
    left: 0;
    top: 0;
    width: 70%;
    height: 100%;
    font-size: 15px;
}
.carousel .list .item img{
    width: 50%;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
}
.carousel .list .item .detail{
    opacity: 0;
    pointer-events: none;
}
.carousel .list .item .intro{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 400px;
    opacity: 0;
    pointer-events: none;
}

.carousel .list .item:nth-child(2) .intro{
    opacity: 1;
    pointer-events: auto;
    transition: opacity 0.5s;
}
.carousel .list .item:nth-child(n + 6){
    opacity: 0;
    pointer-events: none;
}
.carousel .list .item:nth-child(2){
    transform: var(--item2-transform);
    filter: var(--item2-filter);
    z-index: var(--item2-zIndex);
    opacity: var(--item2-opacity);
}
.carousel .list .item:nth-child(1){
    transform: var(--item1-transform);
    filter: var(--item1-filter);
    z-index: var(--item1-zIndex);
    opacity: var(--item1-opacity);
    pointer-events: none;
}
.carousel .list .item:nth-child(3){
    transform: var(--item3-transform);
    filter: var(--item3-filter);
    z-index: var(--item3-zIndex);
    opacity: var(--item3-opacity);
}
.carousel .list .item:nth-child(4){
    transform: var(--item4-transform);
    filter: var(--item4-filter);
    opacity: var(--item4-opacity);
    z-index: var(--item4-opacity);
}
.carousel .list .item:nth-child(5){
    transform: var(--item5-transform);
    filter: var(--item5-filter);
    opacity: var(--item5-opacity);
    z-index: var(--item5-zIndex);
    pointer-events: none;
}
/* arrow */
.arrows{
    position: absolute;
    bottom: 10px;
    width: 1140px;
    max-width: 90%;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.arrows #next,
.arrows #prev{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-family: monospace;
    font-size: large;
    font-weight: bold;
    border: 1px solid #555;
    cursor: pointer;

}
.arrows #back{
    font-family: poppins;
    font-weight: 500;
    border: none;
    border-bottom: 1px solid #555;
    letter-spacing: 3px;
    background-color: transparent;
    opacity: 0;
    pointer-events: none;
    cursor: pointer;
}
.carousel .list .item .intro .title {
    font-size: 2em;
    line-height: 0.8em;
       
}
.carousel .list .item .intro .tapic{
    font-size: 4em;
    font-weight: 500;
}
.carousel .list .item .intro .des{
    font-size: small;
}
.carousel .list .item .intro .seeMore{
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #555;
    font-family: poppins;
    font-weight: bold;
    margin-top: 1.2em;
    padding: 5px 0;
    cursor: pointer;
}
.carousel .list .item:nth-child(2) .intro .title,
.carousel .list .item:nth-child(2) .intro .topic,
.carousel .list .item:nth-child(2) .intro .des,
.carousel .list .item:nth-child(2) .intro .seeMore{
    opacity: 0;
    animation: showContent 0.5s 0.7s ease-in-out 1 forwards ;
}
@keyframes showContent {
    from{
        transform: translateY(50px);
        filter: blur(30px);
    }to{
        transform: translateY(0);
        opacity: 1;
        filter: blur(0);
    }
}
.carousel .list .item:nth-child(2) .intro .topic{
    animation-delay: 0.9s;
}
.carousel .list .item:nth-child(2) .intro .des{
    animation-delay: 1.1s;

}
.carousel .list .item:nth-child(2) .intro .seeMore{
    animation-delay: 1.3s;
}
.carousel.next .list .item:nth-child(1){
    animation: positionItem2 0.5s ease-in-out 1 forwards;
}
@keyframes positionItem2{
    from{
    transform: var(--item2-transform);
    filter: var(--item2-filter);
    z-index: var(--item2-zIndex);
    opacity: var(--item2-opacity);
    }
}
.carousel.next .list .item:nth-child(2){
    animation: positionItem3 0.7s ease-in-out 1 forwards;
}
@keyframes positionItem3{
    from{
        transform: var(--item3-transform);
        filter: var(--item3-filter);
        z-index: var(--item3-zIndex);
        opacity: var(--item3-opacity);
    }
}
.carousel.next .list .item:nth-child(3){
    animation: positionItem4 0.9s ease-in-out 1 forwards;
}
@keyframes positionItem4{
    from{
        transform: var(--item4-transform);
        filter: var(--item4-filter);
        opacity: var(--item4-opacity);
        z-index: var(--item4-opacity);
    }
}
.carousel.next .list .item:nth-child(4){
    animation: positionItem5 1.1s ease-in-out 1 forwards;
}
@keyframes positionItem5{
    from{
    transform: var(--item5-transform);
    filter: var(--item5-filter);
    opacity: var(--item5-opacity);
    z-index: var(--item5-zIndex);

    }
}
/* effcet click prev */
.carousel.prev .list .item:nth-child(2){
    animation: positionItem1 0.5s ease-in-out 1 forwards;
}
@keyframes positionItem1{
    from{
    transform: var(--item1-transform);
    filter: var(--item1-filter);
    z-index: var(--item1-zIndex);
    opacity: var(--item1-opacity);
    }
}
.carousel.prev .list .item:nth-child(3){
    animation: positionItem2 0.7s ease-in-out 1 forwards;
}
.carousel.prev .list .item:nth-child(4){
    animation: positionItem3 0.9s ease-in-out 1 forwards;
}
.carousel.prev .list .item:nth-child(5){
    animation: positionItem4 1.1s ease-in-out 1 forwards;
}
/* showDetail effet */

.carousel .list .item{
    transition: left 0.5s, opacity 0.5s, width 0.5s;
}
.carousel.showDetail .list .item:nth-child(3),
.carousel.showDetail .list .item:nth-child(4){
    left: 100%;
    opacity: 0;
    pointer-events: none;
}
.carousel.showDetail .list .item:nth-child(2){
    width: 100%;
}
.carousel.showDetail .list .item:nth-child(2) .intro{
    opacity: 0;
    pointer-events: none;
}
.carousel .list .item:nth-child(2) img{
    transition: right 0.5s;
}
.carousel.showDetail .list .item:nth-child(2) img{
    right: 50%;
}
.carousel.showDetail .list .item:nth-child(2) .detail{
    opacity: 1;
    pointer-events: auto;
    width: 50%;
    position: absolute;
    right: 0;
    text-align: right;
    top: 50%;
    transform: translateY(-50%);
}
.carousel.showDetail .list .item .detail .title{
    font-size: 4em;
}
.carousel.showDetail .list .item .detail .specifications{
    display: flex;
    gap: 10px;
    width: 100%;
    border-top: 1px solid #5555;
    margin-top: 20px;
}
.carousel.showDetail .list .item .detail .specifications div{
    width: 90px;
    text-align: center;
    flex-shrink: 0;
}
.carousel.showDetail .list .item .detail .specifications div p:nth-child(1){
    font-weight: bold;
}
.carousel.showDetail .list .item .detail .checkout button{
    font-family: poppins;
    background-color: transparent;
    border: 1px solid #555;
    margin-left: 5px;
    font-weight: 500;
    cursor: pointer;
}
.carousel.showDetail .list .item .checkout button:nth-child(2){
    background-color: #693eff;
    color: #eee;
}
.carousel.showDetail .list .item:nth-child(2) .detail .title,
.carousel.showDetail .list .item:nth-child(2) .detail .des, 
.carousel.showDetail .list .item:nth-child(2) .detail .specifications,
.carousel.showDetail .list .item:nth-child(2) .detail .checkout{
    opacity: 0;
    animation: showContent 0.5s 1s ease-in-out 1 forwards ;
}
.carousel.showDetail .list .item:nth-child(2) .detail .des{
    animation-delay: 1.2s;
}
.carousel.showDetail .list .item:nth-child(2) .detail .specifications{
    animation-delay: 1.4s;
}
.carousel.showDetail .list .item:nth-child(2) .detail .checkout{
    animation-delay: 1.4s;
}
.carousel.showDetail #next,
.carousel.showDetail #back{
    opacity: 0;
    pointer-events: none;
}
.carousel.showDetail #back{
    opacity: 1;
    pointer-events: auto;  
}
.carousel::before{
    width: 500px;
    height: 300px;
    content: '';
    background-image: linear-gradient(45deg, #dc422a, blue );
    position: absolute;
    z-index: -1;
    border-radius: 20% 30% 88% 10%;
    filter: blur(150px);
    top: 50%;
    left: 50%;
    transform: translate(-10%, -50%);
    transition: 1s;

}
.carousel.showDetail::before{
    transform: translate(-100%, -50%) rotate(70deg);
}
@media screen and (max-width: 991px) {
    /* ipad - tablet */
    .carousel .list .item{
        width: 90%;
    }
    .carousel .list .detail .specifications{
        overflow: auto;
    }
}
    
@media  screen and (max-width: 767px) {
    /* mobil */
    .carousel .list .item{
        width: 100%;
        font-size: 10px;
    }
    .carousel{
        height: 600px;
    }
    .carousel .list{
        height: 100%;
    }
    .carousel .list .item .intro{
        width: 50%;
    }
    .carousel .list .item img{
        width: 40%;
    } 
    .carousel.showDetail .list .item .detail .title{
        font-size: 2em;
    }
    .carousel.showDetail .list .item .detail .des{
        height: 100px;
        overflow: auto;
    }
    .carousel.showDetail .list .item .detail .checkout{
        display: flex;
        width: max-content;
        float: right
    }
}

</style>


<script>
    let nextButton = document.getElementById('next');
let prevButton = document.getElementById('prev');
let backButton = document.getElementById('back');
let seeMoreButtons = document.querySelectorAll('.seeMore');
let carousel = document.querySelector('.carousel');
let listHTML = document.querySelector('.carousel .list');

nextButton.onclick = function(){
    showSlider('next');
}
prevButton.onclick = function(){
    showSlider('prev'); 
}
let unAcceptClick;
const showSlider = (type) => {
    nextButton.style.pointerEvents = 'none';
    prevButton.style.pointerEvents = 'none';
    carousel.classList.remove('prev', 'next');
    let items = document.querySelectorAll('.carousel .list .item');
    if(type === 'next'){
        listHTML.appendChild(items[0]);
        carousel.classList.add('next');
    }else{
         let positionLast = items.length -1;
        listHTML.prepend(items[positionLast]);
        carousel.classList.add('prev');
    }

    clearTimeout(unAcceptClick);
    unAcceptClick = setTimeout(() => {
        nextButton.style.pointerEvents = 'auto';
        prevButton.style.pointerEvents = 'auto';
    },2000);
}

seeMoreButtons.forEach(button => {
    button.onclick = function(){
        carousel.classList.add('showDetail');
    }
})
backButton.onclick = function(){
    carousel.classList.remove('showDetail');
}
</script>



    <div class="container">

    <div class="content">
        <h3>hi, <span>user</span></h3>
        <h1>welcome <span><?php echo  $_SESSION['user_name'] ?></span></h1>
        <p>Faite votre choix</p>
        <a href="login_form.php"  class="btn">login</a>
        <a href="register_form.php" class="btn">register</a>
        <a href="logout.php" class="btn">logout</a>

    </div>
    
</div>
    

</body>
</html>