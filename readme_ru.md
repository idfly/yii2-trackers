# yii2-trackers

Примечание: данный модуль использует `yii2-settings` модуль от idfly.

## Установка

1. Настроить модуль `yii2-settings`

2. В проектный `composer.json` добавить в секцию `require`:

        "idfly/yii2-trackers": "dev-master",

3. В секцию `repositories`:

        {
            "type": "git",
            "url": "git@bitbucket.org:idfly/yii2-trackers.git"
        }

4. Выполнить `composer update`

5. Поместить в конфиг:

```
$config['modules']['trackers'] = ['class' => 'idfly\trackers\Module'];
```

## Использование

1. Подключить трекер в asset'ах:

    ```
    #!php
    
         class AppAsset extends \yii\web\AssetBundle
         {
             public function init()
             {
                 parent::init();
                 $this->js[] = \Yii::getAlias('@web') .'/trackers';
             }
         }
    ```

2. Настройки трекера будут доступны по ссылке:
    `http://your-site/admin/settings/edit?modelName=idfly\trackers\models\TrackersSetting`
