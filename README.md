<p align="center"><img width="400" src="https://github.com/zacksmash/fortify-ui-preset/raw/master/fortify-preset-image.png"></p>

# Using this template

Here are the steps to customize this template with your preset

- Rename the files in the `src` directory. Example `FortifyUIBootstrapCommand.php`
    - Make sure you update any `use` statements and namespaces
- Add your preset stubs to the `stubs` directory
- Add your preset image and preset screenshots
- Update the `composer.json`
    - Replace all instances of `YourNamespace\\FortifyUIPreset` with your details. For example: `SomeDude\\FortifyUIBootstrap`
- Search & Replace all of the following terms
    - YourNamespace
    - yournamespace
    - YourPreset
    - yourpreset
    - SomeFramework
    - Your Name
    - yourusername
    - you@yourdomain.com


# Introduction

**YourPreset** is a Laravel Fortify UI preset, built with SomeFramework.

- [Requirements](#requirements)
- [Installation](#installation)

<a name="requirements"></a>
## Requirements

This package requires Laravel Fortify and FortifyUI. Installing [*FortifyUI*](https://github.com/zacksmash/fortify-ui) will automatically install and configure Laravel Fortify for you, so you may start there.

<a name="installation"></a>
## Installation

To get started, you'll need to install **YourPreset** using Composer.

```bash
composer require yournamespace/fortify-yourpreset
```

Next, you'll need to run the install command:

```bash
php artisan fortify-ui:yourpreset
```

This command will publish **YourPreset's** views and resources to your project.

- All `auth` views
- Other files...

<p align="center"><img  src="https://github.com/zacksmash/fortify-ui-preset/raw/master/fortify-preset-screenshot.png"></p>

## License

**FortifyUIPreset** is open-sourced software licensed under the [MIT license](LICENSE.md).
