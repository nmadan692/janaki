
# <IfModule mod_rewrite.c>
    # RewriteEngine On
    # RewriteRule ^(.*)$ public/$1 [L]
    # </IfModule>

RewriteEngine on
RewriteCond %{REQUEST_URI} !^public
RewriteRule ^(.*)$ public/$1 [L]

# php -- BEGIN cPanel-generated handler, do not edit
# Set the “alt-php73” package as the default “PHP” programming language.
<IfModule mime_module>
    AddHandler application/x-httpd-alt-php73 .php .php7 .phtml
</IfModule>
# php -- END cPanel-generated handler, do not edit

