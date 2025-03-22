<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Account</title>
    
<style type="text/css">
/***************************** 
    IMPORTED FONTS
*****************************/
/* variable font */
@font-face {
    font-family: "AfacadFlux";
    src: url(../fonts/AfacadFlux-VariableFont_slnt\,wght.ttf);
    font-weight: normal;
}
/* variable font */
@font-face {
    font-family: "DMSans";
    src: url(../fonts/DMSans-VariableFont_opsz\,wght.ttf);
    font-weight: normal;
}
/* variable font */
@font-face {
    font-family: "SUSE";
    src: url(../fonts/SUSE-VariableFont_wght.ttf);
    font-weight: normal;
}
/* static font */
@font-face {
    font-family: "Barlow Semi Condensed";
    src: url(../fonts/BarlowSemiCondensed-Regular.ttf);
    font-weight: normal;
}

/***************************** 
    RESET
*****************************/
* {
    margin: 0;
    padding: 0;
    border: 0;
    font-family: "AfacadFlux", Arial, Helvetica, sans-serif;
}
html {
    width: 100%;
    scroll-behavior: smooth;
}
body {
    width: 100%;
    background-color: rgb(213, 213, 213);
}
a {
    text-decoration: none; /* removes hyperlink underline */
    color: black;
}
ul {
    list-style-type: none; /* removes dots from list items */
}
img {
    max-width: 100%;
    object-fit: contain; /* keep image aspect ratio and displays center */
}
h2 {
    font-family: "DMSans", Arial, Helvetica, sans-serif;
    font-size: 35px;
    margin-bottom: 15px;
    text-transform: uppercase; /* always uppercase */
}
h3 {
    font-family: "DMSans", Arial, Helvetica, sans-serif;
    margin-bottom: 15px;
    text-align: center;
    text-transform: uppercase; /* always uppercase */
}

/***************************** 
    LARGER FONT SIZES
*****************************/
[data-text-size='large'] {
    h2 {
        font-size: 40px;
    }

    header .header-item li {
        p, button {
            font-size: 23px !important;
        }
    }

    nav ul a li {
        font-size: 26px;
        translate: 0 -5px; /* puts nav text in center */
        letter-spacing: 2px; /* reduces space between letters */
    }

    #back-to-top {
        font-size: 22px;
        letter-spacing: 2px; /* reduces space between letters */
        text-indent: 2px;
    }

    #home-main #home-main-button {
        font-size: 26px;
        letter-spacing: 2px; /* reduces space between letters */
    }

    .products-list .single-product {
        font-size: 25px;
        .product-title {
            font-size: 30px;
        }
    }

    #home-categories .home-category-button {
        font-size: 32px !important;
        letter-spacing: 2px !important; /* reduces space between letters */
    }
}


/***************************** 
    HEADER
*****************************/
header {
    width: 100%;
    height: 100px;
    top: 0;
    position: sticky;
    margin-bottom: 20px;
    z-index: 1; /* header and nav are over all other content */
    background-image: linear-gradient(150deg, rgb(20, 0, 0) 80%, rgb(65, 0, 0) 85%, rgb(128, 0, 0) 90%, white 100%);
    box-shadow: 0 1px 10px black;

    #header-wrapper {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: space-between;

        #main-logo {
            width: 180px;
            margin-left: 30px;
            color: white; /* makes alt text is visible */
            img {
                margin-top: 7.5px;
                min-height: 60px;
                min-width: 100%;
                height: 60px;
                width: 100%;
                object-fit: cover;
            }
        }

        #header-items {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            align-items: center;
            margin: 0 3%;
            .header-item {
                transition: 0.2s;
                margin: 0 20px 0 20px;

                li:has(img) { /* icons have different dimensions to text */
                    height: 50px;
                    width: 50px;
                    img {
                        min-height: 100%;
                        min-width: 100%;
                        height: 100%;
                        width: 100%;
                        color: white; /* makes alt text visible */
                    }
                }
                li {
                    height: 40px;
                    width: 70px;
                    text-align: center;
                    p, button {
                        font-family: "Barlow Semi Condensed", Arial, Helvetica, sans-serif;
                        font-size: 20px;
                        color: white;
                    }
                    p {
                        translate: 0 5px; /* centers text vertically */
                    }
                    /* logout button */
                    form {
                        height: 100%;
                        width: 100%;
                        button {
                            height: 100%;
                            width: 100%;
                            background-color: transparent;
                            cursor: pointer;
                        }
                    }
                }
            }
            .header-item:hover {
                background-color: white;
                transition: 0.4s;
                img {
                    color: rgb(128, 0, 0); /* makes alt text visible */
                }
                p, button {
                    
                    color: rgb(128, 0, 0);
                }
            }
        }
    }

