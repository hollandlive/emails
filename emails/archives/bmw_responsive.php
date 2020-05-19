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

## STYLING ##
$full_html = 1;
$font_color = "010101";
$black = "";

## HEADER ##
$image_path = "/autoscripts/emails/images/BMW_responsive";

$elements_image_url = $main_url . $image_path . "/elements";
$cta_image_url = $main_url . $image_path . "/cta";
$headers_image_url =  $main_url . $image_path . "/header/responsive";

if (isset($mailID)) {
    $header_image = "header" . $mailID . ".jpg";
}

if (!isset($header_image)) {
    $header_image = "header1.jpg";
}

if (!filesize($_SERVER['DOCUMENT_ROOT'] . $image_path . "/header/responsive/" . $header_image)) {
    $header_image = "header1.jpg";
}

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
$html_snippets['desktop']['recurring']['cta'] = '    <li class="list-group-item borderless" style="color:#666666;text-decoration:none;padding-left:15px;>
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
                                                        <td width="100%" bgcolor="#f1f1f1" align="center" valign="top" class="removePaddingForMobile white" style="padding-top:10px;padding-bottom:10px;padding-right:0;padding-left:0;border-top-width:0px;border-top-style:solid;border-top-color:#000000;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >
                                                                        <!-- Start: Top cell image -->
                                                                        <table border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff" class="deviceWidth" style="width:580px;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >
                                                                            <tr>
                                                                                <td align="center" valign="top"  class="removePaddingForMobile" style="padding-top:0px;padding-bottom:15px;padding-right:0;padding-left:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >

                                                                                    <img src="[article_img]" alt="" border="0"  class="deviceWidth" width="580" style="display:block;width:580px;border-width:0;-ms-interpolation-mode:bicubic;" />

                                                                                </td>
                                                                            </tr>


                                                                             <tr class="removePaddingForMobile white1" style="position:relative;text-align:center;height:5px;padding-bottom:0px;mso-table-rspace:0;font-family: Arial, helvetica, sans-serif, serif;color:white;">

                                                                                        <td bgcolor="white"  align="center">
                                                                                        </td>
                                                                                    </tr>





                                                                            <tr bgcolor="ffffff" >
                                                                                <td align="left" valign="top" bgcolor="#ffffff"  class="title textPaddingForMobile sub" style="padding-bottom:5px;padding-top:15px;padding-left:25px;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;font-family: Arial, helvetica, sans-serif, serif;color:#626262;font-size:14px;z-index:11111;line-height:24px;mso-line-height-rule:exactly;text-align:left;vertical-align:top;" >
                                                                                    <a href="http://www.example.com" style="text-decoration:none; color:#666666 ;" >[article_title]</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr bgcolor="ffffff" >
                                                                                <td align="left" valign="top" bgcolor="#ffffff"  class="bodyText textPaddingForMobile" style="padding-bottom:5px;padding-top:5px;padding-left:25px;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;font-family: Arial, helvetica, sans-serif, serif;color:#626262;font-size:14px;z-index:11111;line-height:24px;mso-line-height-rule:exactly;text-align:left;vertical-align:top;" >
                                                                                    <p>[article_text]</p>

                                                                                    </td>
                                                                                </tr>
                                                                                    <tr>
                                                                                    <tr>

                                                                                        <td bgcolor="#3366cc"  align="center" width="200" height="30" class="textPaddingForMobile butt" style="display:block;padding-left:25px;text-align:center;height:30px;padding-bottom:0px;mso-table-rspace:0;font-family: Arial, helvetica, sans-serif, serif;color:white;font-size:16px;font-weight:400;z-index:11111;line-height:24px;mso-line-height-rule:exactly;text-align:left;vertical-align:middle;position:relative;max-height:30px; max-width: 200px;">
                                                                                            <a href="[article_cta_url]"  style="display:block;text-align:center;color:white;display:block;height:30px;width:200px;text-decoration:none;font-weight:600;font-size:16px;padding-top:7px;">[article_cta_label]
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr class="removePaddingForMobile white" style="position:relative;text-align:center;height:15px;padding-bottom:0px;mso-table-rspace:0;font-family: Arial, helvetica, sans-serif, serif;color:white;">

                                                                                        <td bgcolor="white"  align="center">
                                                                                        </td>
                                                                                    </tr>

                                                                            </tr>

                                                                            <!-- <tr bgcolor="ffffff" >
                                                                                <td align="left" valign="top" bgcolor="#3366cc"  class="bodyText textPaddingForMobile butt"  style="display:block;padding-bottom:5px;mso-table-rspace:0;font-family: Arial, helvetica, sans-serif, serif;color:white;font-size:18px;font-weight:600;z-index:11111;line-height:24px;mso-line-height-rule:exactly;text-align:left;vertical-align:top; width:400px" >
                                                                                    <p>[article_cta_label]</p>
                                                                                </td>

                                                                            </tr>-->

                                                                        </table>

                                                            <!-- End: Inner content container table -->

                                                        </td>
                                                    </tr>


