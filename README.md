# cal.txt
a plain text calendar format

## what is cal.txt?
This is my personal experiment using a plain text calendar. The rules below are
based on how I like the visual formatting and personal experience using it.
These rules may undergo siginificant changes in the beginning of the
experiment.

## formatting rules
One text file is used.

### dates: alternative 1
The calendar for a year starts with `calendar YEAR` followed by a line of
markers.

    calendar 2020
    :::::::::::::

A month is started with the name of the month followed by a line of markers.

    may
    ---

The day of the month has no space.

    4

### dates: alternative 2
The date is formatted `YEAR-MONTH-DAY` and starts a new line.

    2020-04-21

### items
Each item is preceded with two spaces and a dash on a new line.

      - bring back books to library

An event is named with square brackets. The optional starting and ending time
precede the event name.

      - [anniversary Parker]
      - 09:30-10:30 [coffee with Joe]
      - 18:30 [feed the lions]

## examples
For version 1:

    calendar 2020
    :::::::::::::

    januari
    -------
    01
      - [New Year]
    02
      - 13:30 [visit grandma]

    februari
    --------
    15
      - pick up parcel from shop

For version 2:

    2020-01-01
      - [New Year]

    2020-01-02
      - 13:30 [visit grandma]

    2020-02-15
      - pick up parcel from shop

## notes
Version 1 seems easier to style appealingly. Version 2 seems easier to work with
programmaticaly.

## inspiration
- https://jeffhuang.com/productivity_text_file/