/***************************** 
    TEXT SIZE TOGGLE
*****************************/
    #toggle-text-size {
        height: 15px;
        margin: 0 20px 20px 20px;
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: space-between;
        color: white;
        align-items: center;

        #toggle-text-size + p { /* first letter */
            font-size: 18px;
        }
        .toggle-switch + p { /* last letter */
            font-size: 26px;
        }

        .toggle-switch {
            height: 15px;
            width: 35px;
            margin: 0 10px;
            border-radius: 30px;
            outline: 1px solid white;
            outline-offset: 3px;
            cursor: pointer;
            transition: 0.4s;

            input { /* hides default checkbox */
                opacity: 0;
                height: 0;
                width: 0;
            }
        }

        /* background behind circle inside toggle switch */
        .toggle-switch::before {
            content: "";
            display: block;
            position: relative;
            height: 15px;
            width: 15px;
            background-color: rgb(128, 0, 0);
            border-radius: 50%;
            transition: 0.2s;
        }
        .toggle-switch:has(> input:checked)::before {
            width: 100%;
            border-radius: 30px;
            transition: 0.2s;
        }

        /* circle inside toggle switch */
        .toggle-switch::after {
            content: "";
            display: inline-block;
            position: relative;
            height: 15px;
            width: 15px;
            translate: 0 -16px;
            background-color: white;
            border-radius: 50%;
            transition: 0.2s;
        }
        .toggle-switch:has(> input:checked)::after {
            transform: translateX(20px);
            transition: 0.2s;
        }
    }

/***************************** 
    NAV BAR
*****************************/
    nav {
        width: 100%;
        height: 25px;
        letter-spacing: 5px;
        bottom: 0;
        position: absolute;
        background-color: rgb(128, 128, 128);

        ul {
            height: 100%;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: space-between;
            overflow: hidden; /*text cuts off if it cannot fit*/
            
            a {
                padding: 0 10px 0 10px;
                flex: 1 1;
                color: black;
                transition: 0.4s;

                li {
                    height: 100%;
                    text-align: center;
                    font-family: "Barlow Semi Condensed", Arial, Helvetica, sans-serif;
                    font-size: 18px;
                    text-transform: uppercase; /* always uppercase */
                }
            }

            /* category border */
            a::after {
                content: "";
                width: 1px;
                height: 20px;
                top: 0;
                background-color: black;
                display: block;
                position: absolute;
                transform: translate(-10.5px, 2.5px); /* align border between categories */
                transition: 0.4s;
            }
            /* removes border line at the edge of the page (to the left of first category) */
            a:first-child::after {
                content: none;
            }

            /* transitions occur after slight delay (allows mouse to move away before transistion) */
            a:hover {
                background-color: white;
                color: rgb(128, 0, 0);
                transition: 0.2s 0.4s;
            }
            /* border fills whole height of nav bar */
            a:hover::after {
                height: 25px;
                transform: translate(-10.5px, 0);
                transition: 0.2s 0.4s;
            }
        }
    }
}

