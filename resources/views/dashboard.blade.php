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
            </div>
    
            <div class="section-div">
                <h1 class="fira-sans-bold color-neon font-xl">Hello </h1>
                
                <div class="profile-content">
                    <div class="profile-details">
                        <h1 class="fira-sans-regular color-neon font-large">Profile Details </h1>
                    
                        <div class="detail-desc">
                            <p class="fira-sans-regular color-neon">Team Name</p>
                            <p class="fira-sans-light color-neon">Lol</p>
                        </div>

                        <div class="detail-desc">
                            <p class="fira-sans-regular color-neon">Full Name</p>
                            <p class="fira-sans-light color-neon">Luxamrown</p>
                        </div>

                        <div class="detail-desc">
                            <p class="fira-sans-regular color-neon">Email</p>
                            <p class="fira-sans-light color-neon">luxamrownn@gmail.coasdddddddddm</p>
                        </div>

                        <div class="detail-desc">
                            <p class="fira-sans-regular color-neon">Date of Birth</p>
                            <p class="fira-sans-light color-neon">05-12-2003</p>
                        </div>

                        <div class="detail-desc">
                            <p class="fira-sans-regular color-neon">Line ID</p>
                            <p class="fira-sans-light color-neon">luxam</p>
                        </div>

                        <div class="detail-desc">
                            <p class="fira-sans-regular color-neon">Phone Number</p>
                            <p class="fira-sans-light color-neon">08080808080</p>
                        </div>
                    </div>

                    <div class="profile-details">
                        <div class="file-container">
                            <div class="file">
                                <p class="fira-sans-regular color-neon">CV</p>
                                <div class="file-photo">
                                    <p class="fira-sans-light color-neon">Not Uploaded</p>
                                </div>
                                <label for="cv-upload" class="button-outline"><h1 class="fira-sans-light font-small">Upload File</h1></label>
                                <input id="cv-upload" name="cv" type="file" accept="image/png, image/jpeg">
                            </div>

                            <div class="file">
                                <p class="fira-sans-regular color-neon">Proof of Payment</p>
                                <div class="file-photo">
                                    <img style="object-fit: contain" src="https://placehold.co/600x400" alt="">
                                </div>
                                <label for="pay-upload" class="button-outline"><h1 class="fira-sans-light font-small">Upload File</h1></label>
                                <input id="pay-upload" name="payment" type="file" accept="image/png, image/jpeg">
                            </div>
                        </div>
                        <button type="button" class="button-outline"><h1 class="fira-sans-regular">Save File</h1></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src = "{{ asset('script/dashboard.js') }}"></script>
</html>