<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackathon | Dashboard</title>
    
    <link rel="stylesheet" href="{{ asset('style/RootStyle.css') }}"/>
    <link rel="stylesheet" href="{{ asset('style/DashboardStyle.css') }}"/>
</head>
<body>
    <section>
        <div class="section-container">
            <div class="section-title">
                <h1 class="fira-sans-bold color-neon font-xl">Dashboard</h1>
                <button id="logout-button" type="button" class="button-outline fira-sans-regular color-neon font-regular">Log out</button>
            </div>
    
            <div class="section-div">
                <h1 class="fira-sans-bold color-neon font-xl">Hello, <span id="hello-team"></span></h1>
                
        
                <div class="profile-content">
                    <div class="profile-details">
                        <h1 class="fira-sans-regular color-neon font-large">Profile Details </h1>
                    
                        <div class="detail-desc">
                            <p class="fira-sans-regular color-neon">Team Name</p>
                            <p id="team-name-dashboard" class="fira-sans-light color-neon"></p>
                        </div>

                        <div class="detail-desc">
                            <p class="fira-sans-regular color-neon">Full Name</p>
                            <p id="fullname-dashboard" class="fira-sans-light color-neon"></p>
                        </div>

                        <div class="detail-desc">
                            <p class="fira-sans-regular color-neon">Email</p>
                            <p id="email-dashboard" class="fira-sans-light color-neon"></p>
                        </div>

                        <div class="detail-desc">
                            <p class="fira-sans-regular color-neon">Date of Birth</p>
                            <p id="birth-dashboard" class="fira-sans-light color-neon"></p>
                        </div>

                        <div class="detail-desc">
                            <p class="fira-sans-regular color-neon">Line ID</p>
                            <p id="lineid-dashboard" class="fira-sans-light color-neon"></p>
                        </div>

                        <div class="detail-desc">
                            <p class="fira-sans-regular color-neon">Phone Number</p>
                            <p id="phone-dashboard" class="fira-sans-light color-neon"></p>
                        </div>
                    </div>

                    <div class="profile-details">
                        <div class="file-container">
                            <div class="file">
                                <p class="fira-sans-regular color-neon">CV</p>
                                <div class="file-photo">
                                    <p id="img-cv-status" class="fira-sans-light color-neon">Not Uploaded</p>
                                    <img id="img-cv" style="object-fit: contain" src="" alt="">
                                </div>
                                <label for="cv-upload" class="button-outline"><h1 class="fira-sans-light font-small">Upload File</h1></label>
                                <input id="cv-upload" name="cv" type="file" accept="image/png, image/jpeg">
                            </div>

                            <div class="file">
                                <p class="fira-sans-regular color-neon">Proof of Payment</p>
                                <div class="file-photo">
                                    <p id="img-pay-status" class="fira-sans-light color-neon">Not Uploaded</p>
                                    <img id="img-payment" style="object-fit: contain" src="" alt="">
                                </div>
                                <label for="pay-upload" class="button-outline"><h1 class="fira-sans-light font-small">Upload File</h1></label>
                                <input id="pay-upload" name="payment" type="file" accept="image/png, image/jpeg">
                            </div>
                        </div>
                        <button id="save-file-button" type="button" class="button-outline fira-sans-regular color-neon font-regular">Save File</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src = "{{ asset('script/dashboard.js') }}"></script>
</html>