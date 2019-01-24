<?php

$faqs = [
  'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?' => "The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.

Since this ruling was published on 13 May 2014, we've been working round the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with public's right to know and distribute information.

If you have a removal request, please fill out this webform. You'll receive an automatic reply confirming that we have received your request. We will then assess your case—please note this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results—for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organization, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.

We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe it's important to respect the Court's judgment and are working hard to devise a process that complies with the law.

When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal.",

  'Domanda2' => "Risposta 2",
];

 ?>


<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Google FAQ</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  </head>
  <body>

    <div class="container-header">
      <div class="only-logo">
        <div class="logo">
          <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_74x24dp.png" alt="">
        </div>
        <div class="text-logo">
          <h2>Privacy & Terms</h2>
        </div>
      </div>
    </div>

    <div class="container-menu">
      <div class="menu">
        <div class="menu-left">
          <ul>
            <li>Overview</li>
            <li>Privacy Policy</li>
            <li>Terms of Service</li>
            <li>Technologies</li>
            <li class="blue">FAQ</li>
          </ul>
        </div>
        <div class="menu-right">
          <p>Google Account</p>
        </div>
      </div>
    </div>

    <div class="container-faq">
      <div class="faq">
        <?php foreach ($faqs as $domanda => $faq) { ?>
          <h1><?php echo $domanda; ?></h1>
        <p><?php echo $faq ?></p><br>
        <?php } ?>
      </div>

    </div>


  </body>
</html>
