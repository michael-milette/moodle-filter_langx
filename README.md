LangX filter plugin for Moodle
==============================

Copyright
---------
Copyright © 2017 TNG Consulting Inc. - http://www.tngconsulting.ca/

This file is part of LangX for Moodle - http://moodle.org/

LangX is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

LangX is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with LangX.  If not, see <http://www.gnu.org/licenses/>.

Authors
-------
Michael Milette - Lead Developer

Description
-----------
The LangX filter for Moodle enables content creators to use plain text
tag to indicate that a span of content belongs to a particular language.
This makes no visible changes to the content but wrap the content in an
HTML <span lang="xx"></span> block of code. As a result, screen readers
will make use of this information to use a particular kind of pronunciation.

This plugin would be used on sites that also make use of either of the following plugins:
- https://moodle.org/plugins/filter_multilangsecond
- https://moodle.org/plugins/filter_multilang2

Usage of the {langx} tags requires no knowledge of HTML but is important
for sites wishing to comply with accessibility requirements.

Requirements
------------
This plugin requires Moodle 2.3+ from http://moodle.org/

Changes
-------
The first public BETA version was released on 2017-03-24.

For more information on releases since then, see CHANGELOG.md.

Installation and Update
-----------------------
Install the plugin, like any other plugin, to the following folder:

    /filter/langx

See http://docs.moodle.org/32/en/Installing_plugins for details on installing Moodle plugins.

Next, go to Site Administration > Plugins > Filters > Manage filters" and enable the LangX plugin there.

There are no special considerations required for updating the plugin.

Uninstallation
--------------
Uninstalling the plugin by going into the following:

Home > Administration > Site Administration > Plugins > Manage plugins > Lang X

...and click Uninstall. You may also need to manually delete the following folder:

    /filter/langx

Usage & Settings
----------------
There are no configurable settings for this plugin at this time.

Once installed and activated, content creators can tag specific text in a particular language by wrapping the text in a plain text pair of {langx} tags.

The start of the {langx} tag should also include two [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language code abbreviation letters in lowercase associated with language's name. French, for example, has the code **fr**:

    {langx fr}Content{langx}

The filter will convert this into the following HTML

    <span lang="fr">Content</span>

Security considerations
-----------------------
There are no known security issues at this time.

Motivation for this plugin
--------------------------
The development of this plugin was motivated through our own experience in Moodle development and is supported by TNG Consulting Inc.

Limitations
-----------
* This tag only supports inline text, not blocks of text. This feature will be included in the next release.
* Unpredictable results may occur if you interweave HTML code. Example:

    <strong>{langx fr}Content</strong>{langx}

Future Releases
---------------
The next release will include support for blocks of content by wrapping these in a DIV instead of a span.

Let us know if you have any other suggestions.

Further information
-------------------
For further information regarding the filter_langx plugin, support or to
report a bug, please visit the project page at:

http://github.com/michael-milette/moodle-filter_langx

Language Support
----------------
This plugin includes support for the English language.

If you need a different language that is not yet supported, please feel free
to contribute using the Moodle AMOS Translation Toolkit for Moodle at

https://lang.moodle.org/

This plugin has not been tested for right-to-left (RTL) language support.
If you want to use this plugin with a RTL language and it doesn't work as-is,
feel free to prepare a pull request and submit it to the project page at:

http://github.com/michael-milette/moodle-filter_langx

Frequently Asked Questions (FAQ)
--------------------------------
**Question: {langx} Tags are displayed as entered**

Answer 1: You may have forgotten to enable the plugin. See installation instructions.
Answer 2: Don't forget to include the 2 letter language code in the opening tag and to include a closing tag which contains NO language code.

**Question: I have a question that is not listed here**

Answer: Submit your question to the issue tracker:

http://github.com/michael-milette/moodle-filter_langx/issues
