# yii2-trackers

## Установка

1. В проектный `composer.json` добавить в секцию `require`:

        "idfly/yii2-trackers": "dev-master",

2. В секцию `repositories`:

        {
            "type": "git",
            "url": "git@bitbucket.org:idfly/yii2-trackers.git"
        }

3. Выполнить `composer update`
```

4. Поместить в конфиг:

```
$config['modules']['trackers'] = ['class' => 'idfly\trackers\Module'];
```
