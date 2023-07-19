<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Super Chef da Educação </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="{{ asset('/css/site/site-style.css') }}">
    <style>
        .like-content .btn-like {
            display: block;
            margin: 0px auto 0px;
            text-align: center;
            background: #5570c9;
            border-radius: 20px;
            box-shadow: 0 10px 20px -8px rgb(92, 105, 221);
            padding: 10px 15px;
            font-size: 14px;
            cursor: pointer;
            border: none;
            outline: none;
            color: #ffffff;
            text-decoration: none;
            -webkit-transition: 0.3s ease;
            transition: 0.3s ease;
        }

        .like-content .btn-like2 {
            display: block;
            margin: 0px auto 0px;
            text-align: center;
            background: #1abe4c;
            border-radius: 20px;
            box-shadow: 0 10px 20px -8px rgb(92, 105, 221);
            padding: 10px 15px;
            font-size: 14px;
            cursor: pointer;
            border: none;
            outline: none;
            color: #ffffff;
            text-decoration: none;
            -webkit-transition: 0.3s ease;
            transition: 0.3s ease;
        }

        .like-content .btn-like:hover {
            transform: translateY(-10px);
        }

        .like-content .btn-like .fa {
            margin-right: 10px;
        }

        .animate-like {
            animation-name: likeAnimation;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
            animation-duration: 0.65s;
        }

        @keyframes likeAnimation {
            0% {
                transform: scale(30);
            }

            100% {
                transform: scale(1);
            }
        }

        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        *,
        *::after,
        *::before {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        .html {
            font-size: 62.5%;
        }

        body {
            font-family: "Poppins", sans-serif;
        }

        /* ///////////..utility classes../////////// */

        .container {
            max-width: 1200px;
            width: 90%;
            margin: auto;
        }

        .btn {
            display: inline-block;
            padding: 0.5em 1.5em;
            text-decoration: none;
            border-radius: 50px;
            cursor: pointer;
            outline: none;
            margin-top: 1em;
            text-transform: uppercase;
            font-weight: small;
        }

        .btn-primary {
            color: #fff;
            background: #16a083;
        }

        .btn-primary:hover {
            background: #117964;
            transition: background 0.3s ease-in-out;
        }

        /* ............/navbar/............ *

/* desktop mode............/// */

        .navbar input[type="checkbox"],
        .navbar .hamburger-lines {
            display: none;
        }

        .navbar {
            box-shadow: 0px 5px 10px 0px #aaa;
            position: fixed;
            width: 100%;
            background: #fff;
            color: #000;
            opacity: 0.85;
            height: 50px;
            z-index: 12;
        }

        .navbar-container {
            display: flex;
            justify-content: space-between;
            height: 64px;
            align-items: center;
        }

        .menu-items {
            order: 2;
            display: flex;
            align-items: center;
        }

        .menu-items li {
            list-style: none;
            margin-bottom: 0.9rem;
            /* Espaçamento vertical entre os itens */
            font-size: 1.2rem;
        }

        .menu-items a {
            display: inline-block;
            text-decoration: none;
            background-color: #1407ce;
            color: #fcfcfc;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border: 2px solid #1407ce;
            border-radius: 20px;
            transition: all 0.3s ease-in-out;
        }

        .menu-items a:hover {
            color: #fff;
            background-color: #4238c2;
            border-color: #1407ce;
            box-shadow: 0 2px 4px rgba(20, 7, 206, 0.2);
        }


        .logo {
            order: 1;
            font-size: 2.3rem;
            margin-bottom: 0.5rem;
        }

        /* ............//// Showcase styling ////......... */

        .showcase-area {
            height: 25vh;
            background: linear-gradient(rgba(240, 240, 240, 0.144),
                    rgba(255, 255, 255, 0.336)),
                url("https://i.postimg.cc/wT3TQS3V/header-image2.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .showcase-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            font-size: 1.6rem;
        }

        .main-title {
            text-transform: uppercase;
            margin-top: 1.5em;
        }

        /* ......//about us//...... */

        #about {
            padding: 50px 0;
            background: #f5f5f7;
        }

        .about-wrapper {
            display: flex;
            flex-wrap: wrap;
        }

        #about h2 {
            font-size: 2.3rem;
        }

        #about p {
            font-size: 1.2rem;
            color: #555;
        }

        #about .small {
            font-size: 1.2rem;
            color: #666;
            font-weight: 600;
        }

        .about-img {
            flex: 1 1 400px;
            padding: 30px;
            transform: translateX(150%);
            animation: about-img-animation 1s ease-in-out forwards;
        }

        @keyframes about-img-animation {
            100% {
                transform: translate(0);
            }
        }

        .about-text {
            flex: 1 1 400px;
            padding: 30px;
            margin: auto;
            transform: translate(-150%);
            animation: about-text-animation 1s ease-in-out forwards;
        }

        @keyframes about-text-animation {
            100% {
                transform: translate(0);
            }
        }

        .about-img img {
            display: block;
            height: 400px;
            max-width: 100%;
            margin: auto;
            object-fit: cover;
            object-position: right;
        }

        /* ..........////Food category///........... */

        #food {
            padding: 5rem 0 10rem 0;
        }

        #food h2 {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 400;
            margin-bottom: 40px;
            text-transform: uppercase;
            color: #555;
        }

        .food-container {
            display: flex;
            justify-content: space-between;
        }

        .food-container img {
            display: block;
            width: 100%;
            margin: auto;
            max-height: 300px;
            object-fit: cover;
            object-position: center;
        }

        .img-container {
            margin: 0 1rem;
            position: relative;
        }

        .img-content {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            z-index: 2;
            text-align: center;
            transition: all 0.3s ease-in-out 0.1s;
        }

        .img-content h3 {
            color: #fff;
            font-size: 2.2rem;
        }

        .img-content a {
            font-size: 1.2rem;
        }

        .img-container::after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.871);
            opacity: 0;
            z-index: 1;

            transform: scaleY(0);
            transform-origin: 100% 100%;
            transition: all 0.3s ease-in-out;
        }

        .img-container:hover::after {
            opacity: 1;
            transform: scaleY(1);
        }

        .img-container:hover .img-content {
            opacity: 1;
            top: 40%;
        }

        /* .........../Food Menu/............ */

        .food-menu-heading {
            text-align: center;
            font-size: 3.4rem;
            font-weight: 400;
            color: #666;
        }

        .food-menu-container {
            display: flex;
            flex-wrap: wrap;
            padding: 50px 0px 30px 0px;
        }

        .food-menu-container img {
            display: block;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            object-fit: cover;
            object-position: center;
        }

        .food-menu-item {
            display: flex;
            flex: 1 1 600px;
            justify-content: space-evenly;
            margin-bottom: 3rem;
        }

        .food-description {
            margin: auto 1.5rem;
        }

        .font-title {
            font-size: 1.8rem;
            font-weight: 400;
            color: #444;
        }

        .food-description p {
            font-size: 1.4rem;
            color: #555;
            font-weight: 500;
        }

        .food-description .food-price {
            color: #117964;
            font-weight: 700;
        }

        /* ........./ Testimonial /.......... */

        #testimonials {
            padding: 5rem 0;
            background: rgba(243, 243, 243);
        }

        .testimonial-title {
            text-align: center;
            font-size: 2.8rem;
            font-weight: 400;
            color: #555;
        }

        .testimonial-container {
            display: flex;
            justify-content: space-between;
            font-size: 1.4rem;
            padding: 1rem;
        }

        .testimonial-box .checked {
            color: #ff9529;
        }

        .testimonial-box .testimonial-text {
            margin: 1rem 0;
            color: #444;
        }

        .testimonial-box {
            text-align: center;
            padding: 1rem;
        }

        .customer-photo img {
            display: block;
            width: 150px;
            height: 150px;
            object-fit: cover;
            object-position: center;
            border-radius: 50%;
            margin: auto;
        }

        /* ........ Contact Us........... */

        #contact {
            padding: 5rem 0;
            background: rgb(226, 226, 226);
        }

        .contact-container {
            display: flex;
            background: #fff;
        }

        .contact-img {
            width: 50%;
        }

        .contact-img img {
            display: block;
            height: 400px;
            width: 100%;
            object-position: center;
            object-fit: cover;
        }

        .form-container {
            padding: 1rem;
            width: 50%;
            margin: auto;
        }

        .form-container input {
            display: block;
            width: 100%;
            border: none;
            border-bottom: 2px solid #ddd;
            padding: 1rem 0;
            box-shadow: none;
            outline: none;
            margin-bottom: 1rem;
            color: #444;
            font-weight: 500;
        }

        .form-container textarea {
            display: block;
            width: 100%;
            border: none;
            border-bottom: 2px solid #ddd;
            color: #444;
            outline: none;
            padding: 1rem 0;
            resize: none;
        }

        .form-container h2 {
            font-size: 2.7rem;
            font-weight: 500;
            color: #444;
            margin-bottom: 1rem;
            margin-top: -1.2rem;
        }

        .form-container a {
            font-size: 1.3rem;
        }

        #footer h2 {
            text-align: center;
            font-size: 1.8rem;
            padding: 2.6rem;
            font-weight: 500;
            color: #fff;
            background: rgb(65, 65, 65);
        }

        /* ......../ media query /.......... */

        @media (max-width: 768px) {
            .navbar {
                opacity: 0.95;
            }

            .navbar-container input[type="checkbox"],
            .navbar-container .hamburger-lines {
                display: block;
            }

            .navbar-container {
                display: block;
                position: relative;
                height: 64px;
            }

            .navbar-container input[type="checkbox"] {
                position: absolute;
                display: block;
                height: 32px;
                width: 30px;
                top: 20px;
                left: 20px;
                z-index: 5;
                opacity: 0;
            }

            .navbar-container .hamburger-lines {
                display: block;
                height: 23px;
                width: 35px;
                position: absolute;
                top: 17px;
                left: 20px;
                z-index: 2;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .navbar-container .hamburger-lines .line {
                display: block;
                height: 4px;
                width: 100%;
                border-radius: 10px;
                background: #333;
            }

            .navbar-container .hamburger-lines .line1 {
                transform-origin: 0% 0%;
                transition: transform 0.4s ease-in-out;
            }

            .navbar-container .hamburger-lines .line2 {
                transition: transform 0.2s ease-in-out;
            }

            .navbar-container .hamburger-lines .line3 {
                transform-origin: 0% 100%;
                transition: transform 0.4s ease-in-out;
            }

            .navbar .menu-items {
                padding-top: 100px;
                background: #fff;
                height: 100vh;
                max-width: 300px;
                transform: translate(-150%);
                display: flex;
                flex-direction: column;
                margin-left: -40px;
                padding-left: 50px;
                transition: transform 0.5s ease-in-out;
                box-shadow: 5px 0px 10px 0px #aaa;
            }

            .navbar .menu-items li {
                margin-bottom: 1.5rem;
                font-size: 1.3rem;
                font-weight: 500;
            }

            .logo {
                position: absolute;
                top: 5px;
                right: 15px;
                font-size: 2rem;
            }

            .navbar-container input[type="checkbox"]:checked~.menu-items {
                transform: translateX(0);
            }

            .navbar-container input[type="checkbox"]:checked~.hamburger-lines .line1 {
                transform: rotate(35deg);
            }

            .navbar-container input[type="checkbox"]:checked~.hamburger-lines .line2 {
                transform: scaleY(0);
            }

            .navbar-container input[type="checkbox"]:checked~.hamburger-lines .line3 {
                transform: rotate(-35deg);
            }

            /* ......./ food /......... */

            .food-container {
                flex-direction: column;
                align-items: stretch;
            }

            .food-type:not(:last-child) {
                margin-bottom: 3rem;
            }

            .food-type {
                box-shadow: 5px 5px 10px 0 #aaa;
            }

            .img-container {
                margin: 0;
            }
        }

        @media (max-width: 500px) {
            html {
                font-size: 65%;
            }

            .navbar .menu-items li {
                font-size: 1.6rem;
            }

            .testimonial-container {
                flex-direction: column;
                text-align: center;
            }

            .food-menu-container img {
                margin: auto;
            }

            .food-menu-item {
                flex-direction: column;
                text-align: center;
            }

            .form-container {
                width: 90%;
            }

            .contact-container {
                display: flex;
                flex-direction: column;
            }

            .contact-img {
                width: 90%;
                margin: 3rem auto;
            }

            .logo {
                position: absolute;
                top: 06px;
                right: 15px;
                font-size: 3rem;
            }

            .navbar .menu-items li {
                margin-bottom: 2.5rem;
                font-size: 1.8rem;
                font-weight: 500;
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(0);
                opacity: 0;
            }

            33% {
                transform: scale(1);
                opacity: 1;
            }

            100% {
                transform: scale(3);
                opacity: 0;
            }
        }

        .button {
            display: inline-flex;
            align-items: center;
            background: #ffb354;
            box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            height: 45px;
            padding: 0 30px;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            transition: background 0.3s, transform 0.3s, box-shadow 0.3s;
            will-change: transform;
        }

        .button:hover {
            background: #ffb254a2;
            box-shadow: 0 4px 17px rgba(0, 0, 0, 0.2);
            transform: translate3d(0, -2px, 0);
        }

        .button:active {
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);
            transform: translate3d(0, 1px, 0);
        }

        .pulse {
            position: relative;
        }

        .pulse:before,
        .pulse:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            width: 20px;
            height: 20px;
            opacity: 0;
            margin: auto;
        }

        .pulse:before {
            animation: pulse 1.5s infinite linear;
        }

        .pulse:after {
            animation: pulse 2s 0.4s infinite linear;
        }

        .pulse:hover:before,
        .pulse:hover:after {
            display: none;
        }


        @media (min-width: 769px) and (max-width: 1200px) {
            .img-container h3 {
                font-size: 1.5rem;
            }

            .img-container .btn {
                font-size: 0.7rem;
            }
        }

        @media (orientation: landscape) and (max-height: 500px) {
            .showcase-area {
                height: 50vmax;
            }
        }
    </style>
