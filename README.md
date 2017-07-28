# What is the Tags?
The class that contains methods that allow you to specify HTML tag attributes as a function argument. Return the tag prepare. This class haven't `final` status. This means that you can expand it freely this.


# Structure
### url() method
```php
$foo->url(url_adres[str], text_inside_link[str], target[int], style[str, optional], class[str, optional], id[str, optional]);
```
### image() method
```php
$foo->image(url_adres[str], alt[str] ,style[str, optional], class[str, optional], id[str, optional]);
```
# How use this?
#### Include this class by e.g `include` function from PHP.
#### Next you can use this copy of the class:
```php
$foo = new Tags;
 ```
 #### Now you can use instance of class:
 ```php
 $foo->url('test.php', 'ExampleLink', 1);
 ```
 #### or(example: 1):
  ```php
 $foo->image('https://www.google.pl/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png', 'Lack image');
 ```
 #### or(example: 2):
  ```php
 $foo->url('http://google.com', 'I`am a pink link with `pink` class and `pink_2` ID. I have target: _top', 3, 'color: deeppink', 'pink', 'pink_2');
 ```
 
# Target parametr
1.  `_blank`
2. `_parent`
3. `_top`

By default `_self` is set. If you want to go do not give anything in the third argument.

# Optional parametrs
In url() and image() are optional parameters:
* `target` from url()
* `description` from image()
* `style` - your inline style CSS
* `class` - your class in CSS
* `id` - your ID in CSS
