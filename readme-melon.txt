����汾�У�
1 ��layout���������Ż���ͳһ��Bootstrap.php��ע�ᣬ����ʵ�ֿ������²�ͬ�������ز�ͬ�����ļ�
2 �Ա�������˼�¼��־,�����Ƿ���������ʾ�����¼��־�� ini�� application.showErrors=1 ������ǰ̨��ʾ����Ϊ0

nginx ����
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


����ʵ����
1 �û���¼
2 �û���ɾ�Ĳ�

Ĭ���˻���admin ���룺12345678

���Ŀ¼Ϊ���ݿ���ȡ�������ݣ��鿴���ݿ�ṹ���ܽ����޸ģ���Ա����--����Ա������ã�������Ŀ��תΪinddex����
memcache ���Ӳ�֪���Ƿ���ʣ���ע���˲������ݣ�
