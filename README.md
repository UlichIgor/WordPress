# Створення файлів для проекту WordPress

## Створення файлу `index.php` у корені проекту

## Створення файлу `style.css` у корені проекту
Прописуємо в ньому назву теми латиницею:
```css
/* Theme Name: тема
Author: the Ulych Igor */
```

## Створення файлу `functions.php` у корені проекту
Підключає файли зі стилями та скриптами для всіх сторінок вашого проекту.

### Підключення власних стилів із директорії
Підключення власних стилів де `timber_style` і функція `timber_style` повинні мати однакову назву:
```php
add_action( 'wp_enqueue_scripts', 'timber_style' );

function timber_style() {
    wp_enqueue_style( 'new-main-style', get_template_directory_uri() . '/assets/css/fail.css' );
}
```

### Підключення стилів з кореня проекту
```php
wp_enqueue_style( 'main-style', get_stylesheet_uri() );
```

### Підключення скриптів з кореня проекту
Підключення власних скриптів де `timber_scripts` і функція `timber_scripts` повинні мати однакову назву:
```php
add_action( 'wp_enqueue_scripts', 'timber_scripts' );

function timber_scripts() {
    wp_enqueue_script( 'libs-script', get_template_directory_uri() . '/assets/js/libs.min.js', array('jquery'), null, true );
}
```

### Підключення jQuery згідно документації у `functions.php`:
```php
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function my_scripts_method() {
    wp_deregister_script('jquery');
    wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, null, true );
    wp_register_script( 'jquery', false, array('jquery-core'), null, true );
    wp_enqueue_script( 'jquery' );
}
```

## Advanced Custom Fields
Це популярний WordPress плагін для розробників, що дозволяє додавати метаполя куди завгодно і виводити їх значення будь-де. Використовуйте функції, такі як `get_field()` і `the_field()`:
```php
<?php the_field('header__bg'); ?>
```

## Створення файлу `header.php` у корені проекту
Подія спрацьовує у частині сторінки. У момент цієї події зазвичай підключаються скрипти (jquery та інші), стилі (css сайту) та різні SEO мета-теги сторінки (title, description, robots). Це один із основних хуків теми (шаблону) WordPress. Ця подія викликається однойменною функцією `wp_head()`, яка, у свою чергу, викликається у файлі теми `header.php` перед тегом `</head>`:
```php
<?php wp_head(); ?>
```

## Створення файлу `footer.php` у корені проекту
```php
<?php wp_footer(); ?>
```
Підключення скриптів запускає хук `wp_footer` - один з основних хуків, без якого не працюватимуть багато плагінів. Викликається у підвалі теми перед закриваючим тегом `</body>`, у файлі `footer.php`.

## Використання функцій WordPress
### `the_field()` – Виводить на екран значення вказаного поля (метаполя)
```php
<?php the_field('main-title'); ?>
```

### `bloginfo()` — Виводить статичну інформацію
`template_url` автоматично прописує шлях:
```php
<?php bloginfo('template_url'); ?>
```

### Автоматичне виведення інформації про сайт у тегу `<title>`
```php
<?php bloginfo('description'); ?>
```

