# yii2-sms-devinotele

## Set

1. To the project file `composer.json` add to the `require` section:

      `"idfly/yii2-sms-devinotele": "dev-master"`

2. To the `repositories` section:
      ```
      {
           "type": "git",
           "url": "git@bitbucket.org:idfly/yii2-sms-devinotele.git"
      }
      ```

3. Run `composer update`

4. Place to the project's configuration file:

```
'components' => [
    ...
    'sms' => [
        'class' => 'sms\devinotele\Provider',        
        'from' => '%from%', // one of the senders addresses in the account: https://my.devinotele.com
        'login' => '%login%',
        'password' => '%passowrd%',
        'send_sms' => true,
        'message_lifetime' => 0, // lifetime of the message in minutes 
        // (if the message is not delivered within lifetime the message is deleted); 0 - infinite
    ],
    ...
]
```

Usage
=============

``` \Yii::$app->sms->send($to, $text);```
