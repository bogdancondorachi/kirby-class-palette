# Kirby Colour Swatch Field

> [!NOTE]
> A simple color field extention that allows to pass options like 'hex', 'class' or 'title' for [Kirby CMS](https://getkirby.com).

## 📦 Installation

### Composer
```bash
composer require bogdancondorachi/kirby-colour-swatch-field
```

### Git Submodule
```bash
git submodule add https://github.com/bogdancondorachi/kirby-colour-swatch-field.git site/plugins/colour-swatch-field
```

### Manual
[Download the plugin](https://api.github.com/repos/bogdancondorachi/kirby-colour-swatch-field/zipball) and extract it to: `/site/plugins/colour-swatch-field`

## ⚙️ Usage

### Add the field to your blueprint:

```yaml
bgColor:
  label: Background Color
  type: swatch
  options:
    amber:
      hex: 'FFB900'
      title: Amber
      class: bg-amber-400
    emerald:
      hex: '009966'
      title: Apricot
      class: bg-emerald-600
    white:
      hex: 'FFFFFF'
      title: White
      class: bg-white
    black:
      hex: '000000'
      title: Black
      class: bg-black
```

### Use the field in your template:

```php
// Outputs the selected color title as a string
$page->bgColor()->toSwatch('title')

// Outputs the selected color hex code as a string (without preceding #)
$page->bgColor()->toSwatch('hex')

// Outputs the selected color class as a string
$page->bgColor()->toSwatch('class')
```

## 🙏 Credits
- [Chris Martin](https://github.com/chrisbeluga) for his [Kirby Color Selection](https://github.com/chrisbeluga/kirby-colors), which served as base for this project.

## 📜 License
[MIT License](./LICENSE) Copyright © 2024 [Bogdan Condorachi](https://github.com/bogdancondorachi)
