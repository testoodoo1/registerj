<!DOCTYPE html>
<html>
    <head>
<style type="text/stylesheet">
.thumb {
    border: 1px solid #000000;
    height: 75px;
    margin: 10px 5px 0 0;
}
</style>
        <title>Registration Form</title>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
        <script type="text/javascript" src="jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <div class="clr"></div>
            </div>
            <!--/ freshdesignweb top bar -->
            <header>
                <h1>Registration Form</h1>
            </header>
            <div  class="form">
                <form id="contactform" enctype="multipart/form-data">
                    <fieldset>
                        <p class="contact">
                            <label for="name">Name</label>
                        </p>
                        <label class="month">
                        <select class="select-style" name="BirthMonth">
                            <option value="">Title</option>
                            <option  value="01">Dr</option>
                            <option value="02">Mr</option>
                            <option value="03" >Ms</option>
                            <option value="04">Mrs</option>
                            <option value="05">Others</option>
                        </label>
                        </select>
                        <input class="name" style="width :160px;" name="BirthDay"  placeholder="First Name" required="">
                        <input class="name" style="width :160px;" name="BirthDay"  placeholder="Last Name" required="">
                        </label>
                    </fieldset>
                    <p class="contact">
                        <label for="email">Email</label>
                    </p>
                        <input id="email" name="email" placeholder="example@domain.com" required="" type="email">
                    <p class="contact">
                        <label for="address">
                    <p class="contact">
                        <label for="address">Flat / Door No</label>
                    </p>
                        <input placeholder="Flat/Door No" required="" type="text">
                    <p class="contact">
                        <label for="address">Address</label>
                    </p>
                        <input placeholder="Address" required="" type="text">
                    <p class="area">
                        <label for="area">Area</label>
                    </p>
                    <p class="area">
                        <select class="select-style gender" name="gender">
                            <option value="">Select Area</option>
                            <option value="01">Sholinganallur</option>
                            <option value="02">Navallur</option>
                        </select>
                    </p>
                    <br>
                    <p class="city">
                        <label for="city">City</label>
                    </p>
                    <p class="city">
                        <select class="select-style gender" name="gender">
                            <option value="">Select City</option>
                            <option value="01">Chennai</option>
                        </select>
                    </p>
                    <br>
                    <p class="state">
                        <label for="state">State</label>
                    </p>
                    <p class="state">
                        <select class="select-style gender" name="gender">
                            <option value="">Select State</option>
                            <option value="01">TamilNadu</option>
                        </select>
                    </p>
                    <br>
                    <p class="contact">
                        <label for="pincode">Pin Code</label>
                    </p>
                        <input id="pincode" name="pincode" placeholder="Pin Code" required="" tabindex="2" type="text">
                    <br>
                    <p class="photo">
                        <label for="photo">Photo</label>
                    </p>
                    <br>
                        <input id="files" name="image" type="file" multiple="multiple" required="" tabindex="2">
                        <div id='previewImg'></div>

                        <br>
                    <p class="contact">
                        <label for="phone">Mobile phone</label>
                    </p>
                        <input id="phone" name="phone" placeholder="phone number" required="" type="text">
                    <fieldset>
                        <label>Birth Date</label>
                        <label class="month">
                            <select class="select-style" name="BirthMonth">
                                <option value="">Month</option>
                                <option  value="01">January</option>
                                <option value="02">February</option>
                                <option value="03" >March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12" >December</option>
                            </label>
                            </select>
                        <label>Day
                            <input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" required="">
                        </label>
                        <label>Year 
                            <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required="">
                        </label>
                    </fieldset>
                    <br>
                    <input class="buttom" name="submit" id="submit" tabindex="5" value="Register" type="submit">
                </form>
            </div>
        </div>
    </body>
<script type="text/javascript">
function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

        // Only process image files.
        if (!f.type.match('image.*')) {
            continue;
        }

        var reader = new FileReader();

        // Closure to capture the file information.
        reader.onload = (function (theFile) {
            return function (e) {
                // Render thumbnail.
                var span = document.createElement('span');
                span.innerHTML = ['<img class="thumb" src="', e.target.result,
                    '" title="', escape(theFile.name), '"/>'].join('');
                document.getElementById('previewImg').insertBefore(span, null);
            };
        })(f);

        // Read in the image file as a data URL.
        reader.readAsDataURL(f);
    }
}

document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
</html>
