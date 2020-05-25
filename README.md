# cal.txt
a plain text calendar format

## what is cal.txt?
This is my personal experiment using a plain text calendar. The rules below are
based on how I like the visual formatting and personal experience using it.
These rules may undergo siginificant changes in the beginning of the
experiment.

## formatting rules
One text file is used.

### dates
The date is formatted `YEAR-MONTH-DAY` and starts a new line.

    2020-04-21

### items
Each item is preceded with two spaces and a dash on a new line.

      - bring back books to library

An event is named within square brackets. The optional starting and ending time
precede the event name.

      - [anniversary Parker]
      - 09:30-10:30 [coffee with Joe]
      - 18:30 [feed the lions]

## example

    2020-01-01
      - [New Year]

    2020-01-02
      - 13:30 [visit grandma]

    2020-02-15
      - pick up parcel from shop

## inspiration
- https://jeffhuang.com/productivity_text_file/
- https://github.com/TseHang/markdown-it-calendar
