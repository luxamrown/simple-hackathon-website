<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackathon | Register</title>
    
    <link rel="stylesheet" href="{{ asset('style/RootStyle.css') }}"/>
    <link rel="stylesheet" href="{{ asset('style/AuthStyle.css') }}"/>
</head>
<body>
    <section>
        <div class="login">
            <h1 class="fira-sans-bold color-neon font-xl">Register</h1>
            
            <form id="register-form">
                <div class="form">
                    <div class="field-row">
                        <div class="field" id="field_regis_fullname">
                            <p class="fira-sans-light color-neon font-regular">Fullname</p>
                            
                            <div class="input">
                                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="6" r="4" fill="#ffffff"></circle> <path d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z" fill="#ffffff"></path> </g></svg>
                                
                                <input placeholder="Enter Full Name" name="fullname" id="input_regis_fullname" required class="fira-sans-light color-neon font-regular input-field" type="text">
                            </div>
                        </div>
        
                        <div class="field" id="field_regis_birth">
                            <p class="fira-sans-light color-neon font-regular">Birth</p>
                        
                            <div class="input">
                                <svg fill="#ffffff" width="20" height="20" viewBox="0 -2 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M6,22H18a3,3,0,0,0,3-3V7a2,2,0,0,0-2-2H17V3a1,1,0,0,0-2,0V5H9V3A1,1,0,0,0,7,3V5H5A2,2,0,0,0,3,7V19A3,3,0,0,0,6,22ZM5,12.5a.5.5,0,0,1,.5-.5h13a.5.5,0,0,1,.5.5V19a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1Z"></path></g></svg>
                                
                                <input id="input_regis_birth" name="birth" required class="fira-sans-light color-neon font-regular input-field" type="date">
                            </div>
                        </div>
                    </div>

                    <div class="field-row">
                        <div class="field" id="field_register_email">
                            <p class="fira-sans-light color-neon font-regular">Email</p>
                            <div class="input">
                                <svg viewBox="0 -4 20 20" width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>email [#ffffff]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -922.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M294,774.474 L284,765.649 L284,777 L304,777 L304,765.649 L294,774.474 Z M294.001,771.812 L284,762.981 L284,762 L304,762 L304,762.981 L294.001,771.812 Z" id="email-[#ffffff]"> </path> </g> </g> </g> </g></svg>                    
                                
                                <input placeholder="Enter Email" name="email" id="input_register_email" required class="fira-sans-light color-neon font-regular input-field" type="text">
                            </div>
                        </div>
        
                        <div class="field" id="field_regis_line">
                            <p class="fira-sans-light color-neon font-regular">Line ID</p>
                        
                            <div class="input">
                                <svg viewBox="0 0 377.764 377.764" width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" fill="#ffffff" d="M77.315 0h223.133c42.523 0 77.315 34.792 77.315 77.315v223.133c0 42.523-34.792 77.315-77.315 77.315H77.315C34.792 377.764 0 342.972 0 300.448V77.315C0 34.792 34.792 0 77.315 0z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#000000" d="M188.515 62.576c76.543 0 138.593 49.687 138.593 110.979 0 21.409-7.576 41.398-20.691 58.351-.649.965-1.497 2.031-2.566 3.209l-.081.088c-4.48 5.36-9.525 10.392-15.072 15.037-38.326 35.425-101.41 77.601-109.736 71.094-7.238-5.656 11.921-33.321-10.183-37.925-1.542-.177-3.08-.367-4.605-.583l-.029-.002v-.002c-64.921-9.223-114.222-54.634-114.222-109.267-.002-61.292 62.049-110.979 138.592-110.979z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#ffffff" d="M108.103 208.954h27.952c3.976 0 7.228-3.253 7.228-7.229v-.603c0-3.976-3.252-7.228-7.228-7.228h-20.121v-45.779c0-3.976-3.252-7.228-7.228-7.228h-.603c-3.976 0-7.228 3.252-7.228 7.228v53.609c0 3.977 3.252 7.23 7.228 7.23zm173.205-33.603v-.603c0-3.976-3.253-7.228-7.229-7.228h-20.12v-11.445h20.12c3.976 0 7.229-3.252 7.229-7.228v-.603c0-3.976-3.253-7.228-7.229-7.228h-27.952c-3.976 0-7.228 3.252-7.228 7.228v53.609c0 3.976 3.252 7.229 7.228 7.229h27.952c3.976 0 7.229-3.253 7.229-7.229v-.603c0-3.976-3.253-7.228-7.229-7.228h-20.12v-11.445h20.12c3.976.002 7.229-3.251 7.229-7.226zm-53.755 31.448l.002-.003a7.207 7.207 0 0 0 2.09-5.07v-53.609c0-3.976-3.252-7.228-7.229-7.228h-.603c-3.976 0-7.228 3.252-7.228 7.228v31.469l-26.126-35.042c-1.248-2.179-3.598-3.655-6.276-3.655h-.603c-3.976 0-7.229 3.252-7.229 7.228v53.609c0 3.976 3.252 7.229 7.229 7.229h.603c3.976 0 7.228-3.253 7.228-7.229v-32.058l26.314 35.941c.162.252.339.494.53.724l.001.002c.723.986 1.712 1.662 2.814 2.075.847.35 1.773.544 2.742.544h.603a7.162 7.162 0 0 0 3.377-.844c.723-.344 1.332-.788 1.761-1.311zm-71.208 2.155h.603c3.976 0 7.228-3.253 7.228-7.229v-53.609c0-3.976-3.252-7.228-7.228-7.228h-.603c-3.976 0-7.229 3.252-7.229 7.228v53.609c0 3.976 3.253 7.229 7.229 7.229z"></path></g></svg>
                                
                                <input placeholder="Enter Line ID" name="line_id" id="input_regis_line" required class="fira-sans-light color-neon font-regular input-field" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="field-row">
                        <div class="field" id="field_register_password">
                            <p class="fira-sans-light color-neon font-regular">Password</p>
                            <div class="input">
                                <svg viewBox="0 -2 50 50" width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"></rect> </g> <g id="Layer_7" data-name="Layer 7"> <path d="M39,18H35V13A11,11,0,0,0,24,2H22A11,11,0,0,0,11,13v5H7a2,2,0,0,0-2,2V44a2,2,0,0,0,2,2H39a2,2,0,0,0,2-2V20A2,2,0,0,0,39,18ZM15,13a7,7,0,0,1,7-7h2a7,7,0,0,1,7,7v5H15ZM14,35a3,3,0,1,1,3-3A2.9,2.9,0,0,1,14,35Zm9,0a3,3,0,1,1,3-3A2.9,2.9,0,0,1,23,35Zm9,0a3,3,0,1,1,3-3A2.9,2.9,0,0,1,32,35Z"></path> </g> </g> </g></svg>
                                
                                <input placeholder="Enter Password" name="password" id="input_register_password" required class="fira-sans-light color-neon font-regular input-field" type="password">
                            </div>
                        </div>
        
                        <div class="field" id="field_regis_phone">
                            <p class="fira-sans-light color-neon font-regular">Phone Number</p>
                        
                            <div class="input">
                                <svg viewBox="0 -3 24 24" width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.144"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M5.73268 2.043C6.95002 0.832583 8.95439 1.04804 9.9737 2.40962L11.2347 4.09402C12.0641 5.20191 11.9909 6.75032 11.0064 7.72923L10.7676 7.96665C10.7572 7.99694 10.7319 8.09215 10.76 8.2731C10.8232 8.6806 11.1635 9.545 12.592 10.9654C14.02 12.3853 14.8905 12.7253 15.3038 12.7887C15.4911 12.8174 15.5891 12.7906 15.6194 12.78L16.0274 12.3743C16.9026 11.5041 18.2475 11.3414 19.3311 11.9305L21.2416 12.9691C22.8775 13.8584 23.2909 16.0821 21.9505 17.4148L20.53 18.8273C20.0824 19.2723 19.4805 19.6434 18.7459 19.7119C16.9369 19.8806 12.7187 19.6654 8.28659 15.2584C4.14868 11.144 3.35462 7.556 3.25415 5.78817L4.00294 5.74562L3.25415 5.78817C3.20335 4.89426 3.62576 4.13796 4.16308 3.60369L5.73268 2.043ZM8.77291 3.30856C8.26628 2.63182 7.322 2.57801 6.79032 3.10668L5.22072 4.66737C4.8908 4.99542 4.73206 5.35695 4.75173 5.70307C4.83156 7.10766 5.47286 10.3453 9.34423 14.1947C13.4057 18.2331 17.1569 18.3536 18.6067 18.2184C18.9029 18.1908 19.1975 18.0369 19.4724 17.7636L20.8929 16.3511C21.4704 15.777 21.343 14.7315 20.5252 14.2869L18.6147 13.2484C18.0871 12.9616 17.469 13.0562 17.085 13.438L16.6296 13.8909L16.1008 13.359C16.6296 13.8909 16.6289 13.8916 16.6282 13.8923L16.6267 13.8937L16.6236 13.8967L16.6171 13.903L16.6025 13.9166C16.592 13.9262 16.5799 13.9367 16.5664 13.948C16.5392 13.9705 16.5058 13.9959 16.4659 14.0227C16.3858 14.0763 16.2801 14.1347 16.1472 14.1841C15.8764 14.285 15.5192 14.3392 15.0764 14.2713C14.2096 14.1384 13.0614 13.5474 11.5344 12.0291C10.0079 10.5113 9.41194 9.36834 9.2777 8.50306C9.20906 8.06061 9.26381 7.70331 9.36594 7.43225C9.41599 7.29941 9.47497 7.19378 9.5291 7.11389C9.5561 7.07405 9.58179 7.04074 9.60446 7.01368C9.6158 7.00015 9.6264 6.98817 9.63604 6.9777L9.64977 6.96312L9.65606 6.95666L9.65905 6.95363L9.66051 6.95217C9.66122 6.95146 9.66194 6.95075 10.1908 7.48258L9.66194 6.95075L9.94875 6.66556C10.3774 6.23939 10.4374 5.53194 10.0339 4.99297L8.77291 3.30856Z" fill="#ffffff"></path> </g></svg>
                                
                                <input placeholder="Enter Phone Number" name="phone_no" id="input_regis_phone" required class="fira-sans-light color-neon font-regular input-field" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="field-row">
                        <div class="field" id="field_register_team">
                            <p class="fira-sans-light color-neon font-regular">Team Name</p>
                            <div class="input">
                                <svg width="20" height="20" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" viewBox="0 0 400 400.00001" id="svg2" version="1.1" inkscape:version="0.91 r13725" sodipodi:docname="team.svg" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs id="defs4"></defs> <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="1.1341102" inkscape:cx="253.29936" inkscape:cy="39.888271" inkscape:document-units="px" inkscape:current-layer="layer2" showgrid="false" units="px" showguides="true" inkscape:guide-bbox="true" inkscape:window-width="1863" inkscape:window-height="1056" inkscape:window-x="1977" inkscape:window-y="24" inkscape:window-maximized="1"></sodipodi:namedview> <metadata id="metadata7"> <rdf:rdf> <cc:work rdf:about=""> <dc:format>image/svg+xml</dc:format> <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type> <dc:title></dc:title> </cc:work> </rdf:rdf> </metadata> <g inkscape:groupmode="layer" id="layer2" inkscape:label="Capa 2"> <g transform="matrix(15.338502,0,0,15.338502,-10216.591,-9424.9414)" style="display:inline;fill:#ffffff" id="g7483"> <path sodipodi:nodetypes="cscccccccsccssccsscccccccscs" inkscape:connector-curvature="0" id="path7377" d="m 683.35352,627.41602 c -2.41792,-3e-5 -4.64949,0.66338 -6.30664,1.99218 -1.65716,1.3288 -2.69926,3.34729 -2.69922,5.82618 l 0,0.002 0,0.002 c 2.4e-4,0.0369 0.004,2.22266 0.004,2.22266 l -0.004,2.97265 17.7755,0 0.0149,-2.97265 c 0,0 0.003,-1.07407 0.004,-1.48633 10e-4,-0.41226 0.005,-0.75492 0.004,-0.72461 l 0,-0.008 0,-0.008 c 0,-2.7272 -1.25565,-4.76115 -2.97656,-6.01954 -1.72091,-1.25838 -3.87127,-1.79881 -5.81445,-1.79882 z m 0,1.5 c 1.65762,10e-6 3.52904,0.48699 4.92773,1.50976 1.39869,1.02277 2.36328,2.52427 2.36328,4.8086 -0.002,0.10825 -0.003,0.33036 -0.004,0.73437 -10e-4,0.4126 -0.002,0.95111 -0.004,1.48828 -0.002,0.53434 -0.005,1.0662 -0.008,1.47656 l -14.77149,0 c -0.002,-0.41034 -0.005,-0.94292 -0.006,-1.47656 -0.003,-1.07151 -0.003,-2.1053 -0.004,-2.22265 -4e-5,-2.07282 0.80564,-3.58893 2.13672,-4.65626 1.33107,-1.06732 3.22715,-1.66213 5.36914,-1.6621 z" style="color:#ffffff;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#ffffff;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;baseline-shift:baseline;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#ffffff;solid-opacity:1;fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.50000012;stroke-linecap:square;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"></path> <path sodipodi:nodetypes="ssssssssss" inkscape:connector-curvature="0" id="ellipse7379" d="m 683.35352,614.59375 c -3.15838,0 -5.73438,2.57163 -5.73438,5.72656 0,3.15493 2.576,5.72852 5.73438,5.72852 3.15837,0 5.73632,-2.57359 5.73632,-5.72852 0,-3.15493 -2.57795,-5.72656 -5.73632,-5.72656 z m 0,1.5 c 2.34915,0 4.23632,1.88374 4.23632,4.22656 0,2.34283 -1.88717,4.22852 -4.23632,4.22852 -2.34916,0 -4.23438,-1.88569 -4.23438,-4.22852 0,-2.34282 1.88522,-4.22656 4.23438,-4.22656 z" style="color:#ffffff;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#ffffff;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;baseline-shift:baseline;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#ffffff;solid-opacity:1;fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.50000012;stroke-linecap:square;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"></path> <path sodipodi:nodetypes="csccccccccccccscccccccc" inkscape:connector-curvature="0" id="path7381" d="m 673.94727,628.01172 c -2.25371,-7e-5 -4.22271,0.62591 -5.63477,1.88867 -1.41206,1.26276 -2.21318,3.14646 -2.21289,5.42969 l 0,0.002 0,0.002 c 2e-4,0.0398 0.004,2.17383 0.004,2.17383 l 0.0151,2.92578 6.13949,0 0.83195,0 0,-1.5 -0.83195,0 -4.65039,0 c -0.002,-0.39977 -0.003,-0.91109 -0.004,-1.42773 -0.002,-1.05307 -0.003,-2.08047 -0.004,-2.17969 7.1e-4,-1.94179 0.63463,-3.34239 1.71289,-4.30664 1.07829,-0.96428 2.65593,-1.50709 4.63086,-1.50781 0.22317,0.002 0.88465,0.0668 0.88465,0.0668 0,0 0.76341,-0.91136 1.10949,-1.35201 l -0.74023,-0.11523 c -0.41195,-0.0641 -0.829,-0.0972 -1.2461,-0.0996 l -0.002,0 -0.002,0 z" style="color:#ffffff;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#ffffff;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;baseline-shift:baseline;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#ffffff;solid-opacity:1;fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.50000012;stroke-linecap:square;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"></path> <path sodipodi:nodetypes="cccccccsccccccccc" inkscape:connector-curvature="0" id="path7383" d="m 673.87221,616.52862 c -2.84899,-0.02 -5.19347,2.28542 -5.21258,5.13086 -0.0194,2.84543 2.29365,5.18236 5.14265,5.20094 1.23249,0.007 2.42149,-0.42628 3.35789,-1.21168 0.11378,-0.0953 0.22272,-0.1953 0.32821,-0.30051 l 0.3809,-0.38274 -0.9092,-1.20877 -0.40214,0.41692 c -0.0737,0.0764 -0.2804,0.25865 -0.36072,0.32598 -0.66495,0.55773 -1.51097,0.86609 -2.38674,0.86083 -2.03996,-0.0133 -3.66475,-1.65797 -3.65089,-3.69082 0.0137,-2.03286 1.66056,-3.65537 3.70051,-3.64106 0.62194,0.004 1.2341,0.16514 1.77616,0.46907 l 0.65378,0.36772 c 0,0 0.46896,-1.22541 0.53496,-1.41477 l -0.45526,-0.26051 c -0.76307,-0.42787 -1.62247,-0.65518 -2.49753,-0.66146 z" style="color:#ffffff;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#ffffff;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;baseline-shift:baseline;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#ffffff;solid-opacity:1;fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.50000024;stroke-linecap:square;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;marker:none;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"></path> </g> </g> </g></svg>
                                
                                <input placeholder="Enter Team Name" name="team_name" id="input_register_team" required class="fira-sans-light color-neon font-regular input-field" type="text">
                            </div>
                        </div>
        
                        <div class="field" id="field_regis_comptype">
                            <p class="fira-sans-light color-neon font-regular">Competition Type</p>
                        
                            <div class="input">
                                <svg fill="#ffffff" viewBox="0 -3 32 32" width="20" height="20" enable-background="new 0 0 32 32" id="Layer_3" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M29,4h-6c-0.022,0-0.04,0.011-0.061,0.012c-0.651-1.124-1.367-1.743-1.419-1.786C21.341,2.08,21.117,2,20.886,2h-9.773 c-0.231,0-0.455,0.08-0.633,0.227c-0.052,0.043-0.769,0.662-1.419,1.786C9.04,4.011,9.022,4,9,4H3C2.715,4,2.444,4.121,2.255,4.333 c-0.19,0.212-0.28,0.495-0.249,0.777c0.34,3.061,2.567,8.938,8.514,9.775c0.648,0.924,1.413,1.858,2.311,2.803 c0.048,0.051,0.112,0.078,0.168,0.117V20h-2c-0.552,0-1,0.447-1,1v3H8c-0.552,0-1,0.447-1,1v4c0,0.553,0.448,1,1,1h16 c0.552,0,1-0.447,1-1v-4c0-0.553-0.448-1-1-1h-2v-3c0-0.553-0.448-1-1-1h-2v-2.194c0.057-0.039,0.12-0.067,0.168-0.117 c0.897-0.944,1.662-1.879,2.311-2.803c5.947-0.837,8.175-6.714,8.514-9.775c0.032-0.282-0.059-0.565-0.249-0.777 C29.556,4.121,29.285,4,29,4z M4.203,6h4.056C8.143,6.453,8.049,6.931,8.016,7.463c-0.101,1.611,0.258,3.279,1.068,4.994 C5.853,11.149,4.629,7.774,4.203,6z M23,28H9v-2h2h10h2V28z M20,24h-8v-2h2h4h2V24z M15,20v-2h2v2H15z M18.01,16H18h-4h-0.01 c-2.783-3.019-4.122-5.833-3.98-8.369C10.117,5.707,11.065,4.479,11.514,4h8.971c0.452,0.482,1.398,1.709,1.505,3.632 C22.131,10.167,20.792,12.981,18.01,16z M22.92,12.449c0.808-1.712,1.165-3.378,1.064-4.987C23.951,6.931,23.857,6.453,23.742,6 h4.047C27.352,7.765,26.111,11.136,22.92,12.449z"></path> </g> </g></svg>                                
                                
                                <select required id="input_register_comptype" class="fira-sans-light color-neon font-regular input-field" name="competition_type">
                                    <option value=null>--Please choose an option--</option>
                                    <option value="UIX">UI/UX</option>
                                    <option value="BUS">Business IT Case</option>
                                    <option value="WEB">Web Development</option>
                                    <option value="CTF">Capture the Flag</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="button-auth">
                    <div style="width: 100%; margin: auto">
                        <button id="register-button" type="submit" class="button fira-sans-bold color-dark font-regular">Register</button>
                    </div>

                    <a href="/login"><p class="color-neon fira-sans-light font-small">Already Registered?</p></a>
                </div>

            </form>

            <a href="/">
                <h1 style="opacity: 0.5" class="fira-sans-light color-neon font-small">Hackathon</h1>
            </a>
        </div>
    </section>
</body>
<script src = "{{ asset('script/register.js') }}"></script>
</html>