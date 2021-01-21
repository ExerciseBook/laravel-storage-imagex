## Storage Laravel Provider

1. 通过 Composer 安装本库

```bash

    composer require exercisebook/laravel-storage-imagex --stability=beta

```

2. 编辑 `config/filesystems.php` 添加 ImageX 的连接设置

```php
   
    'imagex' => [
                 ‘region’ => 'Region',
                 ‘access_key‘ => 'Access Key',
                 ‘secret_key’ => 'Secret Key',
                 ‘service_id‘ => 'Service ID',
                 ‘domain’ => 'Binding Domain'
             ],

```

3. 在 `config/app.php` 中的 `providers` 数组里添加 `ImageXServiceProvider`

```php
    ExerciseBook\Laravel\Storage\ImageX\Provider\ImageXServiceProvider::class,
```
