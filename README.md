# magento2-module-empty-static-files

In addition to normal cache files, Magento 2 also generates a number of boilerplate classes for you on-the-fly. These files are generated in the var/generate folder. When you change certain configurations or code files, it’s often necessary to regenerate these generated code files. There are not, at this time, any features (CLI or GUI) for doing this. The only way to clear the generated code folders is to manually delete the files in var/generation.

## Instructions: 
Create the following directory structure into app/code:
- Reea/CLI

Git clone the repo.

#### Run: php bin/magento setup:upgrade

After that....

Simply use this new command from your Magento root directory: 
#### php bin/magento cache:empty

This will delete following folders:
- 'var/view_preprocessed';
- 'var/cache';
- 'var/page_cache';
- 'var/generation';
- 'pub/static/_requirejs';
- 'pub/static/frontend';
- 'pub/static/adminhtml';
    
    

