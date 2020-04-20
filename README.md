# cal.txt
a plain text calendar format

## what is cal.txt?
This is my personal experiment using a plain text calendar. The rules below are
based on how I like the visual formatting and personal experience using it.
These rules may undergo siginificant changes in the beginning of the
experiment.

## formatting rules
One text file is used.

The calendar for a year starts with `calendar YEAR` followed by a line of
markers.

    calendar 2020
    :::::::::::::

A month is started with the name of the month followed by a line of markers.

    may
    ---

The day of the month has no space.

    4

Each item is preceded with two spaces and a dash.

      - bring back books to library

An event is named with square brackets. The optional starting and ending time
precede the event name.

      - [anniversary Parker]
      - 09:30-10:30 [coffee with Joe]
      - 18:30 [feed the lions]

