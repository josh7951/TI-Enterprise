<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Message</title>
    <style type="text/css">
      /* CLIENT-SPECIFIC STYLES */
    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
    img { -ms-interpolation-mode: bicubic; }
    
    /* RESET STYLES */
    img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
    table { border-collapse: collapse !important; }
    body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
    
    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }
			
    /* GMAIL BLUE LINKS */
    u + #body a {
        color: inherit;
        text-decoration: none;
        font-size: inherit;
        font-family: inherit;
        font-weight: inherit;
        line-height: inherit;
    }
			
    /* SAMSUNG MAIL BLUE LINKS */
    #MessageViewBody a {
        color: inherit;
        text-decoration: none;
        font-size: inherit;
        font-family: inherit;
        font-weight: inherit;
        line-height: inherit;
    }
    </style>
</head>
<body id="body" style="margin: 0 !important; padding: 0 !important;">
    <table style="max-width:600px;margin-left:auto;margin-right:auto;">
      <tr>
        <!-- Logo image -->
        <td><a href="localhost/login" style="cursor:pointer;"><img title="Logo" style="height:auto;width:100%;border-radius:4px;margin-top:32px;margin-bottom:32px;box-shadow:-6px 12px 10px #888888" src="http://ti-enterprise.com/images/carousel/true-img.png" alt="True Image Logo"></a></td>
      </tr>   
      <!-- Body copy -->
      <tr>
        <td style="font-size:16px;font-weight:bold;">Hello Admin!</td>
      </tr>
      <tr>
        <td>You recieved a messsage via the contact us form on your website:</td>
      </tr>
      <tr>
        <td><p>From: {{ $name }}</p></td>
      </tr>
      <tr>
        <td><p>Email: {{ $email }}</p></td>
      </tr>
      <tr>
        <td><p>Message:<br>{{ $user_query }}</p></td>
      </tr>
    </table>
</body>
</html>