<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackathon | Dashboard</title>
    
    <link rel="stylesheet" href="{{ asset('style/RootStyle.css') }}"/>
    <link rel="stylesheet" href="{{ asset('style/AdminStyle.css') }}"/>
</head>
<body>
    <section>
        <div class="section-container">
            <div class="section-title">
                <h1 class="fira-sans-bold color-neon font-xl">Admin Page</h1>
                <button id="logout-button" type="button" class="button-outline fira-sans-regular color-neon font-regular">Log out</button>
            </div>
    
            <div class="section-div">                
                <div class="profile-content">
                    <table id="table">

                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
<script src = "{{ asset('script/admin.js') }}"></script>
</html>