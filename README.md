# cal.txt
a plain text calendar format

## what is cal.txt?
This is my personal experiment using a plain text calendar. The rules below are
based on how I like the visual formatting and personal experience using it.
These rules may undergo siginificant changes in the beginning of the
experiment.

## formatting rules
One text file is used per calendar.

### dates
The date is formatted `YEAR-MONTH-DAY` and starts a new line.

    2020-04-21

Dates can be ordered ascending or descending.

Dates can have one or more items.

### items
Each item is preceded with two spaces and a dash on a new line.

      - bring back books to library

An event is optionally named within square brackets. The optional starting and ending time
precede the event name.

      - [anniversary Parker]
      - 09:30-10:30 [coffee with Joe]
      - 18:30 [feed the lions]

A TODO item is starts with `TODO:`.

      - TODO: clean bicycle chain

## example

    2020-01-01
      - [New Year]

    2020-01-02
      - 13:30 [visit grandma]

    2020-02-15
      - pick up parcel from shop

    2020-03-22
      - TODO: make doctor appointment

## inspiration
- https://jeffhuang.com/productivity_text_file/
- https://github.com/TseHang/markdown-it-calendar