/***************************** 
    BACK TO TOP BUTTON
*****************************/
#back-to-top {
    height: 45px;
    width: 50px;
    position: fixed;
    bottom: 7%;
    right: 5%;
    z-index: 1; /* on top of all other content */
    font-family: "Barlow Semi Condensed", Arial, Helvetica, sans-serif;
    font-size: 18px;
    text-indent: 5px; /* adjusts text to be in center (must be equal to letter-spacing) */
    letter-spacing: 5px;
    text-align: center;
    line-height: 65px; /* text at bottom of button */
    background-color: rgb(20, 0, 0);
    color: white;
    box-shadow: 0 0 6px rgb(128, 128, 128);
}
#back-to-top:hover {
    cursor: pointer;
}

/* arrow inside box */
#back-to-top::before, #back-to-top::after {
    content: "";
    position: absolute;
    width: 50%;
    height: 2px;
    top: 11px;
}
#back-to-top::before {
    background-color: white;
    transform: rotate(-35deg);
    left: 3px;
}
#back-to-top::after {
    background-color: rgb(128, 0, 0);
    transform: rotate(35deg);
    right: 3px;
}

/***************************** 
    CONTENT SEPARATOR LINE
*****************************/
.content-separate {
    position: relative;
    width: auto;
    height: 20px;
    padding: 3%;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px;
    .content-separate-box {
        height: 10px;
        width: 20px;
        align-items: center;
        border: 2px solid black;
    }
    .content-separate-box::before, .content-separate-box::after {
        content: "";
        display: inline-block;
        position: relative;
        height: 1px;
        width: calc(100% + 4px);
        background-color: black;
    }
    .content-separate-box::before {
        left: -1px;
        top: -10px;
        rotate: 27deg;
    }
    .content-separate-box::after {
        left: -2px;
        top: -32px;
        rotate: -27deg;
    }
}
.content-separate::before, .content-separate::after {
    content: "";
    position: absolute;
    width: 43%;
    height: 1.6px;
    background: black;
    vertical-align: middle;
}
.content-separate::before {
    left: 3%;
}
.content-separate::after {
    right: 3%;
}

/***************************** 
    MAIN IMAGE ON HOMEPAGE
*****************************/
#home-main {
    margin-top: -20px; /* ignores header margin */
    margin-bottom: 20px;
    img {
        background-color: white;
        min-height: 600px;
        min-width: 100%;
        height: 600px;
        width: 100%;
        object-fit: cover;
    }
    #home-main-button {
        height: 55px;
        width: 190px;
        right: 6%;
        top: 600px;
        position: absolute;
        background-color: rgb(20, 0, 0);
        color: white;
        font-family: "Barlow Semi Condensed", Arial, Helvetica, sans-serif;
        font-size: 18px;
        letter-spacing: 5px;
        cursor: pointer;
        transition: 0.4s;
        box-shadow: 0 0 6px rgb(128, 128, 128);
    }
    #home-main-button:hover {
        background-color: white;
        color: rgb(128, 0, 0);
        scale: calc(195/190) calc(60/55); /* expands height and width by 5px */
        transition: 0.4s;
    }
}

/***************************** 
    FEATURED PRODUCTS LIST
*****************************/
#featured-products-list {
    margin: 0 3% 0 3%;
}

