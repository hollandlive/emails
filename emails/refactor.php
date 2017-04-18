<?php

/*
* Base url to use for images
*/

if (preg_match("/websolve-dev/i", $_SERVER['HTTP_HOST'])) {
$main_url = "http://" . $_SERVER['HTTP_HOST'];
}
else {
$main_url = "http://mailings.websolve.nl";
}
//$main_url = "http://mailings.websolve.nl";



//Paths
$headerImage = 'http://localhost:3000/~artem/emails/bmw/images/headers/header_bmw.jpg';

$elements_image_url = $main_url . $image_path . "/elements";
$cta_image_url = $main_url . $image_path . "/cta";
$headers_image_url =  $main_url . $image_path . "/header/responsive";

if (isset($mailID)) {
    $header_image = "header" . $mailID . ".jpg";
}

if (!isset($header_image)) {
    $header_image = "header1.jpg";
}






/*if (!filesize($_SERVER['DOCUMENT_ROOT'] . $image_path . "/header/responsive/" . $header_image)) {
    $header_image = "header1.jpg";
}*/

## CUSTOMER PORTAL URLS ##

$customer_portal_url_my_details = "%customerportal_url%";
$customer_portal_url_appointment = "%customerportal_url%";
$customer_portal_url_contact_route = "%customerportal_url%";
$customer_portal_url_preferences = "%customerportal_url%";
$find_car_url = "https://www.bmw.nl";

// Portal URL exception for Early portal movers
if (isset($levelID)) {
    // Ekris Groep
    if ($levelID == 682) {
        // $customer_portal_url_my_details = "https://mijn.ekris.nl/mijn-gegevens";
        // $customer_portal_url_appointment = "https://mijn.ekris.nl/afspraak-maken";
        // $customer_portal_url_contact_route = "https://mijn.ekris.nl/mijn-dealer";
        // $customer_portal_url_preferences = "https://mijn.ekris.nl/contactvoorkeuren";
        $customer_portal_url_appointment = "https://www.ekris.nl/mini/werkplaatsafspraak";
        $customer_portal_url_contact_route = "https://www.ekris.nl/contact";
        $find_car_url = "https://www.ekris.nl/mini";
    }
}



/*
 * Code snippet for placing different elements like Call To Action buttons (CTA), icons etc
 */
$html_snippets['desktop']['recurring']['cta'] = '    <li class="list-group-item borderless" style="color:#666666;text-decoration:none;padding-left:15px;">
                                                        <span class="icon">
                                                            <img src="' . $cta_image_url . '/[cta_icon]">
                                                        </span>
                                                        <a href="[cta_url]" style="color:#666666;text-decoration:none;">
                                                            [cta_title]
                                                        </a>
                                                    </li>';

$html_snippets['mobile']['recurring']['cta'] = $html_snippets['desktop']['recurring']['cta'];

/*
 * Code snippet for placing an article amd their elements as Call To Action buttons (CTA) etc
 */
$html_snippets['desktop']['recurring']['article'] = '<tr>

                                                        </tr>';




$html_snippets['mobile']['recurring']['article'] = str_replace('_desktop_' , '_mobile_', $html_snippets['desktop']['recurring']['article']);

#order is important here, article_cta should stay after article because article_cta is used while looping the articles

$html_snippets['desktop']['recurring']['article_cta'] = '<table width="200" height="30" border="0" cellspacing="0" cellpadding="0">
<tr>
<td bgcolor="#3366cc"  class="bodyText textPaddingForMobile butt" style="display:block;mso-table-rspace:0;font-family: Arial, helvetica, sans-serif, serif;color:white;font-size:16px;font-weight:400;z-index:11111;line-height:24px;mso-line-height-rule:exactly;text-align:left;vertical-align:top; width:200px; height:30px;">
                                                              <a style="display:inline-block;mso-table-rspace:0;font-family: Arial, helvetica, sans-serif, serif;color:white;font-size:16px;font-weight:400;z-index:11111;line-height:24px;mso-line-height-rule:exactly;text-align:left;vertical-align:top; width:200px; height: 30px;" href="[article_cta_label]"</a>
                                                              [article_cta_url]</td>
