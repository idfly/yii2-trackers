# yii2-trackers

Note: This module uses `yii2-settings` module by idfly.

## Set

1. Setup module `yii2-settings`

2. To the project file `composer.json` add to the `require` section:

      `"idfly/yii2-trackers": "dev-master"`

3. To the `repositories` section:
      ```
      {
           "type": "git",
           "url": "git@bitbucket.org:idfly/yii2-trackers.git"
      }
      ```

4. Run `composer update`

5. Place to the project's configuration file:

```
$config['modules']['trackers'] = ['class' => 'idfly\trackers\Module'];
```

## Usage

1. Include tracker in to assets:

    ```
    <?php
    
    namespace app\assets;
    
    class AppAsset extends \yii\web\AssetBundle
    {
        public function init()
        {
            parent::init();
            $this->js[] = \Yii::getAlias('@web') .'/trackers';
        }
    }
    ```

2. Open page:
    `http://your-site/admin/settings/edit?modelName=idfly\trackers\models\TrackersSetting`