/***************************** 
    PRODUCTS LIST
*****************************/
.products-list {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    height: 420px;
    width: 100%;
    left: 10%;
    overflow: hidden;
    justify-content: center;

    .single-product {
        height: 380px;
        width: 300px;
        margin: 10px;
        padding: 10px;
        background-color: white;
        font-size: 20px;
        transition: 0.2s;

        img {
            background-color: rgb(213, 213, 213);
            min-height: 60%;
            min-width: 100%;
            height: 60%;
            width: 100%;
        }
        .product-title {
            max-height: 81px; /* 3 lines */
            font-size: 25px;
            line-height: 27px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    }
    .single-product:hover {
        box-shadow: 0 0 6px rgb(128, 128, 128);
        scale: calc(310/300) calc(390/380); /* expands height and width by 10px */
        transition: 0.2s;
    }
}

/***************************** 
    HOMEPAGE CATEGORIES SECTION
*****************************/
#home-categories {
    margin: 0 3% 0 3%;
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    #home-category1, #home-category2, #home-category3 {
        text-align: center; /* alt text in middle */
        height: 500px;
        transition: 0.4s;

        img {
            background-color: white;
            min-height: 430px;
            min-width: 100%;
            height: 430px;
            width: 100%;
            object-fit: cover;
        }
        .home-category-button {
            height: 71px; /* +1px to cover whole div */
            width: 100%;
            font-size: 27px;
            letter-spacing: 5px;
            background-color: rgb(20, 0, 0);
            color: white;
            cursor: pointer;
            transition: 0.4s;
        }
    }
    #home-category1, #home-category3 {
        width: calc((100% / 3) - 20px);
    }
    #home-category1 {
        clip-path: polygon(0 0, 100% 0, 82% 100%, 0 100%);
        transform: translate(10%, 0);
        .home-category-button {
            transform: translate(-10%, -6px); /* align button text to center */
        }
    }
    #home-category2 {
        margin-top: 20px;
        width: calc((100% / 3) + 40px);
        clip-path: polygon(18% 0, 82% 0, 100% 100%, 0 100%);
    }
    #home-category3 {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 18% 100%);
        transform: translate(-10%, 0);
        .home-category-button {
            transform: translate(10%, -6px); /* align button text to center */
        }
    }

    #home-category1:hover, #home-category2:hover, #home-category3:hover {
        .home-category-button {
            background-color: white;
            color: rgb(128, 0, 0);
            transition: 0.4s;
        }
    }
    #home-category1:hover {
        transform: translate(10%, 10px);
    }
    #home-category2:hover {
        transform: translate(0, -10px);
    }
    #home-category3:hover {
        transform: translate(-10%, 10px);
    }
}

/***************************** 
    CATEGORY PAGES
*****************************/
#men-main, #women-main, #kids-main, #accessories-main {
    margin: 0 3% 0 3%;
    p {
        font-size: 22px;
    }
}

/***************************** 
    LOG IN/REGISTRATION
*****************************/
#registration-wrapper {
    display: flex;
    justify-content: center;
    align-items: center; 
    height: 100vh; 
    box-sizing: border-box;
}

#login-form, #registration-form {
    background-color: #fff;
    padding: 40px;
    max-width: 500px;
    margin: 0 auto; /* Center the form horizontally */
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    
    h2 {
        margin-bottom: 20px;
        font-size: 2em;
        font-weight: bold;
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    /* puts red star next to label for required fields */
    label:has(+ input:required)::after {
        content: " *";
        color: rgb(128, 0, 0);
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        text-align: left;
    }
    input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1em;
    }

    .remember-me-container {
        display: flex; 
        align-items: center; 
        gap: 5px; 
    }

    /* Specific styles for the Remember Me checkbox */
    #remember-checkbox {
        appearance: none; /* Allows custom style (black and red) */
        width: 20px; 
        height: 20px; 
        border: 3px solid #ccc;
        border-radius: 3px;
        outline: none; 
        cursor: pointer; 
    }

    #remember-checkbox:checked {
        background-color: rgb(20, 0, 0); 
        border: 3px solid rgb(128, 0, 0); 
    }

    /* Remember Me container */
    .remember-me-container {
        display: flex; 
        align-items: center; 
        gap: 10px; 
    }
    
    /* Style the checkbox */
    .form-check-input {
        width: auto; 
        height: auto; 
        margin: 0; 
        display: inline-block; 
    }

    button {
        width: 104%;
        padding: 10px;
        background-color: rgb(20, 0, 0);
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 2px;
    }

    button:hover {
        background-color: rgb(42, 0, 0);
    }

    /* Forgot Password link */
    .forgot-link {
        text-align: center;
        margin-top: 10px;
        display: block;
    }
    .forgot-link:hover {
        text-decoration: underline;
    }
}

