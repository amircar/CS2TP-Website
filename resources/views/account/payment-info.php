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
    background-color:rgb(0, 117, 241);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
/***************************** 
    FOOTER
*****************************/
/* footer uses brighter version of main red for better visibility*/
footer {
    margin-top: 40px;
    width: 100%;
    background-color: rgb(20, 0, 0);
    color: white;
}

#footer-style {
    display: flex;
    justify-content: space-between;
    padding: 40px 50px;
    flex-wrap: wrap;

    a {
        color: white;
        font-size: 14px;
    }
    a:hover {
        text-decoration: underline;
    }
    
    h4{
        font-size: 1.1em;
    }
}

#footer-space{
    background-color: rgb(20, 0, 0);
    width: 10%;
}

.footer-section {
    flex: 1 1 200px; /* Flexibility of footer */
    margin: 10px;
    h2, h3 {
        margin-bottom: 10px;
        font-size: 18px;
        color: rgb(150, 0, 0);
    }
}

.footer-section ul li {
    margin-bottom: 5px;
}

.footer-button {
    background-color: rgb(150, 0, 0);
    color: white;
    border: none;
    padding: 10px 40px;
    margin: 10px 0;
    cursor: pointer;
    font-size: 14px;
}

.footer-button:hover {
    background-color: white;
    color: rgb(150, 0, 0);
}

#line {
    margin-bottom: 20px;
    width: 100%;
    height: 2px;
    background-color: rgb(150, 0, 0);
}














