# Statamic Widget: Continue Editing

![Statamic 3.0+](https://img.shields.io/badge/Statamic-3.0+-FF269E?style=for-the-badge&link=https://statamic.com)

This widget lists the last edited entries in the control panel so you can jump right back into work.

## Requirements

- Statamic v3

## Installation

From your site folder, run `composer require webographen/statamic-widget-continue-editing`

## Usage

To add the widget to  your control panel, edit the config under `config/statamic/cp.php` and add the following entry to the `widgets` array:

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
    'collections' => '*',
    'width' => 50,
    'limit' => 5
],

```

**Collections:** One or more piped collections to display - e.g. 'pages', 'pages|posts', or '*' for the default behavior

**Limit:** The number of entries as an integer