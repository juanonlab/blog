<?php

namespace Drupal\webform\Plugin\Mail;

use Drupal\Core\Mail\Plugin\Mail\PhpMail;
use Drupal\Core\Mail\MailFormatHelper;

/**
 * Extend's the default Drupal mail backend to support HTML email.
 *
 * @Mail(
 *   id = "webform_php_mail",
 *   label = @Translation("Webform PHP mailer"),
 *   description = @Translation("Sends the message as plain text or HTML, using PHP's native mail() function.")
 * )
 */
class WebformPhpMail extends PhpMail {

  /**
   * {@inheritdoc}
   */
  public function format(array $message) {
    // Join the body array into one string.
    $message['body'] = implode("\n\n", $message['body']);

    if (!empty($message['params']['html'])) {
      // Wrap body in HTML template if the <html> tag is missing.
      if (strpos($message['body'], '<html') === FALSE) {
        $build = [
          '#theme' => 'webform_email_html',
          '#body' => $message['body'],
          '#subject' => $message['subject'],
        ];
        $message['body'] = \Drupal::service('renderer')->renderPlain($build);
      }
      return $message;
    }
    else {
      // Wrap the mail body for sending.
      $message['body'] = MailFormatHelper::wrapMail($message['body']);
      return $message;
    }
  }

}
