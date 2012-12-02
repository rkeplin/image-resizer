## What is it?
A class to resize an image dynamically, given its URL

## How do I use it?

#### 1) Create an image handler

```php
<?php
if(isset($_GET['url']))
{
    $width = (isset($_GET['width'])) ? $_GET['width'] : 50;
    $height =  (isset($_GET['height'])) ? $_GET['height'] : 50;

    require_once 'lib/Image.php';
    $image = new Image($_GET['url']);
    $image->resize($width, $height);
    $image->display();
}
```

#### 2) Call the image handler

```html
<img src="path/to/getImage.php?url=/path/to/image.jpg&height=30&width=30" />
```

See sample for more information.