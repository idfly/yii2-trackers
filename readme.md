# yii2-trackers

## Set

1. To the project file `composer.json` add to the `require` section:

      `"idfly/yii2-trackers": "dev-master"`

2. To the `repositories` section:
      ```
      {
           "type": "git",
           "url": "git@bitbucket.org:idfly/yii2-trackers.git"
      }
      ```

3. Run `composer update`

4. Place to the project's configuration file:

```
$config['modules']['trackers'] = ['class' => 'idfly\trackers\Module'];
```

