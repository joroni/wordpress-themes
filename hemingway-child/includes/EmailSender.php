<?php
 //////////////////////////////

$AddressToEmailTo = "contact@cottonparkestate.com";


$linktoLTSC='<a href="http://cottonparkestate.com/wp-content/uploads/2014/03/A-Quick-Guide-To-LTSC.pdf" download>Please follow this link to download your guide to LTSC</a>';
$linktoCottonParkEBrochure='<a href="http://cottonparkestate.com/wp-content/uploads/2014/03/COTTON-PARK.pdf" download>Please follow the link to download your Cotton Park Info Mem</a>';
$clientName = $_GET['clientName'];
$clientEmail = $_GET['clientEmail'];
$clientNumber = $_GET['clientNumber'];
$clientMessage = $_GET['clientMessage'];
$now = new DateTime("now", new DateTimeZone("Australia/Queensland"));
$sentDateTime = $now->format("m-d-y H:i:s A");
// Check if Client Request was for Webinar or LTSC or Generic Request..
$clientRequest='generic';
$clientRequestWebinar =$_GET['clientRequestWebinar'];
$clientRequestLTSC =$_GET['clientRequestLTSC'];
$clientRequestType=0;

if ($clientRequestLTSC=='yes')
{
$clientRequest='ltsc';
 $clientRequestType=$clientRequestType+1;
}
if($clientRequestWebinar!='')
{
$clientRequest='webinar';
$clientRequestType=$clientRequestType+1;
}
if ($clientRequestType>1){$clientRequest='webinar-ltsc';}



// subject Line selection according to Client Request Type:
//GENERIC
if ($clientRequest=='generic'){
  $SubjectOfEmailClient='Thank you for your interest in Cotton Park Estate.';
}
//LTSC ONLY
if ($clientRequest=='ltsc'){
  $SubjectOfEmailClient='Here is Your Info Pack ON LTSC Contracts.';
}
//WEBINAR ONLY
if ($clientRequest=='webinar'){
  $SubjectOfEmailClient='Congratulations!! You have booked your exclsuive one-on-one LTSC Webinar.';
}
//WEBINAR & LTSC 
if ($clientRequest=='webinar-ltsc'){
  $SubjectOfEmailClient='Congratulations!! you have booked your LTSC Webinar.';
}
$clientRequest=strtoupper($clientRequest);
$SubjectOfEmail=$clientRequest;

// message
$omessage = '
<html>
<head>
  <title>COTTON PARK ESTATE WEBSITE ENQUIRY</title>
</head>
<body>
  <p>ENQUIRY DETAILS</p>
  <table style=width:800px;>
   <tr>
      <th style=text-align:left;width:150px; >REQUEST TYPE</th> <td style=margin-left:100px;>'. $clientRequest . '</td>
    </tr>
   <tr>
      <th style=text-align:left;width:150px; >SENT DATE TIME</th> <td style=margin-left:100px;>'. $sentDateTime  . '</td>
    </tr>
    <tr>
      <th style=text-align:left;width:150px; >CLIENT NAME</th> <td style=margin-left:100px;>'.$clientName . '</td>
    </tr>
    <tr>
      <th style=text-align:left;width:150px;>EMAIL</th> <td style=margin-left:100px;>'. $clientEmail .'</td>
    </tr>
    <tr>
      <th style=text-align:left;width:150px;>PHONE</th><td style=margin-left:100px;>'. $clientNumber .'</td>
    </tr>
    <tr>
      <th style=text-align:left;width:150px;>MESSAGE</th><td style=margin-left:100px;>&nbsp;</td>
    </tr>
  </table>
   <table style=margin-top:-140px;width:800px;>
      <tr>
         <th  style=text-align:left;width:150px;>&nbsp;</th><td style=margin-left:100px;>'. $clientMessage.'</td>
      </tr>
   </table>

</body>
</html>
';

$cmessagewebltsc = '
<html>
  <body>
      <div>
          <p>Congratulations you have requested an educational Webinar session with one of our Senior LTSC Specialists.</p>
          <p><strong>What Happens Next:</strong></p>
          <ol>
            <li>You will receive a call from our Client Services department. They will schedule a webinar time that suits you and pass your details onto a Senior LTSC Specialist.</li>
            <li>You will receive an email outlining your agreed appointment date and time with instructions on how to access the secure webinar portal.</li>
            <li>Ten minutes before your scheduled webinar time you will receive a link in your email inbox directing you to the webinar portal.</li>
            <li>One of our Senior LTSC Specialists will call and run you through the presentation.</li>
          </ol>
          <br/>
          <p><strong>What you will get from the Webinar:</strong></p>
          <ol>
            <li>You will learn about how professional property investors have used LTSC contracts for decades to maximise their returns and limit their downside risks</li>
            <li>You will learn how you can secure real estate without any exposure to:</li>
          </ol>
          <ul>
            <li>Bank Debt</li>
            <li>Interest expense</li>
            <li>Personal guarantees</li>
            <li>Insurance costs</li>
            <li>Rates and land taxes</li>
            <li>Tenancy issues</li>
          </ul>
          <p>All with as little as $7,000 to invest</p>
          <div>
        <p>In the meantime please take the time to download and read the short guide to LTSC Contracts.</p>
        <span>'. $linktoLTSC.'</span>
         <p>Once again congratulations on taking a positive step towards informing and educating yourself about the exciting possibilities of LTSC contracts.</p>
         <p>Feel free to call or email for further information.</p>
      </div>
      <div id=footer> <img src=http://cottonparkestate.com/wp-content/uploads/2014/03/footer.jpg /></div>
      </body>
