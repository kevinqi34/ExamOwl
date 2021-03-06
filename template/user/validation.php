<?php
// Include Database
require_once ($_SERVER['DOCUMENT_ROOT'] . '/template/database/database.php');

// From Validation Class
class validation {
  // Private User Data
  private $data;
  // For errors
  private $error;

  public function __construct($data) {
    $this->data = $data;
  }

  // Check Empty
  public function check_empty() {
    if (empty($this->data)) {
      return "An input is required.";
    } else {
      return false;
    }
  }

  // Check Length
  public function check_len($min, $max) {
    if (strlen($this->data) < $min || strlen($this->data) > $max) {
      return "The input must be between " . $min . " and " . $max . " characters.";
    } else {
      return false;
    }

  }

  // Check Characters
  public function check_char() {
    if (preg_match('/[{}*]/',$this->data)) {
      return "No special characters are allowed.";
    } else {
      return false;
    }

  }


  // Check Email
  public function check_mail() {
    if (!filter_var($this->data, FILTER_VALIDATE_EMAIL)) {
          return "Invalid email format.";
    } else {
      return false;
    }
  }


  // Spam Email
  public function is_temp_mail() {
    $mail_domains_ko = array('fulvie.com', '0815.ru0clickemail.com', '0wnd.net', '0wnd.org', '10minutemail.com', '20minutemail.com', '2prong.com', '3d-painting.com', '4warding.com', '4warding.net', '4warding.org', '9ox.net', 'a-bc.net', 'amilegit.com', 'anonbox.net', 'anonymbox.com', 'antichef.com', 'antichef.net', 'antispam.de', 'baxomale.ht.cx', 'beefmilk.com', 'binkmail.com', 'bio-muesli.net', 'bobmail.info', 'bodhi.lawlita.com', 'bofthew.com', 'brefmail.com', 'bsnow.net', 'bugmenot.com', 'bumpymail.com', 'casualdx.com', 'chogmail.com', 'cool.fr.nf', 'correo.blogos.net', 'cosmorph.com', 'courriel.fr.nf', 'courrieltemporaire.com', 'curryworld.de', 'cust.in', 'dacoolest.com', 'dandikmail.com', 'deadaddress.com', 'despam.it', 'devnullmail.com', 'dfgh.net', 'digitalsanctuary.com', 'discardmail.com', 'discardmail.de', 'disposableaddress.com', 'disposemail.com', 'dispostable.com', 'dm.w3internet.co.uk', 'example.com', 'dodgeit.com', 'dodgit.com', 'dodgit.org', 'dontreg.com', 'dontsendmespam.de', 'dump-email.info', 'dumpyemail.com', 'e4ward.com', 'email60.com', 'emailias.com', 'emailinfive.com', 'emailmiser.com', 'emailtemporario.com.br', 'emailwarden.com', 'ephemail.net', 'explodemail.com', 'fakeinbox.com', 'fakeinformation.com', 'fastacura.com', 'filzmail.com', 'fizmail.com', 'frapmail.com', 'garliclife.com', 'get1mail.com', 'getonemail.com', 'getonemail.net', 'girlsundertheinfluence.com', 'gishpuppy.com', 'great-host.in', 'gsrv.co.uk', 'guerillamail.biz', 'guerillamail.com', 'guerillamail.net', 'guerillamail.org', 'guerrillamail.com', 'guerrillamailblock.com', 'haltospam.com', 'hotpop.com', 'ieatspam.eu', 'ieatspam.info', 'ihateyoualot.info', 'imails.info', 'inboxclean.com', 'inboxclean.org', 'incognitomail.com', 'incognitomail.net', 'ipoo.org', 'irish2me.com', 'jetable.com', 'jetable.fr.nf', 'jetable.net', 'jetable.org', 'junk1e.com', 'kaspop.com', 'kulturbetrieb.info', 'kurzepost.de', 'lifebyfood.com', 'link2mail.net', 'litedrop.com', 'lookugly.com', 'lopl.co.cc', 'lr78.com', 'maboard.com', 'mail.by', 'mail.mezimages.net', 'mail4trash.com', 'mailbidon.com', 'mailcatch.com', 'maileater.com', 'mailexpire.com', 'mailin8r.com', 'mailinator.com', 'mailinator.net', 'mailinator2.com', 'mailincubator.com', 'mailme.lv', 'mailnator.com', 'mailnull.com', 'mailzilla.org', 'mbx.cc', 'mega.zik.dj', 'meltmail.com', 'mierdamail.com', 'mintemail.com', 'moncourrier.fr.nf', 'monemail.fr.nf', 'monmail.fr.nf', 'mt2009.com', 'mx0.wwwnew.eu', 'mycleaninbox.net', 'mytrashmail.com', 'neverbox.com', 'nobulk.com', 'noclickemail.com', 'nogmailspam.info', 'nomail.xl.cx', 'nomail2me.com', 'no-spam.ws', 'nospam.ze.tc', 'nospam4.us', 'nospamfor.us', 'nowmymail.com', 'objectmail.com', 'obobbo.com', 'onewaymail.com', 'ordinaryamerican.net', 'owlpic.com', 'pookmail.com', 'proxymail.eu', 'punkass.com', 'putthisinyourspamdatabase.com', 'quickinbox.com', 'rcpt.at', 'recode.me', 'recursor.net', 'regbypass.comsafe-mail.net', 'safetymail.info', 'sandelf.de', 'saynotospams.com', 'selfdestructingmail.com', 'sendspamhere.com', 'shiftmail.com', '****mail.me', 'skeefmail.com', 'slopsbox.com', 'smellfear.com', 'snakemail.com', 'sneakemail.com', 'sofort-mail.de', 'sogetthis.com', 'soodonims.com', 'spam.la', 'spamavert.com', 'spambob.net', 'spambob.org', 'spambog.com', 'spambog.de', 'spambog.ru', 'spambox.info', 'spambox.us', 'spamcannon.com', 'spamcannon.net', 'spamcero.com', 'spamcorptastic.com', 'spamcowboy.com', 'spamcowboy.net', 'spamcowboy.org', 'spamday.com', 'spamex.com', 'spamfree24.com', 'spamfree24.de', 'spamfree24.eu', 'spamfree24.info', 'spamfree24.net', 'spamfree24.org', 'spamgourmet.com', 'spamgourmet.net', 'spamgourmet.org', 'spamherelots.com', 'spamhereplease.com', 'spamhole.com', 'spamify.com', 'spaminator.de', 'spamkill.info', 'spaml.com', 'spaml.de', 'spammotel.com', 'spamobox.com', 'spamspot.com', 'spamthis.co.uk', 'spamthisplease.com', 'speed.1s.fr', 'suremail.info', 'tempalias.com', 'tempemail.biz', 'tempemail.com', 'tempe-mail.com', 'tempemail.net', 'tempinbox.co.uk', 'tempinbox.com', 'tempomail.fr', 'temporaryemail.net', 'temporaryinbox.com', 'thankyou2010.com', 'thisisnotmyrealemail.com', 'throwawayemailaddress.com', 'tilien.com', 'tmailinator.com', 'tradermail.info', 'trash2009.com', 'trash-amil.com', 'trashmail.at', 'trash-mail.at', 'trashmail.com', 'trash-mail.com', 'trash-mail.de', 'trashmail.me', 'trashmail.net', 'trashymail.com', 'trashymail.net', 'tyldd.com', 'uggsrock.com', 'wegwerfmail.de', 'wegwerfmail.net', 'wegwerfmail.org', 'wh4f.org', 'whyspam.me', 'willselfdestruct.com', 'winemaven.info', 'wronghead.com', 'wuzupmail.net', 'xoxy.net', 'yogamaven.com', 'yopmail.com', 'yopmail.fr', 'yopmail.net', 'yuurok.com', 'zippymail.info', 'jnxjn.com', 'trashmailer.com', 'klzlk.com', 'nospamforus','kurzepost.de', 'objectmail.com', 'proxymail.eu', 'rcpt.at', 'trash-mail.at', 'trashmail.at', 'trashmail.me', 'trashmail.net', 'wegwerfmail.de', 'wegwerfmail.net', 'wegwerfmail.org', 'jetable', 'link2mail', 'meltmail', 'anonymbox', 'courrieltemporaire', 'sofimail', '0-mail.com', 'moburl.com', 'get2mail', 'yopmail', '10minutemail', 'mailinator', 'dispostable', 'spambog', 'mail-temporaire','filzmail','sharklasers.com', 'guerrillamailblock.com', 'guerrillamail.com', 'guerrillamail.net', 'guerrillamail.biz', 'guerrillamail.org', 'guerrillamail.de','mailmetrash.com', 'thankyou2010.com', 'trash2009.com', 'mt2009.com', 'trashymail.com', 'mytrashmail.com','mailcatch.com','trillianpro.com','junk.','joliekemulder','lifebeginsatconception','beerolympics','smaakt.naar.gravel','q00.','dispostable','spamavert','mintemail','tempemail','spamfree24','spammotel','spam','mailnull','e4ward','spamgourmet','mytempemail','incognitomail','spamobox','mailinator.com', 'trashymail.com', 'mailexpire.com', 'temporaryinbox.com', 'MailEater.com', 'spambox.us', 'spamhole.com', 'spamhole.com', 'jetable.org', 'guerrillamail.com', 'uggsrock.com', '10minutemail.com', 'dontreg.com', 'tempomail.fr', 'TempEMail.net', 'spamfree24.org', 'spamfree24.de', 'spamfree24.info', 'spamfree24.com', 'spamfree.eu', 'kasmail.com', 'spammotel.com', 'greensloth.com', 'spamspot.com', 'spam.la', 'mjukglass.nu', 'slushmail.com', 'trash2009.com', 'mytrashmail.com', 'mailnull.com', 'jetable.org','10minutemail.com', '20minutemail.com', 'anonymbox.com', 'beefmilk.com', 'bsnow.net', 'bugmenot.com', 'deadaddress.com', 'despam.it', 'disposeamail.com', 'dodgeit.com', 'dodgit.com', 'dontreg.com', 'e4ward.com', 'emailias.com', 'emailwarden.com', 'enterto.com', 'gishpuppy.com', 'goemailgo.com', 'greensloth.com', 'guerrillamail.com', 'guerrillamailblock.com', 'hidzz.com', 'incognitomail.net ', 'jetable.org', 'kasmail.com', 'lifebyfood.com', 'lookugly.com', 'mailcatch.com', 'maileater.com', 'mailexpire.com', 'mailin8r.com', 'mailinator.com', 'mailinator.net', 'mailinator2.com', 'mailmoat.com', 'mailnull.com', 'meltmail.com', 'mintemail.com', 'mt2009.com', 'myspamless.com', 'mytempemail.com', 'mytrashmail.com', 'netmails.net', 'odaymail.com', 'pookmail.com', 'shieldedmail.com', 'smellfear.com', 'sneakemail.com', 'sogetthis.com', 'soodonims.com', 'spam.la', 'spamavert.com', 'spambox.us', 'spamcero.com', 'spamex.com', 'spamfree24.com', 'spamfree24.de', 'spamfree24.eu', 'spamfree24.info', 'spamfree24.net', 'spamfree24.org', 'spamgourmet.com', 'spamherelots.com', 'spamhole.com', 'spaml.com', 'spammotel.com', 'spamobox.com', 'spamspot.com', 'tempemail.net', 'tempinbox.com', 'tempomail.fr', 'temporaryinbox.com', 'tempymail.com', 'thisisnotmyrealemail.com', 'trash2009.com', 'trashmail.net', 'trashymail.com', 'tyldd.com', 'yopmail.com', 'zoemail.com','deadaddress','soodo','tempmail','uroid','spamevader','gishpuppy','privymail.de','trashmailer.com','fansworldwide.de','onewaymail.com', 'mobi.web.id', 'ag.us.to', 'gelitik.in', 'fixmail.tk', 'shitmail.org');
    foreach($mail_domains_ko as $ko_mail) {
            list(,$mail_domain) = explode('@',$this->data);
            if(strcasecmp($mail_domain, $ko_mail) == 0){
                    return "Invalid Spam Email.";
            }
    }
    return false;
  }

