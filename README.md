# Statamic Widget: Continue Editing

This widget lists the last edited entries in the control panel so you can jump right back into work.

## Requirements

- Statamic v6

For Statamic v3, v4 and v5, use v1.2.1.

## Installation

From your site folder, run `composer require webographen/statamic-widget-continue-editing` - or install it via the control panel.

## Usage

To add the widget to your control panel dashboard, edit the config under `config/statamic/cp.php` and add the following entry to the `widgets` array:

```php
[
    'type' => 'continue_editing',
    'width' => 100,
],
```

## Optional Parameters

By default the widget display the last five entries across all collections. You can modify this by adding two more parameters:

```php
[
    'type' => 'continue_editing',
    'width' => 100,
    'collections' => '*',
    'limit' => 5
],
```

**Collections:** One or more piped collections to display - e.g. 'pages', 'pages|posts', or '*' (any) for the default behavior

**Limit:** The maximum number of entries as an integer

## Upgrading from v1

`composer require webographen/statamic-widget-continue-editing:^2.0`. The widget handle, the view
namespace and the config options are unchanged, so nothing in your site needs to move.

The list itself is now correct. Statamic indexes the raw `updated_at` value, which is empty for
entries that were never saved through the control panel, so ordering by it returned an arbitrary
set rather than the most recently edited entries. Those entries are now excluded, and what is left
is genuinely in last-edited order.

## About

Built and maintained by [Alexander Stoffel](https://stoffel.io/), freelance Statamic and Laravel developer.