<div><!--[if mso]>
<v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://litmus.com" style="height:36px;v-text-anchor:middle;width:200px;" arcsize="0%" strokecolor="#EB7035" fillcolor="#EB7035">
<w:anchorlock/>
<center style="color:white;font-family:Helvetica, Arial,sans-serif;font-size:16px;">[article_cta_label]</center>
</v:roundrect>
<![endif]--></div>
</td>
</tr>
</table>';





$html_snippets['mobile']['recurring']['article_cta'] = $html_snippets['desktop']['recurring']['article_cta'];



$html_snippets['desktop']['single']['facebook'] = '<a href="[facebook_url]" style="text-decoration:none;">
                                                        <img alt="Facebook Icon" class="ix" src="' . $elements_image_url . '/face.png" width="24" height="24" border="0" style="width:24px;height:24px;display:inline-block;border-width:0;-ms-interpolation-mode:bicubic;" >
                                                    </a>';

$html_snippets['desktop']['single']['twitter'] = '<a href="[twitter_url]" style="text-decoration:none;">
                                                        <img alt="Twitter Icon" class="ix" src="' . $elements_image_url . '/twit.png"  width="24" height="24" border="0" style="width:24px;height:24px;display:inline-block;border-width:0;-ms-interpolation-mode:bicubic;" >
                                                    </a>';

$html_snippets['desktop']['single']['youtube'] = '<a href="[youtube_url]" style="text-decoration:none;">
                                                        <img alt="Utube Icon"  class="ix" src="' . $elements_image_url . '/utube.png"  width="24" height="24" border="0" style="width:24px;height:24px;display:inline-block;border-width:0;-ms-interpolation-mode:bicubic;" >
                                                    </a>';
$html_snippets['desktop']['single']['instagram'] = '<a href="[instagram_url]" style="text-decoration:none;">
                                                        <img alt="Instagram Icon" class="ix" src="' . $elements_image_url . '/insta.png" width="24" height="24" border="0" style="width:24px;height:24px;display:inline-block;border-width:0;-ms-interpolation-mode:bicubic;" >
                                                    </a>';

$html_snippets['desktop']['single']['googleplus'] = '<a href="[googleplus_url]" style="text-decoration:none;">
                                                        <img alt="Googleplus Icon" class="ix" src="' . $elements_image_url . '/gplus.png" width="24" height="24" border="0" style="width:24px;height:24px;display:inline-block;border-width:0;-ms-interpolation-mode:bicubic;" >
                                                    </a>';

$html_snippets['desktop']['single']['snapchat'] = '<a href="[snapchat_url]" style="text-decoration:none;">
                                                        <img alt="Snapchat Icon" class="ix" src="' . $elements_image_url . '/snap.png" width="24" height="24" border="0" style="width:24px;height:24px;display:inline-block;border-width:0;-ms-interpolation-mode:bicubic;" >
                                                    </a>';


$html_snippets['mobile']['single']['facebook'] = $html_snippets['desktop']['single']['facebook'];
$html_snippets['mobile']['single']['twitter'] = $html_snippets['desktop']['single']['twitter'];
$html_snippets['mobile']['single']['youtube'] = $html_snippets['desktop']['single']['youtube'];
$html_snippets['mobile']['single']['instagram'] = $html_snippets['desktop']['single']['instagram'];
$html_snippets['mobile']['single']['googleplus'] = $html_snippets['desktop']['single']['googleplus'];
$html_snippets['mobile']['single']['snapchat'] = $html_snippets['desktop']['single']['snapchat'];
## SNIPPET TEST FILLING ##