  // Profanity Filter for resources
  public function is_profanity() {
    $bad_domains = array('https://www.xvideos.com','https://www.xhamster.com','https://www.pornhub.com','https://www.xnxx.com','https://www.redtube.com','https://www.youporn.com','https://www.tube8.com','https://www.youjizz.com','https://www.hclips.com/?','https://beeg.com','https://www.drtuber.com','https://www.porn.com');
    foreach($bad_domains as $domain) {
      $domain_v1 = $domain;
      $segment = substr($domain, 12);
      $domain_v2 = 'http://www.' . $segment;
      $domain_v3 = 'https://' . $segment;
      $domain_v4 = 'http://' . $segment;

      if (strcasecmp($domain_v1, $this->data) == 0 || strcasecmp($domain_v2, $this->data) == 0 || strcasecmp($domain_v3, $this->data) == 0 || strcasecmp($domain_v4, $this->data) == 0) {
        return "Invalid URL.";
      }
    }
    return false;
  }


  // Check for proper URL format
  public function link_format() {
    $format = 'https://';
    $format2 = 'http://';
    // Check if link contains format
    if (strpos($this->data,$format) !== false || strpos($this->data,$format2) !== false) {
      return false;
    } else {
      return "The URL must be formated with " . $format . " or " . $format2;
    }
  }

