# Artwork placement guide

The ACP offers only curated placements. Header Santa hats and corner-shaped
Christmas greenery stay in the left corner. The compact Christmas ribbon belongs in the corner. Wide Easter and
St. Patrick’s Day garlands can use the top or bottom. Compact emblems and pumpkins use the middle or corner where
appropriate. Forum hats, pumpkins and the compact four-leaf clover remain independent of header choices.

`styles/prosilver/theme/image-placements.css` contains the per-image sizes,
offsets and transparent-padding compensation. It fits the visible artwork
without resampling, cropping or overwriting the source PNGs. Centered top
and bottom decorations overlap the corresponding header edge; the middle
position stays within the header. The top-edge garlands float over the header edge. Decorations hide at 700 pixels and below.

All supported pairs were rendered in the Prosilver test board. LTR and RTL
were checked at 701 pixels, as well as hiding at 700 pixels. Other styles
may still need adjustments for their own header geometry.

| Image ID | Placement | Visible artwork box (px) |
| --- | --- | --- |
| `xmas` | Left corner | 96 × 96 |
| `valentine` | Left corner | 72.0 × 72 |
| `valentine` | Center | 62 × 62.0 |
| `newyear` | Left corner | 80.0 × 80 |
| `newyear` | Center | 62 × 62.0 |
| `newyear_midnight` | Center top | 144 × 85.77 |
| `newyear_midnight` | Center bottom | 120 × 71.48 |
| `newyear_midnight` | Center | 120 × 71.48 |
| `patriotic_fireworks` | Center top | 96 × 88.95 |
| `patriotic_fireworks` | Center bottom | 76 × 70.42 |
| `patriotic_fireworks` | Center | 76 × 70.42 |
| `halloween_autumn_pumpkin` | Left corner | 72.1 × 60 |
| `halloween_autumn_pumpkin` | Center | 64 × 53.26 |
| `halloween_autumn_pumpkin` | Forum list | 36 × 29.96 |
| `halloween_glowing_pumpkin` | Left corner | 66.32 × 60 |
| `halloween_glowing_pumpkin` | Center | 64 × 57.91 |
| `halloween_glowing_pumpkin` | Forum list | 36 × 32.57 |
| `christmas_ornament_corner` | Left corner | 112 × 81.02 |
| `christmas_evergreen_corner` | Left corner | 112 × 84.46 |
| `christmas_santa_ornaments` | Left corner | 92 × 69.5 |
| `christmas_santa_ornaments` | Center | 94 × 71.01 |
| `christmas_bells_corner` | Left corner | 112 × 81.75 |
| `halloween_pumpkin_01` | Left corner | 66.08 × 60 |
| `halloween_pumpkin_01` | Center | 63.87 × 58.0 |
| `halloween_pumpkin_01` | Forum list | 36 × 32.69 |
| `halloween_pumpkin_02` | Left corner | 66.83 × 60 |
| `halloween_pumpkin_02` | Center | 64 × 57.46 |
| `halloween_pumpkin_02` | Forum list | 36 × 32.32 |
| `halloween_pumpkin_03` | Left corner | 59.57 × 60 |
| `halloween_pumpkin_03` | Center | 57.59 × 58.0 |
| `halloween_pumpkin_03` | Forum list | 35.74 × 36.0 |
| `halloween_pumpkin_04` | Left corner | 64.97 × 60 |
| `halloween_pumpkin_04` | Center | 62.81 × 58.0 |
| `halloween_pumpkin_04` | Forum list | 36 × 33.24 |
| `halloween_pumpkin_05` | Left corner | 64.13 × 60 |
| `halloween_pumpkin_05` | Center | 62.0 × 58.0 |
| `halloween_pumpkin_05` | Forum list | 36 × 33.68 |
| `halloween_pumpkin_06` | Left corner | 64.69 × 60 |
| `halloween_pumpkin_06` | Center | 62.53 × 58.0 |
| `halloween_pumpkin_06` | Forum list | 36 × 33.39 |
| `halloween_pumpkin_07` | Left corner | 61.63 × 60 |
| `halloween_pumpkin_07` | Center | 59.58 × 58.0 |
| `halloween_pumpkin_07` | Forum list | 36 × 35.05 |
| `halloween_pumpkin_08` | Left corner | 59.73 × 60 |
| `halloween_pumpkin_08` | Center | 57.74 × 58.0 |
| `halloween_pumpkin_08` | Forum list | 35.84 × 36.0 |
| `xmas_mini` | Forum list | 50 × 50 |
| `easter_bunny_bouquet_corner` | Left corner | 108 × 90.5 |
| `easter_bunny_garden_corner` | Left corner | 108 × 89.68 |
| `easter_bunny_floral_corner` | Left corner | 108 × 71.38 |
| `easter_bunny_spring_corner` | Left corner | 108 × 71.0 |
| `easter_pastel_bow_garland` | Center top | 230 × 73.17 |
| `easter_pastel_bow_garland` | Center bottom | 230 × 73.17 |
| `easter_spring_garland` | Center top | 230 × 117.43 |
| `easter_spring_garland` | Center bottom | 230 × 117.43 |
| `easter_gingham_garland` | Center top | 230 × 74.19 |
| `easter_gingham_garland` | Center bottom | 230 × 74.19 |
| `stpatrick_hat_corner` | Left corner | 108 × 71.35 |
| `stpatrick_hat_garland` | Center top | 230 × 61.06 |
| `stpatrick_hat_garland` | Center bottom | 230 × 61.06 |
| `stpatrick_clover_garland` | Center top | 230 × 62.34 |
| `stpatrick_clover_garland` | Center bottom | 230 × 62.34 |
| `stpatrick_clover_corner` | Left corner | 108 × 77.81 |
| `stpatrick_clover` | Left corner | 60 × 55.05 |
| `stpatrick_clover` | Center | 56 × 51.38 |
| `stpatrick_clover` | Forum list | 34 × 31.2 |
| `christmas_garland` | Left corner | 112 × 55.18 |