.accountbox{
    background-color: white;
    height: 700px;
    width: 82%;
    margin: 10%;
    position: relative;
    box-shadow: 0 0 9px rgba(0, 0, 0, 0.3);
}
.accounttitle{
    background-color: rgb(255, 255, 255);
    height: 12%;
    width: 90%;
    margin: 5%;
    position: absolute;
    border-bottom: 4px solid black;
}
.logout-btn{
    height: 60%;
    width: 20%;
    position: absolute;
    top: 10%;
    left: 80%;
    border: 2px solid black;
    display: flex;
    align-items: center;
    background: linear-gradient(135deg, #8B0000, #a10000); 
    border: none;
    color: white;
    font-size: 18px;
    font-weight: bold;
    border-radius: 40px;
    cursor: pointer;
    box-shadow: 0px 4px 6px rgba(0.2, 0.2, 0.2, 0.2);
    transition: 0.3s;
}
.logout-btn:hover {
            background: linear-gradient(135deg,rgb(225, 60, 60),rgb(219, 1, 1));
            color:rgb(148, 0, 0) ;
        }

        .logout-btn:hover .icon-container {
            background:rgb(183, 1, 1) ; 
        }

.icon-container {
    width: 25%;
    height: 90%;
    background-color: #600000; 
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    margin-right: 12px;
        }

.icon {
    font-size: 20px;
    color: white;
 }

.seperating-box{
    width: 100%;
    height: 80%;
    background-color:rgb(255, 255, 255);
    margin-top: 20%;
    position: absolute;
    
 }

 .sidebar {
            width: 25%;
            height: 100%;
        }

        .sidebar button {
            width: 100%;
            padding: 25px;
            text-align: left;
            background-color: #ccc;
            border: 1px solid white;
            font-size: 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            font-weight: bold;
        }
        .sidebar button:hover {
            background-color: rgb(147, 147, 147);
            color:rgb(148, 0, 0) ;
            font-weight: bold;
        }
        
         .sidebar .active {
            background-color: rgb(130, 0, 0);
            color: white;
            font-weight: bold;
            position: relative;
            pointer-events: none;
        }

        .sidebar .active::after {
            content: "";
            position: absolute;
            right: 0;
            top: 50%;
        }


.sidebar-triangle{
    position:absolute;
    top:0; 
    left:24.9%;
    border-top: 37.5px solid transparent;
    border-bottom:37px solid transparent;
    border-left: 40px solid rgb(130, 0, 0); /* Adjust the color and size as needed */
}
.account-info-box{
    padding: 1.5%;
    width: 27%;
    height: 17%;
    background-color:rgb(185, 185, 185);
    position:absolute;
    padding-top:15px;
    border: 1.5px solid rgb(130, 0, 0);
}
.info-box-title{
    width: 100%;
    height: 40%;
    background-color: rgb(185, 185, 185);
    padding-top:10px;
    
}
.info-box-input{
    width: 95%;
    height: 40%;
    position:absolute;
    background-color: rgb(234, 234, 234);
    border: 2px solid rgb(130, 0, 0);
    border-radius: 15px;
    color: black;
    text-align: center;
    align-items: center;
}
.save-btn{
    width: 20%;
    height: 10%;
    background-color: rgb(0, 0, 0);
    border: 3px solid rgb(130, 0, 0);
    border-radius: 15px;
    color: rgb(255, 255, 255);
    position:absolute;
    font-size: 20px; 
    text-align: center;
    font-weight: bold;
}
.save-btn:hover{
    background-color: rgb(130, 0, 0);
    color: rgb(255, 255, 255);
    border: 2px solid rgb(0, 0, 0);
    
}
.paymentcard{
    padding: 1.5%;
    width: 9%;
    height: 9%;
    background-color:rgb(185, 185, 185);
    position:absolute;
    padding-top:15px;
    border: 1.5px solid rgb(130, 0, 0);
}

.paymentinfo-box{
    padding: 1.5%;
    position: absolute;
    width: 50%;
    height: 40%;
    background-color:rgb(234, 234, 234);
    padding-top:15px;
    border: 1.5px solid rgb(130, 0, 0);
    align-items: center;
}

.paymentinfo-box2{
    padding: 1.5%;
    width: 90%;
    height: 70%;
    background-color:rgb(234, 234, 234);
    position:absolute;
    padding-top:15px;
}

.paymentinfo-title{
    width: 18%;
    height: 9%;
    background-color:rgb(234, 234, 234);
    color: rgb(130, 0, 0);
    position:absolute;
}
.paymentinfo-title2{
    width: 50%;
    height: 20%;
    font-size: 35px;
    color: rgb(130, 0, 0);
    position:absolute;
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
<div class="accountbox">
    <div class="accounttitle">
        <h2 style="font-size: 400%; justify-content: center;">Account Details</h2>
        <button class="logout-btn" href="{{ route('index') }} ">
            <div class="icon-container">
            &#x21B6; <!-- Logout symbol (↶) -->
            </div>
            LOGOUT
        </button>
    </div>
    <div class="seperating-box">
        <div class="sidebar">
            <button href="{{ route('account-details') }}">Personal Details</button>
            <button href="{{ route('password-change') }}">Password Change</button>
            <button href="{{ route('order-history') }}">Order History</button>
            <button href="{{ route('shipping-info') }}">Shipping Information</button>
            <button class="active" href="{{ route('payment-info') }}">Payment Information</button>
            <button href="{{ route('payment-info') }}">Settings</button>
        </div>
        <div class="sidebar-triangle" style="top:53%;"></div>
        <div class="paymentcard" style="top:0; left:35%;"></div>
        <div class="paymentcard" style="top:0; left:50%;"></div>
        <div class="paymentinfo-box" style="top:20%; left:35%;">
            <div class="paymentinfo-title2" style="top:2%; left:30%;">Card Details</div>
            <div class="paymentinfo-box2" style="top:20%; left:4%;">
                <div class="info-box-input" style="top: 5%; left: 2%;"></div>
                <div class="paymentinfo-title" style="top:3%; left:10%; width:20%;">Card Number</div>

                <div class="info-box-input" style="top: 54%; left: 2%; width:20%;"></div>
                <div class="paymentinfo-title" style="top:50%; left:8%; width: 6%;">MM</div>

                <div class="info-box-input" style="width:20%; top:54%; left:30%;"></div>
                <div class="paymentinfo-title" style="top:50%; left:36%; width: 4%;">YY</div>

                <div class="info-box-input" style="width:40%; top:54%; left:57%;"></div>
                <div class="paymentinfo-title" style="top:50%; left:64%; width: 7%;">CVV</div>
            </div>
        </div>
        <button class="save-btn" style="top:70%; left:73%;">SAVE</button>


    </div>










    
</div>

</main>

<footer>
    <div id="footer-style">

        <!-- Sign Up / Login Section -->    
        @guest
            <div class="footer-section">  
                <h3>TEAM 47</h3>
                <p>Sign up or log in so that you can make purchases and keep up to date with the latest offers.</p>
                <button class="footer-button">Log in</button>
                <button class="footer-button">Sign Up</button>
            </div>
            <div id="footer-space"></div>
        @endguest


        <div class="footer-section">
            <h3>CUSTOMER SERVICE</h3>
            <ul>
                <li><a href="{{ route('about-us') }}">About Us</a></li>

                
                <li><a href="{{route('contact-us')}}">Contact Us</a></li>

                <li><a href="{{ route('FAQ') }}">FAQs</a></li>
                <li><a href="">Terms and Conditions</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>ACCOUNT</h3>
            <ul>
                <li><a href="">My Account</a></li>
                <li><a href="">Wishlist</a></li>
                <li><a href="">Delivery</a></li>
                <li><a href="">Shipping Information</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>FOLLOW US</h3>
            <ul>
                <li><a href="https://www.facebook.com">Facebook</a></li>
                <li><a href="https://www.instagram.com">Instagram</a></li>
                <li><a href="https://www.twitter.com">Twitter</a></li>
                <li><a href="https://www.youtube.com">YouTube</a></li>
            </ul>
        </div>

        <div id="line"></div> <!-- line for decoration -->
        <h4><a href="{{ route('home') }}" title="Home">2024 Team 47</a></h4>
    </div>
    
</footer>

</body>
</html>