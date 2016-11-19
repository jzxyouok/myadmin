# 基于laravel-5.3.23+AdminLTE的后台管理系统

想完成的功能：
1、系统管理：包括用户管理和角色权限管理
2、待续...

## 安装说明
1、下载代码
在你的PC或者服务器上，新建一个目录（比如/home/wwwroot/myadmin），然后执行下面命令：
git clone https://github.com/uncle13th/myadmin  或者
git clone git@github.com:uncle13th/myadmin.git
把相关代码下载下来

2、下载laravel依赖
执行命令：composer install
composer会自动下载laravel的相关依赖

3、配置nginx或apache（下面给出nginx的主机配置）
server
{
    listen 80;
    server_name myadmin.com;
    index index.html index.htm index.php default.html default.htm default.php;
    root  /home/wwwroot/myadmin/public;

    access_log  /home/wwwlogs/myadmin_access.log  access;


    include none.conf;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ [^/]\.php(/|$)
    {
        try_files $uri =404;
        #fastcgi_pass  unix:/tmp/php-cgi.sock;
        fastcgi_pass  127.0.0.1:9000;
        fastcgi_index index.php;
        include fastcgi.conf;
    }

    location ~ .*\.(gif|jpg|jpeg|png|bmp|swf)$
    {
        root  /home/wwwroot/myadmin/resources/assets;
        expires      30d;
    }

    location ~ .*\.(js|css)?$
    {
        root  /home/wwwroot/myadmin/resources/assets;
        expires      12h;
    }
}

4、在服务器上设置目录权限(windows机的忽略这一步)
chown nobody:nobody -R /home/wwwroot/myadmin
chmod 777 /home/wwwroot/myadmin/bootstrap -R
chmod 777 /home/wwwroot/myadmin/storage -R
 
5、修改配置
首先，复制.env.example文件为.env文件，然后修改里面的数据库配置为你自己的数据库配置
另外，要在数据库上创建一个数据库，参考的语句：
CREATE DATABASE myadmin DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

6、初始化数据表
cd /home/wwwroot/myadmin
php artisan migrate --seed

7、更新key
php artisan key:generate






