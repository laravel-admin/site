# Site container for your Laravel Project

This package creates a singleton into the Service container. In this site container you can put from your whole application items. 

At the end the container will be added as a shared view variable. 

## Installation

Install it with composer 

```
composer require laravel-admin/site
```

Add the Service Provider to your config/app.php

```
LaravelAdmin\Site\SiteServiceProvider::class,
```

The package has a config, with a basic structure. Publish this config to define your defaults.

```
artisan vendor:publish --tag="site"
```


## Usage

The container is available in the whole application with:

```
app('site')
```

### Add item to the container

```
app('site')->set('title', 'My website title');
```

### Add subitem to the container

The container is compatible with the dotted array notation, like config

```
app('site')->set('seo.title', 'This is my SEO improved title');
```

### Get item

```
app('site')->get('title');
```

### Get sub item

```
app('site')->get('seo.title');
```

## Add your model

Imagine you have a model with some default content attributes, like title, description and content. With one command you can fill all items in the container.

```
app('site')->model($post);
```

## Views

The container will be available in all your views as the $site variable. Use it as follow:

```
{{ $site->get('title') }}
```

