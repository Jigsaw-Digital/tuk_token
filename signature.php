<?php
if (!isset($_POST['name']) && !isset($_POST['job_title']) && !isset($_POST['phone_number'])) {
    ?>
    <html>
    <body>
    <style>
        /* Style inputs with type="text", select elements and textareas */
        input[type=text] {
            width: 100%; /* Full width */
            padding: 12px; /* Some padding */
            border: 1px solid #ccc; /* Gray border */
            border-radius: 4px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            margin-top: 6px; /* Add a top margin */
            margin-bottom: 16px; /* Bottom margin */
            resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
        }

        /* Style the submit button with a specific background color etc */
        input[type=submit] {
            background-color: #ec1f28;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* When moving the mouse over the submit button, add a darker green color */
        input[type=submit]:hover {
            opacity: 0.8;
        }

        /* Add a background color and some padding around the form */
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 500px;
        }
    </style>
    <div class="container" style="margin: 0px auto; margin-top: 50px;">
        <img src="https://advance-projects.co.uk/wp-content/themes/advance_catering/img/Advance_Catering_Lighter_Logo.png" width="200px" style="margin-bottom: 10px;"/>
        <p>Please enter your name, job title and phone number to generate the code/preview for your email signature.</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name.." required>

            <label for="job_title">Job Title</label>
            <input type="text" id="job_title" name="job_title" placeholder="Your Job Title.." required>

            <label for="phone_number">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" placeholder="Your Phone Number.." required>

            <input type="submit" value="Submit">
        </form>
    </div>
    </body>
    </html>
    <?php
} else {
    $code = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
</head>
<body>

<table style="max-width: 650px;">
<tbody>
  <tr>
    <td style="width: 220px"> <img src="https://advance-projects.co.uk/wp-content/themes/advance_catering/img/Advance_Catering_Lighter_Logo.png" width="190px" style="padding-right: 15px; margin-top: 0px;"/></td>
    <td style="padding-left: 15px;border-left: 2px solid black;">
    <p style="margin-bottom: 0px; margin-top: 0px;"><b>' . $_POST['name'] . '</b> | ' . $_POST['job_title'] . '</p>
        <p style="margin-bottom: 0px; margin-top: 0px;">' . $_POST['phone_number'] . '</p>
        
        
        <p style="margin-bottom: 0px; margin-top: 10px;"><a href="https://www.advance-projects.co.uk" target="_blank">www.advance-projects.co.uk</a></p><br/>
        
         <a href="https://www.instagram.com/advance_catering/?hl=en" target="_blank">
                <img src="https://www.advance-projects.co.uk/logos/1.png" width="30" height="30" style="margin-right: 5px; width: 30px; height: 30px"/>
            </a>
            <a href="https://www.linkedin.com/company/advance-catering/" target="_blank">
                <img src="https://www.advance-projects.co.uk/logos/2.png" width="30" height="30" style="margin-right: 5px; width: 30px; height: 30px"/>
            </a>
            <a href="https://www.tiktok.com/@advance_catering?lang=en" target="_blank">
                <img src="https://www.advance-projects.co.uk/logos/3.png" width="30" height="30" style="width: 30px; height: 30px"/>
            </a>
        
        <p style="font-size: 11px">FEJ Multi-site kitchen house of the year 2022-Winner<br/>
            CEDA Design Project £200k-£500k - Winner<br/>
            CEDA Design project £50k-£200 k-Runner Up<br/>
            CEDA Design Project over £500k-Runner Up</p>
        </p>
    </td>
  </tr>
  <tr>
    <td colspan="2"><p style=" margin-top: 10px; font-size: 10.5px">This document is intended for, and should only be read by, those persons to whom it is addressed. Its contents
    are confidential and if you have received this message in error, please inform the sender and delete all records
    of the message from your computer. Any form of reproduction, dissemination, copying, disclosure, modification,
    distribution and / or publication of this message without our prior written consent is strictly prohibited.
    Neither the author of this message nor their employers accept legal responsibility for the contents of the
    message and any views or opinions presented are solely those of the author. Advance Innovation Limited.
    <br/><br/>
    The Advance Group is committed to safeguarding personal information as we believe that such is paramount to our
    mutual success and to maintaining the trust relationship with our customers. We have appropriate instruments in
    place to aid in proper navigation of the new GDPR Legislative requirements. A copy of our Privacy Policy is
    available to view on www.advance-catering.co.uk</p></td>
  </tr>
</tbody>
</table>
</body>
</html>';


    ?>

    <style>
        .container {
            border-radius: 5px;
            padding: 20px;
            width: 700px;
        }
        .btn {
            background-color: #ec1f28;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <div class="container" style="margin: 0px auto; margin-top: 50px;">
       <div style=" margin-bottom: 40px;">
           <a href="/signature.php" class="btn">Go Back</a>
       </div>
        <?php echo $code; ?>

        <p style=" margin-top: 50px;">Copy code below to paste in to your email signature.</p>
        <textarea cols="60" rows="60" style="width: 100%;"><?php echo $code; ?></textarea>
    </div>
    <?php

} ?>