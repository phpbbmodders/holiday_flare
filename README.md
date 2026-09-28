# Holiday Flare

[![Tests](https://github.com/phpbbmodders/holiday_flare/actions/workflows/tests.yml/badge.svg)](https://github.com/phpbbmodders/holiday_flare/actions/workflows/tests.yml) [![Lint](https://github.com/phpbbmodders/holiday_flare/actions/workflows/lint.yml/badge.svg)](https://github.com/phpbbmodders/holiday_flare/actions/workflows/lint.yml)

Adds seasonal decorations — Christmas and Valentine's Day — that you switch on from the ACP.

## Features

- Each holiday theme can be switched on or off on its own.
- Christmas: a Santa hat in the header corner, plus a smaller matching icon on the forum list.
- Valentine's Day: a matching header-corner icon.
- Supported styles: prosilver, Green-Style-Slim, pro_ubuntu_lucid and proflat.

See [docs/screenshots](docs/screenshots) for both themes.

## Requirements

- phpBB 3.3.19 or later
- PHP 7.4 or later

## Installation

1. Copy the extension to `/ext/phpbbmodders/holidayflare`
2. In the Administration Control Panel, go to **Customise → Manage extensions**
3. Enable the **Holiday Flare** extension
4. Under **ACP → Extensions → Holiday Flare → Settings**, set *Christmas Theme* and/or *Valentine Theme* to *Yes*

## Contributing

Contributions are welcome!

- **Bug reports**: [Open an issue](https://github.com/phpbbmodders/holiday_flare/issues).
- **Everything else** (questions, feature requests, ideas, general discussion): [Use Discussions](https://github.com/orgs/phpbbmodders/discussions), or the [community forum](https://www.phpbbmodders.com/community/). The [phpBB.com support thread](https://www.phpbb.com/community/viewtopic.php?f=456&t=2277491) is still open too.
- Pull requests are welcome for bug fixes or discussed features.

## Acknowledgments

- Converted to a phpBB extension by Matt Friedman ([MattF](https://www.phpbb.com/customise/db/author/mattf)).
- The Valentine's Day theme was originally contributed by [TWEagle](https://github.com/TWEagle).
- The jQuery-based header banner was originally contributed by Rich McGirr ([rmcgirr83](https://github.com/rmcgirr83)), extended to additional styles by Raphaël M. ([Galixte](https://github.com/Galixte)).
- French translation by Raphaël M. ([Galixte](https://github.com/Galixte)); Arabic translation by Basil Taha Alhitary.
- Modernization (current PHP/phpBB version support, a real bug fix confirmed against a live phpBB install, reconciling several long-open pull requests, and this documentation) assisted by [Claude](https://www.anthropic.com/claude).

## License

This extension is licensed under the **GNU General Public License v2.0**.

See [license.txt](license.txt) for more information.
