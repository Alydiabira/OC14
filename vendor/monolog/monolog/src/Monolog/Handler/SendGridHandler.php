<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

use Monolog\Level;
<<<<<<< HEAD

/**
 * SendGridrHandler uses the SendGrid API v2 function to send Log emails, more information in https://sendgrid.com/docs/API_Reference/Web_API/mail.html
=======
use Monolog\Utils;

/**
 * SendGridHandler uses the SendGrid API v3 function to send Log emails, more information in https://www.twilio.com/docs/sendgrid/for-developers/sending-email/api-getting-started
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Ricardo Fontanelli <ricardo.fontanelli@hotmail.com>
 */
class SendGridHandler extends MailHandler
{
    /**
     * The SendGrid API User
<<<<<<< HEAD
     */
    protected string $apiUser;

    /**
     * The SendGrid API Key
     */
    protected string $apiKey;

    /**
     * The email addresses to which the message will be sent
     */
    protected string $from;

=======
     * @deprecated this is not used anymore as of SendGrid API v3
     */
    protected string $apiUser;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    /**
     * The email addresses to which the message will be sent
     * @var string[]
     */
    protected array $to;

    /**
<<<<<<< HEAD
     * The subject of the email
     */
    protected string $subject;

    /**
     * @param string          $apiUser The SendGrid API User
     * @param string          $apiKey  The SendGrid API Key
     * @param string          $from    The sender of the email
     * @param string|string[] $to      The recipients of the email
     * @param string          $subject The subject of the mail
     *
     * @throws MissingExtensionException If the curl extension is missing
     */
    public function __construct(string $apiUser, string $apiKey, string $from, string|array $to, string $subject, int|string|Level $level = Level::Error, bool $bubble = true)
    {
        if (!extension_loaded('curl')) {
            throw new MissingExtensionException('The curl extension is needed to use the SendGridHandler');
        }

        parent::__construct($level, $bubble);
        $this->apiUser = $apiUser;
        $this->apiKey = $apiKey;
        $this->from = $from;
        $this->to = (array) $to;
        $this->subject = $subject;
    }

    /**
     * @inheritDoc
     */
    protected function send(string $content, array $records): void
    {
        $message = [];
        $message['api_user'] = $this->apiUser;
        $message['api_key'] = $this->apiKey;
        $message['from'] = $this->from;
        foreach ($this->to as $recipient) {
            $message['to[]'] = $recipient;
        }
        $message['subject'] = $this->subject;
        $message['date'] = date('r');

        if ($this->isHtmlBody($content)) {
            $message['html'] = $content;
        } else {
            $message['text'] = $content;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.sendgrid.com/api/mail.send.json');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($message));
=======
     * @param string|null $apiUser Unused user as of SendGrid API v3, you can pass null or any string
     * @param list<string>|string $to
     * @param non-empty-string $apiHost Allows you to use another endpoint (e.g. api.eu.sendgrid.com)
     * @throws MissingExtensionException If the curl extension is missing
     */
    public function __construct(
        string|null $apiUser,
        protected string $apiKey,
        protected string $from,
        array|string $to,
        protected string $subject,
        int|string|Level $level = Level::Error,
        bool $bubble = true,
        /** @var non-empty-string */
        private readonly string $apiHost = 'api.sendgrid.com',
    ) {
        if (!\extension_loaded('curl')) {
            throw new MissingExtensionException('The curl extension is needed to use the SendGridHandler');
        }

        $this->to = (array) $to;
        // @phpstan-ignore property.deprecated
        $this->apiUser = $apiUser ?? '';
        parent::__construct($level, $bubble);
    }

    protected function send(string $content, array $records): void
    {
        $body = [];
        $body['personalizations'] = [];
        $body['from']['email'] = $this->from;
        foreach ($this->to as $recipient) {
            $body['personalizations'][]['to'][]['email'] = $recipient;
        }
        $body['subject'] = $this->subject;

        if ($this->isHtmlBody($content)) {
            $body['content'][] = [
                'type' => 'text/html',
                'value' => $content,
            ];
        } else {
            $body['content'][] = [
                'type' => 'text/plain',
                'value' => $content,
            ];
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer '.$this->apiKey,
        ]);
        curl_setopt($ch, CURLOPT_URL, 'https://'.$this->apiHost.'/v3/mail/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, Utils::jsonEncode($body));

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        Curl\Util::execute($ch, 2);
    }
}