</head>

<body>
    <!-- partial:index.partial.html -->
    <!-- partial:index.partial.html -->


    <div class="app-container">



        <section class="showcase-area" id="showcase">
            <div class="showcase-container">
                <h1 class="main-title" id="home"> <a href="/Site" class="app-link"> <img
                            src="{{ asset('/images/logo_seduc_chef.jpg') }}" width="150px" class=""> </a>

                </h1>
                <h2> Competição de Merendeiras (os) da rede Estadual de MT - Melhores receitas </h3>
                </p>
                    {{-- <a href="#food-menu" class="btn btn-primary">Menu</a> --}}
            </div>
        </section>
        <form action="{{ asset('/Site') }}" method="GET" enctype="multipart/form-data">


            <section class="app-actions">
                <div class="app-actions-line">
                    <div class="search-wrapper">
                        <button class="loaction-btn">
                            <!DOCTYPE svg
                                PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">

                            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Transformed by: SVG Repo Mixer Tools -->
                            <svg fill="#ffb354" width="30px" height="30px" viewBox="0 -3.84 122.88 122.88"
                                version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                style="enable-background:new 0 0 122.88 115.21" xml:space="preserve" stroke="#ffb354">

                                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <path
                                            d="M29.03,100.46l20.79-25.21l9.51,12.13L41,110.69C33.98,119.61,20.99,110.21,29.03,100.46L29.03,100.46z M53.31,43.05 c1.98-6.46,1.07-11.98-6.37-20.18L28.76,1c-2.58-3.03-8.66,1.42-6.12,5.09L37.18,24c2.75,3.34-2.36,7.76-5.2,4.32L16.94,9.8 c-2.8-3.21-8.59,1.03-5.66,4.7c4.24,5.1,10.8,13.43,15.04,18.53c2.94,2.99-1.53,7.42-4.43,3.69L6.96,18.32 c-2.19-2.38-5.77-0.9-6.72,1.88c-1.02,2.97,1.49,5.14,3.2,7.34L20.1,49.06c5.17,5.99,10.95,9.54,17.67,7.53 c1.03-0.31,2.29-0.94,3.64-1.77l44.76,57.78c2.41,3.11,7.06,3.44,10.08,0.93l0.69-0.57c3.4-2.83,3.95-8,1.04-11.34L50.58,47.16 C51.96,45.62,52.97,44.16,53.31,43.05L53.31,43.05z M65.98,55.65l7.37-8.94C63.87,23.21,99-8.11,116.03,6.29 C136.72,23.8,105.97,66,84.36,55.57l-8.73,11.09L65.98,55.65L65.98,55.65z" />
                                    </g>
                                </g>

                            </svg>
                            {{-- Alterar ícone --}}
                        </button>

                        <input type="text" name="search" placeholder="Procurar receita" class="search-input">
                        <button class="search-btn">PROCURAR </button>
                    </div>






                    <div class="contact-actions-wrapper">
                        <a href="https://www3.seduc.mt.gov.br/documents/8125245/44912036/Regulamento+-+Competi%C3%A7%C3%A3o+Super+Chef+da+Educa%C3%A7%C3%A3o+-+Melhores+Receitas+-+Rede+Estadual+de+MT.pdf" class="button"> <svg width="24px" height="24px" viewBox="0 0 52 52"
                                xmlns="http://www.w3.org/2000/svg" fill="#f5f5f5" stroke="#f5f5f5">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"> </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect fill="none" height="4.8" rx="1.6" width="27.2" x="12.4"
                                        y="26"> </rect>
                                    <rect fill="none" height="4.8" rx="1.6" width="24" x="12.4"
                                        y="35.6"> </rect>
                                    <g>
                                        <path
                                            d="m36.4 14.8h8.48a1.09 1.09 0 0 0 1.12-1.12 1 1 0 0 0 -.32-.8l-10.56-10.56a1 1 0 0 0 -.8-.32 1.09 1.09 0 0 0 -1.12 1.12v8.48a3.21 3.21 0 0 0 3.2 3.2z">
                                        </path>
                                        <path
                                            d="m44.4 19.6h-11.2a4.81 4.81 0 0 1 -4.8-4.8v-11.2a1.6 1.6 0 0 0 -1.6-1.6h-16a4.81 4.81 0 0 0 -4.8 4.8v38.4a4.81 4.81 0 0 0 4.8 4.8h30.4a4.81 4.81 0 0 0 4.8-4.8v-24a1.6 1.6 0 0 0 -1.6-1.6zm-32-1.6a1.62 1.62 0 0 1 1.6-1.55h6.55a1.56 1.56 0 0 1 1.57 1.55v1.59a1.63 1.63 0 0 1 -1.59 1.58h-6.53a1.55 1.55 0 0 1 -1.58-1.58zm24 20.77a1.6 1.6 0 0 1 -1.6 1.6h-20.8a1.6 1.6 0 0 1 -1.6-1.6v-1.57a1.6 1.6 0 0 1 1.6-1.6h20.8a1.6 1.6 0 0 1 1.6 1.6zm3.2-9.6a1.6 1.6 0 0 1 -1.6 1.63h-24a1.6 1.6 0 0 1 -1.6-1.6v-1.6a1.6 1.6 0 0 1 1.6-1.6h24a1.6 1.6 0 0 1 1.6 1.6z">
                                        </path>
                                    </g>
                                </g>
                            </svg>&nbsp; REGULAMENTO </a>
                        <div class="contact-actions socials">

                            {{-- <a href="#" class="contact-link facebook">
           <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
         </a> --}}

                            <a href="{{ asset('/Site/formulario') }}" class="button pulse">
                                <svg width="24px" height="24px" viewBox="0 0 52 52"
                                    xmlns="http://www.w3.org/2000/svg" fill="#f5f5f5" stroke="#f5f5f5">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"> </g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <rect fill="none" height="4.8" rx="1.6" width="27.2"
                                            x="12.4" y="26"> </rect>
                                        <rect fill="none" height="4.8" rx="1.6" width="24"
                                            x="12.4" y="35.6"> </rect>
                                        <g>
                                            <path
                                                d="m36.4 14.8h8.48a1.09 1.09 0 0 0 1.12-1.12 1 1 0 0 0 -.32-.8l-10.56-10.56a1 1 0 0 0 -.8-.32 1.09 1.09 0 0 0 -1.12 1.12v8.48a3.21 3.21 0 0 0 3.2 3.2z">
                                            </path>
                                            <path
                                                d="m44.4 19.6h-11.2a4.81 4.81 0 0 1 -4.8-4.8v-11.2a1.6 1.6 0 0 0 -1.6-1.6h-16a4.81 4.81 0 0 0 -4.8 4.8v38.4a4.81 4.81 0 0 0 4.8 4.8h30.4a4.81 4.81 0 0 0 4.8-4.8v-24a1.6 1.6 0 0 0 -1.6-1.6zm-32-1.6a1.62 1.62 0 0 1 1.6-1.55h6.55a1.56 1.56 0 0 1 1.57 1.55v1.59a1.63 1.63 0 0 1 -1.59 1.58h-6.53a1.55 1.55 0 0 1 -1.58-1.58zm24 20.77a1.6 1.6 0 0 1 -1.6 1.6h-20.8a1.6 1.6 0 0 1 -1.6-1.6v-1.57a1.6 1.6 0 0 1 1.6-1.6h20.8a1.6 1.6 0 0 1 1.6 1.6zm3.2-9.6a1.6 1.6 0 0 1 -1.6 1.63h-24a1.6 1.6 0 0 1 -1.6-1.6v-1.6a1.6 1.6 0 0 1 1.6-1.6h24a1.6 1.6 0 0 1 1.6 1.6z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>&nbsp; Formulário de Inscrição
                            </a>
                        </div>
                    </div>
                </div>


            </section>

        </form>

        @if ($search)
        <section class="app-actions">
          <div class="contact-actions socials">
            <div class="contact-actions socials">
              <h2>Resultado da busca:<big> <b> <u> {{ $search }} </b> </u></big></h2>
            </div>

            <div class="contact-actions socials">
              <a href="{{ asset('/Site') }}">
                    <button class="search-btn">Limpar pesquisa</button> </a>
            </div>

          </div></section>
        @endif


        
        @yield('content')


        <script src="{{ asset('/js/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('/js/main.js') }}"></script>


        <!-- partial -->
        <script src="{{ asset('/js/site/script.js') }}"></script>

        <script src="{{ asset('vendors/simple-datatables/simple-datatables.js') }}"></script>

</body>

</html>