';


$html_snippets['mobile']['recurring']['article'] = str_replace('_desktop_' , '_mobile_', $html_snippets['desktop']['recurring']['article']);

#order is important here, article_cta should stay after article because article_cta is used while looping the articles

/*$html_snippets['desktop']['recurring']['article_cta'] = '<td bgcolor="#3366cc"  class="bodyText textPaddingForMobile butt" style="display:block;mso-table-rspace:0;font-family: Arial, helvetica, sans-serif, serif;color:white;font-size:16px;font-weight:400;z-index:11111;line-height:24px;mso-line-height-rule:exactly;text-align:left;vertical-align:top; width:200px; height:30px;">
                                                              <a style="display:inline-block;mso-table-rspace:0;font-family: Arial, helvetica, sans-serif, serif;color:white;font-size:16px;font-weight:400;z-index:11111;line-height:24px;mso-line-height-rule:exactly;text-align:left;vertical-align:top; width:200px; height: 30px;" href="[article_cta_label]"</a>
                                                              [article_cta_url]</td>';*/

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

?><!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--[if !mso]><!-- -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--<![endif]-->



    <title>BMW - %subject%</title>

    <style type="text/css">

        .list-group {
            padding-left: 15px;
            text-decoration: none;
            font-size: 12px;
            list-style: none;
        }

        .list-group li a {
            text-decoration: none;
            font-size: 12px;
            line-height: 30px;
            color: #666666;
            font-weight: 600;
        }

        .list-group {
            font-family: arial;
            font-size: 10px;
            font-weight: bold;
            color: #666666;
            line-height: 40px;
            margin-left: -10px !important;
            padding-top: 0px;
        }
        .list-group a {
            bottom: 8px;
            position: relative;
        }
    .white1 {
        display: block;
        max-height: 0px !important }

        span.icon {
            padding-left: 0px !important;
            padding-right: 3px !important;
        }

        .icon a {
            line-height: 24px;
        }

        td.list-group.title {
            padding-left: 18px !important;
            padding-top: 20px !important;
        }

        td.title.textPaddingForMobile a {
            color: #666666 !important;
            font-weight: 600;
            text-decoration: none;
            }

        td.butt {
        background-color: white;
        }
        td.butt a {
            width: 200px;
            display: block;
            height: 40px;
            color: white;
            background-color: #3366cc;
            text-align:center;
        }











        @media only screen and (max-width: 640px)  {

            body {
                width: 100%;
                margin: 0;
                padding: 0;
                background-color: #ffffff;
                mso-line-height-rule: exactly;
                /* fix for Lotus 8.5 -webkit-font-smoothing: antialiased; */
                -ms-text-size-adjust: none !important;
            }
            table { border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0; }
            table td { border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0; }

            img { border: 0; -ms-interpolation-mode: bicubic; }

            .deviceWidth { width: 300px !important; padding: 0; }
            .list-group .title td {
                position: relative !important;
            }

            .white1 tr {
                display: block;
                height: 15px !important; }


            .hideForMobile { display: none !important; }
            .removePaddingForMobile { padding: 0 !important; background-color:white !important;}
            .removeTopPaddingForMobile { padding-top: 0 !important; background-color:white !important; }
            .textPaddingForMobile { padding: 5px 20px 15px 20px !important; }
            .centerForMobile img { margin-left: auto; margin-right: auto; display: inline-block !important; float: none !important; }
            .alignLeftForMobile { text-align:left !important;}
            .widthAutoForMobile { width: auto !important; }


            .button_article a {
                width: 100% !important;
            }


            .button_cta a {
                width: 100% !important;
                background-color: #eee !important;
            }

            .white {
                background-color: white;
            }


            .BottomBorderMobile {
                border-bottom-width: 1px;
                border-bottom-style: solid;
                border-bottom-color:#ffffff;
            }

            .socicons img{
                margin-left: 10px;
                width: auto;
                height:22px;
            }
            img.ix {
                width: auto;
                height:20px;
            }

            .soc {
                width:30px;
                position: relative;
            }
            .soc a {
                margin-left:10px;
                }



        .title {
            font-family: Arial, sans-serif;
            font-size: 20px;
            color: #000000;
            font-weight: bold;
            line-height: 24px;
            mso-line-height-rule: exactly;
            text-align: left;
            vertical-align: top;
        }

        .title a { color: #666666; text-decoration: none; top: 15px; position: relative;}


        .bodyText { color: #222222; }
        .bodyText a { color: #000000; text-decoration: underline; }

        .bodyText, .bodyText a {
            font-size: 14px;
            line-height: 18px;
            mso-line-height-rule: exactly;
            vertical-align: top;
        }


        .footerText a { color: #231f21; text-decoration: none; }


        .socialIcons a {
            text-decoration: none;
        }



        .button_article a, .button_cta a {
            display: block;
            border: 0;
            padding: 10px;
            font-family: Arial, sans-serif;
            font-size: 13px;
            color: #cccbcb;
            font-weight: bold;
            line-height: 16px;
            text-decoration: none;
            text-align: center;
            background: #999999;
            text-transform: uppercase;
        }


        td .soc a {
        width:30px;
        text-align: left;
        }

        .line {
            background-color: white;
            width: 520px;
            height: 1px;
            margin: 0 auto;
            position: relative;
            top: 75px;
        }

        .list-group {
            font-family: arial;
            font-size: 10px;
            font-weight: bold;
            color: #666666;
            line-height: 40px;
            margin-left: -10px !important;
            padding-top: 0px;
        }
        .list-group a {
            top: 0.5px;
            left:10px;
            text-align: right;
        }




            ul {
            margin: 0px;

        }
        .icon {
            color: #0000ff;
            padding-right: 5px;
            width: 20px;
            height: 20px;
            margin-top: 6px;
            position: relative;
        }
        li.list-group-item {
            list-style-type:none;
        }
        ul img {
        }


        li {
            color: #666666;
            padding-left: 10px;
        }
         .borderless a {
             color: #666666;
             text-decoration: none;
             font-size: 12px;
             line-height: 24px;
             bottom: 9px;
             position: relative;
        }
         td.butt {
             background-color:#3366cc;
             display: block;
             width: 200px !important;
             height: 30px !important;
             text-align: center;
             vertical-align: middle;
             font-family: arial, helvectica, "sans-serif";
             margin-left: 20px;
             position: relative;
             border-bottom: solid 10px white;;

         }


         .butt p {
             margin-left: 0px;
             text-align: center;
             margin-top: 2px;
        }
        .butt {
            border-bottom: 10px solid white;
        }
        }

        .und {
            text-decoration: underline;
        }

        .white {
            background-color: white;
        }



            .nav a { color: #272727; text-decoration: none; }


        @media only screen and (min-width: 641px) {

            .socicons img {
                width: auto;
                height: 22px;
            }

            .soc a {
                margin-left:15px;
            }
            .soc {
                padding-left: 10px;
            }
            .soc td {
                width: 300px;
            }
            td.list-group.title {
                padding-left: 15px !important;
            }

        }
        /*@media only screen and (max-width: 640px) {
            td.list-group.title {
                padding-left: 18px !important;
                padding-top: 20px !important;
            }

             ul.list-group {
                 padding-left: 0px;
             }

            td .mobButton a {
                position: relative;
                top: 7px !important;
            }
        }*/

        @media only screen and (max-width: 479px) {

            body {
                align: center;

                width: 100%;
                margin: 0 auto;
                padding: 0;
                background-color: #ffffff;
                font-family: Cambria, Georgia, serif;
                mso-line-height-rule: exactly;
                -webkit-font-smoothing: antialiased;
                -ms-text-size-adjust: none !important;
            }



            .list-group {
                font-family: arial;
                font-size: 10px;
                font-weight: bold;
                color: #666666;
                line-height: 25px;
                padding-top: 5px !important;

            }
            .list-group li {
                padding-top: 10px;
            }
            td.list-group, ul.list-group {
                padding-left: 0px;
            }
            img.list-group {
                margin-left: 0px !important;
                padding: 0px !important;
            }

            td.whiteText {
                width: 40%;
            }

            td.whiteText2 {
                width: 60%;
            }

            td.bodyText.textPaddingForMobile.subtitle {
        padding-bottom:5px;padding-top:20px;font-weight:600;padding-left:21px;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;font-family: Arial, helvetica, sans-serif, serif;color:#626262;font-size:18px;z-index:11111;line-height:24px;mso-line-height-rule:exactly;text-align:left;vertical-align:top;"

            }
            td.title.textPaddingForMobile.sub {
                position:relative !important; top: 10px !important; bottom: 5px !important;margin-bottom:0px;padding-top:15px;padding-bottom:0px !important;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;font-family: Arial, helvetica, sans-serif, serif;color:#626262;font-size:14px;z-index:11111;line-height:24px;mso-line-height-rule:exactly;text-align:left;vertical-align:top;
            }
            td.textPaddingForMobile.butt {
                width: 200px;
                height: 30px !important;
                text-align: center;
                margin: 0 auto;
                padding-bottom: 10px;



            }
            a.mobButton {
                width: 200px !important;
                height: 30px !important;
                padding: 0 !important;
                margin: 0 !important;
            }

            .socicons img {
                height: 22px;
            }

            .soc a {
                margin-left: 5px;
            }

            .soc {
                padding-left: 1px;
            }

            td.tdd {
                top: 10px !important;
                display: block;
                position: relative;
                /*border-top: 1px solid white;*/
                padding-left:15px !important;;

            }

            .title a { color: #666666; text-decoration: none; top: 0px; position: relative;}
            .mobButton td a {
                display:block !important;text-align:center;color:white;display:block;height:25px !important;width:200px !important;text-decoration:none;font-weight:600;font-size:16px;padding-top:7px;margin-bottom:10px !important;
            }



            td .soc a {
                padding-left: 11px;
            }

                .deviceWidth { width: 300px !important; padding: 0; min-width: 100%; }

                .hideForMobile { display: none !important; }

                .navPaddingForMobile { padding: 10px !important; }
                .titlePaddingForMobile { padding: 15px 10px 0 10px !important; }
                .textPaddingForMobile { padding: 15px 15px 15px 15px !important; }
            .removePaddingForMobileImage { margin-left: 0 !important; }
            a.title {
                margin: -15px 15px -25px 0px !important;
            }

                .centerForMobile {
                    text-align: center;
                }
        }

    </style>

    <!--[if gte mso 9]><xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml><![endif]-->

</head>


<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="margin:0;padding:0px;background-color:#f1f1f1;font-family: Cambria, Georgia, serif;mso-line-height-rule:exactly;-webkit-font-smoothing:antialiased;-ms-text-size-adjust:none !important;" >

<!-- Start: Wrapper -->
<table border="0" cellpadding="0" cellspacing="0" align="center" style="text-align:center;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >
    <tr>
        <td width="100%" valign="top" bgcolor="#f1f1f1" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >


            <!-- Start: Main content container -->
            <table border="0" cellspacing="0" cellpadding="0" align="center"  class="deviceWidth" style="width:580px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >


                <tr>
                    <td align="center" bgcolor="#ffffff" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >

                        <!-- Start: Header image -->
                        <table border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff"  class="deviceWidth" style="width:580px;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >
                            <tr>
                                <td valign="top" bgcolor="#ffffff"  style="margin-left:-5px;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;border-bottom-width:0px;border-bottom-color:<?php echo $highlight_color ?>;border-bottom-style:solid;" >
                                    <img src="<?php echo $headers_image_url . "/" . $header_image ?>" width="580" alt="" border="0"  class="deviceWidth removePaddingForMobileImage" style="margin-left:0;margin-right:0;display:inline-block;position:relative;border-width:0;-ms-interpolation-mode:bicubic;" />
                                </td>
                            </tr>
                        </table>
                        <!-- End: Header image -->


                        <!-- Start: Message body + top right CTA' -->
                        <table border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff"  class="deviceWidth" style="width:580px;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >
                            <tr>
                                <td align="center" valign="top"  class="removeTopPaddingForMobile" style="padding-top:5px;padding-bottom:5px;padding-right:0;padding-left:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >

                                    <!-- Start: Inner content container table -->
                                    <table border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" class="deviceWidth" style="width:580px;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >
                                        <tr>

                                            <td valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >

                                                <!-- Start: Left hand column (text) -->

                                                <!-- Start: Left hand column (text) -->

                                                <table border="0" cellspacing="0" cellpadding="0" align="left"  class="deviceWidth" style="width:330px;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >

                                                    <tr>
                                                        <td align="left" valign="top" bgcolor="#ffffff"  class="bodyText textPaddingForMobile" style="padding-bottom:5px;padding-top:5px;padding-left:25px;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;font-family: Arial, helvetica, sans-serif, serif;color:#626262;font-size:14px;z-index:11111;line-height:24px;mso-line-height-rule:exactly;text-align:left;vertical-align:top;" >
                                                            <!--<div style="font-family: Cambria, Georgia, serif;color:#9f9f9f;text-align: center;font-size:24px;align:center;font-weight:bold;line-height:3em;mso-line-height-rule:exactly;text-transform:">%subject%</div>-->
                                                            <?php
                                                            if ($dev) {
                                                                ?>
                                                                <!--<p class="grayText">Beste [name],</p>-->




                                                                <p>
                                                                    Geachte heer Van Test, </p>

                                                                <p>
                                                                    Met veel plezier hebben wij u
                                                                    een nieuwe BMW mogen offreren.
                                                                    Bij ons draait het niet alleen om de
                                                                    auto, maar gaat het om tijd en
                                                                    aandacht voor u. Daar stelt u toch ook prijs op?
                                                                    U wilt geen mooie praatjes, maar
                                                                    duidelijkheid en eerlijkheid over zaken.
                                                                    Hierbij kunt u met ons op een
                                                                    ongedwongen en persoonlijke manier
                                                                    zakendoen.</p>
                                                                <p>
                                                                   En onderstaande voordelen krijgt u
                                                                    van het huis, daar kunt u op rekenen:<br/>
                                                                     <ul">
                                                                    <li>
                                                                    U krijgt gratis haal- en brengservice</li>
                                                                   <li>Uw BMW wordt na onderhoud
                                                                    gewassen.</li>
                                                                    <li>U ontvangt onze loyalitetskaart
                                                                    met vele privileges en voordelen</li>
                                                                    <li>Schade? Wij repareren zelf en snel</li>
                                                                    <li>Financieren, leasing en verzekering
                                                                    onder één dak </li>
                                                                    <li>Webshop voor <span class="und">alle BMW artikelen</span></li>
                                                                    <li>10% Korting op <span class="und">BMW lifestyle artikelen</span></li>
                                                                    </ul>
                                                                    </p>
                                                                <p>
                                                                    Zo doen wij dat: Ekris inclusief Extra's.</p>
                                                                <p>
                                                                    Met vriendelijke groet,<br/>
                                                                    Ekris Arnhem
                                                                </p>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                <p>%header%</p>
                                                                <p>%text%</p>
                                                                <p>%footer%</p>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- End: Top  (text) -->

                                                <!--[if gte mso 9]></td><td valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" ><![endif]-->

                                                <!-- Start: Bottom block (articles and CTAs) -->
                                                <table border="0" cellspacing="0" cellpadding="0" align="left" class="deviceWidth" style="width:220px;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >

                                                    <tr>
                                                        <td align="left" valign="top" bgcolor="#ffffff"  class="bodyText textPaddingForMobile removePaddingForMobile" style="padding-bottom:5px;padding-top:20px;font-weight:600;padding-left:21px;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;font-family: Arial, helvetica, sans-serif, serif;color:#626262;font-size:18px;z-index:11111;line-height:24px;mso-line-height-rule:exactly;text-align:left;vertical-align:top;" >
                                                            HANDIG VOOR U
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    <td align="left" valign="top" class="removePaddingForMobile" style="padding-top:5px;padding-bottom:5px;padding-right:0;padding-left:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >
                                                            <tr>
                                                                <td align="left" valign="top" bgcolor="#ffffff"  class="bodyText textPaddingForMobile" style="padding-bottom:5px;padding-top:20px;padding-left:15px;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;font-family: Arial, helvetica, sans-serif, serif;color:#626262;font-size:14px;z-index:11111;line-height:35px;mso-line-height-rule:exactly;text-align:left;vertical-align:top;" >
                                                                    <ul class="list-group bodyText" align="left"  style="list-style-type:none;">

                                                                        <?php
                                                                        if (isset($test_ctas))
                                                                        {
                                                                            foreach ($test_ctas AS $ctak => $ctav)
                                                                            {
                                                                                $cta = $html_snippets['desktop']['recurring']['cta'];
                                                                                $cta = str_replace('[cta_url]',$ctav['url'],$cta);
                                                                                $cta = str_replace('[cta_desc]',$ctav['desc'],$cta);
                                                                                $cta = str_replace('[cta_title]',$ctav['title'],$cta);
                                                                                $cta = str_replace('[cta_icon]',$ctav['icon'],$cta);
                                                                                echo $cta;
                                                                            }
                                                                        }
                                                                        else
                                                                        {
                                                                            ?>
                                                                            %snippet_desktop_recurring_cta%
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </ul>
                                                                </td>
                                                            </tr>

                                                         </td>
                                                    </tr>
                                                </table>
                                                <!-- End: Bottom block (articles and CTAs) -->



                                            </td>
                                        </tr>
                                    </table>
                                    <!-- End: Right top column (CTA's) -->

                                </td>
                            </tr>
                        </table>
                        <!-- End: Message body top right CTA -->



                        <!-- Start: List of articles -->
                        <table border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="white"  class="deviceWidth" style="width:100%;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >
                            <?php
                            if (isset($test_articles))
                            {
                                foreach ($test_articles AS $articlek => $articlev)
                                {
                                    $article = $html_snippets['desktop']['recurring']['article'];
                                    $article = str_replace('[article_url]',$articlev['url'],$article);
                                    $article = str_replace('[article_title]',$articlev['title'],$article);
                                    $article = str_replace('[article_text]',$articlev['text'],$article);
                                    $article = str_replace('[article_cta_label]',$articlev['cta_label'],$article);
                                    $article = str_replace('[article_img]',$articlev['image'],$article);
                                    echo $article;
                                }
                            }
                            else
                            {
                                ?>
                                %snippet_desktop_recurring_article%
                            <?php
                            }
                            ?>
                        </table>

                        <!-- End: Main content container-->


                        <!-- Start: Footer Wrapper-->
                        <table>
                            <tr>
                                <td>
                                <!-- Start: Social Icons row -->
                                <table border="0" cellpadding="0" cellspacing="0" align="center" class="deviceWidth" style="width:580px;background-color:#8e8e8e;height:75px;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >
                                    <tr style="margin-top:20px; margin-bottom:20px;">

                                        <td  class="textPaddingForMobile alignLeftForMobile soc" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;width:25px;margin-left:15px;padding-left:10px;">
                                            <?php
                                            if ($dev)
                                            {
                                                echo $html_snippets['desktop']['single']['facebook']. "";
                                                echo $html_snippets['desktop']['single']['twitter']. "";
                                                echo $html_snippets['desktop']['single']['youtube']. "";
                                                echo $html_snippets['desktop']['single']['instagram']. "";
                                                echo $html_snippets['desktop']['single']['googleplus']. "";
                                                echo $html_snippets['desktop']['single']['snapchat'];
                                            }
                                            else
                                            {
                                                ?>
                                                %snippet_desktop_single_facebook%
                                                %snippet_desktop_single_twitter%
                                                %snippet_desktop_single_youtube%
                                                %snippet_desktop_single_instagram%
                                                %snippet_desktop_single_googleplus%
                                                %snippet_desktop_single_snapchat%

                                            <?php
                                            }
                                            ?>

                                        </td>

                                    </tr>
                                </table>

                                </td>

                            </tr>
                        </table>

                                <!--End: Social icons row-->



                                <!-- Start: Separator table -->
                                <table border="0" cellspacing="0" cellpadding="0" align="left" class="hideForMobile" width="530" style="width:530px;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >
                                    <tr>
                                        <td class="line" align="center" width="500" height="1" bgcolor="white" style="padding-right: 2px;padding-left: 25px;padding-bottom: 1px;border-collapse: collapse;mso-table-lspace: 0;mso-table-rspace: 0;color: white;position: relative;display: block;text-align: center;width: 530px;margin: 0 auto;">
                                        </td>
                                    </tr>
                                </table>
                                <!-- End: Separator table -->


                                <!-- Start: Footer content-->
                                <table border="0" cellpadding="0" cellspacing="0" align="center" class="deviceWidth" style="width:580px;top:1px;position:relative;background-color:#8e8e8e;height:auto;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >
                                    <tr>
                                        <td align="center" valign="top" bgcolor="#8e8e8e" style="padding-right:0;padding-left:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >

                                            <table border="0" cellpadding="0" cellspacing="0" align="center" class="deviceWidth" style="width:580px;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >
                                                <tr>
                                                    <td valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;">

                                                        <!-- Start: Left Column -->
                                                        <table cellpadding="0" cellspacing="0" border="0" align="left" class="BottomBorderMobile deviceWidth" width="250" style="width:250px;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >
                                                            <tr>
                                                                <td align="left" valign="top" class="tdd" style="padding-right:25px;padding-left:25px;padding-bottom:25px;line-height:20px;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;font-size: 14px;color:white;font-family: arial, helvectica, sans-serif;position:relative;top:10px;" >

                                                                    %dealer_name%<br />
                                                                    %dealer_street%<br />
                                                                    %dealer_zipcode% %dealer_city%<br />
                                                                    T: %dealer_phone%<br />
                                                                    W: <a href="%dealer_url%" style="color:#ffffff;text-decoration:none;">%dealer_url_clean%</a><br />
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <!-- End: Left Column -->

                                                        <!-- Start: Separator table -->
                                                        <table border="0" cellspacing="0" cellpadding="0" align="center" >
                                                            <tr class="hideForMobile" align="center" >
                                                                <td class="hideForMobile" align="center" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding-left:25px;height:1px;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;"">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <!-- End: Separator table -->

                                                        <!-- Start: Right Column -->
                                                        <table cellpadding="0" cellspacing="0" border="0" align="right" class="deviceWidth BottomBorderMobile" width="250" style="width:250px;border-spacing:0;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;" >
                                                            <tr>
                                                                <td align="left" valign="top" class="tdd" style="padding-right:25px;padding-left:25px;padding-bottom:25px;line-height:20px;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;font-size: 14px;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:white;font-family: arial, helvectica, sans-serif;position:relative;top:10px;" >
                                                                    Mijn Ekris<br />
                                                                    <a href="<?php echo $customer_portal_url_preferences ?>" style="color:#ffffff;text-decoration:none;" >> Gegevens wijzigen</a><br />
                                                                    <a href="<?php echo $customer_portal_url_preferences ?>" style="color:#ffffff;text-decoration:none;" >> Voorkeuren wijzigen</a><br />
                                                                    <a href="<?php echo $customer_portal_url_preferences ?>" style="color:#ffffff;text-decoration:none;" >> Afspraak maken</a><br />
                                                                    <a href="<?php echo $customer_portal_url_preferences ?>" style="color:#ffffff;text-decoration:none;" >> Direct contact</a><br />
                                                                </td>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <!-- End: Right Column -->


                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- End: Inner content container table -->

                                        </td>
                                        <!-- End: Footer content-->


                                        </td>
                                    </tr>
                                </table>
                                <!-- End: Footer Wrapper -->

                                <div style="display:none;white-space:nowrap;font-style:normal;font-variant:normal;font-weight:normal;font-size:15px;font-family:courier;line-height:0;" >
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                </div>

</body>

</html>

<?php
}