  // Check if blacklisted
  public function is_blacklist() {
    $email = $this->data;
    $query = "SELECT * FROM USER_BLACKLIST WHERE EMAIL = '$email';";
    $db = new db();
    if ($db->select($query)) {
      return "Email has been blacklisted.";
    } else {
      return false;
    }
  }




  // General Validate
  public function gen_validate($min, $max) {
    $error = false;
    $error = $this->check_empty();
    if ($error != false) {
      return $error;
    } else {
    $error = $this->check_len($min, $max);
    if ($error != false) {
      return $error;
    } else {
    $error = $this->check_char();
    if ($error != false) {
      return $error;
    } else {
      return false;
    }
    }
    }
  }

  // Username Validate
  public function username_validate() {
    $error = false;
    $query = "SELECT NAME FROM USER WHERE NAME = '$this->data';";
    $db = new db();
    $data = $db->select($query);
    if ($data) {
      $error = "Username already exists. Please try another one.";
      return $error;
    } else {
      return false;
    }
  }


  // Email Validate Unique
  public function email_unique() {
    $error = false;
    $query = "SELECT NAME FROM USER WHERE EMAIL = '$this->data';";
    $db = new db();
    $data = $db->select($query);
    if ($data) {
      $error = "Email already exists. Please login.";
    }

    return $error;

  }


