# Author Login

Author Login extension for Symphony.  

- Version: 1.0
- Date: 31st December 2010
- Requirements: Symphony 2.1 or newer, <http://github.com/symphonycms/symphony-2/>
- Author: Stephen Bau, stephen@domain7.com
- Constributors: Alistair Kearney
- GitHub Repository: <http://github.com/bauhouse/author_login/>
- Available languages: English

## Synopsis

This extension repackages the Login Info event as an extension

## Installation

Information about [installing and updating extensions](http://symphony-cms.com/learn/tasks/view/install-an-extension/) can be found in the Symphony documentation at <http://symphony-cms.com/learn/>.

## Usage

This extension adds an `$author-id` page parameter that can be used to filter data sources. It also provides an Author Login event that can be attached to pages to provide login info for logged in authors.

## Release Notes

**Version 1.0**

- Initial release.

## Acknowledgements

The credit for this extension goes to Alistair Kearney for the original event on which this extension was based. I merely repackaged the Login Info event as an extension in order to add an `$author-id` parameter to the parameter pool.