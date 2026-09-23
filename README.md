Holiday Flare
=================
Allows an admin to display seasonal holiday flares on their forum. The Christmas and Valentine's Day themes can be enabled or disabled independently in the ACP via `EXTENSIONS --> Holiday Flare --> Settings`.

[![CI](https://github.com/phpbbmodders/holiday_flare/actions/workflows/ci.yml/badge.svg)](https://github.com/phpbbmodders/holiday_flare/actions/workflows/ci.yml)

## Features
* Enable/disable each holiday flare independently
 * Christmas: a Santa hat in the header corner, plus a smaller matching icon on the forum list (prosilver, Green-Style-Slim, pro_ubuntu_lucid, proflat)
 * Valentine's Day: a matching header-corner icon (prosilver, Green-Style-Slim, pro_ubuntu_lucid, proflat)

See [docs/screenshots](docs/screenshots) for both themes rendered.

## Requirements

* PHP 7.1 or later
* phpBB 3.1.0-RC3 up to (but not including) 3.3

## Installation

### 1. clone
Clone (or download and move) the repository into the folder phpBB3/ext/phpbbmodders/holidayflare:

```
cd phpBB3
git clone https://github.com/phpbbmodders/holiday_flare.git ext/phpbbmodders/holidayflare/
```

### 2. activate
Go to ACP -> `CUSTOMISE -> Manage extensions ->` enable Holiday Flare  

### 3. configure

Go to ACP -> `EXTENSIONS --> Holiday Flare --> Settings ->` set *Christmas Theme* and/or *Valentine Theme* to *Yes*

## Support

- **Bug reports**: [Open an issue](https://github.com/phpbbmodders/holiday_flare/issues).
- **Everything else** (questions, feature requests, general discussion): [the phpBB.com support thread](https://www.phpbb.com/community/viewtopic.php?f=456&t=2277491).

## Contributing

Contributions are welcome! Pull requests are welcome for bug fixes or discussed features.

## Acknowledgments

- The Valentine's Day theme was originally contributed by Matt Friedman ([MattF](https://www.phpbb.com/customise/db/author/mattf)).
- The jQuery-based header banner was originally contributed by Rich McGirr (RMcGirr83), extended to additional styles by Galixte (Raphaël M.).
- Modernization (current PHP/phpBB version support, a real bug fix confirmed against a live phpBB install, reconciling several long-open pull requests, and this documentation) assisted by [Claude](https://www.anthropic.com/claude).

## License

This extension is licensed under the **GNU General Public License v2.0**.

See [license.txt](license.txt) for more information.
