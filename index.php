<?php
session_start();
    // if(!isset($_SESSION['username'])){
    //     header("location: login.php");
    // }
    require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food bros</title>
    <link rel="stylesheet" href="foodbros.css">
</head>
<body>
    <nav>
        <ul>
            <li style="margin-left: auto;">
                <div onclick="showcart()" class="cart">cart</div>
            </li>
            <li><a class="login" href="logout.php">logout</a></li>
        </ul>
    </nav>
    <div class="cart-container">
        <div class="cart-box">
            <button class="payment-btn">proceed payment</button>
            <div class="ordertemplate">
                <div>Fooditem</div>
                <div>Quantitiy</div>
                <div>Total price = <span class="totalprice">0</span></div>
            </div>
        </div>
    </div>
    <div class="foodcontainer">
        <div id="categories">
            <div class="indian">
                <a href="#">indian</a>
                <div class="sublist">
                    <div>indian bread</div>
                    <div>biryani</div>
                    <div>rice</div>
                    <div>curry</div>
                    <div>starter</div>
                </div>
            </div>
            <div class="chineese">
                <a href="#chineese">chineese</a>
                <div class="sublist">
                    <div>Chow Mein</div>
                    <div>Fried Rice</div>
                    <div>Noodles</div>
                    <div>Manchuriya</div>
                </div>
            </div>
            <div class="french">
                <a href="#french">french</a>
                <div class="sublist">
                    <div>biryani</div>
                    <div>rice</div>
                    <div>curry</div>
                    <div>starter</div>
                </div>
            </div>
            <div class="mexican">
                <a href="#mexican">mexican</a>
                <div class="sublist">
                    <div>biryani</div>
                    <div>rice</div>
                    <div>curry</div>
                    <div>starter</div>
                </div>
            </div>
        </div>
        <div id="fooddisplay">
            <div class="foodcategory">
                <div class="card biryani indian">
                    <img src="./foodpics/biryani.jpg"  alt="">
                    <div class="items">
                        <p>Chicken Biryani</p>
                        <p>190</p>
                        <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                        <button class="cart-btn">Add to cart</button>
                    </div>
                </div>
                <div class="card rice indian">
                    <img src="./foodpics/gongurachicken.jpg" alt="">
                    <div class="items">
                        <p>Gongura Chicken pulao</p>
                        <p>150</p>
                        <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                        <button class="cart-btn">Add to cart</button>
                    </div>
                </div>
                <div class="card starter indian">
                <img src="./foodpics/friedwings.jpg" alt="">
                    <div class="items">
                        <p>Kurnool Fried Wings</p>
                        <p>120</p>
                        <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                        <button class="cart-btn">Add to cart</button>
                    </div>
                </div>
                <div class="card curry indian">
                <img src="./foodpics/butterchicken.jpg" alt="">
                    <div class="items">
                        <p>Butter Chicken</p>
                        <p>150</p>
                        <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                        <button class="cart-btn">Add to cart</button>
                    </div>
                </div>
                <div class="card indian bread">
                <img src="./foodpics/butternaan.jpg" alt="">
                    <div class="items"> 
                    <p>Butter Naan</p>
                    <p>30</p>
                    <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                    <button class="cart-btn">Add to cart</button>
                </div>
                </div>
                <div class="card indianbread indian">
                <img src="./foodpics/thandooriRoti.jpg" alt="">
                    <div class="items">
                        <p>Thandoori Roti</p>
                        <p>30</p>
                        <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                        <button class="cart-btn">Add to cart</button>
                    </div>
                </div>
                <div class="card starter indian">
                <img src="./foodpics/chicken65.jpg" alt="">
                    <div class="items">
                        <p>Chicken 65</p>
                        <p>Price :</p>
                        <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                        <button class="cart-btn">Add to cart</button>
                    </div>
                </div>
                <div class="card curry indian">
                <img src="./foodpics/paneerbuttermasala.jpg" alt="">
                    <div class="items">
                        <p>Paneer Butter Masalas</p>
                        <p>Price :</p>
                        <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                        <button class="cart-btn">Add to cart</button>
                    </div>
                </div>
                <div class="card curry indian">
                <img src="./foodpics/paneertikka.jpg" alt="">
                    <div class="items">
                        <p>Paneer Tikka</p>
                        <p>Price :</p>
                        <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                        <button class="cart-btn">Add to cart</button>
                    </div>
                </div>
                <div class="card curry indian">
                <img src="./foodpics/mushroommasala.jpg" alt="">
                    <div class="items">
                        <p>Mushrrom Masala</p>
                        <p>Price :</p>
                        <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                        <button class="cart-btn">Add to cart</button>
                    </div>
                </div>
                <div class="card curry indian">
                <img src="./foodpics/dalTadka.jpg" alt="">
                    <div class="items">
                        <p>Dal Tadka</p>
                        <p>Price :</p>
                        <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                        <button class="cart-btn">Add to cart</button>
                    </div>
                </div>
                <div class="card Chow Mein chineese">
                <img src="./foodpics/chowMein.jpg" alt="">
                    <div class="items">
                        <p>Chow Mein</p>
                        <p>Price :</p>
                        <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                        <button class="cart-btn">Add to cart</button>
                    </div>
                </div>
                <div class="card Noodles chineese">
                <img src="./foodpics/eggnoodles.jpg" alt="">
                    <div class="items">
                        <p>Egg Noodles</p>
                        <p>Price :</p>
                        <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                        <button class="cart-btn">Add to cart</button>
                    </div>
                </div>
                <div class="card Manchuriya chineese">
                <img src="./foodpics/manchurian.jpg" alt="">
                    <div class="items">
                        <p>Manchuriya</p>
                        <p>Price :</p>
                        <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                        <button class="cart-btn">Add to cart</button>
                    </div>
                </div>
                <div class="card Fried Rice chineese">
                <img src="./foodpics/chickenfriedrice.jpg" alt="">
                    <div class="items">
                        <p>Chicken Fried Rice</p>
                        <p>Price :</p>
                        <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                        <button class="cart-btn">Add to cart</button>
                    </div>
                </div>
                <div class="card Fried Rice chineese">
                <img src="./foodpics/eggrice.jpg" alt="">
                    <div class="items">
                        <p>Egg Fried Rice</p>
                        <p>Price :</p>
                        <div class="btn-container">
                            <button class="removeitem">-</button>
                            <div class="qty">1</div>
                            <button class="additem">+</button>
                        </div>
                        <button class="cart-btn">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //declareations
        const cartbox=document.querySelector('.cart-container');
        const categories=document.querySelectorAll('#categories > div');
        const sub=document.querySelectorAll('.sublist');
        const cards=document.querySelectorAll('.card');
        const indiansub=document.querySelectorAll('.sublist > *');
        const cartbtns=document.querySelectorAll('.cart-btn');
        const additembtns=document.querySelectorAll('.additem');
        const removeitembtns=document.querySelectorAll('.removeitem');
        let cartitems=document.querySelectorAll('.order');
        const Totalprice=document.querySelector('.totalprice');
        //functions
        
        removeitembtns.forEach(btn=>{
            btn.addEventListener('click',(ev)=>{
                cartitems=document.querySelectorAll('.order');
                let x=parseInt(ev.target.parentElement.children[1].innerHTML);
                if(x>1){
                    ev.target.parentElement.children[1].innerHTML=--x;
                    decprice(x,ev.target.parentElement.parentElement.children[0].innerHTML);
                }
                else{
                    ev.target.parentElement.parentElement.children[3].style.visibility='visible';
                    removecartitem(ev.target.parentElement.parentElement.children[0].innerHTML);
                }
            })
        })
        additembtns.forEach(btn=>{
            btn.addEventListener('click',(ev)=>{
                cartitems=document.querySelectorAll('.order');
                let x=parseInt(ev.target.parentElement.children[1].innerHTML);
                ev.target.parentElement.children[1].innerHTML=++x;
                if(x>1){
                    incprice(x,ev.target.parentElement.parentElement.children[0].innerHTML);
                }
                console.log(x);
            })
        })
        cartbtns.forEach(btn=>{
            btn.addEventListener('click',(ev)=>{
                const neworder=document.createElement('div');
                const dishname=document.createElement('div');
                const dishnamecontent=document.createTextNode(ev.target.parentElement.children[0].innerHTML);
                dishname.appendChild(dishnamecontent);
                const quantitiy=document.createElement('div');
                const quantitiycontent=document.createTextNode('1');
                quantitiy.appendChild(quantitiycontent);
                const price=document.createElement('div');
                const pricecontent=document.createTextNode(ev.target.parentElement.children[1].innerHTML);
                price.appendChild(pricecontent);
                neworder.appendChild(dishname);
                neworder.appendChild(quantitiy);
                neworder.appendChild(price);
                neworder.classList.add('order');
                document.querySelector('.cart-box').appendChild(neworder);
                ev.target.style.visibility='hidden';
                console.log(ev.target);
                let y=parseInt(Totalprice.innerHTML);
                y+=parseInt(ev.target.parentElement.children[1].innerHTML);
                Totalprice.innerHTML=y;
                document.querySelector('.ordertemplate').style.display='grid';
                document.querySelector('.payment-btn').style.display='inline';
            })
        })
        function showcart(){
            cartbox.classList.toggle('unhide');
            console.log(cartbox.classList.toString());
        }
        function incprice(noofitems,itemname){
            cartitems.forEach(item=>{
                if(itemname==item.firstElementChild.innerHTML){
                    let x=parseInt(item.children[2].innerHTML);
                    item.children[2].innerHTML=x*noofitems/(noofitems-1);
                    item.children[1].innerHTML=noofitems;
                   computetotalprice();
                }
            })
        }
        function decprice(noofitems,itemname){
            cartitems.forEach(item=>{
                if(itemname==item.firstElementChild.innerHTML){
                    let x=parseInt(item.children[2].innerHTML);
                    item.children[2].innerHTML=x*noofitems/(noofitems+1);
                    item.children[1].innerHTML=noofitems;
                   computetotalprice();
                }
            })
        }
        function computetotalprice(){
            let y=0;
            cartitems.forEach(item=>{
                y+=parseInt(item.lastElementChild.innerHTML);
            })
            Totalprice.innerHTML=y;
        }
        function removecartitem(ordername){
            cartitems.forEach(item=>{
                if(ordername==item.firstElementChild.innerHTML){
                    item.remove();
                    let y=parseInt(Totalprice.innerHTML);
                    y-=parseInt(item.lastChild.innerHTML);
                    Totalprice.innerHTML=y;
                    if(document.querySelector('.cart-box').children.length==2){
                        document.querySelector('.ordertemplate').style.display='none';
                        document.querySelector('.payment-btn').style.display='none';
                    }
                }
            })
        }
        categories.forEach(cat=>{
            // console.log(cat.firstElementChild.innerHTML);            
            cat.addEventListener('click',(ev)=>{
                // console.log(ev.target);
                sub.forEach(elem=>{
                    if(!elem.parentElement.classList.toString().includes(ev.target.innerHTML)){
                        elem.classList.remove('show');
                    }
                })
                ev.target.nextElementSibling.classList.toggle('show');
            })
        })
        indiansub.forEach(foodname=>{
            // console.log(foodname);
            foodname.addEventListener('click',(ev)=>{
                ev.stopPropagation();
                console.log(ev.target.innerHTML);
                // console.log(ev.target.outerHTML);
                cards.forEach(card=>{
                    card.classList.remove("hide");
                })
                
                cards.forEach(card=>{
                // const list=card.classList;
                    if(!card.classList.toString().includes(ev.target.innerHTML)&&ev.target.parentElement.parentElement.classList.toString()){
                        console.log(ev.target.parentElement.parentElement.classList.toString());
                        card.classList.add("hide");
                    }
                })
            });
        })
    </script>
    <footer>
        
    </footer>
</body>
</html>