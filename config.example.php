<?php
/**
 * Mailgun Configuration
 * 
 * Copy this file to config.php and fill in your Mailgun credentials.
 * IMPORTANT: config.php should be added to .gitignore and never committed to version control.
 */

return [
    'mailgun' => [
        'domain' => 'your-mailgun-domain.com',           // e.g., sandboxXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX.mailgun.org
        'api_key' => 'your-mailgun-api-key',             // e.g., key-XXXXXXXXXXXXXXXXXXXXXXXXX
        'recipient_email' => 'tobiasramsing008@hotmail.com', // Where YOU receive messages
    ]
];