  // Email Validate
  public function email_validate() {
    $error = false;
    $error  = $this->check_empty();
    if ($error != false) {
      return $error;
    } else {
      $error = $this->check_mail();
      if ($error != false) {
        return $error;
      } else {
        $error = $this->is_temp_mail();
        if ($error != false) {
          return $error;
        } else {
          $error = $this->is_blacklist();
          if ($error != false) {
            return $error;
          } else {
            return false;
          }
        }
      }
     }

  }

  // Link Validate
  public function link_validate() {
    $error = false;
    // Check Length
    $error = $this->check_len(1, 200);
    if (!$error) {
      // Check for Format
      $error = $this->link_format();
      if (!$error) {
        $error = $this->check_char();
        // Check For Profanity Links
        if (!$error) {
          $error = $this->is_profanity();
        }
      }
    }
    // Return Error
    if ($error) {
      return $error;
    } else {
      return false;
    }
  }



  // Anti Spam Filter -- 2 mins
  public function anti_spam($type, $user_id) {
    // If session timer than check if time is past wait time
    if ($_SESSION["timer"]) {
      $future_date = $_SESSION["timer"];
      $current_date = $this->data;
      if ($this->time_dif($future_date, $current_date) >= 0) {
        return "You have been too active recently. Please wait 2 mins before posting again.";
      } else {
        // clear session variable
        unset($_SESSION["timer"]);
        return false;
      }
    } else {
    // Create Query
    $query = "SELECT CREATE_DATE FROM $type WHERE USER_ID = '$user_id' ORDER BY CREATE_DATE DESC LIMIT 3;";
    // Get Data
    $db = new db();
    $data = $db->select_multi($query);
    if ($data) {
      // Check for time differences
      $count = 0;
      // Iterate through array
      foreach($data as $date) {
        $date = $date['CREATE_DATE'];
        $dif = $this->time_dif($this->data, $date);
        // Cap at 30 secs
        if ($dif <= 30) {
          $count++;
        }
      }
      // If count is 3, then set session timer and return error msg
      if ($count == 3) {
        $_SESSION["timer"] = $this->add_time($this->data, 1800);
        return "You have been too active recently. Please wait before posting again.";
      } else {
        return false;
      }
    } else {
      echo "Database not found.";
      return false;
    }
    }

  }

  // Subtract times -- takes timestamp input, returns dif in seconds
  // -- First time must be later than second time
  public function time_dif($time1, $time2) {
    $time1 = strtotime($time1);
    $time2 = strtotime($time2);
    $dif = round(($time1 - $time2));
    return $dif;
  }

  // Add Time
  public function add_time($time, $added) {
    $time = strtotime($time);
    $new_time = $time+($added);
    $new_time = date("Y-m-d H:i:s", $new_time);
    return $new_time;
  }



}
?>
