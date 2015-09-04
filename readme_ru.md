# yii2-sms-devinotele

## Установка

1. В проектный `composer.json` добавить в секцию `require`:

        "idfly/yii2-sms-devinotele": "dev-master",

2. В секцию `repositories`:

        {
            "type": "git",
            "url": "git@bitbucket.org:idfly/yii2-sms-devinotele.git"
        }

3. Выполнить `composer update`
```

4. Поместить в конфиг:

```
'components' => [
    ...
    'sms' => [
        'class' => 'sms\devinotele\Provider',        
        'from' => '%from%', // Один из адресов отправителя в личном кабинете: https://my.devinotele.com
        'login' => '%login%',
        'password' => '%passowrd%',
        'send_sms' => true,
        'message_lifetime' => 0, // время жизни сообщения в минутах (если не доставлено в течении установленного времени - сообщение удаляется); 0 - бесконечно
    ],
    ...
]
```

Использование
=============

``` \Yii::$app->sms->send($to, $text);```
