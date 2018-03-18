# Quick Start Project
A quick set-up for creating the front-end of a website.


## Guides
Run ```observ script.rb``` in terminal, when working in sass, or haml. I already have **Sass** running in my code editor, so i only use this command to auto compile haml.

For Sass you can edit script.rb and do this:
```
def compile_sass

%x[sass FILENAME.sass OUTPUT-FILENAME.css]

end

sass(".*\.sass$") { |x|
  compile_sass
}
```


**Note: edit the "script.rb" file in the root folder to add other pages for auto compile.**

### Frameworks
* Animate JS
* Bootstrap v4
* Font Awesome
* Google Fonts
* Jquery 3.2.1
* Popper.js

### Preprocessor
* HAML
* SASS

### REQUIREMENTS
**Ruby 2.0+**
- Gems Required:   
    - **Haml** 
    ```
    sudo gem install haml
    ```
    - **Observr**
    ```
    sudo gem install observr
    ```

    - **Sass**
    ```
    sudo gem install sass --no-user-install'
    ```
    
    - **Watchr**
    ```
    sudo gem install watchr
    ```
### NGINX REWRITE RULES
  
  These are the nginx config rules I use with Vagrant

```

server {
    listen 80 default_server;
    listen [::]:80 default_server;

    root /vagrant/html;
    #change to your root folder
    
    index index.php index.html index.htm index.nginx-debian.html;      
  
    server_name server_domain_or_IP;
    #either localhost, or your online server domain
    
    location / {
        rewrite ^/$ /index.php?page=home;
        try_files $uri $uri/ /index.php?page=$uri;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php7.0-fpm.sock;
    }

    location ~ /\.ht {
        deny all;
    }
}

```
