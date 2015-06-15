# Local Environment set up

`/Applications/MAMP/conf/apache/extra/httpd-vhosts.conf`

```
<VirtualHost *:80>
    ServerAdmin amy@pork-chop.org
    DocumentRoot "/Users/adalrymple/Sites/lyra.dev/" 
    ServerName lyra.dev
    ServerAlias www.lyra.dev

    <Directory "/Users/adalrymple/Sites/lyra.dev">
        Options All
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>
```