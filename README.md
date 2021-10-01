# Statamic Widget: Continue Editing

![Statamic 3.0+](https://img.shields.io/badge/Statamic-3.0+-FF269E?style=for-the-badge&link=https://statamic.com)

This widget lists the last edited entries in the control panel so you can jump right back into work.

## Requirements

- Statamic v3

## Installation

From your site folder, run `composer require webographen/statamic-widget-continue-editing` - or install it via the control panel.

## Usage

To add the widget to  your control panel dashboard, edit the config under `config/statamic/cp.php` and add the following entry to the `widgets` array:

```php
[
    'type' => 'continue_editing',
    'width' => 50,
],

```

## Optional Parameters

By default the widget display the last five entries across all collections. You can modify this by adding two more parameters:

```php
[
    'type' => 'continue_editing',
    'width' => 50,
    'collections' => '*',
    'limit' => 5
],

```

**Collections:** One or more piped collections to display - e.g. 'pages', 'pages|posts', or '*' (any) for the default behavior

**Limit:** The maximum number of entries as an integer

## About Us

[Webographen](https://en.webographen.de/) is a digital design studio focusing on Statamic. We make websites that are not just pretty, but scale in terms of design and technology.