#login-prompt, #registration-prompt {
    background-color: rgb(249, 249, 249); /* Different background color */
    padding: 40px;
    max-width: 500px;
    margin: 20px auto; 
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;

    h3 {
        margin-bottom: 20px;
        font-size: 1.5em;
        font-weight: bold;
        text-align: center;
    }

    /* List of bullet points */
    ul {
        list-style-type: disc;
        list-style-position: inside;
        margin-left: 20px; /* Indent the list */
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: rgb(128, 0, 0); /* Different button color */
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        text-transform: uppercase;
        font-weight: bold;
        margin-top: 20px;
        letter-spacing: 2px;
    }

    button:hover {
        background-color: rgb(100, 0, 0); 
    }
}

/***************************** 
    ABOUT US
*****************************/
/* this is the box to store the intro text about team 47 */
.aboutus-box{ 
    height: 120px;
    width: 35%;
    background-color: rgb(213, 213, 213);
    display: flex;
    color: white;
    position: absolute;
    padding: 10px;
}
/* this is container box, holds the three images. */
.about-us-1 {
    height: 400px;
    width: 94%;
    margin: 0 3% 0 3%;
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
      img {  /*the three images that are side by side */
        margin: 10px;
        min-height: 90%;
        min-width: 31%;
        height: 90%;
        width: 31%;
        background-color: white;
    } 
}

/* this will hold some text about team 47 goal and story */
.aboutus-text {
    margin-left: 5%;
    height: 290px;
    width: 50%;
    background-color: white;
    position: absolute;
    padding: 30px;
    box-shadow: 0 0 9px rgba(0, 0, 0, 0.3);
}
/* these hold the images for our goal and story */
.imagebox {
    margin-left: 59.5%;
    height: 350px;
    width: 35%;
    background-color: black;
    position: absolute;
}

.basket-container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.basket-header {
    font-size: 24px;
    margin-bottom: 20px;
    text-align: center;
}

.basket-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    border-bottom: 1px solid #e0e0e0;
}

.item-details {
    display: flex;
    align-items: center;
}

.item-image {
    width: 80px; 
    height: auto;
    margin-right: 15px;
}

.item-info {
    margin-left: 10px;
}

.item-price {
    font-weight: bold;
}

.item-actions {
    display: flex;
    flex-direction: column;
    align-items: flex-end; 
}

.button-group {
    display: flex;
    gap: 10px;
}

.btn {
    text-decoration: none;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-link {
    background-color: red;
    color: white; 
    transition: background-color 0.3s ease;
}

.btn-link:hover {
    background-color: darkred;
}

.total-container {
    margin-top: 20px;
    font-size: 18px;
    text-align: right; 
}

/* checkout button */
.btn-primary {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}


/* The main box for the FAQ*/
.faq-box{
    width: 80%;
    height: 80%;
    border: 2px solid black;
    margin: 60px;
    margin-left: 10%;
    padding-top: 2%;
    box-shadow: 0 -5px 10px rgba(0, 0, 0, 0.2);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);  
    background-color: white;
}

