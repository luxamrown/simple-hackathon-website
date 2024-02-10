<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackathon | Sign In</title>
    
    <link rel="stylesheet" href="{{ asset('style/RootStyle.css') }}"/>
    <link rel="stylesheet" href="{{ asset('style/AuthStyle.css') }}"/>
</head>
<body>
    <section>
        <div class="login">
            <h1 class="fira-sans-bold color-neon font-xl">Sign In</h1>
            
            <form action="">
                <div class="form">
                    <div class="field" id="field_login_email">
                        <p class="fira-sans-light color-neon font-regular">Email</p>
                    
                        <div class="input">
                            <svg viewBox="0 -4 20 20" width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>email [#ffffff]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -922.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M294,774.474 L284,765.649 L284,777 L304,777 L304,765.649 L294,774.474 Z M294.001,771.812 L284,762.981 L284,762 L304,762 L304,762.981 L294.001,771.812 Z" id="email-[#ffffff]"> </path> </g> </g> </g> </g></svg>                    
                            
                            <input placeholder="Enter Email" id="input_login_email" required class="fira-sans-light color-neon font-regular" type="text">
                        </div>
                    </div>
    
                    <div class="field" id="field_login_password">
                        <p class="fira-sans-light color-neon font-regular">Password</p>
                    
                        <div class="input">
                            <svg viewBox="0 -2 50 50" width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"></rect> </g> <g id="Layer_7" data-name="Layer 7"> <path d="M39,18H35V13A11,11,0,0,0,24,2H22A11,11,0,0,0,11,13v5H7a2,2,0,0,0-2,2V44a2,2,0,0,0,2,2H39a2,2,0,0,0,2-2V20A2,2,0,0,0,39,18ZM15,13a7,7,0,0,1,7-7h2a7,7,0,0,1,7,7v5H15ZM14,35a3,3,0,1,1,3-3A2.9,2.9,0,0,1,14,35Zm9,0a3,3,0,1,1,3-3A2.9,2.9,0,0,1,23,35Zm9,0a3,3,0,1,1,3-3A2.9,2.9,0,0,1,32,35Z"></path> </g> </g> </g></svg>
                            
                            <input placeholder="Enter Password" id="input_login_password" required class="fira-sans-light color-neon font-regular" type="password">
                        </div>
                    </div>
                </div>

                <div class="button-auth">
                    <div id="login" style="width: 100%; margin: auto">
                        <button type="submit" class="button"><h1 class="fira-sans-bold color-dark">Sign In</h1></button>
                    </div>

                    <div  style="width: 100%; margin: auto">                
                        <a href="/register">
                            <button type="button" class="button-register"><h1 class="fira-sans-bold">Register</h1></button>
                        </a>
                    </div>
                </div>

            </form>
            
            <a href="/">
                <h1 style="opacity: 0.5" class="fira-sans-light color-neon font-small">Hackathon</h1>
            </a>
        </div>
    </section>
</body>
<script src = "{{ asset('script/login.js') }}"></script>
</html>