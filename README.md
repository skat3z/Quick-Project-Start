# Quick Start Project
A quick set-up for creating the front-end of a website.


## Guides
Run "observ script.rb" when working in sass, or haml. I already have **Sass** running in my code editor, so i only use this command for auto compiling haml.

For Sass you can edit script.rb and do this:
```
def compile_sass

%x[sass FILENAME.sass OUTPUT-FILENAME.css]

end

watch(".*\.haml$") { |x|
  compile_haml
}
```


Note: edit script.rb in the root folder to add other pages to auto compile.

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
