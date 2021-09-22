# subject-0922
水曜

## XAMPP の設定
![image](https://user-images.githubusercontent.com/1501327/134298835-173aff93-b436-4d84-9a78-258599723ad4.png)
```xml
<IfModule alias_module>
    Alias /licenses "/xampp/licenses/"
    <Directory "/xampp/licenses">
        Options +Indexes
        <IfModule autoindex_color_module>
            DirectoryIndexTextColor  "#000000"
            DirectoryIndexBGColor "#f8e8a0"
            DirectoryIndexLinkColor "#bb3902"
            DirectoryIndexVLinkColor "#bb3902"
            DirectoryIndexALinkColor "#bb3902"
        </IfModule>
        Require local
        ErrorDocument 403 /error/XAMPP_FORBIDDEN.html.var
   </Directory>

    Alias /phpmyadmin "/xampp/phpMyAdmin/"
    <Directory "/xampp/phpMyAdmin">
        AllowOverride AuthConfig
        Require local
        ErrorDocument 403 /error/XAMPP_FORBIDDEN.html.var
    </Directory>

    Alias /webalizer "/xampp/webalizer/"
    <Directory "/xampp/webalizer">
        <IfModule php_module>
    		<Files "webalizer.php">
    			php_admin_flag safe_mode off
    		</Files>
        </IfModule>
        AllowOverride AuthConfig
        Require local
        ErrorDocument 403 /error/XAMPP_FORBIDDEN.html.var
    </Directory>

    Alias /php "/app/workspace/subject-0922/php/"
    <Directory "/app/workspace/subject-0922/php/">
        Options +Indexes
        AllowOverride All
        Require all granted
        ErrorDocument 403 /error/XAMPP_FORBIDDEN.html.var
    </Directory>    

</IfModule>
```
