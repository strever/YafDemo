这个版本中，
1 对layout布局做了优化，统一在Bootstrap.php中注册，可以实现控制器下不同方法加载不同布局文件
2 对报错添加了记录日志,无论是否开启报错显示都会记录日志。 ini中 application.showErrors=1 若无需前台显示设置为0

nginx 配置
server {
  listen 80;
  server_name  yaf.demo.com;
  index  index.php index.html index.htm;
  root   /data0/htdocs/yaf.demo.com/public;
       location ~ .*\.(php|php5)?$
   {
     #fastcgi_pass  unix:/tmp/php-cgi.sock;
     fastcgi_pass  127.0.0.1:9000;
     fastcgi_index index.php;
     include fcgi.conf;
   }
   if (!-e $request_filename) {
        rewrite ^/(.*\.(js|ico|gif|jpg|png|css|bmp|html|xls)$) /$1 last;
        rewrite ^/(.*) /index.php?$1 last;
    }

}

apache vhost

    <VirtualHost *:80>
        DocumentRoot [project dir]/public
        ServerName yaf.dev #or whatever
    </VirtualHost>


仅仅实现了
1 用户登录
2 用户增删改查

默认账户：admin 密码：12345678

左侧目录为数据库中取出的数据，查看数据库结构便能进行修改（人员管理--管理员管理可用，其他栏目跳转为inddex）；
memcache 链接不知道是否合适，便注释了部分内容；
