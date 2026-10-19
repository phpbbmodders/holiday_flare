# Compatibility testing

Holiday Flare supports phpBB 3.3.19 or later within the 3.3 branch and
phpBB 4.0. PHP requirements follow the board: PHP 7.4 or later for 3.3,
and PHP 8.2 or later for 4.0.

Runtime checks on 10/17/2026 used SQLite and bundled Prosilver:

| phpBB | Evidence |
| --- | --- |
| 3.3.19 | ACP saving, conflicts and invalid submissions, migrations, artwork placement, RTL and mobile breakpoint checks. |
| 4.0.0-a3-dev | Fresh enable, seven ACP holiday groups, all five placement types, settings persistence, conflict and CSRF rejection, artwork loading, RTL rendering smoke check, mobile breakpoints, disable/re-enable and purge/reinstall. |

The tested 4.0 snapshot was phpbb/phpbb master commit
`3bf509005826eae27524188e5540543ebdcd5266`, served through PHP 8.4-FPM.
These results do not verify future 4.0 snapshots or other style layouts.
CI runs the code sniffer and EPV against phpBB 3.3.x and master.

On phpBB 4.0’s bundled Prosilver, the header begins at the viewport edge.
Artwork extending above the header in the center-top position can be clipped.
The additional holiday screenshots use center or center-bottom placements
for those images; header positioning has not been changed.

## Cache after extension lifecycle changes

Purge the board cache after disabling, enabling, or replacing extension
files. During phpBB 4.0 CLI testing, disabling without a separate cache
purge left a compiled template referring to the disabled extension's
namespace and returned HTTP 500. An explicit cache purge restored normal
responses. Disable/re-enable with cache purges preserved selections;
purge/reinstall reset all five placements to None.

## Screenshots

The [screenshot gallery](images/screenshots/README.md) includes each holiday
separately on both tested phpBB branches. Each additional image contains
artwork from one holiday only.
