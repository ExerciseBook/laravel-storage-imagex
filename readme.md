## Storage Laravel Provider

1. 通过 Composer 安装本库
    
    ```bash
    
        composer require exercisebook/laravel-storage-imagex
    
    ```

2. 编辑 `config/filesystems.php` 添加 ImageX 的连接设置
    
    ```php
       
            'imagex' => [
                'driver' => 'imagex',
   
                'region' => 'Region',             // 如：cn-north-1
                'access_key' => 'Access Key',
                'secret_key' => 'Secret Key',
                'service_id' => 'Service ID',
                'domain' => 'Binding Domain'      // 填写该图片服务所绑定的域名如 imagex.superexercisebook.com。推荐以 https:// 开头。该值用来拼接 url 用。
            ],
    
    ```

3. 在 `config/app.php` 中的 `providers` 数组里添加 `ImageXServiceProvider`
    
    ```php
        ExerciseBook\Laravel\Storage\ImageX\Provider\ImageXServiceProvider::class,
    ```