$dev = false;
if (!isset($mailID))
{
    $dev = true;
    $mailID = 3;
    $test_ctas = array(
        0 => array('url' => 'http://www.bmw.nl',
            'desc' => 'Service en diensten',
            'title' => 'Service en diensten video',
            'icon' => 'med_play_desktop.png'),
        1 => array('url' => 'http://www.bmw.nl',
            'desc' => 'Service en diensten',
            'title' => 'Service en diensten',
            'icon' => 'car_exteriorfront_desktop.png'),
        2 => array('url' => 'http://www.bmw.nl',
            'desc' => 'Service en diensten',
            'title' => 'Service en diensten',
            'icon' => 'med_mobileapp_desktop.png'),
        3 => array('url' => 'http://www.bmw.nl',
            'desc' => 'Service en diensten',
            'title' => 'Service en diensten',
            'icon' => 'med_image_desktop.png'),
        4 => array('url' => 'http://www.bmw.nl',
            'desc' => 'Service en diensten',
            'title' => 'Service en diensten',
            'icon' => 'med_audio_desktop.png')
    );
    $test_articles = array(
        0 => array('url' => 'http://www.bmw.nl',
            'title' => 'Originele BMW Winteraccessories',
            'text' => 'Originele BMW Winteraccessories passen perfect en vergroten uw rijplezier in de winter. Bekijk alle mogelijkheden in de BMW Shop, voer uw kenteken in (of kies uw model) dan ziet u alleen datgene dat geschikt is voor uw BMW.',
            'cta_label' => 'Shop nu',
            'image' => $elements_image_url .'/header3.jpg' ),
        1 => array('url' => 'http://www.bmw.nl',
            'title' => 'BMW 2 serie cabrio',
            'text' =>'Sportieve metgezel, elegante atleet of exclusieve trendsetter. U bepaalt helemaal zelf, welk karakter u uw BMW 2 Serie Cabrio geeft. Met de diverse BMW Modellen en uitrustingen zijn samenLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
            'cta_label' => 'Lees meer',
            'image' => $elements_image_url .'/header1.jpg' )
    );
}

if (!isset($load_template_vars_only)) {

?>






<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--[if !mso]><!-- -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--<![endif]-->



    <title>BMW - %subject%</title>

    <!--begin styling which in most cases overwrite the inline styling-->
    <style type="text/css">
        <?php
        //body
        $bodyStyle = 'bgcolor:#f1f1f1;margin:0;padding:0;';
        $tableStyle = 'text-align:center;background-color:#f1f1f1;border:none;padding:0;border-color:green;width:580px';
        $headerImageStyle = 'width:580px;height:auto;text-align:center;';
        
        $trStyleNoPadding = 'width:100%;margin:0;padding:0';

            


        ?>

        
       @media only screen and (max-width: 579px) {
        .deviceWidth td {
            background-color: red !important;
            text-align: center !important;
            width: 100% !important;
            
    }

    </style>
    <!--[if gte mso 9]><xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml><![endif]-->

</head>


<!--begin body-->
<body style="<?php echo $bodyStyle; ?>">

<!--begin table wrapper-->
<table align="center" style="<?php echo $tableStyle; ?>">

    <!--begin top row with logo or nav etc -->
    <tr align="center" class="deviceWidth">
        <td>
        LOGO AREA
        </td>
    </tr>
    </table>
    <!--begin top row with logo or nav etc -->






            <!--begin table header with image-->
            <table align="center" style="<?php echo $tableStyle; ?>">
            <tr align="center" class="deviceWidth" style="<?php echo $trStyleNoPadding; ?>">
            <td>
                <img src="<?php echo $headerImage; ?>" style="<?php echo $headerImageStyle; ?>" >
                   
            </td>
            <tr>
            </table>
            <!--end table header with image-->
            


<!--begin header-->
<!--end header-->






<!--begin content articles-->
<!--end content articles-->

<!--begin footer-->
<!--end footer-->
    </td>
    </tr>
    </table>
<!--end table wrapper-->







<!--begin button-->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
            <div>
                <!--[if mso]>
                <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://litmus.com" style="height:36px;v-text-anchor:middle;width:150px;" arcsize="5%" strokecolor="#EB7035" fillcolor="#EB7035">
                    <w:anchorlock/>
                    <center style="color:#ffffff;font-family:Helvetica, Arial,sans-serif;font-size:16px;">I am a button</center>
                </v:roundrect>
                <![endif]-->
                <a href="http://buttons.cm" style="background-color:#EB7035;border:1px solid #EB7035;border-radius:3px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:16px;line-height:44px;text-align:center;text-decoration:none;width:150px;-webkit-text-size-adjust:none;mso-hide:all;">I am a button &rarr;</a>
            </div>
        </td>
    </tr>
</table>
<!--end button-->




<!--end body-->
</body>
</html>
<?php
}