/*The collapsable for the questions*/
.drop-down {
  background-color: white;
  width: 100%;
  color: #444;
  font-size: 20px;
  padding: 18px;
  border-top: 2px solid rgb(185, 185, 185);
  text-align: left;
  cursor: pointer;
  transition: 0.2s; 
}
.drop-down:after {
  content: "\25BC";
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.open, .drop-down:hover {
  background-color: rgb(128, 0, 0);
  color: white;
}

.open:after {
    content: "\25B2";
}

.drop-down-box {
  padding: 0 18px;
  background-color: rgb(185, 185, 185);
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

/*The container for the bottom two boxes*/
.link-container {
    display: flex;
    gap: 70px;
    justify-content: center; 
}

.faq-links-box {
    height: 275px;
    width: 375px;
    background-color: white;
    box-shadow: 0 -5px 10px rgba(0, 0, 0, 0.2);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2); 
    padding: 1.5%;
    border: 2px solid rgb(128, 0, 0);
}
.faq-links-box ul {
    list-style: none;
    padding: 0;
    text-align: center;
}

.faq-links-box ul li {
    margin-bottom: 5px;
}

.faq-links-box ul li a {
    color: rgb(86, 86, 86);
    text-decoration: none;
    font-size: 20px;
    text-decoration: underline;
}

.faq-links-box ul li a:hover {
    color: rgb(128, 0, 0);
    text-decoration: underline;
}
.faq-links-box .active{
    color: rgb(205, 205, 205);
    text-decoration: underline;
    pointer-events:none;
}










</style>
<header>
    <div id="header-wrapper">

        <ul id="header-items">
            <!-- SEARCH BAR -->
            <li>
                <form action="{{ route('search') }}">
                    <a class="search-bar">
                        <input class="search" name="search" type="text" placeholder="Search...">
                        <button class="search-button">Search</button>
                    </a>
                </form>
            </li>

            <!-- button to toggle between normal/large text size on page -->
            <li id="toggle-text-size">
                <p>A</p>
                <label class="toggle-switch"><input type="checkbox"></label>
                <p>A</p>
            </li>

            @auth
                <a class="header-item">
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                </a>
                <a class="header-item" href="">
                    <li><img src="{{asset("images/account_icon.png")}}" alt="profile" title="Profile"></li>
                </a>
                <a class="header-item" href="{{ route('basket') }}">
                    <li><img src="{{asset("images/basket.png")}}" alt="basket" title="Basket"></li>
                </a>
            @else
                <a class="header-item" href="{{ route('register') }}">
                    <li>
                        <p>Sign Up</p>
                    </li>
                </a>
                <a class="header-item" href="{{ route('login') }}">
                    <li>
                        <p>Log In</p>
                    </li>
                </a>
            @endauth
        </ul>
    </div>

    <nav>
        <ul id="nav-items">

            <a class="nav-item" href="{{ route('men') }}">
                <li>MEN</li>
            </a>
            <a class="nav-item" href="{{ route('women') }}">
                <li>WOMEN</li>
            </a>
            <a class="nav-item" href="{{ route('kids') }}">
                <li>KIDS</li>
            </a>
            <a class="nav-item" href="{{ route('accessories') }}">
                <li>ACCESSORIES</li>
            </a>
            <a class="nav-item" href="{{ route('about-us') }}">
                <li>ABOUT US</li>
            </a>
        </ul>
    </nav>
</header>
<button id="back-to-top" type="button">TOP</button>
</head>
<body>


<main id="aboutus-box">
    <!-- The top banner with image and title of page -->
<div id="section" style="justify-content: center; height:300px; background-color: white; box-shadow: 0 0 9px rgba(0, 0, 0, 0.3); margin-top: -20px; opacity: 100%;"> 
                <h3 style="margin-left:550px; margin-top: 100px; position: absolute; font-size:90px;">FAQ</h3>
                <img src="faq-img.jpg" alt="Clothes on a Hanger" class="image" width="100%" height="100%">
            </div>

            <!-- The main FAQ box -->
            <div class="faq-box">
                <h3 style="font-size: 50px; text-decoration: underline;">Returns and Exchanges</h3><!-- Title -->
                <h3>Need Help? Here are some Frequently Asked Questions about Returns and Exchanges</h3>

                <!-- 1st question on collapsible -->
                    <button class="drop-down" style="margin-top:50px;">What is your return and exchange policy?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>You have 30 days to return or exchange an item if its not on sale. If the product is on sale you will have 14 days. 
                            Just use the printed return label given with the parcel and once we revieve the parcel, you will recieve the money within 3-5 working days</p>
                        <br></br>
                    </div>

                    <!-- 2nd question on collapsible -->
                    <button class="drop-down">How does exchanging an item work?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>If you want to exchange an item, once we have recived the original item, you will immediately get an online giftcard immediately. 
                            You can then use that giftcard whenever you want on the TEAM 47 website. This will save you having to wait a few more days for a refund. </p>
                        <br></br>
                    </div>

                    <!-- 3rd question on collapsible -->
                    <button class="drop-down">Can I return an item before it arrives?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>You can return an item if it's still processing. Once its fully processed and left its first location, you will have to wait until the parcel delivers for you to return it.</p>
                        <br></br>
                    </div>

                    <!-- 4th question on collapsible -->
                    <button class="drop-down">Is it possible to return/exchange an item if it has been opened?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>As long as all the tags are still on it and its in great condition, then it can be returned/exchanged.</p>
                        <br></br>
                    </div>

                    <!-- 5th question on collapsible -->
                    <button class="drop-down">How long does it take to process a refund or exchange?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>A refund/exchnage proccess takes 2-3 working days and once the item has successfully been returned to our warehouse, 
                            the giftcard for an exchange will immediately come through, whereas a refund will take an additional 3-5 working days.</p>
                        <br></br>
                    </div>

                    <!-- 6th question on collapsible -->
                    <button class="drop-down">Do I need to pay for shipping when sending back a return or exchange?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>You would not have to pay an additional charge to ship back to us, however the original charge for shipping when making an order, will not be returned. </p>
                        <br></br>
                    </div>

                     <!-- 7th question on collapsible -->
                     <button class="drop-down">Will I receive a full refund for the returned item?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>If the item is in the condition you have recieved it, you will get the full refund excluding shipping costs. 
                            However if the package seems to be damaged, we would need to assess it and either send the package back or offer a partial refund.</p>
                        <br></br>
                    </div>
                </div>

            <!-- container for the two boxes -->
            <div class="link-container">
                <div class="faq-links-box"><!-- box with other FAQ links -->
                    <span>
                        <h2 style="text-align: center;">FAQs</h2>
                        <p style="text-align: center; font-size: 20px;">Not what you're looking for? Check out some of our other FAQ's</p><br><br>
                        <ul>
                            <li><a href="" style="text-align: center;">Orders & Shipping</a></li> 
                            <li><a class="active" href="" style="text-align: center;">Returns & Exchanges</a></li><!-- on this page so its diff colour -->
                            <li><a href="" style="text-align: center;">Products & Sizing</a></li>
                            <li><a href="" style="text-align: center;">Promotions</a></li>
                            <li><a href="" style="text-align: center;">Other</a></li>
                        </ul>
                    </span>
                </div>
                <div class="faq-links-box"> <!-- box with conact us link -->
                    <h2 style="text-align: center;">Contact Us</h2>
                    <p style="text-align: center; font-size: 20px;">Still need help? Get in touch with us and one of our team members will help.</p>
                    <br><br>
                    <p style="text-align: center; font-size: 20px;">Click on the link to fill out our contact form</p>
                    <br><br>
                    <ul>
                        <li><a href="" style="text-align: center;">Contact Us</a></li> <!-- link to contact us page -->
                    </ul>
                </div>
            </div>

</main>

<script>
    var box = document.getElementsByClassName("drop-down");
    var index;
    
    for (index = 0; index < box.length; index++) {
      box[index].addEventListener("click", function() {
        var text = this.nextElementSibling;
        this.classList.toggle("open");
        
        if (text.style.maxHeight){
          text.style.maxHeight = null;
        } else {
          text.style.maxHeight = text.scrollHeight + "px";
        } 
      });
    }
    </script>

</body>
</html>