</html>
';


$cmessageltsc = '
<html>
  <body>
      <div>
          <p>Congratulations on taking the time to download your guide to Long Term Settlement Contracts (LTSC).</p>
          <p>Below you will find the link to the most exciting opportunity available in the residential property market today.</p>
          <p><strong>You will learn about how you can secure property without any:</strong></p>
          <ul>
            <li>Bank Debt</li>
            <li>Interest expense</li>
            <li>Personal guarantees</li>
            <li>Insurance costs</li>
            <li>Rates and land taxes</li>
            <li>Tenancy issues</li>
          </ul>
          <p>All with as little as $7,000 to invest</p>
          <p>Use this information to inform and educate yourself on what an LTSC is,</p>
          <p>how you can benefit from the consistently strong historical growth trends </p>
          <p>property provides, and what to do next if it is something you would like to explore further.</p>
          <p>If you have any further questions do not hesitate to contact an LTSC Specialist on 1800 177 199.</p>
      </div>
      <div>
        <span>'. $linktoLTSC.'</span>
      </div>
      <div id=footer> <img src=http://cottonparkestate.com/wp-content/uploads/2014/03/footer.jpg /></div>
      </body>
</html>
';
$cmessagewebinar = '
<html>
  <body>
      <div>
          <p>Congratulations you have requested an educational Webinar session with one of our Senior LTSC Specialists.</p>
          <br/>
          <p><strong>What Happens Next:</strong></p>
          <ol>
            <li>You will receive a call from our Client Services department. They will schedule a webinar time that suits you and pass your details onto a Senior LTSC Specialist.</li>
            <li>You will receive an email outlining your agreed appointment date and time with instructions on how to access the secure webinar portal.</li>
            <li>Ten minutes before your scheduled webinar time you will receive a link in your email inbox directing you to the webinar portal.</li>
            <li>One of our Senior LTSC Specialists will call and run you through the presentation.</li>
          </ol>
          <br/>
          <p><strong>What you will get from the Webinar:</strong></p>
          <ol>
            <li>You will learn about how professional property investors have used LTSC contracts for decades to maximise their returns and limit their downside risks</li>
            <li>You will learn how you can secure real estate without any exposure to:</li>
          </ol>
          <ul>
            <li>Bank Debt</li>
            <li>Interest expense</li>
            <li>Personal guarantees</li>
            <li>Insurance costs</li>
            <li>Rates and land taxes</li>
            <li>Tenancy issues</li>
          </ul>
          <p>All with as little as $7,000 to invest</p>
          <p>Once again congratulations on taking a positive step towards informing and educating yourself about the exciting possibilities of LTSC contracts.</p>
      </div>
      <div id=footer> <img src=http://cottonparkestate.com/wp-content/uploads/2014/03/footer.jpg /></div>
      </body>
</html>
';

$cmessagegeneric = '
<html>
  <body>
      <div>
          <p>Thank you for your interest. One of our LTSC Specialists will contact you shortly to answer any questions you may have. </p>
          <br/>
          <p>In the meantime follow the link below to download an information memorandum on Cotton Park Estate. </p>
       </div>
       <div>
          <span>'. $linktoCottonParkEBrochure .'</span>
        </div>
      <div id=footer> <img src=http://cottonparkestate.com/wp-content/uploads/2014/03/footer.jpg /></div>
      </body>
</html>
';

if($clientRequest=='LTSC')
{
$cmessage=$cmessageltsc;
}
if($clientRequest=='WEBINAR')
{
$cmessage=$cmessagewebinar;
}
if($clientRequest=='WEBINAR-LTSC')
{
$cmessage=$cmessagewebltsc ;
}
if($clientRequest=='GENERIC')
{
$cmessage=$cmessagegeneric ;
}


//$cmessage .='VALUES SELECTED:' .$clientRequests;

// To send HTML mail, the Content-type header must be set
$oheaders  = 'MIME-Version: 1.0' . "\r\n";
$oheaders .= 'Content-type: text/html; charset=utf-8' . "\r\n";
//$oheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$cheaders  = 'MIME-Version: 1.0' . "\r\n";
//$cheadersc .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cheaders .= 'Content-type: text/html; charset=utf-8' . "\r\n";


// Additional headers  Office
$oheaders .= 'To:'. $AddressToEmailTo .  "\r\n";
$oheaders .= 'From:'. $AddressToEmailTo  . "\r\n";

// Additional headers Clients
$cheaders .= 'To:'. $clientEmail .  "\r\n";
$cheaders .= 'From:'. $AddressToEmailTo . "\r\n";

// Mail it
mail($AddressToEmailTo, $SubjectOfEmail, $omessage, $oheaders);
mail($clientEmail,$SubjectOfEmailClient, $cmessage, $cheaders);

sleep(5);

?>