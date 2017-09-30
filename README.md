# Eager Beaver plugin for Craft CMS

Allows you to eager load elements from auto-injected Entry elements on demand from your templates.

![Screenshot](resources/screenshots/beaver.png)

## Installation

To install Eager Beaver, follow these steps:

1. Download & unzip the file and place the `eagerbeaver` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/nystudio107/eagerbeaver.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3.  -OR- install with Composer via `composer require nystudio107/eagerbeaver`
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `eagerbeaver` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Eager Beaver works on Craft 2.6.x.

## Eager Beaver Overview

Craft's [Eager-Loading Elements](https://craftcms.com/docs/templating/eager-loading-elements) allows you to nicely optimize your templates by telling Craft to load everything you need in one big query.

The only rub is that you can't specify this eager loading behavior for `entry`, `category`, or `product` elements that are auto-injected into your template.

Eager Beaver is a small plugin that allows you to eager load sub-elements like Assets, Categories, Users, etc. to these auto-injected elements.

This is especially useful if you have pages that use Matrix block "content builders", and thus will typically result in loading a number of relations like Assets contained in Matrix blocks to render a page.

## Configuring Eager Beaver

There's nothing to configure.

## Using Eager Beaver

To use Eager Beaver, simply do something like:

```
{% do eagerLoadElements(entry, [
    'author.userPicture',
    'blogCategory',
    'blogImage',
    'blogContent.image:image'
]) %}
```

Or you can use the more verbose syntax to do the same thing:

```
{% do craft.eagerBeaver.eagerLoadElements(entry, [
    'author.userPicture',
    'blogCategory',
    'blogImage',
    'blogContent',
    'blogContent.image:image'
]) %}
```

The first parameter is the Element or array of Elements that you want to eager-load sub-elements into, such as an `entry`. If you pass in an array of Elements, they must all be the same type.

The second parameter is the same `with:` that you use for [Eager-Loading Elements](https://craftcms.com/docs/templating/eager-loading-elements), and uses the exact same syntax.

In the above example:
 - `author` is a `User` that has an Assets field named `userPicture` added to it.
 - `blogCategory` is a Category field
 - `blogImage` is an Asset field
 - `blogContent` is a Matrix field that has an Assets field named `image` added to the block type `image`

## Eager Beaver Roadmap

Some things to do, and ideas for potential features:

* Release it

Brought to you by [nystudio107](https://nystudio107.com/)
