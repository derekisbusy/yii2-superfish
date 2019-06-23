Yii2 Superfish
==============
Superfish assets for Yii2 projects

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist derekisbusy/yii2-superfish:dev-master
```

or add

```
"derekisbusy/yii2-superfish": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it by adding it to your view  :

```php
use \derekisbusy\superfish\SuperfishAsset;

SuperfishAsset::register($this);
```

or by adding it to another assets dependencies list :

```php
  public $depends = [
    'derekisbusy\superfish\SuperfishAsset'
  ];
```

Then use superfish in your HTML :

```html
<nav>
    <div id="hamburger"><i class="icon-menu"></i> Menu</div>
    <ul class="sf-menu">
    <li class="home">
    <a href="#" title="Home"><i class="icon-home"></i><span> Home</span></a>
    </li>
        <li>
        <a href="#">Menu Item 1</a>
        <span class="sub-indicator"></span>
            <ul>
              <li><a href="#">Sub Menu Item 1</a></li>
              <li><a href="#">Sub Menu Item 2</a></li>
            </ul>
        </li>
        <li><a href="#">Menu Item 2</a></li>
        <li><a href="#">Menu Item 3</a></li>
    </ul>
</nav>

<script>
  jQuery(document).ready(function() {
    jQuery('ul.sf-menu').superfish();
  });
</script>
```

Resources
---------

 * [Superfish examples](https://superfish.joelbirch.design/examples/)
 * [Yii2 assets](https://www.yiiframework.com/doc/guide/2.0/en/structure-assets)
