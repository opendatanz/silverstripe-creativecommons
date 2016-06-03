# SilverStripe Creative Commons content licensing

This module adds the ability to license page content under Creative Commons licences in SilverStripe CMS.

## Requirements
 * SilverStripe ^3.1+

## Installation 

```
composer require opendatanz/silverstripe-creativecommons
```

## License
See [License](license.md)

## Documentation

 1. Include the <% include Licence %> at the bottom of your templates.
 2. Log into CMS go to "Settings > Content Licence"
 3. Select your Creative Commons Licence from the dropdown.
 4. You have set the global content licence.
 5. (option) you can override the licence on a per page basis by editing each page and selecting an alternative licence.

## TODO
 - More Creative Commons API integration
 - Licensing of images and files (including the rdfa tags)
 - A way to override the default CC text in case you need to add extra disclaimers
 - Report to show the CC licenced content, images and files
 

## Maintainers
 * Cam Findlay <cam@camfindlay.com>
 
## Bugtracker
Bugs are tracked in the issues section of this repository. Before submitting an issue please read over 
existing issues to ensure yours is unique. 
 
If the issue does look like a new bug:
 
 - Create a new issue
 - Describe the steps required to reproduce your issue, and the expected outcome. Unit tests, screenshots 
 and screencasts can help here.
 - Describe your environment as detailed as possible: SilverStripe version, Browser, PHP version, 
 Operating System, any installed SilverStripe modules.
 
Please report security issues to the module maintainers directly. Please don't file security issues in the bugtracker.
 
## Development and contribution
See [Contributing](contributing.md)