# Accessibility

Holiday artwork is decorative. It does not convey read/unread, locked,
or other forum status. Images retain empty alt text; each decoration
container is hidden from the accessibility tree, including cloned forum
artwork. Overlays remain noninteractive and do not receive keyboard focus.
phpBB’s own forum status descriptions remain unchanged.

ACP settings use native selects, visible associated labels and fieldsets
with holiday legends. The form instructions are connected to each select
with `aria-describedby`. A scoped focus outline keeps keyboard focus
visible on dropdowns and submit/reset controls.

When choosing an image clears another holiday’s selection in the same
placement, one polite status region identifies the affected holiday and
placement without moving focus. The message comes from a phpBB language
variable and uses existing translated holiday and placement labels.
Ordinary selection changes do not duplicate the native select announcement.
Reset clears the status message. Submit errors continue through phpBB’s
standard error handling.

These changes follow the supplied accessibility guidance and W3C’s
[decorative image guidance](https://www.w3.org/WAI/tutorials/images/decorative/)
and [status message guidance](https://www.w3.org/WAI/WCAG22/Understanding/status-messages.html).
They are not a claim of complete WCAG 2.2 AA conformance for phpBB or
third-party styles.

## Verification

Browser checks on phpBB 3.3.19 and 4.0.0-a3-dev with Prosilver verified all
35 dropdown labels, descriptions and groups; keyboard selection and tab
order; focus outlines; conflict announcements; reset behavior; and artwork
exclusion from Chromium’s accessibility tree. The live region has polite,
atomic status semantics. No browser JavaScript errors occurred.

These checks inspect browser accessibility semantics. Spoken output with
screen-reader software has not been tested.
