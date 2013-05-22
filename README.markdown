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

This extension repackages the Login Info event as an extension.

Please note that this extension is no longer necessary as of Symphony 2.3. According to Brendan Abbott ([@brendo](http://www.getsymphony.com/get-involved/member/brendo/)) in his comment in the thread [Exception after upgrading: 'Could not find Event'](http://www.getsymphony.com/discuss/thread/89228/#position-5):

> Login event from the 2.2.5 /workspace was replaced with Logged In Author event.

You'll find in the README for the [Symphony Default Workspace](https://github.com/symphonycms/workspace) the following information:

> If you are updating your default workspace to 2.3, please note that you will need to remove the `Login` event from your pages and instead attach the the Logged In Author datasource.

So, as of Symphony 2.3, this extension has been deprecated in favour of using the [Logged in Author data source](https://github.com/symphonycms/workspace/blob/master/data-sources/data.logged_in_author.php).


## Installation

Information about [installing and updating extensions](http://symphony-cms.com/learn/tasks/view/install-an-extension/) can be found in the Symphony documentation at <http://symphony-cms.com/learn/>.

## Usage

This extension adds an `$author-id` page parameter that can be used to filter data sources. It also provides an Author Login event that can be attached to pages to provide login info for logged in authors.

## Release Notes

**Version 1.0**

- Initial release.

**README Updated 22 May 2013**

- Extension deprecated for Symphony 2.3 and later.

## Acknowledgements

The credit for this extension goes to Alistair Kearney for the original event on which this extension was based. I merely repackaged the Login Info event as an extension in order to add an `$author-id` parameter to the parameter pool.